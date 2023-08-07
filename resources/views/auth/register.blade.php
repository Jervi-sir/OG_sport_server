@extends('auth.master')

@section('content')
<div class="container mobile-screen-mock">
    <h2 class="center-align">Register</h2>
    <div class="row">
        <form class="col s12" id="register_form" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row">   
                <div class="input-field col s12">
                    <input name="name" id="name" type="text" class="validate" value="{{ old('name') }}">
                    <label for="name">Name</label>
                </div>
            </div>
            <div class="row">   
                <div class="input-field col s12">
                    <input name="email" id="email" type="email" class="validate" value="{{ old('email') }}">
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <input name="password" id="password" type="password" class="validate" >
                    <label for="password">Password</label>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s12">
                    <button class="btn waves-effect waves-light" type="submit" name="action">Register
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
            
        </form>
    </div>
    
</div>
<a class="text-center" href="{{ route('login') }}">
    {{ __('Already registered?') }}
</a>
@endsection