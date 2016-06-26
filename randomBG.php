<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
        <link type="text/css" rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <title>testing rotating bg</title>
    </head>
    <body>
        <div id="page">
            <script type="text/javascript">
            
            var images = ['Images/randomBGImage/beach.jpg','Images/randomBGImage/fenceBG.jpg','Images/randomBGImage/streamBG.jpg'];
            var urlLoad = 'url(' + images[Math.floor(Math.random()*images.length)]+')';
            
            document.write('<div>'+ urlLoad + '</div>');
                        
            $('#page').css({'background-image':'url(' + images[Math.floor(Math.random()*images.length)]+')'});
            
            </script>                    
        </div>
    </body>
</html>
