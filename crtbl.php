<?php
include ('database.php');

$tbl="CREATE TABLE IF NOT EXISTS car(
      id int(11) not null auto_increment primary key,
      name varchar(50) not null,
      type varchar(50) not null,
      price varchar(50) not null,
      color varchar(50) not null);";

      $db->myExec($tbl);

$insert="INSERT INTO car(id,name,type,price,color) VALUES
         (1,'car1','type1','40$','red'),
         (2,'car2','type2','35$','blue'),
         (3,'car3','type3','25$','black'),
         (4,'car4','type4','30$','yellow'),
         (5,'car5','type5','32$','silver'),
         (6,'car6','type6','20$','green');";

        $db->myExec($insert);

