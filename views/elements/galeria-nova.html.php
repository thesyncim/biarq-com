<?php echo $this->html->style(array('diapo')); ?>
<!--'diapo/jquery.mobile-1.0rc2.customized.min',-->
<?php echo $this->html->script(array(
    'diapo/jquery.easing.1.3',
    'diapo/jquery.hoverIntent.minified',
    'diapo/diapo.min'
)); ?>
<script>
    $(function () {
        $('.pix_diapo').diapo();
    });

</script>


<div class="box6 png p2">
    <div class="padding">
        <div class="flash-2">
            <div id="head">

                <div class="pix_diapo">

                    <?php

                    foreach ($galeria->foto as $foto) {
                        $fotoUrl = 'http://admin.biarq.com/img/projectos/galeria/' . $foto;

                        echo'<div data-thumb="http://admin.biarq.com/img/projectos/galeria/' .
                                $foto . '">' . $this->html->image($fotoUrl) . '
                        
                    </div>';
                    }
                    ?>


                </div>
                <div class="clear" />
            </div>
            <span style="color:#fff;"><strong>
                <?php echo $galeria->texto; ?>
                <br><br></strong>
                </span>
        </div>
    </div>

</div>
</div>