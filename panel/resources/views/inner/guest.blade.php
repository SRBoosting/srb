<section id="boostopt" class="boostopt col-sm-12">
	<div class="container-n">
		<div class="logo-section logo-boost">
			<a href="./">
				<img src="./images/logo.png" alt="" class="img-responsive" />
			</a>
			<h2>SRBOOSTING</h2>
		</div>
		<div class="page-title boost-title">
			<div class="boost-tab checkout login">
				
				<h2 class="guestTitle">Do you want to proceed as a Guest?</h2>


		        <div class="col-md-6 col-md-offset-3">
		            <div class="panel panel-default">
		                <div class="panel-body">
			                <form class="form-horizontal" role="form" method="POST" action="guest">
			                    {{ csrf_field() }}

				                <div class="form-group{{ $errors->has('user') ? ' has-error' : '' }}">
				                    <label for="user" class="col-md-4 control-label">Overwatch Username</label>

				                    <div class="col-md-12">
				                        <input id="user" type="email" class="form-control" name="user" required>

				                        @if ($errors->has('user'))
				                            <span class="help-block">
				                                <strong>{{ $errors->first('user') }}</strong>
				                            </span>
				                        @endif
				                    </div>
				                </div>

				                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
				                    <label for="password" class="col-md-4 control-label">Overwatch Password</label>

				                    <div class="col-md-12">
				                        <input id="password" type="password" class="form-control" name="password" required>

				                        @if ($errors->has('password'))
				                            <span class="help-block">
				                                <strong>{{ $errors->first('password') }}</strong>
				                            </span>
				                        @endif
				                    </div>
				                </div>


		                        <div class="form-group">
		                            <div class="col-md-12">
		                                <button type="submit" class="btn btn-primary">
		                                    Send Information
		                                </button>
		                            </div>
		                        </div>
				            </form>
			            </div>
		            </div>
		        </div>

			</div>
		</div>
	@include('common.leftRight')
</section>
