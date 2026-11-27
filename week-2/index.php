<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week 2 - Advanced PHP</title>
   <!--  <style>
        body {
            background-color: #808080;
            color: #fff;
        }
    </style> -->
</head>
<body>
    <h1>Week 2 - Advanced PHP</h1>
    <p>Full Stack Web Development - Week 2 Tutorial</p>
    <?php
        $categories = ["Laptops", "Phones", "Access", "Audio"];
        echo implode(" ", $categories);

        foreach ($categories as $category) {
            echo $category . "<br>";
        }

       $product = [
           "name" => "Wireless Mouse",
           "price" => 850,
           "stock" => 12
        ];

        echo $product["name"];

        echo "<br><br>Print Using ForEach Loop: <br><br>";
        foreach($product as $productKey => $productValue) {
        echo "{$productKey} : {$productValue} <br>";
        }

        // Exercise 3

        $products = [
            ["id"=>101, "name"=>"Wireless Mouse", "category"=>"Accessories", "price"=>850, "stock"=>12],
            ["id"=>102, "name"=>"USB-C Cable", "category"=>"Accessories", "price"=>350, "stock"=>25],
            ["id"=>103, "name"=>"Keyboard", "category"=>"Accessories", "price"=>500, "stock"=>12],
            ["id"=>104, "name"=>"Speaker", "category"=>"Accessories", "price"=>12000, "stock"=>10],
            ["id"=>105, "name"=>"Headphone", "category"=>"Accessories", "price"=>3500, "stock"=>8],
        ];

        // Exercise 4
        echo "<br>Original Array: <br><br>";
        foreach ($products as $product) {
           echo "<b>Name: </b> {$product["name"]} <b>Stock:</b> {$product["stock"]} <b>Price:</b> {$product["price"]} <br>";
        }

        // Exercise 5
        $filteredProduct = array_filter($products, fn ($prod) => $prod["price"]>500);

        echo "<br>Filtered Products: <br><br>";

         foreach ($filteredProduct as $product) {
           echo "<b>Name: </b> {$product["name"]} <b>Stock:</b> {$product["stock"]} <b>Price:</b> {$product["price"]} <br>";
        }

        // Exercise 6
        $lowStocks = array_filter($products, fn ($prod) => $prod["stock"]<10);

        echo "<br>Products with stock below 10: <br><br>";
         foreach ($lowStocks as $product) {
           echo "<b>Name: </b> {$product["name"]} <b>Stock:</b> {$product["stock"]} <b>Price:</b> {$product["price"]} <br>";
        }

        // Exercise 7
        $mappedProduct = array_map(fn($prod) => $prod, $products);

        // Exercise 8
        echo "<br>Mapped Products: <br><br>";
        foreach ($mappedProduct as $product) {
           echo "<b>Name: </b> {$product["name"]} <b>Price:</b> {$product["price"]} <br>";
        }

        // Exercise 9
        echo "<br>Reduced Products: <br><br>";
        $reducedProduct = array_reduce($products, fn($sum, $value) => $sum + ($value["price"]*$value["stock"]), 0);
        echo "Total Price: Rs. $reducedProduct";

        // Exercise 10
        // $redProd = array_reduce($products, fn($prevVal, $prod) => ($sum + $prod["stock"]>0), 0);
        echo "Total Product with stock greater than 0 is $redProd";
    ?>
</body>
</html>

