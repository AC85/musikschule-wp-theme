	
		<footer>
			<?php
				function getChildLinksByTitle($title){
	
					// Get the page as an Object
					$post =  get_page_by_title($title);
					$args = array( 
						'child_of' => $post->ID, 
						'sort_column' => 'menu_order', 
						'sort_order' => 'asc',
						'depth'=> 1
					);
					$mypages = get_pages($args);
	
					//echo '<pre>' . print_r( $mypages, true ) . '</pre>';
					foreach($mypages as $children) {
						echo '<a href="', get_page_link($children->ID),'">', $children->post_title, '</a>', '<br>';
						//echo $children->ID;							
					}				
				}
				
			?>
					<?php
				function getLinkByTitle($title){
	
					// Get the page as an Object
					$post =  get_page_by_title($title);
	
					echo '<a href="', get_page_link($post->ID),'">', $post->post_title, '</a>', '<br>';
						//echo $children->ID;									
				}
				
			?>
			<div  class="container-fluid" class="footer">
				<div class="footer">
					<div class="footer-content">
						<div class="row">
							<div class="col-md-2" align="center">
								<a href="<?php echo home_url(); ?>">
				                	<img id="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png">
				            	</a>
							</div>
							<div class="col-md-2">
								<h3>AKTUELLES</h3>
									<!--<p>Termin</p>
									<p>Archiv</p>-->
									<?php
										getChildLinksByTitle('Verein');
									?>
								<h3>VEREIN</h3>
									<!--<p>Organisation</p>
									<p>Förderer</p>-->
									<?php
										getChildLinksByTitle('Aktuelles');
									?>
							</div>
							
							<div class="col-md-2">
								<h3>ORCHESTER</h3>
									<!--<p>Besetzung</p>
									<p>Dirigent</p>
									<p>Ehemalige Dirigenten</p>
									<p>Presse</p>-->
									<?php
										getChildLinksByTitle('Orchester');
									?>
							</div>
							
							<div class="col-md-2">
								<h3>ANGEBOT</h3>
									<!--<p>Instrumente</p>
									<p>Gesang</p>
									<p>Ensembles</p>
									<p>Elementarausbildung</p>
									<p>Fachübergreifend</p>
									<p>Bläserklasse</p>
									<p>Fächer a-z</p>
									<p>Dozenten a-z</p>
									<p>Förderstufe</p>-->
									<?php
										getChildLinksByTitle('Angebot');
									?>
							</div>
							
							<div class="col-md-2">
								<h3>ANMELDUNG</h3>
									<!--<p>Organisation</p>
									<p>Förderer</p>-->
									<?php
										getChildLinksByTitle('Anmeldung');
									?>
							</div>
							
							<div class="col-md-2">
								<h3>KONTAKT</h3>
									<!--<p>Organisation</p>
									<p>Förderer</p>-->
									<?php
										getLinkByTitle('Organisation');
									?>
									<?php
										getLinkByTitle('Förderer');
									?>
									<?php
										getLinkByTitle('Kontakt');
									?>
							</div>
						</div>
					</div>
					<div class="footer-bottom">
						<p> Folge uns: </p>
						
						<br>
			    		<p>© Hochschule Düsseldorf Entwicklung - 2015</p>
					</div>
				</div>
				
			</div>
		</footer>
		
		
		</body>
		</html>
