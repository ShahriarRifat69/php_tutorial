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
    <button type="button" class="btn btn-dark">CLICK ME!</button>
    
    <?php
    require "includes/footer.php"
    ?>