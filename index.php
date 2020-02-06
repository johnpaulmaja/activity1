<?php
       $domOBJ = new DOMDocument();
       $domOBJ->load("https://xmlmaja.herokuapp.com/rss.php");//XML page URL

       $content = $domOBJ->getElementsByTagName("Books");
?>
    <?xml-stylesheet type="text/css" href="style.css"?> 
       
       <h1>Books</h1>
           
       
        <?php
              foreach($content as $data)
        {          
           $Title = $data->getElementsByTagName("Title")->item(0)->nodeValue;
           $Author = $data->getElementsByTagName("Author")->item(0)->nodeValue;
           $Description = $data->getElementsByTagName("Description")->item(0)->nodeValue;
           echo "<ul><h2>$Title</h2>
                    <ul>
                        <li>Author: $Author </li>
                        <li>Description: $Description</li>
                        
                    </ul>
                </ul>";
              }
?>
    


  
