<!-- TEXT SENT TO MY MAILBOX EACH TIME I SUBMIT A FORM -->
@component('mail::message')
# Bonjour Aïssa,

Tu as reçu un nouvelle Email via ton formulaire de contact :<br>

{{ $message }}<br>


Cordialement,<br>

{{ config('app.name') }}
@endcomponent
