<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IOC Lookup</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <script>
        function showModal() {
          document.getElementById("dialog").style.visibility = "visible";
        }
        function hideModal() {
          document.getElementById("dialog").style.visibility = "hidden";
        }
    </script>
</head>
<body>
    <div class="wrapper indexPage">

        <div class="mainSection">
            <div class="logoContainer">
                <img src="assets/images/logo_ioclu.png" alt="IOCLOOKUP">

            </div>

            <div class="searchContainer">
                <form action="search.php" method="get">
                    <input type="text" class="searchBox" name="term">
                    <input type="submit" class="searchButton" value="Search">
                </form>
            </div>
            <div id="dialog" style="visibility: hidden">
                <div id="dialog-bg">
                    <div id="dialog-title">Latest Updates</div>
                       <div id="dialog-description"><strong style="color: #292826;">IOC Lookup Alpha Version Updates:</strong><br>-Search Input Type Detection function<br><br>The above items are the properties that are in the testing phase.</div>

                        <!-- Buttons, both options close the window in this demo -->
                       <div id="dialog-buttons">
                       <a href="./search.php?term=7c401bde8cafc5b745b9f65effbd588f" class="large green button" onclick="return hideModal();">Lets start test!</a>
                       <a href="#" class="large red button" onclick="return hideModal();">Let me free!</a>
                    </div>
                </div>  
            </div>
        </div>
        <p style="margin-left: auto; margin-right: auto; padding-top: 15px;">This website is still in development. Find out about the <a href="#" onclick="return showModal();">latest updates</a>.</p>
    </div>
</body>
</html>