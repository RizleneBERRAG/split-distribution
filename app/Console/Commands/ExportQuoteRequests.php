<?php

namespace App\Console\Commands;

use App\Models\QuoteRequest;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

/**
 * Exporte les demandes de devis dans un fichier CSV lisible par Excel.
 * Usage : php artisan devis:export   (ou --depuis=2026-12-01)
 */
class ExportQuoteRequests extends Command
{
    protected $signature = 'devis:export {--depuis= : Seulement les demandes depuis cette date (AAAA-MM-JJ)}';

    protected $description = 'Exporte les demandes de devis en CSV (séparateur « ; », pour Excel)';

    public function handle(): int
    {
        $query = QuoteRequest::query()->orderBy('id');

        if ($since = $this->option('depuis')) {
            $query->whereDate('created_at', '>=', $since);
        }

        $quotes = $query->get();

        $columns = [
            'Référence', 'Date', 'Famille', 'Projet', 'Bâtiment', 'Quantités', 'Délai',
            'Détails', 'Pièce jointe', 'Profil', 'Nom', 'Entreprise', 'E-mail', 'Téléphone',
            'Code postal', 'Source', 'Support', 'Campagne',
        ];

        $handle = fopen('php://temp', 'r+');
        fwrite($handle, "\xEF\xBB\xBF"); // pour qu'Excel lise bien les accents
        fputcsv($handle, $columns, ';');

        foreach ($quotes as $quote) {
            fputcsv($handle, [
                $quote->reference(),
                $quote->created_at?->timezone('Europe/Paris')->format('d/m/Y H:i'),
                $quote->label('family'),
                $quote->label('project'),
                $quote->label('building'),
                $quote->quantity,
                $quote->label('timeline'),
                $quote->details,
                $quote->attachment_name,
                $quote->label('profile'),
                $quote->name,
                $quote->company,
                $quote->email,
                $quote->phone,
                $quote->postcode,
                $quote->utm_source,
                $quote->utm_medium,
                $quote->utm_campaign,
            ], ';');
        }

        rewind($handle);
        $path = 'exports/devis-'.now('Europe/Paris')->format('Y-m-d-His').'.csv';
        Storage::disk('local')->put($path, stream_get_contents($handle));
        fclose($handle);

        $this->info($quotes->count().' demande(s) exportée(s) : '.Storage::disk('local')->path($path));

        return self::SUCCESS;
    }
}
