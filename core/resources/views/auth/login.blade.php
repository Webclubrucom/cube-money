<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title class="company"></title>

	  <!-- Bootstrap core CSS     -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
	<link href="{{ asset('css/login.css') }}" rel="stylesheet" />

    <!--  Paper Dashboard core CSS    -->
    <link href="{{ asset('css/paper-dashboard.css') }}" rel="stylesheet"/>
	<script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<body class="login-background">
	<div class="background">
       <div class="cube"></div>
       <div class="cube"></div>
       <div class="cube"></div>
       <div class="cube"></div>
      <div class="cube"></div>
    </div>
<div class="container">
    <div class="row">

        <div class="col-md-6 login_block">
            <div class="panel panel-default">
               <div class="header">
					<div class="row">
						<div class="col-lg-12">
						<h3 class="title text-center company"></h3>
						</div>
					</div>
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ url('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                           
                            <div class="field_login">
							
                                @if ($errors->has('email'))
                                    <p class="help-block text-danger">
                                        <strong><?php echo trans('lang.email_login');?></strong>
                                    </p>
                                @endif
								 <label for="email" class="control-label"><?php echo trans('lang.email');?></label>
                                <input class="form-control" id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                           

                            <div class="field_login">
								  @if ($errors->has('password'))
                                    <p class="help-block">
                                        <strong><?php echo trans('lang.email_login');?></strong>
                                    </p>
                                @endif
								 <label for="password" class="control-label">Пароль</label>
                                <input class="form-control" id="password" type="password" class="form-control" name="password" required>

                              
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="btn_login">
                                <button type="submit" class="btn btn-fill btn-primary text-center">
                                    Вход 
                                </button>

                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<script>
$(document).ready(function() {
$.ajax({
        type: "GET",
        url: "{{ url('login/getapplication')}}",
        dataType: "json",
        data: "{}",
        success: function (html) {
			var objs = html.data;
			$(".company").html(objs[0].company);
			$("#city").val(objs[0].city);
			$("#currency").val(objs[0].currency);
			$("#phone").val(objs[0].phone);
			$("#address").val(objs[0].address);
            $("#locale").attr(objs[0].languages);
			$("#website").val(objs[0].website);
			$(".logoimg").attr("src",html.logo);

        },
    });
});	
</script>
</html>
