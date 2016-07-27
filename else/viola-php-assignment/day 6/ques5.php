<?php
     echo "start";
class animal{
public $name="default name"; public $age="age";
function display(){
 print "Name: ".$name."<br>"."Age: ".$age;}
    
}
class cat extends animal
{ function display()
    { $catobj=new animal();
  $catobj->$name=Cat;
  $catobj->$age=5;
        parent::display(); }
}
class dog extends animal
{ function display()
    { $dogobj=new animal();
  $dogobj->$name=Dog;
  $dogobj->$age=10;
        parent::display(); }
}
?>