<?php
   abstract class DataBase{
      abstract public function conect();
 
    public function disconect(){
     echo 'disconect';
   }
  }
  interface SqlDataBase{
    public function connection();
  }
  interface mySql extends SqlDataBase{
    public function connection();
  }
  class sql implements SqlDataBase{
    public function connection(){
      echo 'connect';
    }
  }
?>