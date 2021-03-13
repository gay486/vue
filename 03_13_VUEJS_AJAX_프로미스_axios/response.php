<?
$userId = $_POST['userId'];
$userPw = $_POST['userPw'];
$userEmail = $_POST['userEmail'];


$txt .= $userId;
$txt .= $userPw;
$txt .= $userEmail;


echo $txt;   //다시 리턴  변수 사용시 맨 앞에 $ 표시
?>