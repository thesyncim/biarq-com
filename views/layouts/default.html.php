<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php echo $this->title(); ?></title>
    <meta name="keywords" content="<?=$site->Keywords?>" />
    <meta name="google-site-verification" content="nom9N26INS1rT1oc4T4Ls-qhBVPHfNMP9VWM8HX6dAQ" />
    <?php echo $this->html->charset();?>


    <?php echo $this->html->style(array('reset', 'style', 'layout'));?>
    <?php echo $this->html->script(array('jquery-1.4.2.min')); ?>



    <!--[if lt IE 7]>
    <?php echo $this->html->style('ie/ie6'); ?>
    <?php echo $this->html->script('ie_png'); ?>


    <script type="text/javascript">
        ie_png.fix('.png, .box, .box2');
    </script>
    <![endif]-->
    <!--[if lt IE 9]>
    <?php echo $this->html->script('html5'); ?>
    <![endif]-->
</head>
<body id="page1">
<div class="bg">
    <div class="main">
        <!--==============================header=================================-->
        <header>
            <div class="row-1">

            </div>
            <div class="row-2">
                <div class="wrapper">
                    <h1><a class="logo" href="<?= $this->site->baseurl(); ?>">Biarq</a></h1>
                </div>
            </div>
            <div class="box-menu">
                <div class="corner-left">
                    <div class="corner-right">
                        <nav class="wrapper">

                            <?= $this->_render('element', 'menu'); ?>

                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!--==============================content================================-->
        <section id="content">
            <div class="wrapper">


                <?php echo $this->content(); ?>



                <article class="col-2">
                    <div class="box">
                        <div class="padding">
                            <h3 class="title">Areas de Competencia</h3>

                            <div class="box2 prev-indent-bot">
                                <div class="padding">
                                    <ul class="list-1">
                                        <li><a href="#">Arquitectura </a></li>
                                        <li><a href="#">Projectos S.C.I.E. </a></li>
                                        <li><a href="#">Licenciamentos </a></li>
                                        <li><a href="#">Modelação 3D </a></li>
                                        <li><a href="#">Arquitecura de interiores </a></li>
                                        <li><a href="#">Direcções Técnicas</a></li>
                                        <li><a href="#">Reconstruções</a></li>
                                        <li><a href="#">Levantamentos Topograficos</a></li>
                                        <li><a href="#">Serviços de Consultoria</a></li>
                                        <li><a href="#">Projecto comportamento térmico</a></li>
                                        <li class="last-item"><a href="#">Legalizacoes </a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="box3">
                                <div class="padding">
                                    <p class="p2">Solicite o seu orçamento de forma gratuita e sem
                                                  Compromisso... <br />
                                        <span class="reg color-1">Biarq</span>
                                    </p>

                                    <form id="form-main"
                                            action="<?=$this->site->baseurl()?>/pagina/enviarmail"
                                            method="post">
                                        <fieldset>
                                            <label>
                                                <span class="text-form1">E-mail:</span><input name="email"
                                                    type="email" />
                                            </label>
                                            <label>
                                                <span class="text-form1">Telemóvel:</span><input
                                                    name="telemovel"
                                                    type="text" />
                                            </label>
                                            <label>
                                                <span class="text-form1">Nome:</span><input name="nome"
                                                    type="text" />
                                            </label>


                                            <span class="text-form1">Assunto:</span><textarea name="texto"></textarea>


                                            <div class="clear"></div>
                                            <label>
                                                <input type="submit"
                                                        class="submit3"
                                                        value="Enviar"
                                                        name="enviar" />
                                            </label>

                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </div>
    <!--==============================footer=================================-->
    <footer>

        <div class="main">
            <div class="padding">
                <a class="logo2 fright"
                        href="<?= $this->site->baseurl(); ?>"><img src="<?= $this->site->baseurl(); ?>/img/logo2.png"
                        alt=""
                        width="150" /></a>
                Copyright (c) 2012 biarq. All rights reserved. Designed by biarq
                <span>Tel: +351.960021911</span><br />

                <!-- {%FOOTER_LINK} -->
            </div>
        </div>
    </footer>
</div>


</body>

</html>



<script type="text/javascript">

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-27044882-1']);
    _gaq.push(['_trackPageview']);

    (function () {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
                '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>


