<div id="main" role="main">
<div id="ribbon">

				<span class="ribbon-button-alignment"> 
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
						<i class="fa fa-refresh"></i>
					</span> 
				</span>

				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li>Home</li><li>Assessment</li>
				</ol>
				

  </div>

  		<div class="row">
		  <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
				<h1 class="page-title txt-color-blueDark">
					
					<i class="fa-fw fa fa-pencil-square-o"></i>  
					Pilih jenis Assessment	
					<fieldset>
				<?php echo form_open('supplier/selectAssessment');?>	
				<section class="col col-2">
										<label class="select">
											<select name="jenis_assessment">
												<option value="NULL" selected="" disabled="">Pilih Jenis Assessment ...</option>
												<option value="osp">Outsite Plan</option>
												<option value="forwarding">Forwarding</option>
												<option value="prod_and_trade">Production and Trading</option>
												
											</select> <i></i> </label>
											<input type="submit">
									</section>
						<?php echo form_close();?>
				</fieldset>			

	
				
				</h1>
						
			</div>
		</div>
</div>