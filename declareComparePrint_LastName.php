<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess the Number</title>
</head>
<body>
    <?php
    
    $firstName1 = "Joshua";         // Declaring variables for Student 1
    $middleName1 = "Gironela";
    $lastName1 = "Cortez";
    $age1 = 23;
    $teamName1 = "Wizard";

    $firstName2 = "Francis Carlo";   // Declaring variables for Student 2
    $middleName2 = "Sabuquel";
    $lastName2 = "De guia";
    $age2 = 21;
    $teamName2 = "Jest";

    //Info of student 1
    echo "<h1>The Name of Student 1 is $firstName1 $middleName1 $lastName1. He/She is $age1 Years Old and belongs to $teamName1.</h1>";

    //Info of student 2
    echo "<h1>The Name of Student 2 is $firstName2 $middleName2 $lastName2. He/She is $age2 Years Old and belongs to $teamName2.</h1>";

    echo "<h2>Student 1 Age + Student 2 Age = " . ($age1 + $age2) . "</h2>";    //printing and performing arithmetic operations
    echo "<h2>Student 1 Age - Student 2 Age = " . ($age1 - $age2) . "</h2>";
    echo "<h2>Student 1 Age * Student 2 Age = " . ($age1 * $age2) . "</h2>";
    echo "<h2>Student 1 Age / Student 2 Age = " . ($age1 / $age2) . "</h2>";
    echo "<h2>Student 1 Age % Student 2 Age = " . ($age1 % $age2) . "</h2>";
    ?>
</body>
</html>
