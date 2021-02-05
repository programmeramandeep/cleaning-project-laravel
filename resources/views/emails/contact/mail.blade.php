@component('mail::message')
    Name: {{ $request->name }} <br />
    Email: {{ $request->email }} <br />
    Contact: {{ $request->contact }} <br />
    Message: {{ $request->message }} <br />

    Thanks,<br>
    {{ config('app.name') }}
@endcomponent
