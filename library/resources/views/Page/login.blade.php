@extends('master')
@section('content')
@if(session()->has('message'))
	    <div class="alert alert-success">
	        {{ session()->get('message') }}
	    </div>
@endif
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Đăng nhập</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb">
					<a href="index.html">Home</a> / <span>Đăng nhập</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	
	<div class="container">
		<div id="content">
			
				<div class="row">
					<div class="col-sm-3"></div>
					<div class="col-sm-6">
						<h4>Đăng nhập</h4>
						<div class="space20">&nbsp;</div>
					<form method="POST" action="{{route('login1')}}" class="beta-form-checkout">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<div class="form-block">
								<label for="email">Email*</label>
								<input type="text" name="email"  class="form-control">
							@if ($errors->has('email'))
        						<p class="help is-danger" style="margin-left: 200px; color: red;">{{ $errors->first('email') }}</p>
    						@endif
							</div>
							<div class="form-block">
								<label for="phone">Password*</label>
								<input type="password" name="password"  class="form-control">
							@if ($errors->has('password'))
        						<p class="help is-danger" style="margin-left: 200px; color: red;">{{ $errors->first('password') }}</p>
    						@endif	
							</div>
							<div class="form-block">
								<button type="submit" class="btn btn-primary">Login</button>
							</div>
					</form>
					<a class="btn btn-link" href="{{url('facebook/redirect')}}">FB Login</a>
					</div>
					<div class="col-sm-3"></div>
				</div>
			
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection
