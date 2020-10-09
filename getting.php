<?php 
    
    session_start();
    $captcha = $_POST['captcha'];
    $check = false;

    if (isset($_SESSION['captcha'])) {
        // Case sensitive Matching
        if ($captcha == $_SESSION['captcha']) {
            $check = true;
        }
        unset($_SESSION['captcha']);
    }

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Captcha Generation</title>

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</head>
<body style="margin-top: 100px;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="panel">
                    <hr>
                    <div style="text-align: center;">
                        <?php if ($check): ?>
                            <img src="images/human.jpg" alt="You are a human">
                            <br><br>
                            <div><h3>You are a Human</h3></div>
                        <?php else: ?>
                            <img src="images/bot.jpg" alt="You are a Bot">
                            <br><br>
                            <div><h3>You are a Bot</h3></div>
                        <?php endif ?>
                        <br><br>
                        <h4><a href="index.php">Check Me Again</a></h4>
                        <hr><br>
                    </div>
                    <br><br><hr><br>
                    <p style="font-size: 80%; text-align: center; ">Brought to you by <a href="https://youtube.com/myPHPnotes">myPHPnotes</a> | <a href="https://www.myphpnotes.tk">Learn How I Made This</a></p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>