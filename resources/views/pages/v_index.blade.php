<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trash & Charity</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/v_style.css">
</head>
<body>


<nav class="navbar navbar-default container-fluid">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a class="navbar-brand" href="/">Trash & Charity</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav pull-right">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>

<div class="welcome">
    <div class="container">
        <div class="col-xs-12 col-md-6 ">
            <h1>Where is the closest trash can?</h1>
        </div>
        <div class="search">
            <div class="col-xs-12 col-md-6 text-right">
                <form class="form-inline">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Your address</label>
                        <input type="text" placeholder="Search after you address" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-success">Find trash can!</button>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid-full">
    <div class="overlay" onClick="style.pointerEvents='none'"></div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d9066.003514821652!2d10.44158445!3d55.38416615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sda!2sus!4v1456397385221"
            width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<div class="maps-button">
    <div class="container">
        <form class="form-inline text-center">
            <input type="submit" class="btn btn-info btn-map" value="Click me"/>
            <input type="submit" class="btn btn-danger btn-map" value="Click me"/>
            <input type="submit" class="btn btn-warning btn-map" value="Click me"/>
            <input type="submit" class="btn btn-info btn-map" value="Click me"/>
        </form>
    </div>
</div>

<div class="newsletter">
    <div class="container">
        <div class="col-xs-12 col-md-6">
            <img src="/images/recycle.png"
                 class="img-responsive"/>
        </div>
        <div class="col-xs-12 col-md-6">
            <h4>Remember to take the trash can out - sign up to get a reminder!</h4>
            <form role="form">
                <div class="form-group">
                    <label for="email">Email address:</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Street:</label>
                    <input type="text" class="form-control" id="pwd">
                </div>
                <div class="form-group">
                    <label for="pwd">Zipcode:</label>
                    <input type="number" class="form-control" id="pwd">
                </div>
                <div class="form-group">
                    <label for="sel1">Notification type:</label>
                    <select class="form-control" id="sel1">
                        <option value="email">E-mail</option>
                        <option value="mobile">Mobile</option>
                        <option value="all">Both</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success container-fluid-full btn-lg">Submit</button>
            </form>
        </div>
    </div>
</div>

<footer>
    <div class="container text-center" id="unsubscribe-hidden">
        <p id="unsubscribe-msg"></p>
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <form role="form" class="form-inline">
            <div class="form-group">
                <input type="text" placeholder="Your e-mail" class="form-control" id="btn-unsubscribe-field">
                <a class="btn btn-success btn-sm" id="btn-unsubscribe-go">Unsubscribe</a>
            </div>
        </form>
        <br/><br/>
    </div>
    <div class="container text-center">
        &copy; <?php echo date('Y'); ?> Copyright Trash & Charity
        <a class="btn btn-info btn-xs pull-right" id="btn-unsubscribe-open">Unsubscribe</a>
    </div>
</footer>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://getbootstrap.com/dist/js/bootstrap.min.js"></script>


<script type="text/javascript">
    $(function ($) {
        $("#unsubscribe-hidden").toggle('hidden');

        $("#btn-unsubscribe-open").click(function () {
            $("#unsubscribe-hidden").toggle('hidden');

            $("#btn-unsubscribe-go").click(function () {
                var email = $("#btn-unsubscribe-field").val();
                
            });
        });
    });
</script>
</body>
</html>