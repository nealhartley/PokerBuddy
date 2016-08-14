

<!--The toolbar for all pages. include at star of project for toolbar.
make sure to link to css: style.css on your page for the right styling"-->
<html>
    
    <link type="text/css" rel="stylesheet" href="style.css">
     <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
     <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    
    <div id="toolbar">

                
                <!--The logo-->
                <div id="logo">
                    <!--Original image 650wide by 250high-->
                     <a href="index.php">
                        <img src="Images/LogoName.png"
                        title="Back to main page"
                         Width ="280"
                         Height="100"
                         />
                    </a>
                </div>

              
                <!--let's play button-->
                <div id="letsPlay">
                    <a href = "chooseHand.php">
                     <!--Original image 200wide by 100high-->
                     <image src = "Images/letsPlayButtonBlue.png"
                            title="Click here to begin using PokerBuddy"
                            Width="100"
                            Height="50"/>
                     </a>
                </div>

        </div>
                        
            <!--the grey spacer bar at bottom of the toolbar-->
            <div id="spacer"></div>
            
        <script>
            $(image).tooltip();
            //$(img).tooltip();
        </script>
</html>