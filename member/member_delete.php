<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/psctest/songcher_web_site/db/db_connect.php';
$id = $_POST['id'];

$sql = "delete from members  where id='$id'";
$value = mysqli_query( $con, $sql ) or die( 'error : ' . mysqli_error( $con ) );

if ( $value ) {
    echo "<script>
                        alert('이용해 주셔서 그동안 감사 했습니다!');
                  </script>";
} else {
    echo "<script>
                        alert('회원탈퇴를 실패 했습니다 관리자 문의 바랍니다!');
                        history.go(-1);
                  </script>";
}
include_once $_SERVER['DOCUMENT_ROOT'] . '/psctest/songcher_web_site/login/logout.php';
?>