<?php foreach ($projectos as $projecto) { ?>

<item>

    <title><?= $projecto->titulo; ?></title>
    <description><![CDATA[<p><?= $this->text->character_limiter(strip_tags($projecto->texto),
        350) ?></p>]]>
    </description>
    <link><?=
        $this->site->baseurl() . '/projectos/ver/' . $this->text->url($projecto->titulo) . '/' .
                $projecto->_id; ?></link>
    <media:thumbnail url='http://admin.biarq.com/img/projectos/principal/<?= $projecto->fotoprincipal ?>'
            height='146'
            width='219' />
    <guid isPermaLink="true"><?php echo
            $this->site->baseurl() . '/projectos/ver/' . $this->text->url($projecto->titulo) . '/' .
            $projecto->_id; ?></guid>
    <pubDate><?= date(\DateTime::RSS, strtotime($projecto->created));
        ; ?></pubDate>
</item>
<?php
}
?>










</article>
