<?php
    include "scripts/userDataSc.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Лични данни</title>
        <meta charset="UTF-8">
        <link href="./css/style.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    </head>
    <body>
        <div class="mainDiv">
            <article>
                <h1>Добавяне на потребител</h1>
                <header>  
                    <nav>
                        <ul>
                            <li>
                                <a class="active" href="#">Лични данни</a>
                            </li>
                            <li>
                                <a href="addresses.php">Адреси</a>
                            </li>
                            <li>
                                <a href="notes.php">Бележки</a>
                            </li>
                        </ul>
                    </nav>
                </header>
                <section>
                    <h2>Лични данни</h2>
                    <div class="form">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">
                            <div class="field">
                                <span>Собсвено име</span>
                                <input type="text" name="firstName" value="<?php echo $firstName ?>">
                                <span class="required">*<?php echo $firstNameErr; ?></span>
                            </div>
                            <div class="field">
                                <span>Бащино име</span>
                                <input type="text" name="middleName" value="<?php echo $middleName ?>">
                            </div>
                            <div class="field">
                                <span>Фамилия</span>
                                <input type="text" name="lastName" value="<?php echo $lastName ?>">
                                <span class="required">*<?php echo $lastNameErr; ?></span>
                            </div>
                            <div class="field">
                                <span>Потребителско име(login)</span>
                                <input type="text" name="userName" value="<?php echo $userName ?>">
                                <span class="required">*<?php echo $userNameErr; ?></span>
                            </div>
                            <div class="field">
                                <span>Електронна поща</span>
                                <input type="email" name="email" value="<?php echo $email ?>">
                                <span class="required">*<?php echo $emailErr; ?></span>
                            </div>
                            <div class="field">
                                <span>Телефон</span>
                                <input type="tel" name="phone" value="<?php echo $phone ?>">
                            </div>
                            <div class="submit">
                                <input type="submit" name="record" value="Запис">
                            </div>
                        </form>           
                    </div>
                </section>
                <footer>    
                </footer>
            </article>
        </div>
    </body>
</html>



