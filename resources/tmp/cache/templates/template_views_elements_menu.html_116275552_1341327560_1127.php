<ul class="menu">
    <li><a <?php if(($this->_request->action=='index') &&($this->_request->controller=='pagina' ))echo ' class="active" '; ?> href="<?php echo $this->site->baseurl(); ?>">Home </a></li>
    <li><a <?php if($this->_request->controller=='projectos')echo ' class="active" '; ?>href = "<?php echo $this->site->baseurl(); ?>/projectos">Portfólio </a></li>
    
        <?php
    
    foreach ($menus as $menu) {
        $add=array();
        if(isset($this->_request->args[0]) && $this->_request->args[0]==$menu->titulo){
            $add= array('class'=>'active');
        }
	    $url = $this->site->baseurl() . '/pagina/ver/' . $menu->titulo . '/' . $menu->_id;

	    echo '<li>'.$this->html->link($menu->titulo,$url,$add).'</li>';

    }
    ?>
    
</ul>
<ul class="sub-menu">
        
    <li><a href="http://www.facebook.com/profile.php?id=100002020123379"><img src="<?php echo $this->site->baseurl(); ?>/img/pict-1.jpg" alt="Página Facebook"/></a></li>
   
    <li><a href="<?php echo $this->site->baseurl(); ?>/projectos/index.rss"><img src="<?php echo $this->site->baseurl(); ?>/img/pict-3.jpg" alt="RSS"/></a></li>

</ul>