<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="Styles/global.css">
        <link rel="stylesheet" type="text/css" href="Styles/header.css">

        <!-- Index CSS -->
        <link rel="stylesheet" type="text/css" href="Styles/index.css">

        <!-- BOOTSTRAP -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

        <!-- materializecss CSS -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> -->
    </head>
    <body>
        <?php include_once 'PHP/header.php' ?>
        <div>
            <h1>Welcom to Coll3ctio</h1>
            <div class='connect-wrapper'>
                <ul>
                    <li><button onclick='toggleModal("spotify-modal")'><span>Connect Spotify</span></button></li>
                    <li><button onclick='toggleModal("youtube-modal")'><span>Connect Youtube</span></button></li>
                    <li><button onclick='toggleModal("reddit-modal")'><span>Connect Reddit</span></button></li>
                    <li><button onclick='toggleModal("instagram-modal")'><span>Connect Instagram</span></button></li>
                    <li><button onclick='toggleModal("facebook-modal")'><span>Connect Facebook</span></button></li>
                </ul>
                
                

                <!-- Modal Structure Spotify -->
                <div id="spotify-modal" class="modal">
                    <div class="modal-content">
                        <div class='content'>
                            <h3>Spotify</h3>

                            <form action="Includes/#.inc.php" method="POST">
                                <label for="fname">Insert user name:</label><br>
                                <input type="text" id="fname" name="fname"><br>
                                <label for="fname">Insert Password:</label><br>
                                <input type="text" id="fname" name="fname"><br><br>
                                <button>Sign in</button>
                            </form>                        
                    
                        </div>
                        <a href="#!" class="modal-close">Close</a>
                    </div>
                </div>

                <!-- Modal Structure Youtube -->
                <div id="youtube-modal" class="modal">
                    <div class="modal-content">
                        <div class='content'>
                            <h3>Youtube</h3>

                            <form action="Includes/#.inc.php" method="POST">
                                <label for="fname">Insert user name:</label><br>
                                <input type="text" id="fname" name="fname"><br>
                                <label for="fname">Insert Password:</label><br>
                                <input type="text" id="fname" name="fname"><br><br>
                                <button>Sign in</button>
                            </form>                        
                    
                        </div>
                        <a href="#!" class="modal-close">Close</a>
                    </div>
                </div>

                <!-- Modal Structure Reddit -->
                <div id="reddit-modal" class="modal">
                    <div class="modal-content">
                        <div class='content'>
                            <h3>Reddit</h3>

                            <form action="Includes/#.inc.php" method="POST">
                                <label for="fname">Insert user name:</label><br>
                                <input type="text" id="fname" name="fname"><br>
                                <label for="fname">Insert Password:</label><br>
                                <input type="text" id="fname" name="fname"><br><br>
                                <button>Sign in</button>
                            </form>                        
                    
                        </div>
                        <a href="#!" class="modal-close">Close</a>
                    </div>
                </div>

            </div>
        </div>






        <!-- JQuery -->
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
              
        <!-- materializecss JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        
        <!-- Index script -->
		<script type="text/javascript" src="Scripts/index.js"></script>

        <!-- FONT AWESOME -->
        <script src="https://kit.fontawesome.com/f45e40cf2b.js" crossorigin="anonymous"></script>

    </body>


</html>