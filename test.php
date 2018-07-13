<?
// заменить на реальные
$host = "localhost";
$user = "admin";
$password = "admin_password";

$db_Conn = @mysql_pconnect($host, $user, $password);
if (!$db_Conn)
{
    echo "Не соединяется...<br>";
}
else
{
    echo "Соединилось!<br>";
}
?>