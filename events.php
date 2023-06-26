<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Home Page</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="main.css"/>
    <header>
    <div class="container">
    <nav>
        <ul>
        <li><a href="user_home.php">Home</a>&nbsp;&nbsp;</li>
            <li><a href="events.php">Events</a>&nbsp;&nbsp;</li>
            <li><a href="accommodation.php">Accommodation</a>&nbsp;&nbsp;</li>
            <li><a href="pickup.php">Pickup</a>&nbsp;&nbsp;</li>
            <li><a href="logout.php">Logout</a>&nbsp;&nbsp;</li>
        </ul>
    </nav>
        
</div>
</header>
</head>
<body>
<h1 style="font-size:45px;text-align:center;color:#FF0000">Student Association</h1>
<div class="form">
<h1 class="login-title">Upcoming Events</h1> 
<?php
    require('db.php');
    // When form submitted, insert values into the database.
    $result = mysqli_query($db_con,"SELECT * FROM events");
   
    echo "<table border='1'> 
    <tr>
    <th>Event Name</th>
    <th>Venue</th>
    <th>Start Date</th>
    <th>Information</th>
    </tr>";
    while($row = mysqli_fetch_array($result))
    {
    echo "<tr>";
    echo "<td>" . $row['event_name'] . "</td>";
    echo "<td>" . $row['event_location'] . "</td>";
    echo "<td>" . $row['event_date'] . "</td>";
    echo "<td>" . $row['event_description']. "</td>";
    
    
    
    echo "</tr>";
    }
    echo "</table>";


?>
</div>
</body>
</html>