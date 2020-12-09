
@extends('layouts.app')

@section('content')


<div style='box-shadow:0 0 4px 9px black;'>
    <h2> Hello, Idongesit,</h2>
     You received an email from : {{ $name }}
    Here are the details:
    
    <p style='color:green;font-size:16px;'>
        <b>How did you found out about me:</b> {{ $subject }}
    </p>
    <br>
        <p><b>phone number:</b> {{ $phone_number }}
    </p>
    <br>
        <p><b>Email:</b>{{ $email }}
    </p>
    <br>
        <p style='padding:5px'><b>Body of the Message:</b>{{ $user_message }}
    </p>
</div>


@endsection