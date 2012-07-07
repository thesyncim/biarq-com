

<?php foreach ($projectos as $projecto) { ?>

    <item>

        <title><?php echo $h($projecto->titulo); ?></title>
        <description><![CDATA[<p><?php echo $this->text->character_limiter(strip_tags($projecto->texto), 350); ?></p>]]></description>
        <link><?php echo $this->site->baseurl() . '/projectos/ver/' . $this->text->url($projecto->titulo) . '/' . $projecto->_id; ?></link>
        <media:thumbnail url='http://admin.biarq.com/img/projectos/principal/<?php echo $h($projecto->fotoprincipal); ?>' height='146' width='219' />    
        <guid isPermaLink="true"><?php echo $this->site->baseurl() . '/projectos/ver/' . $this->text->url($projecto->titulo) . '/' . $projecto->_id; ?></guid>
        <pubDate><?php echo $h(date(\DateTime::RSS, strtotime($projecto->created));); ?></pubDate>
    </item>
    <?php
}
?>










</article>
