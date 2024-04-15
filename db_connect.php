<?php 

//$conn= new mysqli('localhost','root','','bloodbank_db')or die("Could not connect to mysql".mysqli_error($con));

//<?php
//$servername = "db"; // MySQL hostname (service name in Docker Compose)
//$username = "gourish"; // MySQL username
//$password = "Gourish@12"; // MySQL password
//$database = "bloodbank_db"; // MySQL database name

// Create connection
$connect = mysqli_connect(
    "db",
    "gourish",
    "Gourish@12",
    "bloodbank_db"
);
