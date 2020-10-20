<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        Enter the name of the Mario RPG character you'd like to view: <br><br>
        <form action="site.php" method="post">
            <input type="text" name="student"> <br>
            <input type="submit">
        </form>

        <?php
            $score = array("Mario"=>"88", "Mallow"=>"91", "Geno"=>"99");

            echo $score[$_POST["student"]];
        ?>
    </body>
</html>
