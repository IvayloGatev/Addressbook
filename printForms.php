<?php
    include "scripts/recordDataSc.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Запис на данните</title>
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
                                <a href="index.php">Лични данни</a>
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
                    <h2>Запис на данните за потребителя в MYSQL БД</h2>
                    <p class="message">Следната информация беше успешно записана в MYSQL:</p>
                    <div class="print">
                        <h3>Лични данни</h3>
                        <div class="datasheet">
                            <div class="data">
                                <span>Собствено име</span>
                                <span class="userData"><?php echo $firstName ?></span>
                            </div>
                            <div class="data">
                                <?php if(!empty($middleName))
                                { ?>
                                <span>Бащино име</span>
                                <span class="userData"><?php echo $middleName ?></span>
                                <?php } ?>     
                            </div>
                            <div class="data">
                                <span>Фамилия</span>
                                <span class="userData"><?php echo $lastName ?></span>
                            </div>
                            <div class="data">
                                <span class="heading">Потребителско име(login)</span>
                                <span class="userData"><?php echo $userName ?></span>
                            </div>
                            <div class="data">
                                <span>Електронна поща</span>
                                <span class="userData"><?php echo $email ?></span>
                            </div>
                            <div class="data">
                                <?php if(!empty($phone))
                                { ?>
                                <span>Телефон</span>
                                <span class="userData"><?php echo $phone ?></span>
                                <?php } ?>
                            </div>
                        </div>
                        <h3>Адреси</h3>
                        <div class="datasheet">
                            <?php 
                                for($i=0;$i<$addressCount;$i++)
                                { ?>
                                    <div class="address">
                                        <p class="addressLine"><?php echo $address1[$i] ?></p>
                                        <?php if(!empty($address2[$i]))
                                        { ?>
                                            <p class="addressLine"><?php echo $address2[$i] ?></p>
                                        <?php } ?>     
                                        <p class="addressLine"><?php echo $postCode[$i] ?></p>
                                        <p class="addressLine"><?php echo $populatedPlace[$i] ?></p>
                                        <p class="addressLine"><?php echo $area[$i] ?></p>
                                        <?php if(!empty($country[$i]))
                                        { ?>
                                            <p class="addressLine"><?php echo $country[$i] ?></p>
                                        <?php } ?>
                                    </div>
                                <?php } ?>
                        </div>
                        <h3>Бележки</h3>
                        <div class="datasheet">
                             <?php 
                                for($i=0;$i<$noteCount;$i++)
                                { ?>
                                    <div class="note">
                                        <?php echo $note[$i] ?>     
                                    </div>
                                <?php } ?>
                        </div>
                    </div>                
                </section>
                <footer>               
                </footer>
            </article>
        </div>
    </body>
</html>