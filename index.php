<?php
       $domOBJ = new DOMDocument();
       $domOBJ->load("https://maja-act-1.herokuapp.com/rss.php");//XML page URL

       $content = $domOBJ->getElementsByTagName("Books");
?>
    
       
       <h1>top 3 books</h1>
           
       
        <?php
              foreach($content as $data)
        {          
           $Title = $data->getElementsByTagName("title")->item(0)->nodeValue;
           $Author = $data->getElementsByTagName("author")->item(0)->nodeValue;
           $Description = $data->getElementsByTagName("description")->item(0)->nodeValue;
           echo "<ul><h2>$Title</h2>
                    <ul>
                        <li>Author: $Author </li>
                        <li>Description: $Description</li>
                        
                    </ul>
                </ul>";
              }
?>
    


  
