<?php

// Utility function that connects to MySQL database
function ConnectToDB() 
{
    // database connection info TODO: edit
    $servername = "localhost";
    $username = "root";
    $password = ""; // Empty password for now, while running locally
    $dbname = "lifeconnect"; 

    // create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    $conn->set_charset("utf8");

    // check connection
    if (!$conn) 
    {
        // if connection failed, display error message
        die("Connection failed: " . mysqli_connect_error());
    }

    return $conn;
}

// function that gets info from database and ...?
function GetInfoFromDB() 
{
    // start building HTML table
    $output = "<table class ='ascii_table'>";

    // create the database query
    $query = "";

    // connect to database
    $conn = ConnectToDB();

    // execute the SQL query
    $result = $conn->query($query);

    // build table row
    if ($result->num_rows > 0)
    {
        // output data of each row
        while($row = $result->fetch_assoc())
        {
            // build HTML table row and insert ASCII art
            $output = $output . "<tr>
                                    <td>
                                        <br/><br/>
                                        <p class='ascii_header'>" . $row["title"] . "</p>
                                        <pre>" . $row["write something"] . "</pre>
                                    </td>
                                </tr>";
        }

        // close connection
        $conn->close();

        $output = $output . "</table>";

        // return final output
        return $output;
    }
}


?>