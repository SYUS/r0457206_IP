
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Create User - r0457206 PHP Basic App</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/jumbotron-narrow.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="container">
    <div class="header clearfix">
        <nav>
            <ul class="nav nav-pills pull-right">
                <li role="presentation"><a href="index.php?action=ShowOverview">Overview</a></li>
                <li role="presentation" class="active"><a href="index.php?action=CreateUser">Create User</a></li>
            </ul>
        </nav>
        <h3 class="text-muted">r0457206 PHP Basic App</h3>
    </div>

    <div class="row marketing">
        <div class="col-lg-12">
            <h1>Create User</h1>
        </div>
        <div class="col-lg-12">
            <form class="form-horizontal" method="POST" action="index.php?action=Create">
                <div class="form-group">
                    <label for="inputUserName" class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputUserName" name="username" placeholder="username">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputUserTeam" class="col-sm-2 control-label">Team</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="userteam" id="inputUserTeam">
                            <option>Alpha</option>
                            <option>Beta</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <footer class="footer"/>

</div> <!-- /container -->


<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
