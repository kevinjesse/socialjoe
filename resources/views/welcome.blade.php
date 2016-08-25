<!DOCTYPE html>
@extends('layouts.app')
<script type="text/javascript" src="{{ URL::asset('js/jquery.js') }}"></script>
@section('page_css')
<link rel="stylesheet" href="{{ URL::asset('css/welcome.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('/css/bootstrap-social.css') }}" />
<script type="text/javascript" src="{{ URL::asset('js/fbLoad.js') }}"></script>

@endsection
@section('navbuttons')
    <li>
        <a href="" data-toggle="modal" data-target="#loginModal">Log In</a>
    </li>
    <li>
        <a href="" data-toggle="modal" data-target="#signUpModal">Sign Up</a>
    </li>
@endsection


@section('content')

<!-- Modal -->
<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                {{--<fb:login-button-lg scope="public_profile,email" onlogin="checkLoginState();">--}}
                {{--</fb:login-button-lg>--}}
                <div class="text-center">
                    <a class="btn btn-lg btn-social btn-facebook" onclick="checkLoginState();">
                        <i class="fa fa-facebook"></i> <h4> Continue with Facebook </h4>
                    </a>

                    <p></p>

                    <a class="btn btn-lg btn-social btn-linkedin" onclick="checkLoginState();">
                        <i class="fa fa-linkedin"></i>  <h4> Continue with LinkedIn &nbsp </h4>
                    </a>

                    <hr>

                    <a class="btn btn-lg btn-social btn-reddit" onclick="checkLoginState();">
                        <i class="fa fa-mail-forward"></i>  <h4>  Continue with Email &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </h4>
                    </a>

                    <p><br></p>

                    <p><small>By signing up, I agree to Social Joe’s Terms of Service and Privacy Policy</small></p>
                </div>

            </div>
            <div class="modal-footer">
                <p class="pull-left">Already have a Social Joe account?</p>
                <a href="" class="btn btn-default" data-toggle="modal" data-dismiss="modal" data-target="#loginModal">Log In</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                {{--<fb:login-button-lg scope="public_profile,email" onlogin="checkLoginState();">--}}
                {{--</fb:login-button-lg>--}}
                <div class="text-center">
                    <a class="btn btn-lg btn-social btn-facebook" onclick="checkLoginState();">
                        <i class="fa fa-facebook"></i> <h4> Continue with Facebook </h4>
                    </a>

                    <p></p>

                    <a class="btn btn-lg btn-social btn-linkedin" onclick="checkLoginState();">
                        <i class="fa fa-linkedin"></i>  <h4> &nbsp Continue with LinkedIn </h4>
                    </a>

                    <hr>

                    <a class="btn btn-lg btn-social btn-reddit" onclick="checkLoginState();">
                        <i class="fa fa-mail-forward"></i>  <h4> Continue with Email &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </h4>
                    </a>
                </div>
            </div>
            <div class="modal-footer">
                {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                {{--<button type="button" class="btn btn-primary">Save changes</button>--}}
                <p class="pull-left">Don't have an account?</p>
                <a href="" class="btn btn-default" data-toggle="modal" data-dismiss="modal" data-target="#signUpModal"> Sign up</a>

            </div>
        </div>
    </div>
</div>

<!-- Header -->
<a name="about"></a>

<div class="intro-header">
    <div class="row">
            <div class="col-lg-12">
                <div class="intro-message">
                    <h1>Meet People.</h1>
                    <h3>Have coffee and experience connecting with experts in various industries.</h3>
                    <hr class="intro-divider">

                </div>
            </div>
    </div>
</div>

<a  name="services"></a>
<div class="content-section-a">

    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-6">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>
                <h2 class="section-heading">Coffee and Chat</h2>
                <p class="lead">Meet executives, entrepreneurs, and more!</p>
            </div>
            <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                <img class="img-responsive" src="img/imac.png" alt="">
            </div>
        </div>
    </div>
</div>

<section id="contact" class="map">
    <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Coffee,+Googleplex,+CA&amp;aq=0&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Coffee,+Googleplex,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>

    <br />
    <small>
        <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Coffee,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Coffee,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
    </small>
    </iframe>
</section>

@endsection

<script>
    // This is called with the results from from FB.getLoginStatus().
    function statusChangeCallback(response) {
        console.log('statusChangeCallback');
        console.log(response);
        // The response object is returned with a status field that lets the
        // app know the current login status of the person.
        // Full docs on the response object can be found in the documentation
        // for FB.getLoginStatus().
        if (response.status === 'connected') {
            window.location = "/home";
        } else if (response.status === 'not_authorized') {
            // The person is logged into Facebook, but not your app.
            document.getElementById('status').innerHTML = 'Please log ' +
                    'into this app.';
        } else {
            // The person is not logged into Facebook, so we're not sure if
            // they are logged into this app or not.
            document.getElementById('status').innerHTML = 'Please log ' +
                    'into Facebook.';
        }
    }

    // This function is called when someone finishes with the Login
    // Button.  See the onlogin handler attached to it in the sample
    // code below.
    function checkLoginState() {
        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });
    }

    window.fbAsyncInit = function() {
        FB.init({
            appId      : '{your-app-id}',
            cookie     : true,  // enable cookies to allow the server to access
                                // the session
            xfbml      : true,  // parse social plugins on this page
            version    : 'v2.5' // use graph api version 2.5
        });

        // Now that we've initialized the JavaScript SDK, we call
        // FB.getLoginStatus().  This function gets the state of the
        // person visiting this page and can return one of three states to
        // the callback you provide.  They can be:
        //
        // 1. Logged into your app ('connected')
        // 2. Logged into Facebook, but not your app ('not_authorized')
        // 3. Not logged into Facebook and can't tell if they are logged into
        //    your app or not.
        //
        // These three cases are handled in the callback function.

        FB.getLoginStatus(function(response) {
            statusChangeCallback(response);
        });

    };

    // Load the SDK asynchronously
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>