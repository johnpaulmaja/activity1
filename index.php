<?php
// Create connection
$con = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com","admin","root1234","db_1820681");
// Check connection
 if (mysqli_connect_errno($con)) {
 echo "Database connection failed!: " . mysqli_connect_error();
 }
 
 $sql = "SELECT * FROM tbl.rss_info ORDER BY id DESC LIMIT 20";

 $query = mysqli_query($con,$sql);
 
header("Content-type:");
 
 echo "<?xml version='1.0' encoding='UTF-8'?>
 <rss version='2.0'>
 <channel>
 <title></title>
 <link></link>
 <language>en-us</language>";
 
 while($row = mysqli_fetch_assoc($query)){
   $title=$row["title"];
   $link=$row["link"];
 
   echo "<item>
   <title>$title</title>
   <link>$link</link>
   </item>";
 }
 echo "</channel></rss>";
?>
