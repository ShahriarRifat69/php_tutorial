<?php
    $title = "Index";
    include "includes/header.php"
    ?>

<!-- Basic HTML -->
    <h1>Hello World - PHP Tutorial </h1>
    <br/>
    <?php
    //Printing to HTML using echo
        echo 'Hello PHP';
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
    
         //declare variable
         $name = 'Shahriar Rifat';
         $age = 21;

         //echo variable
         echo $name;
         echo '<h1>My Name Is: '.$name.'</h1>';
         echo '<h1>My Age Is: '.$age.'</h1>';

         //echo using double quotes and interpolation
         echo "<h1>My Name is: $name</h1>";
    ?>
    <a href="https://www.facebook.com/aririkarishikikashi/" target="_blank" class="btn btn-dark">FB Profile</a>
    <button type="button" class="btn btn-primary">CLICK ME!</button>
    <button type="button" class="btn btn-success">CLICK ME!</button>
    <a href="https://www.heroku.com" target="_blank" class="btn btn-danger">Heroku</a>
    <?php
    require "includes/footer.php"
    ?>