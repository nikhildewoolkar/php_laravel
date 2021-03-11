@extends('layouts/footer')
@extends('layouts/header')
@section('content')

<html>
<script> setTimeout(function(){window.location='/main'}, 3000); </script>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="features">
		<div class="container">
                    <div class="features-heading">
				    <h3>Welcome to Kolsa</h3>
                    <h3>You are logged in!</h3>
                <br>
                <h3>You will be redirected in few seconds</h3>
			</div></div></div>
</html>
@endsection