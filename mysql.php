<?php
if( $luk =mysqli_connect( 'localhost' , 'php' , 'php' , 'php') ) {
  echo 'OK<br>';
  
  if( $result = mysqli_query( $luk , "SELECT 'select ok' as msg FROM DUAL;" ) ) {
    echo "SELECT文実行に成功<br>";
    
    foreach ($result as $row) {
      echo $row['msg'] . '<br>';
    }
    echo "SELECT済<br>";
  }
  
  mysqli_close( $luk );
} else {
  echo 'Err';
}
?>

//MySQL(MariaDB)の専用領域にテーブル作成
<?php 
//MariaDBに接続
$luk = mysqli_connect( 'localhost' , 'php' , 'php' , 'php' ,);
 if( $luk == false ) {
//MariaDBに接続できなかった場合
   echo 'Connect Err<br>';
   exit;
 }
   echo 'Connect OK<br>';

//テーブル削除のSQLを作成
$sql = "";
$sql .= "drop table URIAGE_Goukei\n";
$res = mysqli_query( $luk , $sql ); //実行
if( $res == false ) {
  echo "Drop err<br>";
//exit;
} else {
  echo "Drop Ok ["  . $res . "]<br>";
}
//テーブル作成のSQLを作成
$sql = "";
$sql .= "CREATE TABLE URIAGE_Goukei\n";
$sql .= "( name VARCHAR(100)\n";
$sql .= ", time TIMESTAMP(6)\n";
$sql .= ")\n";
$res = mysql_query( luk , $sql ); //実行
if( $res == false ) {
  echo "Create Err<br>";
  exit;
}
echo "Create Ok [" .$res . "]<br>";

//MariaDB切断
mysqli_close( $luk );

?> 
