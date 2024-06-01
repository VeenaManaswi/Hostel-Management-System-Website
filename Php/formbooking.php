<?php
// Database connection parameters
$servername = "localhost"; // Change this if your database is hosted elsewhere
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$database = "miniproject"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data exists before accessing it
// if(isset($_POST['full_name'], $_POST['email'], $_POST['phone'], $_POST['address'], $_POST['occupation'], $_POST['join_date'], $_POST['room_type'], $_POST['ac_option'], $_POST['special_requests'], $_POST['terms_conditions'])) {
    // Retrieve form data
// if($_SERVER['REQUEST_METHOD']=='POST'){
//     echo "Entered";
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $occupation = $_POST['occupation'];
    $study_details = isset($_POST['study_details']) ? $_POST['study_details'] : "";
    $job_details = isset($_POST['job_details']) ? $_POST['job_details'] : "";
    $join_date = $_POST['join_date'];
    $room_type = $_POST['room_type'];
    $ac_option = $_POST['ac_option'];
    $special_requests = $_POST['special_requests'];
    $terms_accepted = isset($_POST['terms_conditions']) ? 1 : 0;

    // Prepare SQL statement to insert data into hostel_bookings table
    $sql = "INSERT INTO hostel_bookings (full_name, email, phone, address, occupation, study_details, job_details, join_date, room_type, ac_option, special_requests, terms_accepted) 
            VALUES ('$full_name', '$email', '$phone', '$address', '$occupation', '$study_details', '$job_details', '$join_date', '$room_type', '$ac_option', '$special_requests', '$terms_accepted')";

    // Execute SQL statement
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
// } 
// else {
//     echo "Error: Form data is not complete.";
// }

// Close connection
$conn->close();
?>
