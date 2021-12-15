@component('mail::message')
# WELCOME

<br>


<br>

Email : <strong>{{$user->email}}</strong>
<br>
Password: <strong>{{$user->password}}</strong>




Thanks,<br>
{{ config('app.name') }}
@endcomponent