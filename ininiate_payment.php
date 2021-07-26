<?php 
require 'config.php';

$dbConnection->query("CREATE TABLE IF NOT EXISTS payments(id int(11) not null auto_increment, primary key(id), name varchar(30) not null, phone_number varchar(15), tx_ref varchar(50) not null, price double(10,2), plan_id int(11) not null, foreign key(plan_id) references tickets(id), status varchar(10) )  ");







 