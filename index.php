<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="Pictures/condition/icon.ico" type="image/x-icon">
    <meta name="keywords" content="Сапёр, игра, мины, взрыв, флажки, карты">
    <title>test</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div id="logo"><img src="Pictures/лого.png"></div>
        <div id="menu">
            <div class="class">Главная</div>
            <div class="class">Статистика</div>
            <div class="class">О нас</div>
        </div>
    </header>
    <main>
        <div class="prelude">
            <form class="gameRegistration" action="backend/registraction.php" method="POST">   
                <p>Ваш e.mail:</p><input type="email" class="realm" name="gameEntryEmail" placeholder="ваш e.mail:">
                <p>Ваш логин:</p><input type="text" class="realm" name="gameEntryLogin" placeholder="ваш логин:">
                <p>Ваш пароль:</p><input type="password" class="realm" name="gameEntryPassword" placeholder="ваш пароль:">
                <div id="fork">
                    <input type="submit" name="registration" value="Регистрация" onclick="startRegistration()" id="button">
                    <input type="submit" name="authorization" value="Авторизация" onclick="startAuthorization()" id="button">
                </div>
            </form>
        </div>
    </main>
</body>
<script>
    async function startRegistration() {
        let post = document.getElementById("gameEntryEmail").value;
        let login = document.getElementById("gameEntryLogin").value;
        let password = document.getElementById("gameEntryPassword").value;
        let r = await fetch("https://backend/registraction.php?"+"gameEntryEmail="+post+"&&gameEntryLogin="+login+"&&gameEntryPassword="+password);
        a = (await r.text());
    }
</script>
</html>