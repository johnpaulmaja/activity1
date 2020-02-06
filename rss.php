<?php

    $rssfeed = '<?xml version="1.0" encoding="UTF-8"?>';
    $rssfeed .= '<rss version="2.0">';
    $rssfeed .= '<channel>';

    $connect = mysqli_connect("dbrojasdev.cjw42bnplsor.us-east-1.rds.amazonaws.com", "admin", "root1234", "db_1820681") or die(mysqli_error($connect));
    $sql = "SELECT * FROM tblBook";
    $query = mysqli_query($connect,$sql) or die (mysqli_error($connect));

    while($row=mysqli_fetch_assoc($query)) {
        extract($row);

        $rssfeed .= '<books>';
        $rssfeed .= '<title>' . $title . '</title>';
        $rssfeed .= '<author>' . $author . '</author>';
        $rssfeed .= '<description>' . $description . '</description>';
        $rssfeed .= '</books>';
    }

    $rssfeed .= '</channel>';
    $rssfeed .= '</rss>';

    echo $rssfeed;
?>    
