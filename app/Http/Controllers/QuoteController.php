<?php

namespace App\Http\Controllers;

use App\Mail\QuoteRequestMail;
use App\Models\QuoteRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class QuoteController extends Controller
{
    /**
     * La page « Demander un devis ».
     * ?famille=pompes-a-chaleur coche directement la bonne famille.
     */
    public function create(Request $request): View
    {
        $family = $request->query('famille');

        return view('pages.devis', [
            'preselectedFamily' => array_key_exists((string) $family, config('quote.families')) ? $family : null,
        ]);
    }

    /**
     * Enregistre la demande, l'envoie à l'équipe par e-mail
     * (avec la pièce jointe éventuelle) et remercie le visiteur.
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'family' => ['required', Rule::in(array_keys(config('quote.families')))],
            'project' => ['required', Rule::in(array_keys(config('quote.projects')))],
            'building' => ['required', Rule::in(array_keys(config('quote.buildings')))],
            'quantity' => ['nullable', 'string', 'max:160'],
            'timeline' => ['required', Rule::in(array_keys(config('quote.timelines')))],
            'details' => ['required', 'string', 'min:10', 'max:3000'],
            'attachment' => [
                'nullable',
                'file',
                'mimes:'.implode(',', config('quote.attachment.mimes')),
                'max:'.config('quote.attachment.max_kb'),
            ],
            'profile' => ['required', Rule::in(array_keys(config('quote.profiles')))],
            'name' => ['required', 'string', 'max:100'],
            'company' => ['required', 'string', 'max:150'],
            'email' => ['required', 'email:rfc', 'max:254'],
            'phone' => ['required', 'string', 'max:30'],
            'postcode' => ['required', 'string', 'max:10'],
            'utm_source' => ['nullable', 'string', 'max:100'],
            'utm_medium' => ['nullable', 'string', 'max:100'],
            'utm_campaign' => ['nullable', 'string', 'max:150'],
            'privacy' => ['accepted'],
            'website' => ['nullable', 'max:0'],
        ]);

        unset($data['privacy'], $data['website'], $data['attachment']);

        if ($request->hasFile('attachment')) {
            $file = $request->file('attachment');

            $data['attachment_path'] = $file->store('devis', 'local');
            $data['attachment_name'] = $file->getClientOriginalName();
        }

        $quote = QuoteRequest::create($data);

        Mail::to(config('contact.recipient'))->send(new QuoteRequestMail($quote));

        return redirect()
            ->route('devis')
            ->with('status', 'Merci ! Votre demande de devis '.$quote->reference().' est bien envoyée. Notre équipe revient vers vous rapidement.')
            ->with('quote_sent', true);
    }
}
