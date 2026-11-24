<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Une demande de devis envoyée depuis le site.
 */
class QuoteRequest extends Model
{
    protected $fillable = [
        'family',
        'project',
        'building',
        'quantity',
        'timeline',
        'details',
        'attachment_path',
        'attachment_name',
        'profile',
        'name',
        'company',
        'email',
        'phone',
        'postcode',
        'utm_source',
        'utm_medium',
        'utm_campaign',
    ];

    /**
     * Numéro lisible donné au client et repris dans l'e-mail : DEV-000012.
     */
    public function reference(): string
    {
        return 'DEV-'.str_pad((string) $this->id, 6, '0', STR_PAD_LEFT);
    }

    /**
     * Libellé affiché d'un choix (famille, projet, bâtiment, délai, profil).
     */
    public function label(string $field): string
    {
        $lists = [
            'family' => 'quote.families',
            'project' => 'quote.projects',
            'building' => 'quote.buildings',
            'timeline' => 'quote.timelines',
            'profile' => 'quote.profiles',
        ];

        $value = config($lists[$field].'.'.$this->{$field});

        return is_array($value) ? $value['label'] : (string) ($value ?? $this->{$field});
    }
}
