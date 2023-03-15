<?php
if(session()->has('admin_id'))	
{
	echo "<script>
		window.location='/dashboard';
	</script>";
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
    <link href="{{url('backend/assets/plugins/bootstrap/bootstrap.css')}}" rel="stylesheet" />
    <link href="{{url('backend/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{url('backend/assets/plugins/pace/pace-theme-big-counter.css')}}" rel="stylesheet" />
   <link href="{{url('backend/assets/css/style.css')}}" rel="stylesheet" />
      <link href="{{url('backend/assets/css/main-style.css')}}" rel="stylesheet" />

</head>

<body class="body-Login-back">
@include('sweetalert::alert')
    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin ">
              <img src="{{url('backend/assets/img/logo.png')}}" alt=""/>
                </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Admin Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form action="{{url('/adminlogin')}}" role="form" method="post">
							@csrf
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="anm" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="apass" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="submit" class="btn btn-lg btn-success btn-block" value="Login">
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="{{url('backend/assets/plugins/jquery-1.10.2.js')}}"></script>
    <script src="{{url('backend/assets/plugins/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{url('backend/assets/plugins/metisMenu/jquery.metisMenu.js')}}"></script>

</body>

</html>
