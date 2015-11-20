<div id="main" role="main">
	<div id="ribbon">

				<span class="ribbon-button-alignment"> 
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
						<i class="fa fa-refresh"></i>
					</span> 
				</span>

				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li>Home</li><li>Klasifikasi Mitra</li>
				</ol>
	</div>
	
	<!-- NEW WIDGET START -->
						
				
							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget jarviswidget-color-blue" id="wid-id-1" data-widget-editbutton="false">
								

								<header>
									<span class="widget-icon"> <i class="fa fa-sitemap"></i> </span>
									<h2>Klasifikasi Mitra </h2>
				
								</header>
				
								<!-- widget div-->
								
								<div>
				
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
				
									</div>
									<!-- end widget edit box -->
				
									<!-- widget content -->
									<div class="widget-body">
				
										<div class="tree smart-form">
											<ul>
													<?php  $i = 0;
														foreach($parent->result() as $row)
														{
															$id = $row->id_class;

													?>	
												<li>
													<span><i class="fa fa-lg fa-folder-open"></i><?php  echo $row->nama;?></span>
													<ul><!-- level 1-->
														<?php  $j = 0;
															foreach($child1->result() as $row)
															{
																$p1 = $row->parent;
																$id1 =$row->id_class; 
																if($p1 == $id){
                    								   		?>	
														<li>
															<span><i class="fa fa-lg fa-minus-circle"></i><?php echo $row->nama;?></span>

															<ul> <?php 
																	foreach($child2->result() as $row)
																	{
																	$p2 = $row->parent;
																	$id2 = $row->id_class;
																	if($p2 == $id1){
																	?>

																
																<li>
								 									<span><i class="fa fa-lg fa-plus-circle"></i><?php echo $row->nama;?></span>
																	<ul>

																		<?php 
																		foreach ($child3->result() as $row)
																		{
																		$p3 = $row->parent;
																		$id3 = $row->id_class; 
																		if($p3 ==$id2 ){
																		?>
																		<li style="display:none">
																			<span><i class="fa fa-lg fa-plus-circle"></i> <?php echo $row->nama;?></span>
																			<ul>
																					<?php 
																						foreach ($child4->result() as $row)
																						{
																						$p4 = $row->parent;
																						$id4 = $row->id_class; 
																						if ($p4 ==$id3 ){
																						?>
																				<li style="display:none">
																					<span><i class="icon-leaf"></i> <?php echo $row->nama;?></span>
																				<?php }?>
																				</li>
			
																				<?php }?>																	
																			</ul>
																			<?php }?>
																		</li>
																		
																		<?php }?>
																	</ul>
																	<?php }?>
																</li>
																<?php }?>
															</ul>
														<?php }?>
														</li>
														
														<?php }?>
													</ul>
													
												</li>
												<?php }?>
												
											</ul>
										</div>
				
									</div>
									<!-- end widget content -->
				
								</div>
								<!-- end widget div -->
				
							</div>
							<!-- end widget -->
				
						

</div>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


		


<script type="text/javascript">
		
		// DO NOT REMOVE : GLOBAL FUNCTIONS!
		
		$(document).ready(function() {
			
			pageSetUp();
			
			// PAGE RELATED SCRIPTS
		
			$('.tree > ul').attr('role', 'tree').find('ul').attr('role', 'group');
			$('.tree').find('li:has(ul)').addClass('parent_li').attr('role', 'treeitem').find(' > span').attr('title', 'Collapse this branch').on('click', function(e) {
				var children = $(this).parent('li.parent_li').find(' > ul > li');
				if (children.is(':visible')) {
					children.hide('fast');
					$(this).attr('title', 'Expand this branch').find(' > i').removeClass().addClass('fa fa-lg fa-plus-circle');
				} else {
					children.show('fast');
					$(this).attr('title', 'Collapse this branch').find(' > i').removeClass().addClass('fa fa-lg fa-minus-circle');
				}
				e.stopPropagation();
			});			
		
		})

		</script>

		<!-- Your GOOGLE ANALYTICS CODE Below -->
		<script type="text/javascript">
			var _gaq = _gaq || [];
				_gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
				_gaq.push(['_trackPageview']);
			
			(function() {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
			})();

		</script>


