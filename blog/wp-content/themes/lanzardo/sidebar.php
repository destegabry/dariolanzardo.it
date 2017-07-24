		<div id="sidebar"><!-- start sidebar -->
			
			<!-- start sidebar item -->
			<div class="sidebar_head">
        <h3>Archivio</h3>
</div>
			<ul>
				<li><a href="/biografia.html">Biografia</a></li>
				<li><a href="/bibliografia.html">Bibliografia</a></li>
			</ul>
			<!-- end sidebar item -->
			<!-- start sidebar item -->
			<div class="sidebar_head"><h3>Attualit&agrave;</h3></div>
			<ul>
				<li><a href="/news-mostre.html">Mostre ed eventi</a></li>
				<li><a href="/blog/">Blog</a></li>
			</ul>
			<!-- end sidebar item -->
			<!-- start sidebar item -->
			<div class="sidebar_head"><h3>Blog</h3></div>
			<ul>
				<li id="archives"><?php _e('Archives:'); ?>
 					<ul>
	 					<?php wp_get_archives('type=monthly'); ?>
 					</ul>
 				</li>
				<?php wp_register(); ?>
				<li><?php wp_loginout(); ?></li>
			</ul>
			<!-- end sidebar item -->
			<!-- start sidebar item -->
			<div class="sidebar_head"><h3>Contatti</h3></div>
			<ul>
				<li><a href="mailto:lildar@libero.it">E-mail</a></li>
				<li> Lungo Po Antonelli 189<br />
10153 Torino </li>
				<li>T. 011-8996583 </li>
				<li>M. 339-6371964</li>
			</ul>
			<!-- end sidebar item -->
			
		</div><!-- end sidebar -->
