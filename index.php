<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="dist/img/aceits.png"/>

    <title>ACEITS</title>

    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    
    <!-- Login CSS -->
    <link href="dist/css/login_style.css" rel="stylesheet">

    <!-- Font CSS -->
    <link href="dist/css/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- <div class="jumbotron jumbotron-ad hidden-print" style="margin-top:-10px;">
      <div class="container" style="height:90px;margin-top:-60px;">
        
        <h1><i class="fa fa-user-circle" aria-hidden="true"></i> Welcome Admin!</h1>
        <p>Livestock Management Information System</p>
        
      </div>
    </div> -->

    <!-- Page Content -->


        <div class="login_form">    
            <div id="loginbox" style="margin-top:50px;" class="">
                <div class="">
                    <div class="panel-heading">
                        <div class="panel-title">Log In</div>
                        <!--div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div-->
                    </div>
                    <div class="panel-body">
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12">
                        <div class="row alert alert-success" id="notify_success_signin" hidden="hidden"></div>
                        <div class="row alert alert-warning" id="notify_warning_signin" hidden="hidden"></div>
                        <div class="row alert alert-danger" id="notify_failed_signin" hidden="hidden"></div>
                        </div>
                            <div class="alert alert-danger fade in" style="display:none" id="err-emptalert">
                            <a href="#" class="close" data-dismiss="alert">×</a>
                            <strong>Error!</strong> Fill the fields completely.
                        </div>
                                 <div class="alert alert-danger fade in" style="display:none" id="err-alert">
                            <a href="#" class="close" data-dismiss="alert">×</a>
                            <strong>Error!</strong> Invalid Username/Password.
                        </div>

                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input id="uname" type="text" class="form-control" name="uname" value="" placeholder="Username">                                        
                        </div>
                            
                        <div style="margin-bottom: 25px" class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input id="pwd" type="password" class="form-control" name="pwd" placeholder="Password">
                        </div>

                            <div class="col-sm-12">
                              <button id="login_btn" class="btn btn-sm btn-warning pull-right"><span class="fa fa-sign-in"></span> Login</button>
                            </div>

                    </div>                     
                </div>
            </div>
        </div>
        <div class="time_date"><span id="timer"></span>

    <!-- /.container -->

    <!-- jQuery -->
    <script src="dist/js/jquery.min.js"></script>
    <script src="dist/js/jquery-ui.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/js/bootstrap.min.js"></script>

    <!-- Index Js -->
    <script src="dist/js/login.js"></script>

    <!-- Notify Js -->
    <script src="dist/js/notify.js"></script>
    <script>
        function time(){
            if (!document.all&&!document.getElementById)
                return
                thelement=document.getElementById? document.getElementById("timer"): document.all.miner
                var Digital=new Date()
                var hours=Digital.getHours()
                var minutes=Digital.getMinutes()
                var seconds=Digital.getSeconds()
                var dn="PM"
            if (hours<12)
                dn="AM"
            if (hours>12)
                hours=hours-12
            if (hours==0)
                hours=12
            if (minutes<=9)
                minutes="0"+minutes
                var ctime=hours+":"+minutes+":"+seconds+"  "+dn
                thelement.innerHTML=ctime
                setTimeout("time()",1000)
        }
        window.onload=time
</script>
    <?php
        $date = new DateTime();
        echo $date->format('l, F j, Y');
    ?>
</body>

</html>
