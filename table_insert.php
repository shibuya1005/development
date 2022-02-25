<?php
//MariaDBに接続
  $luk = mysql_connect( 'localhost', 'php','php','php');
  if( $luk == false) {
//MariaDBに接続できなかった場合
    echo 'Connect Err<br>';
    exit;
  }
    echo 'Connect Ok<br>';

  if(isset($ REQUEST['name'])) {
//クエリ(URL)パラメータが指定されていた場合
    $name = $_REQUEST['name'];
  } else {
//クエリ(URL)パラメータが省略されている場合
    $name = str_shuffle(uniqid()); //ランダムな文字列
  }

//レコード追加
$sql = "";
$sql .= "insert into URIAGE_Goukei\n";
$sql .= "( name , time\n";
$sql .= ")\n";
$sql .= "values\n";
$sql .= "('". $name . "' , now(6)/n";
$sql .= ")\n";
$res = mysqli_query( $lnk , $sql ); //実行
if( $res == false) {
  echo "Insert Err<br>";
  exit;
}
  echo "Insert Ok . $res . "<br>";
  
//データ取得
$sql = "";
$sql .= "SELECT name\n";
$sql .= "         , time\n";
$sql .= "from URIAGE_Goukei/n";
$res = $res = mysqli_query( $lnk , $sql ); //実行
if( $res == false) {
echo "Select Err<br>";
exit;
}

//データ表示
foreach ($res as $row) {
 echo $row['name'] . '/' . $row['time'] . '<br>';
 }
 echo "View Ok<br>";
 
 //MariaDB切断
 mysqli_close( $lnk );
 
?>
