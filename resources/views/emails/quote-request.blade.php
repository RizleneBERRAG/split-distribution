<h1>Nouvelle demande de devis {{ $quote->reference() }}</h1>

<h2>Le besoin</h2>
<p><strong>Famille :</strong> {{ $quote->label('family') }}</p>
<p><strong>Projet :</strong> {{ $quote->label('project') }}</p>
<p><strong>Bâtiment :</strong> {{ $quote->label('building') }}</p>
<p><strong>Quantités ou puissance :</strong> {{ $quote->quantity ?: 'Non précisé' }}</p>
<p><strong>Délai souhaité :</strong> {{ $quote->label('timeline') }}</p>

<h2>Les détails</h2>
<p>{!! nl2br(e($quote->details)) !!}</p>
<p><strong>Pièce jointe :</strong> {{ $quote->attachment_name ?: 'Aucune' }}</p>

<h2>Le demandeur</h2>
<p><strong>Profil :</strong> {{ $quote->label('profile') }}</p>
<p><strong>Nom :</strong> {{ $quote->name }}</p>
<p><strong>Entreprise :</strong> {{ $quote->company }}</p>
<p><strong>E-mail :</strong> {{ $quote->email }}</p>
<p><strong>Téléphone :</strong> {{ $quote->phone }}</p>
<p><strong>Code postal du chantier :</strong> {{ $quote->postcode }}</p>

@if ($quote->utm_source || $quote->utm_campaign)
    <h2>Provenance</h2>
    <p>
        <strong>Source :</strong> {{ $quote->utm_source ?: '—' }}
        · <strong>Support :</strong> {{ $quote->utm_medium ?: '—' }}
        · <strong>Campagne :</strong> {{ $quote->utm_campaign ?: '—' }}
    </p>
@endif

<p><small>Reçue le {{ $quote->created_at?->timezone('Europe/Paris')->format('d/m/Y à H:i') }} depuis le site.</small></p>
