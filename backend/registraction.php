<?
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST');
    header("Access-Control-Allow-Headers: Content-Type");
    header('Content-Type: application/json;charset=utf-8');
    $email = $_GET['regEmail'];
    $login = $_GET['regLogin'];
    $password = $_GET["regPassword"];
    $mysqli = mysqli_connect("mysql-160578.srv.hoster.ru","srv160578_kosty","123321","srv160578_kosty");
    $mysqli->query("SET NAMES utf8");
    $sql = "INSERT INTO `userAccounts` (`id`, `email`, `login`, `pass`) VALUES (NULL, '$email', '$login', '$pass')";
    $mysqli->query($sql);
?>
