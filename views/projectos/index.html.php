<?php $this->title($site->Site_title . '-Projectos'); ?>
<article class="col-1">


    <?php

    foreach ($projectos as $projecto) {

        echo '
                     <div class="wrapper margin-bot">
                <figure class="img-indent"><img src="http://admin.biarq.com/img/projectos/principal/' .
                $projecto->fotoprincipal . '" alt="' . $projecto->titulo . '" width="219 " height="146"/></figure>
                <div class="extra-box">
                    <p class="text-1 p1">
                        ' . $projecto->titulo . '
                    </p>
                    <p>
                        ' . $this->text->character_limiter(strip_tags($projecto->texto), 350) . '
                     </p>
                    <div class="alignright"><a class="button2" href="' . $this->site->baseurl() .
                '/projectos/ver/' . $this->text->url($projecto->titulo) . '/' . $projecto->_id . '"><span><span>ver mais</span></span></a></div>
                </div>
            </div> 
                     ';
    }
    ?>


</article>
