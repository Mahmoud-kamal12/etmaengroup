@component('mail::message')
    @isset($data)
        Etmaen Group <br>
         , You Have A New Level Test <br>
        name: {{$data['name']}} <br>
        email: {{$data['email']}} <br>
        Degree: {{$data['degree']}} <br>
         , Thanks <br>
    @endisset
@endcomponent
