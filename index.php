<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ajax test</title>
    </head>
    <body>
        <style>
            body{
                margin: 140px;
                padding: 120px;
            }
            div{
            display: block; 
            }
            input{
                background-color: black;
                flex-direction: row;
                text-align: center;
                color: white;
                font-size: 24px;
                width: 400px;
                height: 50px;
            }
        </style>
        <?php 
        include 'connection.php';
        
        class Fruit{
            public $name;
            public $color;
            
            function setname($name){
                $this->name = $name; 
            }
            
            function getname(){
                return $this->name;
            }
            
            function setcolor($color){
                $this->color = $color;
            }
            
            function getcolor(){
                return $this->color;
            }
        }

        $apple = new Fruit();
        $apple->setname('Apple');
        $apple->setcolor('Green');

        ?>
        <div>

            <h1><?php echo "Name: ".$apple->getname() ?></h1>
            <h1><?php echo "Color: ".$apple->getcolor() ?></h1>
            <input type="text" placeholder="Enter a football team name">
        </div>
        
        
    </body>
</html>