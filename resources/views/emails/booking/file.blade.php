@component('mail::message')
Name: {{ $request->name }}
Email: {{ $request->email }}
Contact: {{ $request->contact }}
Booking Date: {{ $request->date }}
Message: {{ $request->message }}

Thanks,
{{ config('app.name') }}
Gurminder Singh
@endcomponent
