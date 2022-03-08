<?php
 $pdo = new PDO('mysql:host=localhost;dbname=fake_db','root','');
 
require_once 'vendor/autoload.php';
  
// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();
$n=0;
for ($i = 0; $i < 100; $i++) {
 
 // echo $faker->name, " - " . $faker->unique()->email . " - " . $faker->phoneNumber . "<br/>";
  $sql='insert into user_fake(name, email, phone) values(?,?,?)';
  $param=[$faker->name, $faker->email, $faker->phoneNumber];
  $stm =$pdo->prepare($sql);
  $stm->execute($param);
  $n += $stm->rowCount();
}
echo "Da them $n dong";