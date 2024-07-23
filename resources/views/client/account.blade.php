@extends('layouts.client.app')
@section('content')
<section id="background">
    <div id="logreg-forms">
        <form class="form-signin">
            <h1 class="h3 mb-3 font-weight-normal" style="text-align: center"> Sign in</h1>
            <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Sign
                        in
                        with Facebook</span> </button>
                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Sign
                        in
                        with Google+</span> </button>
            </div>
            <p style="text-align:center"> OR </p>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" autofocus="">
            <input type="password" id="inputPassword" class="form-control" placeholder="Password">

            <button class="btn btn-dark btn-block" type="submit"><i class="fas fa-sign-in-alt"></i> Sign in</button>
            <a href="#" id="forgot_pswd">Forgot password?</a>
            <hr>
            <!-- <p>Don't have an account!</p>  -->
            <button class="btn btn-secondary btn-block" type="button" id="btn-signup"><i class="fas fa-user-plus"></i>
                Sign up
                New Account</button>
        </form>



        <form action="" class="form-signup">
            <div class="social-login">
                <button class="btn facebook-btn social-btn" type="button"><span><i class="fab fa-facebook-f"></i> Sign
                        up
                        with Facebook</span> </button>
            </div>
            <div class="social-login">
                <button class="btn google-btn social-btn" type="button"><span><i class="fab fa-google-plus-g"></i> Sign
                        up
                        with Google+</span> </button>
            </div>

            <p style="text-align:center">OR</p>

            <input type="text" id="user-name" class="form-control" placeholder="Full name" autofocus="">
            <input type="email" id="user-email" class="form-control" placeholder="Email address" autofocus="">
            <input type="password" id="user-pass" class="form-control" placeholder="Password" autofocus="">
            <input type="password" id="user-repeatpass" class="form-control" placeholder="Repeat Password" autofocus="">

            <button class="btn btn-dark btn-block" type="submit"><i class="fas fa-user-plus"></i> Sign Up</button>
            <a href="#" id="cancel_signup"><i class="fas fa-angle-left"></i> Back</a>
        </form>
    </div>
</section>
@endsection
