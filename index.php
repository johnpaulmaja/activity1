
<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://majaact1.herokuapp.com/");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("book");
 
 ?>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $author = $data->getElementsByTagName("author")->item(0)->nodeValue;
   $desc = $data->getElementsByTagName("description")->item(0)->nodeValue;
  
    echo "<li>$title
            <ul>
                <li>$author</li>
                <li>$desc</li>
            </ul>
        </li>";
 
 }
?>
</ul>
