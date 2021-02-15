<?php
    $title = "String Manipulation";
    include "includes/header.php"
    ?>

    <h1>String Manipulation</h1>
    <?php
    // Concatenation of strings
    $phrase1 = "Student who came late";
    $phrase2 = "in class, stand with Rock";
    $name = "shahriar hossain rifat";
    echo $phrase1 . ", named Tiffany, " . $phrase2;
    echo "<br/>";
    echo "<hr/>";
    //String transformation
    echo "Uppercase first letter: " . ucfirst($name) . "<br/>";
    echo "Uppercase first letter of each word: " . ucwords($name) . "<br/>";
    echo "Uppercase all letters: " . strtoupper($name) . "<br/>";
    echo "Lowecase all letters: " . strtolower('THIS WAS AN UPPERCASE STRING') . "<br/>";
    echo "<hr/>";
    echo "Repeat string: " . str_repeat('a', 10) . "<br/>";
    echo "Repeat string: " . strtoupper(str_repeat('a', 10)) . "<br/>";
    echo "Get a substring: " . substr($name, 5, 10) . "<br/>";
    echo "Get position of string: " . strpos($name, 'o') . "<br/>";
    echo "Find character 'f': " . strchr($name, 'f') . "<br/>";

    echo "Find length of string: " . strlen($name) . "<br/>";

    echo "Without trim: " . 'A' . ' B C D ' . 'E' . "<br/>";
    echo "Trim spaces on both sides: " . 'A' . trim(' B C D ') . 'E' . "<br/>";
    echo "Trim spaces to the left: " . 'A' . ltrim(' B C D ') . 'E' . "<br/>";
    echo "Trim spaces to the right: " . 'A' . rtrim(' B C D ') . 'E' . "<br/>";
    
    echo "Replace one string with another: " . str_replace('stand', 'sit', $phrase2);
    ?>
    <?php require "includes/footer.php" ?>
