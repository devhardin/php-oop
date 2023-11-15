<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php oop</title>
</head>
<body>
    <h2>A php function here</h2>
    <?php
    class School{
       //properties here
        public $name;
        public $position;
       //methods here
       // 1. setters to modify
       public function setName($name){
        $this->name = $name;
       }
       public function setPosition($position){
        $this->position = $position;
       }
       // 2. getters to access
       public function getName(){
        return $this->name;
        }
        public function getPosition(){
            return $this->position;
        }
    }
    $mySchool = new School();
    $mySchool->setName("Dansam School");
    echo $mySchool->getName();
    echo "<br>";
    $mySchool->setPosition(5);
    echo $mySchool->getPosition();
    ?>
</body>
</html>