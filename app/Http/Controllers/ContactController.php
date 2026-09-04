<?php

namespace App\Http\Controllers;

use App\Mail\ContactRequestMail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rule;

class ContactController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $contact = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'company' => ['required', 'string', 'max:150'],
            'email' => ['required', 'email:rfc', 'max:254'],
            'phone' => ['nullable', 'string', 'max:30'],
            'subject' => [
                'required',
                Rule::in([
                    'project',
                    'technical',
                    'availability',
                    'after-sales',
                ]),
            ],
            'message' => ['required', 'string', 'min:20', 'max:3000'],
            'privacy' => ['accepted'],
            'website' => ['nullable', 'max:0'],
        ]);

        unset($contact['privacy'], $contact['website']);

        Mail::to(config('contact.recipient'))
            ->send(new ContactRequestMail($contact));

        return back()->with(
            'status',
            'Votre demande a bien été envoyée. Notre équipe reviendra vers vous rapidement.'
        );
    }
}
