<?php
session_start();
unset( $_SESSION['userid'] );
unset( $_SESSION['username'] );
unset( $_SESSION['userlevel'] );
unset( $_SESSION['userpoint'] );

echo( "
       <script>
          location.href = 'http://{$_SERVER['HTTP_HOST']}/psctest/songcher_web_site/index.php';
         </script>
       " );
?>