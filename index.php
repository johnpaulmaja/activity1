
<?php
 $domOBJ = new DOMDocument();
 $domOBJ->load("https://majaact1.herokuapp.com/majarss.php");//XML page URL
 
 $content = $domOBJ->getElementsByTagName("article");
 
 ?>
 <ul>
    <?php
 foreach( $content as $data )
 {
   $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
   $link = $data->getElementsByTagName("link")->item(0)->nodeValue;
   $desc = $data->getElementsByTagName("description")->item(0)->nodeValue;
  
    echo "{<li>$title
            <ul>
                <li>$link</li>
                <li>$desc</li>
            </ul>
        </li>}";
 
 }
?>
</ul>
