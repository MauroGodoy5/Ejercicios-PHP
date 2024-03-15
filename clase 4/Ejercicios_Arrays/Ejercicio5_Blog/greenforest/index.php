<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Green Forest  
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20110306

-->

<?php
$Links = array();  
    
$Links = array(  0 => array( 
                                'Link'  =>  "<a href='index.php'>Home</a>"
),
    
					1 => array( 
                                'Link'  	=>  	"<a href='blog.php'>Blog</a>"
),
					2 => array( 
                                'Link'  	=>  	"<a href='photos.php'>Photos</a>"
),
					3 => array( 
                                'Link'  	=>  "<a href='about.php'>About</a>"
),
					4 => array( 
                                'Link'  	=>  "<a href='links.php'>Links</a>"
),
					5 => array( 
                                'Link'  	=>  "<a href='contact.php'>Contact</a>"
)
                );

$CantidadLinks = count($Links);




$Categorias = array();  
    
$Categorias = array(  0 => array( 
                                'Link'  =>  "<a href='categorias.php?id=1'>Aliquam libero</a>"
),
    
					1 => array( 
                                'Link'  	=>  	"<a href='categorias.php?id=2'>Consectetuer adipiscing elit</a>"
),
					2 => array( 
                                'Link'  	=>  	"<a href='categorias.php?id=3'>Metus aliquam pellentesque</a>"
),
					3 => array( 
                                'Link'  	=>  "<a href='categorias.php?id=4'>Suspendisse iaculis mauris</a>"
),
					4 => array( 
                                'Link'  	=>  "<a href='categorias.php?id=5'>Urnanet non molestie semper</a>"
),
					5 => array( 
                                'Link'  	=>  "<a href='categorias.php?id=6'>Proin gravida orci porttitor</a>"
)
                );

				$CantidadCategorias = count($Categorias);




				$Blogroll = array();  
    
$Blogroll = array(  0 => array( 
                                'Link'  =>  "<a href='blogroll.php?id=1'>Aliquam libero</a>"
),
    
					1 => array( 
                                'Link'  	=>  	"<a href='blogroll.php?id=2'>Consectetuer adipiscing elit</a>"
),
					2 => array( 
                                'Link'  	=>  	"<a href='blogroll.php?id=3'>Metus aliquam pellentesque</a>"
),
					3 => array( 
                                'Link'  	=>  "<a href='blogroll.php?id=4'>Suspendisse iaculis mauris</a>"
),
					4 => array( 
                                'Link'  	=>  "<a href='blogroll.php?id=5'>Urnanet non molestie semper</a>"
),
					5 => array( 
                                'Link'  	=>  "<a href='blogroll.php?id=6'>Proin gravida orci porttitor</a>"
)
                );

				$CantidadBlogroll = count($Blogroll);



				$Archives = array();  
    
$Archives = array(  0 => array( 
                                'Link'  =>  "<a href='archives.php?id=1'>Aliquam libero</a>"
),
    
					1 => array( 
                                'Link'  	=>  	"<a href='archives.php?id=2'>Consectetuer adipiscing elit</a>"
),
					2 => array( 
                                'Link'  	=>  	"<a href='archives.php?id=3'>Metus aliquam pellentesque</a>"
),
					3 => array( 
                                'Link'  	=>  "<a href='archives.php?id=4'>Suspendisse iaculis mauris</a>"
),
					4 => array( 
                                'Link'  	=>  "<a href='archives.php?id=5'>Urnanet non molestie semper</a>"
),
					5 => array( 
                                'Link'  	=>  "<a href='archives.php?id=6'>Proin gravida orci porttitor</a>"
)
                );

				$CantidadArchives = count($Archives);



				
$Titulos = array();  
    
