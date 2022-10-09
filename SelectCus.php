<!DOCTYPE html >
<html>
    <head>
        <meta charset="UTF-8">
        <title>this is HTML style</title>
        <link rel="stylesheet" href="bootstrap.min.css">
    </head>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="main-from.html">LOGIN</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarColor02">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link active" href="main.html">หน้าหลัก
                  <span class="visually-hidden">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="SelectProduct.php">สินค้า</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="SelectPromotion.php">โปรโมชั่น</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">ติดต่อเรา</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="feedback.html">ความคิดเห็น</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="price.html">ใบเสร็จ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="tables.html">ตารางสินค้า</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="SelectCus.php">ลูกค้า</a>
              </li>
              
              
            </form>
          </div>
        </div>
      </nav>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DBProduct";
$conn = new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
    die("connection failed".$conn->connect_error);

}
echo"connection Complete<br><br>";
$sql = "SELECT  Customerid, CustomerName, Locations, Email, DateOfBirth, CDate, ModDate, Postcode FROM Customer";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<center>"."<div class='card border-danger mb-3' style='max-width: 30rem;'>"."รหัสลูกค้า : "."<a href='editCustomer.php?Customerid=$row[Customerid]'>".$row["Customerid"]."</a>"."<br>"
        ."<br>"."ชื่อลูกค้าลูกค้า : ".$row["CustomerName"]."<br>"."ที่อยู่ : ".$row["Locations"]."<br>"."Email : ".$row["Email"]."<br>"."วันเกิด : ".$row["DateOfBirth"]."<br>"."วันผลิต : ".$row["CDate"]."<br>"."วันหมดอายุ : ".$row["ModDate"]."<br>"."รหัสไปรษณีย์ : ".$row["Postcode"]."<br><br><br>";       

      }   
}
    else {
        echo "0 results";
    }
    echo "<a href='insertCustomer.php'>Add New Invoice</a>"."</center>";


    $conn->close();
    
?>
