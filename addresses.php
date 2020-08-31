<?php
    include "scripts/addressesSc.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Адреси</title>
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
                                <a class="active" href="#">Адреси</a>
                            </li>
                            <li>
                                <a href="notes.php">Бележки</a>
                            </li>
                        </ul>
                    </nav>
                </header>
                <section>
                    <h2>Адреси</h2>
                    <div class="form">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">
                        <?php 
                            for($i=0;$i<$count;$i++)
                            { ?>
                                <fieldset>
                                    <?php if($count>1)
                                    { ?>
                                        <legend class="legend">Адрес <?php echo $i+1 ?></legend>  
                                    <?php } ?>
                                    <div class="field">
                                        <span>Адрес 1</span>
                                        <input type="text" name="address1[]" value="<?php echo $address1[$i] ?>">
                                        <span class="required">*<?php echo $address1Err[$i] ?></span>
                                    </div>
                                    <div class="field">
                                        <span>Адрес 2</span>
                                        <input type="text" name="address2[]" value="<?php echo $address2[$i] ?>">
                                    </div>
                                    <div class="field">
                                        <span>Пощенски код</span>
                                        <input type="text" name="postCode[]" value="<?php echo $postCode[$i] ?>">
                                        <span class="required">*<?php echo $postCodeErr[$i] ?></span>
                                    </div>
                                    <div class="field">
                                        <span>Населено място</span>
                                        <input type="text" name="populatedPlace[]" value="<?php echo $populatedPlace[$i] ?>">
                                        <span class="required">*<?php echo $populatedPlaceErr[$i] ?></span>
                                    </div>
                                    <div class="field">
                                        <span>Област</span>
                                        <input type="text" name="area[]" value="<?php echo $area[$i] ?>">
                                        <span class="required">*<?php echo $areaErr[$i] ?></span>
                                    </div>
                                    <div class="field">
                                        <span>Държава</span>
                                        <input type="text" name="country[]" value="<?php echo $country[$i] ?>">
                                    </div>  
                                </fieldset>
                            <?php } ?>
                            <div class="submit">
                                <p>Запис и:</p>
                                <input type="submit" name="nextStep" value="Следваща стъпка">
                                <input type="submit" name="extraAddress" value="Допълнителен адрес">
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