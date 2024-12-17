<!DOCTYPE html>
</head>
<body>
    <?php
    $fruitsAndVegetables = []; //Create array for fruits and vegetables, desserts, hygiene products
    $desserts = []; 
    $hygieneProducts = []; 

    //Add three items to each array
    array_push($fruitsAndVegetables, "Apple", "Horse Raddish", "Tomato"); //Adding fruits and veggies
    array_push($desserts, "Cheese Cake", "Ice Cream yummy", "Buko pandan"); //Adding desserts
    array_push($hygieneProducts, "Safe Guard", "Head and Shoulder", "Colgate"); //Adding hygiene products

    echo "<h1>Fruits and Vegetables:</h1><ul>";
    foreach ($fruitsAndVegetables as $item) {
        echo "<li>$item</li>"; //Display the items
    }
    echo "</ul>";

    echo "<h1>Desserts:</h1><ul>";
    foreach ($desserts as $item) {
        echo "<li>$item</li>"; //Display again the items
    }
    echo "</ul>";

    echo "<h1>Hygiene Products:</h1><ul>";
    foreach ($hygieneProducts as $item) {
        echo "<li>$item</li>"; //Display againnnn the items
    }
    echo "</ul>";

    
    $groceryCart = array_merge($fruitsAndVegetables, $desserts, $hygieneProducts); //Combine the arrays

    
    $totalNoItems = count($groceryCart); //Get the total count

    
    echo "<h1>The Grocery List:</h1><ul>";
    foreach ($groceryCart as $item) {
        echo "<li>$item</li>"; //Display againnnnnnn the items
    }
    echo "</ul>";

    echo "<p>------------------------</p>";
    echo "<p>The Total number of items in the List is $totalNoItems.</p>"; //Display total items and the count
    ?>
</body>
</html>
