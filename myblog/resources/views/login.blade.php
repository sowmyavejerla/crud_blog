@extends('layout') @section('content')
<style>
nav {
	visibility: hidden;
}
</style>
<h3 style="margin-top: 70px;" align="center">Login Page</h3>


<div class="container">
	<div class="row">
		<div class="Absolute-Center is-Responsive"
			style="background-color: rgba(0, 0, 0, 0.3)">
			<div id="logo-container"></div>
			<div class="col-sm-12 col-md-10 col-md-offset-1">
				<form action="/login" id="loginForm" method="post">
				
					@if (Session::has('message'))
					<div class="alert alert-warning">{{ Session::get('message') }}</div>
					@endif
					<div class="form-group input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></i></span>
						<input class="form-control" type="text" name='username'
							placeholder="username" />
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon"><i class="fa fa-key"></i></span> <input
							class="form-control" type="password" name='password'
							placeholder="password" />
					</div>
					<div class="checkbox">
						<label> <input type="checkbox"> I agree to the <a href="#">Terms
								and Conditions</a>
						</label>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-def btn-block">Login</button>
					</div>
					<div class="form-group text-center">
						<a href="#">Forgot Password</a>&nbsp;&nbsp;
					</div>
					<div class="form-group text-center">
						New user <a href="/register">Sign up</a>&nbsp;&nbsp;
					</div>
				</form>
			</div>

		</div>
	</div>
</div>
@endsection

