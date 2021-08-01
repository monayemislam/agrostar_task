@extends('layout.master')
@section('title','Sign Up')
@section('content')


<div class="custom_container">

    <form class="custom_form" action="{{ route('auth.save') }}" method="post">

        @if(Session::get('success'))
            <div class="alert_success">
            {{ Session::get('success') }}
            </div>
        @endif

        @if(Session::get('fail'))
            <div class="alert_fail">
            {{ Session::get('fail') }}
            </div>
        @endif

        @csrf
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Enter full name" value="{{ old('name') }}">
            <span style="color:#6b1b1f">@error('name'){{ $message }} @enderror</span>
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" placeholder="Enter email address" value="{{ old('email') }}">
            <span style="color:#6b1b1f">@error('email'){{ $message }} @enderror</span>
        </div>
        <div>
            <label>Password</label>
            <input type="password" name="password" placeholder="Enter password">
            <span style="color:#6b1b1f">@error('password'){{ $message }} @enderror</span>
        </div>
        <br>
        <button type="submit" class="button_green">Sign Up </button>
        <a href="{{ route('auth.login') }}">I already have an account.</a>
    </form>

</div>


@endsection