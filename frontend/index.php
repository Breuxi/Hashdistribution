<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hashdistribution</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/app.css" rel="stylesheet">
</head>
<body id="page">
<nav class="navbar navbar-inverse navbar-fixed-top">
    <!-- TODO: Add GitHub repo! -->
    <a class="navbar-brand" href="https://github.com/jugendhackt/hashdistribution">Hashdistribution</a>
</nav>
<!-- Hero unit -->
<div class="jumbotron" id="herounit">
    <div class="page-header text-center container">
        <h1>Hashdistribution<br/>
            <small>Explore which hashtags go together and analyze user data!</small>
        </h1>
        <br/>
        <p><a class="btn btn-default btn-lg" href="https://github.com/jugendhackt/hashdistribution" role="button">Learn more</a></p>
    </div>
</div>
<!-- Base -->
<div class="container">
    <div id="querywrapper" class=" input-group input-group-lg">
        <span class="input-group-addon" id="sizing-addon1">#</span>
        <input type="text" class="form-control" id="querybox" autofocus="yes"
               placeholder="Search for any hashtag"
               aria-describedby="sizing-addon1">
        <span class="input-group-btn">
        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
    </span>
    </div>
</div>
<br/>
<div class="container alert alert-danger hide" id="handle" role="alert"><p>You can't put spaces or special
        characters in
        your hashtag!</p></div>
<br/>
<div id="bgImg" class="container"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>