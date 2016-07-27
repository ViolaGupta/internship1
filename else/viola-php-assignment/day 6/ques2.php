<?php
abstract class Bank{
public function display();
 
abstract public function interest();
}
class ICICI implements interest{
public function interest(){
 $rate=2.5;}
public function display(){
 }
}
class SBI implementsinterest{
public function interest(){
 $rate=4.5;}
public function display(){
 }
}
class PNB implements interest{
public function interest(){
 $rate=5.5;}
public function display(){
 }
}
class ABNAMRO implements interest{
public function interest(){
 $rate=6.5;}
public function display(){
 }
}
?>