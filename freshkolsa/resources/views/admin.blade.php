@extends('layouts/adminfooter')
@extends('layouts/adminheader')
@section('admincontent')
<html>
<h1> ADMIN HOME, BITCH</h1> </html>

@if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/logout') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
@endsection