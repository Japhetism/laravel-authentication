@extends('layouts.default')
@section('content')
<div class="main">

    <div class="container">
        <div class="signup-content">
            <form method="POST" action="/login" id="signup-form" class="signup-form">
                {{ csrf_field() }}
                <h2>Sign in </h2>
                <div class="form-group">
                    <input type="email" class="form-input" name="email" id="email" placeholder="Email"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                    <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" id="submit" class="form-submit submit" value="Sign in"/>
                    <a href="/register" class="submit-link submit">Sign up</a>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection