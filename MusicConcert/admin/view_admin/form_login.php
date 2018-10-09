<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Admin</title>

        <link href="../public/css/bootstrap.css" rel="stylesheet">
        <link href="../public/css/login.css" rel="stylesheet">
    </head>

    <body>

        <div style="margin-top:5%">
            <!--            форма логин       -->

            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title">Please sign in</h3>
                            </div>
                            <div class="panel-body">
                                <form accept-charset="UTF-8" role="form" action="login" method="POST">
                                    <fieldset>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="E-mail" name="email" type="text" required="" autofocus="">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Password" name="password" type="password" value="" required="">
                                        </div>
                                        <input class="btn btn-lg btn-success btn-block" type="submit" value="Login" name="send">
                                        
                                    </fieldset>
                                    <a href="../">Web site</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      



        </div> <!-- /container -->

    </body>
</html>
