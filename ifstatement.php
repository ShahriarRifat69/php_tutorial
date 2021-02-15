<?php
    $title = "If Else Statement";
    include "includes/header.php"
    ?>

    <h1>If-Else Statement</h1>
    <?php
    
        // If statement that will carry out an action based on the value of the variable.

        $grade = 34;

        if($grade >= 50)
          {
              echo "<h3 style='color:green'>You Have Passed!</h3>";
          }
        else
          {
            echo "<h3 style='color:red'>You Have Failed!</h3>";
          }

        $grade = 'A';
        // If-Else If-Else
        if($grade == 'A')
          {
              echo "<h2 style='color:green'>You are a superstar!</h2>";
          }
        elseif($grade == 'B')
          {
              echo "<h2 style='color:blue'>You did well</h2>";
          }
        else
          {
              echo "<h2 style='color:red'>You have failed...</h2>";
          }

    ?>

<?php require "includes/footer.php" ?>
