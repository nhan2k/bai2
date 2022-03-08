<?php
header('Access-Control-Allow-Origin: *');

 $pdo = new PDO('mysql:host=localhost;dbname=fake_db','root','');
 
require_once 'vendor/autoload.php';
  
// use the factory to create a Faker\Generator instance
// $faker = Faker\Factory::create();
// $n=0;
// for ($i = 0; $i < 10000; $i++) {
 
//  // echo $faker->name, " - " . $faker->unique()->email . " - " . $faker->phoneNumber . "<br/>";
//   $sql='insert into user_fake(name, email, phone) values(?,?,?)';
//   $param=[$faker->name, $faker->email, $faker->phoneNumber];
//   $stm =$pdo->prepare($sql);
//   $stm->execute($param);
//   $n += $stm->rowCount();
// }
$data=[];
 
 // echo $faker->name, " - " . $faker->unique()->email . " - " . $faker->phoneNumber . "<br/>";
  $sql='select * from user_fake';
  $stm =$pdo->prepare($sql);
  $stm->execute();
  $data = $stm->fetchAll();

$json = json_encode($data);
echo $json;