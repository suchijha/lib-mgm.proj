<?php 
 session_start();
$id="";
$username="";
$password="";
?> 
<html>
<head><style>
 td[scope="col"] {
    background-color: blue;
    color: #fff;
    font-weight: bold;
}
td[scope="row2"] {
    background-color: yellow;
}
 td[scope="row"]{
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
    <link rel="stylesheet" href="style.css" /> 
 </head>
    <body> 
    <?php include "connection.php";
?> <?php
$query="SELECT books.Bookname,books.Bookid, books.Book_categories,authors.AUTHOR_NAME FROM books LEFT JOIN authors ON books.author_id=authors.author_id
";
$query2="SELECT publishers.publisher_name
FROM books
left JOIN publishers ON books.publisher_id=publishers.publisher_id";
$queryRun1=mysqli_query($conn,$query);
$queryRun=mysqli_query($conn,$query2);?>
<div style="margin-top:100px">
<table align="center" >
<col width="200px" />
    <col width="200px" />
    <col width="250px"/>
    <col width="200px"/>
    <col width="200px"/>
    <col width="200px"/>
    
<tr><td scope="col">Bookname </td>
<td scope="col">Book-Categories</td>
<td scope="col">Author name</td>
<td scope="col">Publisher_name</td>
<td scope="col">Book-id</td>

</tr>
</table>  <?php $results = array();?>
<?php while(($row=mysqli_fetch_assoc($queryRun1))&& ($row1=mysqli_fetch_assoc($queryRun))){
    
    $bookname=$row['Bookname'];
    $bookCategories=$row['Book_categories'];
    $author=$row['AUTHOR_NAME'];
    $publisher=$row1['publisher_name'];
    $_SESSION['bookId']=$row['Bookid'];
  


array_push($results,$row['Bookid']); 



    ?> 
<table   align="center">
<col width="200px" />
    <col width="200px" />
    <col width="250px"/>
    <col width="200px"/>
    <col width="200px"/>
   <col width="200px"/>
<tr><td scope="row"> <?php echo $bookname;?></td>
<td scope="row2"><?php echo $bookCategories;?></td>
<td><?php echo $author;?></td>
<td><?php echo $publisher;?></td>
<td><?php echo $_SESSION['bookId'];?></td>
<td><a href="student_issuebook_details_fill.php?bookId=<?php echo $_SESSION['bookId'];?>"><h3>"Place order"</h3></a></td>
</tr> 
</table><?php }?>
</div>





