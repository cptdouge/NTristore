<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin</title>
         <!--css font icon-->
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"/>
        <!--css bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css" media="all" type="text/css">
    </head>
    <body>
        <div class = "wrapper">
            <?php
                include("config/config.php");
                include("modules/header.php"); 
                include("modules/menu.php");
                include("modules/main.php");
            ?>
        </div>
        <?php include("modules/footer.php"); ?>
        <!--js bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    </body>
</html>
