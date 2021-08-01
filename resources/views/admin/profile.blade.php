@extends('layout.master')
@section('title','Profile')
@section('content')



<div class="wrapper">
    <div class="left">
        <h4>{{ $LoggedUserInfo['name'] }}</h4>
        <a class="button_red" href="{{ route('auth.logout') }}">Sign Out</a>
        <a class="button_red" href="{{url('/delete-user',$LoggedUserInfo['id'])}}">Delete Account</a>
    </div>
    <div class="right">
        <div class="info">
            <h3>User Information</h3>
            <div class="info_data">
                 <div class="data">
                    <h4>Email</h4>
                    <p>{{ $LoggedUserInfo['email'] }}</p>
                 </div>
                 <div class="data">
                   <h4>Phone</h4>
                    <p>0001-213-998761</p>
              </div>
            </div>
        </div>
      
      <div class="projects">
            <h3>Projects</h3>
            <div class="projects_data">
                 <div class="data">
                    <h4>Recent</h4>
                    <p>Lorem ipsum dolor sit amet.</p>
                 </div>
                 <div class="data">
                   <h4>Most Viewed</h4>
                    <p>dolor sit amet.</p>
              </div>
            </div>
        </div>
    </div>
</div>


@endsection 