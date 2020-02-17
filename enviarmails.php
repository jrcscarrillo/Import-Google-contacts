<!DOCTYPE html>
<html lang="EN">
    <head>
        <title>Enviar Emails</title>

        <meta charset="UTF-8">

        <!-- All other meta tag here -->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0" >	

        <!-- CSS styles -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">	


    </head>

    <body>

        <?php
        session_start();

        require_once 'vendor/autoload.php'; // or wherever autoload.php is located
        require_once 'SendMail.php'; // or wherever autoload.php is located
        require_once 'google-api-php-client/src/republica/class.database.php'; // or wherever autoload.php is located
        require_once 'google-api-php-client/src/republica/contactos.php'; // or wherever autoload.php is located


        $db = conecta_SYNC();
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        ?>
        <div class="container">
            <div class="row">
                <br><br><br>
                <form action="enviarmails.php" method="post">        
                    <header>Log in</header>
                    <fieldset>
                        <section>
                            <div class="row">
                                <label>E-mail</label>
                                <input type="text" id="archivo" name="archivo" value="" />
                                </label>
                            </div>
                        </section>

                    </fieldset>
                    <footer>
                        <input type="submit" value="Submit" class="btn btn-primary btn-large" />
                </form>
                <br><br><br>


            </div>
        </div>

        <!-- Google CDN's jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>


    </body>
</html>