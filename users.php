<?php 
$id="";
$username="";
$password="";
?> 
<html>
<head>
    <link rel="stylesheet" href="style.css" /> 
<style>



 td[scope="col"] {
    background-color: blue;
    color: #fff;
}
td[scope="row"] {
    background-color: yellow;
}
td[scope="col2"]{
  background-color: skyblue;
}
table, th, td {
  border: 1px solid grey  ;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
 
   </style>
</head>
    <body>
 <?php include 'admin_header.php';?>

   
  
    
    <?php include 'connection.php';?>
 <?php
$query="select * from users";
$query1="select username from user_profiles";
$queryRun1=mysqli_query($conn,$query1);
$queryRun=mysqli_query($conn,$query);?>
<div style="margin-top:100px">
<table  class="calendar_table"  align="center" >
<col width="100px" />
    <col width="200px" />
    <col width="250px"/>
    
<tr ><td scope='col'>Id </td>
<td scope='col'>Username </td>
<td scope='col'>Email</td></tr>
</table>
<?php while(($row=mysqli_fetch_assoc($queryRun))&& ($row1=mysqli_fetch_assoc($queryRun1))){
    $id=$row['Userid'];
    
    $username=$row1['username'];
    $email=$row['Email']
    ?> 

<table   align="center">
<col width="100px" />
    <col width="200px" />
    <col width="250px"/>
<tr ><td scope='col2'> <?php echo $id;?></td>
<td scope='row'><?php echo $username ;?></td>
<td><?php echo $email;?></td>
</tr> 
</table>

<?php }?>
</div>
