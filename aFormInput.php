<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Data Entry</title>
</head>
<body>
    <h2>User Data Entry</h2>
    <form method="post" action="">
        <label for="name">Name:
        <input type="text" id="name" name="name" required/><br><br>
        </label><br>
        <label for="city">City:
        <select id="city" name="city" required>
            <option value="" disabled selected>Select your city</option>
            <option value="Seoul">Seoul</option>
            <option value="Busan">Busan</option>
            <option value="Daegu">Daegu</option>
            <option value="Incheon">Incheon</option>
        </select><br/><br/>
        </label><br>
        <input type='radio'
        name='gender' 
        value='f'/>female
        <input type='radio' 
        name='gender' 
        value='m'/>male
        <input type="submit" name="submit" value="Submit"/>
    </form>

    <?php
        $createTableQuery = "CREATE TABLE IF NOT EXISTS mytable (
            SID int(11) NOT NULL AUTO_INCREMENT,
            S_Name varchar(255) NOT NULL,
            S_City varchar(255) NOT NULL,
            gender char(1),
            PRIMARY KEY (SID)
        ) ENGINE=MyISAM;";
        
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $city = $_POST['city'];
        $gender = $_POST['gender'];
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'mytestdb';
        
        // Create connection
        $db = new mysqli($servername, $username, $password, $dbname) or die("Connection failed:");
        $query = "INSERT INTO mytable (S_Name, S_City, gender) VALUES ('$name', '$city', '$gender')";

    }
    ?>

<h2>Retrive Data from the "mytestdb" Database</h2>
    <form method="post" action="">
        <label for="selected_city">Select a city:</label>
        <select id="selected_city" name="selected_city">
            <option value="" disabled selected>Select a city</option>
            <option value="Seoul">Seoul</option>
            <option value="Busan">Busan</option>
            <option value="Daegu">Daegu</option>
            <option value="Incheon">Incheon</option>
        </select>
        <input type="submit" name="retrieve" value="Show">
    </form>

    <?php

    if(isset($_POST['retrieve']) && isset($_POST['selected_city'])) {
        $selected_city = $_POST['selected_city'];

        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $dbname = 'mytestdb';

        // Create connection
        $db = new mysqli($servername, $username, $password, $dbname) or die("Connection failed:");
        $db->query($createTableQuery);

        $query = "SELECT SID, S_Name, S_City, gender FROM mytable WHERE S_City = '$selected_city' ORDER BY SID";
        $result = mysqli_query($db, $query);

        echo "<h3>User Data for $selected_city</h3>";
        echo "<table border='1'>";
        echo "<tr><th>SID</th><th>Name</th><th>City</th><th>gender</th></tr>";
        if ($result->num_rows > 0) {
            while($row = mysqli_fetch_array($result)) {
                echo "<tr><td>" . $row["SID"] . "</td><td>" . $row["S_Name"] . "</td><td>" . $row["S_City"] . "</td><td>" . $row["gender"] . "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No data available</td></tr>";
        }
        echo "</table>";

        $db->close();
    }
    ?>
</body>
</html>
