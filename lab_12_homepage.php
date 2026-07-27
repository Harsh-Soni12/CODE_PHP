<?PHP

session_start();
$user = $_SESSION['name'];
echo"welcome".$user;

session_destroy();

?>