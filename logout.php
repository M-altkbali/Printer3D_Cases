<?php

session_start();

if (empty($_SESSION['id'])) : header('Location:index.php');
endif;



include("php/connection.php");
session_destroy();

// echo '<mete http-equiv="refresh" content="2;url=index.php" />';
// echo '<progress max="100"><strong>Progress: 60% done.</strong></progress><br>';
// echo '<span class="itext">Logging out Please wait ..!</span>';

echo " <script type='text/javascript'>
            
                document.location='index.php';
            
            </script> ";