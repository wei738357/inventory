<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
?><!DOCTYPE html>
<html>
  <head>
    <title>ø‚¥ÊœµÕ≥</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">

  	<div class="row">
  		<div class="col-md-12">
              <nav class="navbar navbar-default" role="navigation">

                  <div class="navbar-header">
                      <a class="navbar-brand" href="/"><i class="fas fa-box-open"></i> ø‚¥Ê</a>
                  </div>

                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                          <li>
                              <a href="settings.php"><i class="fas fa-cog"></i> …Ë÷√</a>
                          </li>
                      </ul>
                  </div>

              </nav>
      <div class="jumbotron">
        <?php include("show-data.php"); ?>
    </div>
      <?php include("show-instance.php"); ?>
    </div>
    </div>
    </div>

  </body>
</html>
