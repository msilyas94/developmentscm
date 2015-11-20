	<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		<aside id="left-panel">

			<!-- User info -->
			<div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as it --> 
					
					<a href="javascript:void(0);">
						<img src="<?php echo base_url();?>files/user_photos/<?php echo $_SESSION['username'];?>.jpg" alt="me" class="online" /> 
						<span>
						 <?php echo $_SESSION['username'];?>
						</span>
						<i class="fa fa-angle-down"></i>
					</a> 
					
				</span>
			</div>
		
			<nav>
				<ul>
					
					<li class="active">
						<a href="<?php echo base_url();?>home" title="Supplier Dashboard"><i class="fa fa-lg fa-fw fa-dashboard"></i> <span class="menu-item-parent">Dashboard</span></a>
					</li>


					<li class="active">
						<a href="#" title="Supplier List"><i class="fa fa-lg fa-fw fa-user"></i> <span class="menu-item-parent">User Management</span></a>
						<ul>
							<li>
								<a href="<?php echo base_url();?>supplier">Manage User</a>
							</li>


						</ul>

					</li>	

					<li class="active">
						<a href="#" title="Supplier List"><i class="fa fa-lg fa-fw fa-user"></i> <span class="menu-item-parent">Supplier Management</span></a>
						<ul>
							<li>
								<a href="<?php echo base_url();?>supplier">Supplier List</a>
							</li>

							<li>
								<a href="<?php echo base_url();?>supplier/supClass">Klasifikasi Supplier</a>
							</li>

						</ul>

					</li>
					

					

					
	
				</ul>


					
					
	
			</nav>
			

		</aside>
		<!-- END NAVIGATION -->