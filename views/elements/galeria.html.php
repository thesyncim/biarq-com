<div class="box6 png p2">
    <div class="padding">
        <div class="flash-2">
            <div id="head">


                <div id='coin-slider'>
                    <?php
                    
                    foreach ($galeria->foto as $foto) {
                      
                        echo    '<a href="" target="#">
                                <img src="http://admin.biarq.com/img/projectos/galeria/'.$foto.'">
                                </a>';
                    }
                    ?>
                   
                </div>
                <span style="color:#fff;"><strong>
                        <?php echo $galeria->texto; ?>
                       <br><br></strong>
                </span>
            </div>
        </div>

    </div>
</div>