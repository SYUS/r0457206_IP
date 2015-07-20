
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

    <title>Edit User - r0457206 PHP Basic App</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">

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
                <li role="presentation"><a href="index.php?action=CreateUser">Create User</a></li>
            </ul>
        </nav>
        <h3 class="text-muted">r0457206 PHP Basic App</h3>
    </div>

    <div class="row marketing">
        <div class="col-lg-12">
            <h1>Edit User</h1>
        </div>

        <div class="col-lg-12">
            <form class="form-horizontal" method="POST" action="index.php?action=Update">
                <div class="form-group">
                    <label for="inputUserName2" class="col-sm-2 control-label">Username</label>
                    <div class="col-sm-10">
                        <input type="hidden" id="username" name="username" value="<?php echo $this->getSelectedUser()->getUserName(); ?>">
                        <p class="form-control-static" name="username"><?php echo $this->getSelectedUser()->getUserName(); ?></p>
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputUserTeam2" class="col-sm-2 control-label">Team</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="userteam" id="inputUserTeam2">
                            <option>Alpha</option>
                            <option>Beta</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputUserScore2" class="col-sm-2 control-label">Score</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="inputUserScore2" name="userscore" value="<?php echo $this->getSelectedUser()->getUserScore(); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-success">Save</button>
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
