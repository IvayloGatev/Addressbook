<?php
    include "scripts/notesSc.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Бележки</title>
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
                                <a class="active" href="#">Бележки</a>
                            </li>
                        </ul>
                    </nav>
                </header>
                <section>
                    <h2>Бележки</h2>
                    <div class="form">
                        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">
                            <?php 
                                for($i=0;$i<$count;$i++)
                                { ?> 
                                    <div class="field">
                                        <p class="legend">
                                            <?php if($count>1)
                                                {
                                                    echo "Бележка ".($i+1);
                                                }
                                                else
                                                {
                                                    echo "Текст на бележката";
                                                } ?>                                      
                                        </p>
                                        <textarea  name="note[]" rows="4" cols="50">
                                            <?php echo $note[$i] ?>
                                        </textarea>                               
                                        <span class="required">*<?php echo $noteErr[$i] ?></span>  
                                    </div>
                                <?php } ?>
                            <div class="submit">
                                <p>Запис и:</p>
                                <input type="submit" name="end" value="Край">
                                <input type="submit" name="extraNote" value="Допълнителен бележка">
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