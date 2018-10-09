<!DOCTYPE>
<html>
    <head>
        <title>Register Form</title>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    </head>
    <body>

        <?php
        if (isset($reg_result)) {
            if ($reg_result[0] == true) {
                ?>
                <div class="container alert alert-success">
                    <strong>Пользователь добавлен</strong>
                    <a href="home">Web site</a>
                </div>
                <?php
            } elseif ($reg_result[0] == false) {
                ?>
                <div class="container alert alert-danger">
                    <strong>Ошибка добавления пользователя</strong>
                    <?php echo $reg_result[1]; ?>
                    <a href="home">Web site</a><br>
                    <a href="form_register">Форма регистрации</a>
                </div>
                <?php
            }
        }else{
            
     
        ?>

        <div class="container">
            <div class="row">
                <h2> Registration Form</h2> 

                <form class="form-horizontal" method="POST" action="register">
                    <fieldset>

                        <!-- Form Name -->
                        <legend></legend>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">First Name</label>  
                            <div class="col-md-4">
                                <input id="textinput" name="username" placeholder="Insert your Name" class="form-control input-md" required="" autofocus="" type="text">
                                <span class="help-block"> </span>  
                            </div>
                        </div>



                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">Email</label>  
                            <div class="col-md-4">
                                <input id="textinput" name="email" placeholder="Insert your Email" class="form-control input-md" required="" type="email">
                                <span class="help-block"> </span>  
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">Password</label>  
                            <div class="col-md-4">
                                <input id="textinput" name="password" placeholder="Insert your Password" class="form-control input-md" required="" type="password">
                                <span class="help-block"> </span>  
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="textinput">Confirm Password</label>  
                            <div class="col-md-4">
                                <input id="textinput" name="confirm" placeholder="Confirm your Password" class="form-control input-md" required="" type="password">
                                <span class="help-block"> </span>  
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton"> </label>
                            <div class="col-md-4">
                                <button id="singlebutton" name="save" class="btn btn-primary">Registratsion</button>
                            </div>
                        </div>
                        <p><a href="home">Web site</a></p>

                    </fieldset>

                </form>

            </div>
        </div>
</html>
<?php
        }
?>
</body>