$Titulos = array(  0 => array( 'Titulo'    =>  "<h2 class='title'><a href='#'>Titulo articulo 1  </a></h2>",
                                'Fecha'  =>  "<p class='meta'><span class='date'>24 Mayo 2020</span>",
                                'Autor' =>  "<span class='posted'>Posted by <a href='#'>Admin</a></span></p>",
                                'Contenido'     =>  "<div style='clear: both;'>&nbsp;</div>
								<div class='entry'>
									<p>This is <strong>Green Forest  </strong>, a free, fully standards-compliant CSS template designed by FreeCssTemplates<a href='http://www.nodethirtythree.com/'></a> for <a href='http://www.freecsstemplates.org/'>Free CSS Templates</a>.  This free template is released under a <a href='http://creativecommons.org/licenses/by/2.5/'>Creative Commons Attributions 2.5</a> license, so you’re pretty much free to do whatever you want with it (even use it commercially) provided you keep the links in the footer intact. Aside from that, have fun with it :)</p>
									<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem.</p>",
								'Link'    =>  "<p class='links'><a href='articulo.php?id=1'>Leer mas...</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href='#'>comentarios (20)</a></p>"),
    
                    1 => array('Titulo'    =>  "<h2 class='title'><a href='#'>Titulo articulo 2  </a></h2>",
					'Fecha'  =>  "<p class='meta'><span class='date'>25 Mayo 2020</span>",
					'Autor' =>  "<span class='posted'>Posted by <a href='#'>Admin</a></span></p>",
					'Contenido'     =>  "<div style='clear: both;'>&nbsp;</div>
					<div class='entry'>
						<p>This is <strong>Green Forest  </strong>, a free, fully standards-compliant CSS template designed by FreeCssTemplates<a href='http://www.nodethirtythree.com/'></a> for <a href='http://www.freecsstemplates.org/'>Free CSS Templates</a>.  This free template is released under a <a href='http://creativecommons.org/licenses/by/2.5/'>Creative Commons Attributions 2.5</a> license, so you’re pretty much free to do whatever you want with it (even use it commercially) provided you keep the links in the footer intact. Aside from that, have fun with it :)</p>
						<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem.</p>",
					'Link'    =>  "<p class='links'><a href='articulo.php?id=1'>Leer mas...</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href='#'>comentarios (60)</a></p>"),

                    2 => array( 'Titulo'    =>  "<h2 class='title'><a href='#'>Titulo articulo 3  </a></h2>",
					'Fecha'  =>  "<p class='meta'><span class='date'>26 Mayo 2020</span>",
					'Autor' =>  "<span class='posted'>Posted by <a href='#'>Admin</a></span></p>",
					'Contenido'     =>  "<div style='clear: both;'>&nbsp;</div>
					<div class='entry'>
						<p>This is <strong>Green Forest  </strong>, a free, fully standards-compliant CSS template designed by FreeCssTemplates<a href='http://www.nodethirtythree.com/'></a> for <a href='http://www.freecsstemplates.org/'>Free CSS Templates</a>.  This free template is released under a <a href='http://creativecommons.org/licenses/by/2.5/'>Creative Commons Attributions 2.5</a> license, so you’re pretty much free to do whatever you want with it (even use it commercially) provided you keep the links in the footer intact. Aside from that, have fun with it :)</p>
						<p>Sed lacus. Donec lectus. Nullam pretium nibh ut turpis. Nam bibendum. In nulla tortor, elementum ipsum. Proin imperdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in felis. Donec ut ante. In id eros. Suspendisse lacus turpis, cursus egestas at sem.</p>",
					'Link'    =>  "<p class='links'><a href='articulo.php?id=1'>Leer mas...</a>&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;<a href='#'>comentarios (10)</a></p>")
                );

$CantidadTitulos = count($Titulos);
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html" />
<title>Ejercicio 5 - Arrays multidimensionales</title>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="wrapper">
	<div id="menu">
		
		<?php
                                for ($i = 0; $i < $CantidadLinks; $i++) {
                                    ?>
                                    <ul>
                                        
                                        
                                        <li ><?php echo $Links[$i]['Link']; ?></li>
                                        
                                        
									</ul>
                                <?php }; //fin del FOR ?>
		
	</div>
	<!-- end #menu -->
	<div id="header">
		<div id="logo">
			<h1><a href="#">Ejercicio 5</a></h1>
			<p> design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a></p>
		</div>
	</div>
	<!-- end #header -->
	<div id="page">
	<div id="page-bgtop">
	<div id="page-bgbtm">
		<div id="content">
			<div class="post">
			<?php
                                for ($i = 0; $i < $CantidadTitulos; $i++) {
                                    ?>
                                    <div class="post">
									<?php echo $Titulos[$i]['Titulo']; ?>
                                        <?php echo $Titulos[$i]['Fecha']; ?>
                                        <?php echo $Titulos[$i]['Autor']; ?>
                                        <?php echo $Titulos[$i]['Contenido']; ?>
                                        <?php echo $Titulos[$i]['Link']; ?>


									</div>
                                <?php }; //fin del FOR ?>
			</div>
		<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				<li>
					<div id="search" >
					<form method="get" action="#">
						<div>
							<input type="text" name="s" id="search-text" value="" />
							<input type="submit" id="search-submit" value="GO" />
						</div>
					</form>
					</div>
					<div style="clear: both;">&nbsp;</div>
				</li>
				<li>
					<h2>Aliquam tempus</h2>
					<p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper consectetuer hendrerit.</p>
				</li>
				<li>
					<h2>Categories</h2>
					<ul>
					<?php
                                for ($i = 0; $i < $CantidadCategorias; $i++) {
                                    ?>
                                    <ul>
                                        
                                        
                                        <li ><?php echo $Categorias[$i]['Link']; ?></li>
                                        
                                        
									</ul>
                                <?php }; //fin del FOR ?>
					</ul>
				</li>
				<li>
					<h2>Blogroll</h2>
					<?php
                                for ($i = 0; $i < $CantidadBlogroll; $i++) {
                                    ?>
                                    <ul>
                                        
                                        
                                        <li ><?php echo $Blogroll[$i]['Link']; ?></li>
                                        
                                        
									</ul>
                                <?php }; //fin del FOR ?>
				</li>
				<li>
					<h2>Archives</h2>
					<?php
                                for ($i = 0; $i < $CantidadArchives; $i++) {
                                    ?>
                                    <ul>
                                        
                                        
                                        <li ><?php echo $Archives[$i]['Link']; ?></li>
                                        
                                        
									</ul>
                                <?php }; //fin del FOR ?>
				</li>
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	</div>
	</div>
	<!-- end #page -->
</div>
	<div id="footer">
		<p>Copyright (c) 2020 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
	</div>
	<!-- end #footer -->
<div style="text-align: center; font-size: 0.75em;">Design downloaded from <a href="http://www.freewebtemplates.com/">free website templates</a>.</div></body>
</html>
