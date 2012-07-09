<h3>Projectos Recentes</h3>
<div class="wrapper">
    <?php
    $i = 0;
    $length = count($projectos) - 1;


    foreach ($projectos as $projecto) {

        $image = $this->html->image(
            "http://admin.biarq.com/img/projectos/grandes/{$projecto->fotoprincipal}",
            array(
                'width' => '139', 'height' => '96',
                'class' => 'border p1'
            ));
        $url = "{$this->site->baseurl()}/projectos/ver/{$this->text->url($projecto->titulo)}/{$projecto->_id}";

        if ($i != $length) {
            echo$this->html->link('<figure>' . $image . '</figure>' .
                        $projecto->titulo, $url,
                array('escape' => false, 'class' => 'prev-indent'));
        } else {
            echo $this->html->link('<figure>' . $image . '</figure>' .
                        $projecto->titulo, $url,
                array('escape' => false, 'class' => 'left'));
        }
        ++$i;
    }
    ?>

</div>