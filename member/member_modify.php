<?php
    include_once $_SERVER['DOCUMENT_ROOT'].'/psctest/songcher_web_site/db/db_connect.php';

    // $id = $_POST['id'];
    // $pass = $_POST['pass'];
    // $name = $_POST['name'];
    // $email1 = $_POST['email1'];
    // $email2 = $_POST['email2'];
    $user_nick = input_set($_POST['user_nick']);
    $user_name = input_set($_POST['user_name']);
    $user_id = input_set($_POST['user_id']);
    $user_pass1 = input_set($_POST['user_pass1']);
    $user_pass2 = input_set($_POST['user_pass2']);
    $user_email = input_set($_POST['user_email']);
    $user_phone = input_set($_POST['user_phone']);
    
    $sql = "update lostark set nick='$user_nick', name='$user_name', id='$user_id', pass1='$user_pass1', 
            pass2='$user_pass2', email='$user_email', phone='$user_phone'";
    $sql .= " where id='$user_id'";
    //select => record set, update, insert, delete => true, false
    $value = mysqli_query( $con, $sql ) or die( 'error : ' . mysqli_error( $con ) );
    if ( $value ) {
        session_start();
        $_SESSION['username'] = $name;
    } else {
        echo "<script>
                        alert('정보 수정 실패');
                        history.go(-1);
                  </script>";
    }
    
    mysqli_close( $con );
    
    echo "
              <script>
                  alert('수정 완료');
                  location.href = 'http://{$_SERVER['HTTP_HOST']}/psctest/songcher_web_site/index.php';
              </script>
          ";
?>