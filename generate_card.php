<?php
// Database connection parameters
$servername = "localhost";
$username = "root"; // default username for XAMPP
$password = ""; // default password for XAMPP
$dbname = "databasetrekking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$dob = $_POST['dob'];
$license = $_POST['license'];

// Prepare and bind
$stmt = $conn->prepare("SELECT * FROM trekking_records WHERE dateofbirth = ? AND licensenumber = ?");
$stmt->bind_param("ss", $dob, $license);

// Execute statement
$stmt->execute();

// Store the result
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    // Fetch the record
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $address = $row['address'];
    $fathersname = $row['fathersname'];
    $citizenshipnumber = $row['citizenshipnumber'];
    $dateofissue = $row['dateofissue'];
    $dateofexpiry = $row['dateofexpiry'];
    $issuedby = $row['issuedby'];

    // Determine the image based on license number
    $photoSrc = 'defaultphoto.jpg'; // Default photo
    if ($license == '12345') {
        $photoSrc = 'prajwal.jpg';
    } elseif ($license == '123456') {
        $photoSrc = 'sannosam.jpg';
    } elseif ($license == '1234567') {
        $photoSrc = 'sanjiv.jpg';
    }
    elseif ($license == '12345678') {
        $photoSrc = 'kheseyhang.jpg';
    }

    // Generate the card
    echo "
    <style>
    body, html {
        height: 100%;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #f0f0f0; /* Light background for contrast */
    }

    .card {
        width: 600px;
        height: 430px;
        border: 1px solid black;
        padding: 10px;
        font-family: Arial, sans-serif;
        background-color: skyblue;
        position: relative;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .card img.logo {
        position: absolute;
        top: 10px;
        left: 10px;
        width: 90px;
    }

    .card img.flag {
        position: absolute;
        top: 10px;
        right: 10px;
        width: 80px;
    }

    .card img.chip {
        position: absolute;
        top: 280px;
        left: 10px;
        width: 50px;
    }

    .card img.photo {
        position: absolute;
        top: 200px;
        right: 10px;
        width: 150px;
        height: 150px;
    }

    .card .header {
        text-align: center;
        font-weight: bold;
        margin-top: 10px;
    }

    .card .info {
        margin-top: 50px;
        text-align: left;
    }

    .card .info p {
        margin: 5px 0;
    }

    .card .footer {
        position: absolute;
        bottom: -10px;
        left: 10px;
        right: 10px;
    }

    #gov {
        color: red;
        font-size: 30px;
    }

    #trek {
        font-size: 20px;
    }

    .sign {
        text-align: right;
        margin-bottom: 10px;
    }

    .unknownpic {
        position: absolute;
        top: 100px;
        right: 2px;
        width: 90px;
        height: 33px;
    }

    center {
        text-align: center;
        padding: 10px;
        background-color: #ebb70e;
        position: fixed;
        bottom: 0;
        width: 100%;
        right: 0;
    }
    </style>
    <div class='card'>
        <img src='logo.jpg' class='logo'>
        <img src='flag.jpg' class='flag'>
        <div class='header'>
            <div id='gov'>Government of Nepal</div><br>
            <div id='trek'>Trekking Guide License</div>
        </div>
        <div class='info'>
            <p>Name: $name</p>
            <p>Address: $address</p>
            <img src='chipimage.jpg' class='chip'>
            <img src='$photoSrc' class='photo' alt='pp size photo'>
            <p>Date of Birth: $dob</p>
            <p>Father's Name: $fathersname</p>
            <p>Citizenship Number: $citizenshipnumber</p>
            <p>License Number: $license</p>
        </div>
        <div class='footer'>
            <p>Date of Issue: $dateofissue</p>
            <p>Date of Expiry: $dateofexpiry</p>
            <p>Issued By: $issuedby</p>
            <img class='unknownpic' src='unknown.jpg' alt='unknownpic'>
            <p class='sign'>Signature of Holder: ___________</p>
        </div>
    </div>
    ";
} else {
    echo "<script>alert('No matching records found');</script>";
}

// Close connections
$stmt->close();
$conn->close();
?>
<center style='font-size:x-large'>&copy; 2024 Online Trekking System. All rights reserved.</center>
