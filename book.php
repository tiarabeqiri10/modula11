<?php

session_start();

include_once('donfig.php');

$user_id=$_SESSION['id'];
$movie_id=$_SESSION['movie_id'];

$ne_tickets=$_POST['nr_tickets'];
$date=$_POSY['date'];
$time=$_POST['time'];

$sql="INSERT INTO bookings(user_id,movie_id,nr_tickets,date,time) VALUES (:user_id,:movie_id,:nr_tickets,:date,:time)";

$insertBookings=$conn->prepare($sql);

$insertBooking->bindParam(":user_id",$user_id);
$insertBooking->bindParam(":movie_id",$movie_id);
$insertBooking->bindParam(":nr_ticktes",$nr_tickets);
$insertBooking->bindParam(":dates",$date);
$insertBooking->bindParam(":time",$time);

$insertBookings->execute();

header('Location:home.php');
