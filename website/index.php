<html>

    <head>

        <title>Welcome to nginx!</title>

    </head>



    <body>

        <h1>Welcome to nginx!</h1>

        <hr align="left" width="500" size="2" color="#000000" />

<br />

        <ul>

            <?php



            $json = file_get_contents('http://product-service/');

            $obj = json_decode($json);



            $products = $obj->list;



            foreach ($products as $product) {

                echo "<li>$product</li>";

            }



            ?>

        </ul>

    </body>

</html>