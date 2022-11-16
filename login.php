
<?php
$conn = new mysqli('localhost','root','','aadharrecords_sql');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " .$conn->connect_error);
}
else {
    $sql = "SELECT uid,name,email,phno,dob,gender,address,postal FROM aadhardetails";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        echo "uid: " . $row["uid"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
        echo "phno: " . $row["phno"]. " - dob: " . $row["dob"]. " " . $row["gender"]. "<br>";
        echo "address: " . $row["address"]. " - postal: " . $row["postal"]. " " . $row["postal"]. "<br>";

      }
    } else {
      echo "0 results";
    }
    
    mysqli_close($conn);
  }
?>
