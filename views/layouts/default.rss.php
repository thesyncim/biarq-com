<?php
/**
 * Lithium: the most rad php framework
 *
 * @copyright     Copyright 2011, Union of RAD (http://union-of-rad.org)
 * @license       http://opensource.org/licenses/bsd-license.php The BSD License
 */
?>
<?php echo '<?xml version="1.0" encoding="UTF-8" ?>'; ?>
    <rss version="2.0">
        <channel>
            <title>Biarq.com</title>
            <description>Atelier de arquitectura e engenharia</description>
            <link>http://biarq.com/</link>
            <lastBuildDate><?= date( \DateTime::RSS,time()); ?></lastBuildDate>
            <pubDate><?= date( \DateTime::RSS,time()); ?> </pubDate>
            <?= $this->content(); ?>
        </channel>
    </rss>