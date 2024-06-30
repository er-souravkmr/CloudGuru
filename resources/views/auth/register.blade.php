<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    {{-- @include('layouts/header') --}}
</head>

<body>

{{-- <a href="{{ route('login') }}"><button class="btn btn-outline-success lytpos-btn-primary">Login</button></a> --}}

<h1>Register</h1>

<form  action="{{ route('register') }}"  method="post">
    @csrf

    <label for="name">Name</label>
    <input type="text" name="name" id="name"  />


    <label for="email">Email</label>
    <input type="email" name="email" id="email"  />


    <label for="password">Password</label>
    <input type="password" name="password" id="password"  />


    <label for="password_confirmation">Confirm password</label>
    <input type="password" name="password_confirmation"  id="password_confirmation" />


    <button type="submit">Register</button>
</form>

</body>

</html>