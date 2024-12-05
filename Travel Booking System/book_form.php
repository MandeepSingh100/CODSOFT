<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "travel_booking";

$conn = mysqli_connect($server, $username, $password, $database);
if (!$conn){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['address'];
   $location = $_POST['location'];
   $guests = $_POST['guests'];
   $arrivals = $_POST['arrivals'];
   $leaving = $_POST['leaving'];

   $request = "INSERT INTO `booking_info` (`name`, `email`, `phone`, `address`, `location`, `guests`, `arrivals`, `leaving`, `timestamp`) 
               VALUES ( '$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving', current_timestamp())";
   mysqli_query($conn, $request);
   session_start();
   $_SESSION['success_message'] = "room booked successfully.";
   header('location:book.php'); 

}else{
   echo 'something went wrong please try again!';
}

?>
