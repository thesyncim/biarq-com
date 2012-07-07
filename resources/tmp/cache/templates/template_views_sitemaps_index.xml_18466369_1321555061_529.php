<?php foreach($sitemap as $controller => $collections):?>
	<url>
		<loc><?php echo $this->url("{$controller}::index"); ?></loc>
		<lastmod>2005-01-01</lastmod>
		<changefreq>monthly</changefreq>
		<priority>0.8</priority>
	</url>
	<?php foreach($collections as $collection): 
		foreach($collection as $item): ?>
	<url>
		<loc><?php echo 'http://biarq.com/'.$controller.'/ver/'.$item->titulo.'/'.$item->id;?></loc>
		<lastmod><?php echo $h(date('Y-m-d\TH:i:sP', $item->updated)); ?></lastmod>
	</url>
	<?php endforeach; endforeach;?>
<?php endforeach;?>