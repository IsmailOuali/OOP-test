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

             function __construct($name, $description, $price){
                $this->name = $name;
                $this->description = $description;
            }
            protected function getname(){
                return $this->name;
            }

            function getdescription(){
                return $this->description;
            }

            function getprice(){
                return $this->price;
            }
        }


        class voiture{
            public $mark;
            public $engine;
            public $price;


            // function __construct($mark, $engine, $price){
            //     $this->mark;
            //     $this->engine;
            //     $this->price;
            // }

            function setmark($mark){
                $this->mark = $mark;
            }

            function getmark(){
                return $this->mark;
            }

            function setengine($engine){
                $this->engine = $engine;
            }

            function getengine(){
                return $this->engine;
            }

            function setprice($price){
                $this->price;
            }

            function getprice(){
                return $this->price;
            }
        }

        $product1 = new product('iPhone 12', 'Latest Apple phones', '799$');
        // $product1->setname('iPhone 12');
        // $product2->setname('iPhone 12 Pro');
        
        $voiture1 = new voiture('Honda', 'V8', '7400$');
        
    
    ?>
    <div>
        <p><?php echo $product1->name ?>: <?php echo $product1->description ?></p>

    </div>
</body>
</html>