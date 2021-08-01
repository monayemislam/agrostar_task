@extends('layout.master')
@section('title','Login')
@section('content')


<div class="custom_container">

    <form class="custom_form" action="{{ route('auth.check') }}" method="post">
            @if(Session::get('fail'))
               <div class="alert_fail">
                  {{ Session::get('fail') }}
               </div>
            @endif
  
           @csrf
        <div>
            <label> Email: </label><br>
            <input type="text" name="email" placeholder="Enter email address" value="{{ old('email') }}">
            <span style="color:#6b1b1f">@error('email'){{ $message }} @enderror</span>
        </div>
        <div>
            <label>Password: </label><br>
            <input type="password" name="password" placeholder="Enter password">
            <span style="color:#6b1b1f">@error('password'){{ $message }} @enderror</span>
        </div><br>
        <div>
            <button type="submit" class="button_green">Login </button>
            <span><a href="{{ route('auth.register') }}">Don't have an account?</a></span>
        </div>
    </form>
</div>


@endsection