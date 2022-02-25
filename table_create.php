<?php 
//MySQL(MariaDB)の専用領域にテーブル作成
//MariaDBに接続
$lnk = mysqli_connect( 'localhost' , 'php' , 'php' , 'php' ,);
 if( $lnk == false ) {
//MariaDBに接続できなかった場合
   echo 'Connect Err<br>';
   exit;
 }
   echo 'Connect OK<br>';

//テーブル削除のSQLを作成
$sql = "";
$sql .= "drop table URIAGE_Goukei\n";
$res = mysqli_query( $lnk , $sql ); //実行
if( $res == false ) {
  echo "Drop Err<br>";
//exit;
} else {
  echo "Drop Ok [" . $res . "]<br>";
}
//テーブル作成のSQLを作成
$sql = "";
$sql .= "CREATE TABLE URIAGE_Goukei\n";
$sql .= "( name VARCHAR(100)\n";
$sql .= ",  time TIMESTAMP(6)\n";
$sql .= ")\n";
$res = mysql_query( $lnk , $sql ); //実行
if( $res == false ) {
  echo "Create Err<br>";
  exit;
}
echo "Create Ok [" . $res . "]<br>";

//MariaDB切断
mysqli_close( $lnk );

?> 
