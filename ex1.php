<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        include 'connection.php';

        class product{
            public $name;
            public $description;
            public $price;

            function setitems($name, $description, $price){
                $this->name = $name;
                $this->description = $description;
                $this->price = $price;
            }
            function getname(){
                return $this->name;
            }

            function getdescription(){
                return $this->description;
            }

            function getprice(){
                return $this->price;
            }
        }

        $product1 = new product();
        $product2 = new product();
        // $product1->setname('iPhone 12');
        // $product2->setname('iPhone 12 Pro');
        $product1->setitems('iPhone 12', 'Latest Apple phones', '799$');
        $product2->setitems('iPhone 12 Pro', 'The big screen model', '980$');
    
    ?>
    <div>
        <p><?php echo $product1->description ?></p>
        <p><?php echo $product2->price ?></p>

    </div>
</body>
</html>