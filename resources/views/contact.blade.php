@extends('layouts.app')

@section('title', 'Contact me')

@section('introHeader')
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/contact-bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Contact Me</h1>
                        <hr class="small">
                        <span class="subheading">Have questions? I have answers (maybe).</span>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

            @include('partials.errors')
            @include('partials.success')

            <p>Want to get in touch with me? Fill out the form below to send me a message and I will try to get back to you within 24 hours!</p>
            <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
            <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
            <!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
            <form action="/contact" method="post">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <div class="row control-group">
                    <div class="form-group col-xs-12">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                               value="{{ old('name') }}">
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email"
                               value="{{ old('email') }}">
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 controls">
                        <label for="phone">Phone Number</label>
                        <input type="tel" class="form-control" id="phone" name="phone"
                               value="{{ old('phone') }}">
                    </div>
                </div>
                <div class="row control-group">
                    <div class="form-group col-xs-12 controls">
                        <label for="message">Message</label>
              <textarea rows="5" class="form-control" id="message"
                        name="message">{{ old('message') }}</textarea>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group col-xs-12">
                        <button type="submit" class="btn btn-default">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection