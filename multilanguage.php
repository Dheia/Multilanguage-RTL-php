<?php
    include "config.php";
?>
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
            <?php 
                    echo $lang['title']
            ?>
    </title>
    <link rel="stylesheet" href="bootstrap-5.2.2-dist/css/bootstrap.min.css">
    <style type="text/css">
        .footer {
            left: 0;
            position: fixed;
            bottom: 0;
            text-align: center;
            color: white;
            width: 100%;
        }
    </style>
</head>
<body>
    <nav class = "navbar navbar-expand-sm bg-dark navbar-dark">
    <ul class ="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="#">
                <?php 
                    echo $lang['home']
                ?>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">
                <?php 
                    echo $lang['pricing']
                ?>
            </a>
        </li><li class="nav-item">
            <a class="nav-link" href="#">
                <?php 
                    echo $lang['contact']
                ?>
            </a>
        </li>
    </ul>
</nav>
<div class="container" style="margin-top:100px;">
    <div class="row justify-content-center">
        <div class="col-md-6-offset-3 text-center">
            <h1> 
                <?php 
                    echo $lang['title']
                ?>
            </h1>

            <p>
                <?php 
                    echo $lang['description']
                ?>
            </p>
        </div>
    </div>
</div>

    <div class="footer bg-dark">
    <a href="multilanguage.php?lang=en"><?php echo $lang['lang_en']?></a> | 
    <a href="multilanguage.php?lang=ar"><?php echo $lang['lang_ar']?></a>
    </div>
</body>
</html>