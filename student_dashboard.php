<?php session_start();
include 'connection.php';
echo $_POST['id'];
$sql = "DELETE FROM issued_books WHERE id=$_POST[id]";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
}


$query2="Select Userid from users where email='$_SESSION[email]' ";
if ($conn->query($sql) === TRUE) {
  echo " successfully";
} 
$queryRun=mysqli_query($conn,$query2);
while($row=mysqli_fetch_assoc($queryRun)){
    $userId=$row['Userid'];
   
}
$_SESSION['userid']=$userId;
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.css" />
    
</head>
<body>
<div class="header">
  <a href="#default" class="logo">Library &nbsp;&nbsp;&nbsp;&nbsp;Student</a>
  
  <div class="header-right">
  <a style="background-color:#0390fc;color:white;font-weight:bold" >Home</a>
    <a href="login.php">Login</a>
    <a href="show_book.php"> books </a>
 
<a href="student_issued_books.php"> issued books </a>
<a> book to submit <button id="myBtn">  click</button> </a>
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <div> enter issuedbook id to be submitted </div>
       <form method='POST'> <input type="number" name="id" >
       <input type="submit" value="Submit">
  </div>


</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>



  </div>
</div>

    

       
 


    

</body>
</html>