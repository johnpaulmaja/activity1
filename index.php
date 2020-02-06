
<?php
       $domOBJ = new DOMDocument();
       $domOBJ->load("https://maja-act-1.herokuapp.com/majarss.php");//XML page URL

       $content = $domOBJ->getElementsByTagName("books");
?>
    
       
       <h1>Monsters</h1>
           
       
        <?php
              foreach($content as $data)
        {          
           $title = $data->getElementsByTagName("title")->item(0)->nodeValue;
           $author = $data->getElementsByTagName("author")->item(0)->nodeValue;
           $description = $data->getElementsByTagName("description")->item(0)->nodeValue;
           echo "<ul><h2>$title</h2>
                    <ul>
                        <li>Author: $author</li>
                        <li>Description: $description</li>
                           
                    </ul>
                </ul>";
              }
?>
