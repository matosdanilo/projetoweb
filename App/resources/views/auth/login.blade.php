<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>ProtoAtivo - Login</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{URL::asset('theme/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('theme/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{URL::asset('theme/vendor/linearicons/style.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{URL::asset('theme/css/main.css')}}">
  <!-- Custom CSS -->
	<link rel="stylesheet" href="{{URL::asset('theme/css/custom.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{URL::asset('theme/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{URL::asset('theme/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{URL::asset('theme/img/favicon.png')}}">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><h2>ProtoAtivo</h2></div>
								<p class="lead">Entrar com sua conta</p>
							</div>
							<form method="POST" action="{{ route('login') }}" class="form-auth-small">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="form-group">
									<label for="signin-email" class="control-label sr-only">E-mail</label>
									<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="E-mail">
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
								</div>
              </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Senha</label>
									<input id="password" type="password" class="form-control" name="password" placeholder="Senha">
                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
								</div>
                </div>
								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
										<span>Lembrar-me</span>
									</label>
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">Entrar</button>

							</form>
						</div>
					</div>
					<div class="right" style="bakground-color:#2F4F4F;">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading"><strong>ProtoAtivo</strong> ferramenta de gestão de entrega de arquivos</h1>
              <div class="bottom" style="margin-top:20%;">
                <p>Deseja implementar em sua empresa? <br>Saiba mais <a href="#" class="btn btn-transparent btn-sm">clicando aqui</a></p>
              </div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>
