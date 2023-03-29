

@component('mail::message')
# Introduction

ETMAEN GROUP APPLICATION

<div style="text-align: center;font-family: Arial, Helvetica, sans-serif;">
    <h1 style="font-size: 50px;">ETMAEN GROUP</h1>
    <div style=" background-color: #F2F2F2;width: fit-content;margin: 25px auto 0;padding: 40px 18px;">
        <h2 style=" color: #222; font-weight: 600; font-size: 24px;">Forgot you password</h2>
        <p style="color: #222; font-weight: 600; font-size:14px">Don't worry, we can help let's get you a new password , please use this code : @isset($code) {{$code}} @endisset</p>
        <a style="display: inline-block; background-color: #222; color: #fff; padding: 10px 15px; text-decoration: none; margin-top: 40px; margin-bottom: 25px;" href="{{route('user/form/reset-password')}}" target="_blank">
            RESET PASSWORD
        </a>
        <p style="color: #222; font-weight: 600; font-size:14px">The link is valid for 24 hours and can be used once only.</p>
        <p style="color: #C7C7C7; margin-top: 50px; font-size:14px">Please note: This e-mail was sent from a notification-only address that cannot accept incoming emails. Please do not reply to this message.</p>
    </div>
</div>

Thanks,<br>

ETMAEN GROUP
@endcomponent


