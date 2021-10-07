<h1>Application</h1>

<p>
    Welcome{{$user->name}}!
</p>

<p>
    You've recieved this email as a result of your registration to our
    website. PLease click on the verification link to verify your account.
</p>

<p>
    <a href="{{url('/verification/' . $user->id . "/" . $user->remember_token)}}"></a>
        Click here to verify
</p>