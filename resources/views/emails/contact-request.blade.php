<h1>Nouvelle demande de contact</h1>

<p><strong>Motif :</strong> {{ $subjectLabel }}</p>
<p><strong>Nom :</strong> {{ $contact['name'] }}</p>
<p><strong>Entreprise :</strong> {{ $contact['company'] }}</p>
<p><strong>E-mail :</strong> {{ $contact['email'] }}</p>
<p><strong>Téléphone :</strong> {{ $contact['phone'] ?: 'Non renseigné' }}</p>

<h2>Message</h2>
<p>{!! nl2br(e($contact['message'])) !!}</p>
