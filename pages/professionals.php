<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1024, initial-scale=1.0, , maximum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Skinsens Dermocosmética</title>
    <link rel="shortcut icon" href="../images/navigation/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../images/navigation/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../styles/normalize.css">
    <link rel="stylesheet" href="../styles/skeleton.css">
    <link rel="stylesheet" href="../styles/style.css">
    <!--<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arima+Madurai" rel="stylesheet">
</head>
<body>
<div class="wrapper">

    <div class="header-all container">
        <div class="header-logo">
            <div class="inner-container">
                <span class="logo">
                    <a href="#">
                        <img src="../images/navigation/full-logo.png" alt="">
                    </a>
                </span>
            </div>
        </div>
        <div class="header-menu">
            <div class="burger">
                <i class="fa fa-bars"></i>
            </div>

            <ul class="menu-items flex-container">
                <li class="general menu-item"><a class="dot" href="../index.html">Inicio</a></li>
                <li class="general menu-item"><a class="dot" href="#">Firmas <i class="fa fa-sort-desc"></i></a>
                    <ul class="menu-items">
                        <li class="menu-item"><a href="#">BABE</a></li>
                        <li class="menu-item"><a href="#">COMODYNES</a></li>
                        <li class="menu-item"><a href="#">dermGO</a></li>
                        <li class="menu-item"><a href="#">FILORGA</a></li>
                        <li class="menu-item"><a href="#">GALÉNIC</a></li>
                        <li class="menu-item"><a href="#">HELIOCARE</a></li>
                        <li class="menu-item"><a href="#">LA ROCHE-POSAY</a></li>
                        <li class="menu-item"><a href="#">LaviGor</a></li>
                        <li class="menu-item"><a href="#">letyAT4</a></li>
                        <li class="menu-item"><a href="#">LIERAC</a></li>
                        <li class="menu-item"><a href="#">NATURA SIBERICA</a></li>
                        <li class="menu-item"><a href="#">one.gen/o.1</a></li>
                        <li class="menu-item"><a href="#">PHYTO</a></li>
                        <li class="menu-item"><a href="#">sesderma</a></li>
                        <li class="menu-item"><a href="#">SINGULADERM</a></li>
                        <li class="menu-item"><a href="#">SVR</a></li>
                        <li class="menu-item"><a href="#">URIAGE</a></li>
                    </ul>
                </li>
                <li class="general menu-item"><a class="dot" href="#">Cursos <i class="fa fa-sort-desc"></i></a>
                    <ul class="menu-items">
                        <li class="menu-item"><a href="professionals.php">Información profesionales</a></li>
                        <li class="menu-item"><a href="about.html">Susana Lopesino</a></li>
                    </ul>
                </li>
                <li class="general menu-item"><a class="dot" href="gallery.html">Galería</a></li>
                <li class="general menu-item"><a class="dot" href="#">En la red <i class="fa fa-sort-desc"></i></a>
                    <ul class="menu-items">
                        <li class="menu-item"><a href="https://www.instagram.com/skinsensdermocosmetica/">Instagram</a>
                        </li>
                        <li class="menu-item"><a href="https://www.facebook.com/SkinsensDermocosmetica/">Facebook</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="cursos container">
        <h1>PARA PROFESIONALES</h1>
        <hr/>
        <p>
            Sabemos que el sell-out es mucho más complicado de lo que a priori puede parecer. La gran variedad
            de firmas, la desconfianza “comprensible “ de nuestros clientes, nuestra falta de conocimiento en
            ocasiones y muy importante LA CARENCIA DE UNA TÉCNICA DE VENTA en dermocosmética, hace
            que muchas veces, mucho producto se nos quede en las estanterías e incluso llegue a caducarse...</p>
        <p> ¿Dónde está el secreto de que unas farmacias o parafarmacias trabajen mejor la dermocosmética que
            otras? Sin duda en la dedicación que a esta familia le deciden prestar. ¿Es importante conocer el
            producto que vendemos? Sin duda la respuesta a esta pregunta es un sí rotundo pero, por qué si
            muchas farmacias cuentan con personal cualificado y en principio preparado no consiguen dar salida al
            producto?...</p>
        <p> La respuesta está en la carencia de técnica de venta y una suma de factores añadidos que
            hay que desarrollar y poner en práctica cada día para que podamos hablar de un comercio de éxito.
            El cliente no quiere saber cuántas carreras o masters tenemos sino que resolvamos sus problemas y
            esto se puede aprender...</p>
        <p> Estamos hablando de cómo identificar a nuestro cliente, cómo debemos
            tratarle según el perfil que muestre, qué lenguaje debemos utilizar etc... Para ello, en Skinsens hemos
            creado unos cursos específicos para el sell-out y el sell-in.</p>
        <p> Ponemos nuestra experiencia a vuestra disposición y realizamos cursos prácticos para desarrollar estas
            técnicas. Si quieres más información rellena el siguiente formulario y nos pondremos en contacto
            contigo en la mayor brevedad.
        </p>
    </div>

    <div class="contact-form container">
        <?php
        $error = ''; // сообщение об ошибке
        $name = ''; // имя отправителя
        $email = ''; // email отправителя
        $subject = 'Skinsens'; // тема
        $message = ''; // сообщение
        $spamcheck = ''; // проверка на спам

        if (isset($_POST['send'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];
            $spamcheck = $_POST['spamcheck'];

            if (trim($name) == '') {
                $error = '<div class="errormsg">Por favor, introduzca tu nombre</div>';
            } else if (trim($email) == '') {
                $error = '<div class="errormsg">¡Por favor, introduzca tu email!</div>';
            } else if (!isEmail($email)) {
                $error = '<div class="errormsg">Has introducido un e-mail incorrecto. ¡Por favor corrígelo!</div>';
            }
            if (trim($subject) == '') {
                $error = '<div class="errormsg">¡Por favor, introduzca un asunto!</div>';
            } else if (trim($message) == '') {
                $error = '<div class="errormsg">¡Por favor, introduzca tu mensaje!</div>';
            } else if (trim($spamcheck) == '') {
                $error = '<div class="errormsg">¡Por favor, introduzca el cheque de Anti Spam!</div>';
            } else if (trim($spamcheck) != '5') {
                $error = '<div class="errormsg">Anti Spam: ¡Has introducido un mal resultado! 2 + 3 = ¿?</div>';
            }
            if ($error == '') {
                if (get_magic_quotes_gpc()) {
                    $message = stripslashes($message);
                }


                // Обязательно укажите здесь Email на который должны приходить письма
                $to = "nikolaypidopryhora@gmail.com";


                // [Сообщение через контактную форму] - тема сообщения - можете поменять на любую.


                $subject = '[Mensaje mandado por formulario] : ' . $subject;

                // сообщение
                $msg = "From : $name \r\ne-Mail : $email \r\nSubject : $subject \r\n\n" . "Message : \r\n$message";

                mail($to, $subject, $msg, "From: $email\r\nReply-To: $email\r\nReturn-Path: $email\r\n");
                ?>

                <!-- Сообщение отправлено! (можете поменять текст)-->
                <div style="text-align:center;">
                    <h1>¡Felicitaciones!</h1>
                    <p>Gracias <b><?= $name; ?></b>, ¡tu mensaje se ha enviado correctamente!</p>
                </div>
                <!--End Message Sent-->


                <?php
            }
        }

        if (!isset($_POST['send']) || $error != '') {
            ?>

            <!--Error Message-->
            <?= $error; ?>

            <form method="post" name="contFrm" id="contFrm" action="">
                <div class="row">
                    <div class="user-name six columns">
                        <label><span class="required">*</span> Nombre:</label>
                        <input name="name" type="text" class="box u-full-width" id="name" size="30" value="<?= $name; ?>"/>
                    </div>
                    <div class="user-email six columns">
                        <label><span class="required">*</span> Email: </label>
                        <input name="email" type="text" class="box u-full-width" id="email" size="30" value="<?= $email; ?>"/>
                    </div>
                </div>
                <label><span class="required">*</span> Mensaje: </label>
                <textarea class="u-full-width" name="message" cols="40" rows="3" id="message"><?= $message; ?></textarea>

                <label class="antispam"><span class="required">*</span> Anti Spam: <br/><b>2 + 3 = </b></label>
                <input name="spamcheck" type="text" class="box" id="spamcheck" size="4"
                       value="<?= $spamcheck; ?>"/><br/><br/>

                <!-- Submit Button-->
                <input name="send" type="submit" class="button" id="send" value="Mandar"/>


            </form>

            <!-- E-mail verification. Do not edit -->
            <?php
        }

        function isEmail($email)
        {
            return (preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i"
                , $email));
        }

        ?>
    </div>
</div>
<script type="text/javascript">

    $(".header-menu .burger").click(function () {
        $("ul").slideToggle();
        $("ul.menu-items ul").css("display", "none");
    });

    $("ul.menu-items li.menu-item").click(function () {
        $("ul.menu-items ul").slideUp();
        $(this).find('ul').slideToggle();
    });

    $(window).resize(function () {
        if ($(window).width() > 768) {
            $("ul").removeAttr('style');
        }
    });

</script>

</body>
</html>
