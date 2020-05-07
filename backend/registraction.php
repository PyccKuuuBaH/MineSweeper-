<?
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: GET, POST');
    header("Access-Control-Allow-Headers: Content-Type");
    header('Content-Type: application/json;charset=utf-8');
    $mysqli = mysqli_connect("mysql-160578.srv.hoster.ru","srv160578_kosty","123321","srv160578_kosty");
    $mysqli->query("SET NAMES utf8");
    $email = $_POST['gameEntryEmail'];
    $login = $_POST['gameEntryLogin'];
    $password = $_POST['gameEntryPassword'];
    if($email!="" || $login!="" || $password!=""){
        $sql = "INSERT INTO `userAccounts` (`id`, `email`, `login`, `pass`) VALUES (NULL, $email, $login, $password)";
        $mysqli->query($sql);
        echo ("Регистрация прошла успешно. Вы будете перенаправлены на главную страницу сайта");
        echo ('<meta http-equiv="Refresh" content="3; URL=../fork.php">');
    }
    else {
        echo ("Вы заполнили не все нужные строки. Попробуйте ещё раз");
        header("Location: index.php");
    }
?>