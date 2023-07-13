@component('mail::message')
{{-- {{ trans('notifications.customer_registered.greeting', ['customer' => $customer->getName()]) }} --}}

{{-- {{ trans('notifications.customer_registered.message') }} --}}
Félicitation {{$customer->name}},
<p>
    C'est avec grand plaisir que nous vous comptons parmis nos client.
</p>
Vos identifiant de connexion à votre espace sont: <br>

Votre adresse email: {{$customer->email}} <br>
Votre mot de passe:  {{$customer->password}} <br>
<br/>

@component('mail::button', ['url' => $url, 'color' =>'blue'])
Cliquer
@endcomponent

Cordialement, l'equipe Mindeba Services,<br>
{{ get_platform_title() }}
@endcomponent
