@extends('layouts.default')
@section('content')
<div class="main">

    <div class="container">
        <div class="signup-content">
            <form method="POST" action="/register" id="signup-form" class="signup-form">
                {{ csrf_field() }}
                <h2>Sign up </h2>
                <div class="form-group">
                    <input type="text" class="form-input" name="surname" id="name" placeholder="Your Surname"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-input" name="firstname" id="name" placeholder="Your Firstame"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-input" name="username" id="name" placeholder="Your Userame"/>
                </div>
                <div class="form-group">
                    <input type="email" class="form-input" name="email" id="email" placeholder="Email"/>
                </div>
                <div class="form-group">
                    <input type="text" class="form-input" name="password" id="password" placeholder="Password"/>
                    <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" id="submit" class="form-submit submit" value="Sign up"/>
                    <a href="/login" class="submit-link submit">Sign in</a>
                </div>
            </form>
        </div>
    </div>

</div>

@endsection