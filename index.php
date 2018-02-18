<!DOCTYPE html>
<html>
    <head>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
        <?php
            
            function getImages($random){
                
                $images = array('brazil.jpg', 'celtic.jpg', 'china.jpg', 'hawaii.jpg', 'japan.jpg', 'mexico.jpg', 'norway.jpg', 'philippines.jpg');
            
                echo "<body background='./images/" . $images[$random] . "'>";
            }
            
            function getSong($random){
                
                $songs = array('brazilian.mp3', 'celtic.mp3', 'china.mp3', 'hawaiian.mp3', 'japanese.mp3', 'mexican.mp3', 'nordic.mp3', 'philippines.mp3');
                
                echo "<audio src='./music/" . $songs[$random] . "' autoplay loop></audio>";
            }
            
            function display(){
                
                $images = array('Brazilian', 'Celtic', 'Chinese', 'Hawaiian', 'Japanese', 'Mexican', 'Nordic', 'Philippine');
            
                $random = rand(0,7);
                getImages($random);
                getSong($random);
                
                echo "<main><div id='welcome'><h1>Songs of the World</h1><br><h2>" .$images[$random] . " Music</h2></main>";
                echo "<br><footer>CST336 - Internet Programming. 2018&copy; Abatol <br />
                      <p><strong>Disclaimer:</strong> The information in this webpage is used for academic purpose only.</p>
                      <p><img src='https://www.prepsportswear.com/media/images/college_logos/300x300/1749151_mktg_logo.png'/></p></footer>";
                            
            
            
            }
            
            display();
            
            echo "</body>";
        ?>
</html>