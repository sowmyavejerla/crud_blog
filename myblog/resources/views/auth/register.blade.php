 @extends('layout') @section('content')
<style>
nav {
	visibility: hidden;
}
</style>
<h3 style="margin-top: 70px;" align="center">Signup Page</h3>

<div class="container">
	<div class="row">
		<div class="Absolute-Center is-Responsive"
			style="background-color: rgba(0, 0, 0, 0.3)">
			<div id="logo-container"></div>
			<div class="col-sm-12 col-md-10 col-md-offset-1">
				<form action="/register" id="loginForm" method="post">
				{!! csrf_field() !!}
					<div class="form-group input-group">
						<span class="input-group-addon"><i class="fa fa-user"></i></i></span>
						<input class="form-control" type="text" name='username'
							placeholder="username" />
					</div>

					<div class="form-group input-group">
						<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
						<input class="form-control" type="email" name='email'
							placeholder="email" />
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon"><i class="fa fa-key"></i></span> <input
							class="form-control" type="password" name='password'
							placeholder="password" />
					</div>
					<div class="form-group input-group">
						<span class="input-group-addon"><i class="fa fa-key"></i></span> <input
							class="form-control" type="password" name='password_confirmation'
							placeholder="confirm password" />
					</div>
					<div class="checkbox">
						<label> <input type="checkbox"> I agree to the <a href="#">Terms
								and Conditions</a>
						</label>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-def btn-block">Signup</button>
					</div>
					
				</form>
			</div>
		</div>
	</div>
</div>
@endsection

