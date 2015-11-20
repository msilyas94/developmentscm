
<div id="main" role="main">
  <div id="ribbon">

				<span class="ribbon-button-alignment"> 
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
						<i class="fa fa-refresh"></i>
					</span> 
				</span>

				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li>Home</li><li><?php echo $bc;?></li>
				</ol>
				

  </div>
 <div id="content">

  	<!-- RIBBON -->
			
			<!-- END RIBBON -->

			


			<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-1" data-widget-editbutton="false">
							
								<header>
									<span class="widget-icon"> <i class="fa fa-table"></i> </span>
									<h2>Column Filters </h2>
				
								</header>
				
								<!-- widget div-->
								<div>
				
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
				
									</div>
									<!-- end widget edit box -->
				
									<!-- widget content -->
									<div class="widget-body no-padding">
				
										<table id="datatable_fixed_column" class="table table-striped table-bordered" width="100%">
					
									        <thead>
												<tr>
													<th class="hasinput" style="width:10%">
														<input type="text" class="form-control" placeholder="Supplier ID" />
													</th>

													<th class="hasinput" style="width:12%">
														<input type="text" class="form-control" placeholder="Supplier Name" />
													</th>
													

													<th class="hasinput" style="width:15%">
														<input type="text" class="form-control" placeholder="Alamat" />
													</th>
													<th class="hasinput" style="width:10%">
														<input type="text" class="form-control" placeholder="Kota" />
													</th>

													<th class="hasinput" style="width:10%">
														<input type="text" class="form-control" placeholder="Telepon" />
													</th>
													<!-- <th class="hasinput icon-addon">
														<input id="dateselect_filter" type="text" placeholder="Filter Date" class="form-control datepicker" data-dateformat="yy/mm/dd">
														<label for="dateselect_filter" class="glyphicon glyphicon-calendar no-margin padding-top-15" rel="tooltip" title="" data-original-title="Filter Date"></label>
													</th> UNTUK TANGGAL-->
													<th class="hasinput" style="width:16%">
														<input type="text" class="form-control" placeholder="Email" />
													</th>
													<th >
														
													</th>
													<th class="hasinput" style="width:12%">
														<form action="<?php echo base_url();?>index.php/supplier/viewAdd">
    														<button type="submit" class="btn btn-success">Add New Supplier <i class="fa fa-plus"></i></button>
														</form>
													</th>
												</tr>
									            <tr>
								                    <th>Supplier ID</th>
								                    <th>Nama Supplier</th>
								                    <th>Alamat</th>
								                    <th>Kota</th>
								                    <th>Telepon</th>
								                    <th>Email</th>
								                    <th>action     </th>
								                    <th>Assessment Status</th>
									            </tr>
									        </thead>
				
									        <tbody>
									        	<?php foreach($supplier->result() as $row){?>
									            <tr>

									                <td><?php echo $row->supplier_id;?></td>
									                <td><?php echo $row->supname;?></td>
									                <td><?php echo $row->address;?></td>
									                <td><?php echo $row->city;?></td>
									                <td><?php echo $row->phone;?></td>
									                <td><?php echo $row->email;?></td>
									                
									                <td>
														<a href="supplier/viewDetail/<?php echo $row->supplier_id;?>"><i class="fa fa-eye"></i>  (view)</a> 
														<br>
									                	<a href=""><i class="fa fa-pencil"></i>  (Edit)</a> 
									                	<br> 
									                	<a href=""><i class="fa fa-trash-o"></i>  (Delete)</a> 
									                
									                	
									                </td>
									                <td>
									                <?php if ($row->is_assessment == 0){?>
									           			<a href="supplier/doAssessment/<?php echo $row->supplier_id;?>"><i class="fa fa-search"></i>  (Assessment)</a> 
									                	<?php }else {echo "<i><strong>Supplier ini telah di Assessment</strong></i>";}?>
									                </td>
									            </tr>
												<?php }?>
									            
									           
									        </tbody>
									
										</table>
				
									</div>
									<!-- end widget content -->
				
								</div>
								<!-- end widget div -->
				
							</div>
							<!-- end widget -->
				
  </div>
</div>


		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
		<script data-pace-options='{ "restartOnRequestAfter": true }' src="<?php echo base_url();?>assets/js/plugin/pace/pace.min.js"></script>

		<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script>
			if (!window.jQuery) {
				document.write('<script src="<?php echo base_url();?>assets/js/libs/jquery-2.1.1.min.js"><\/script>');
			}
		</script>

		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script>
			if (!window.jQuery.ui) {
				document.write('<script src="<?php echo base_url();?>assets/js/libs/jquery-ui-1.10.3.min.js"><\/script>');
			}
		</script>

		<!-- IMPORTANT: APP CONFIG -->
		

		<!--[if IE 8]>

		<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

		<![endif]-->

		<!-- Demo purpose only -->
		

	

		<!-- PAGE RELATED PLUGIN(S) -->
		<script src="<?php echo base_url();?>assets/js/plugin/datatables/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/plugin/datatables/dataTables.colVis.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/plugin/datatables/dataTables.tableTools.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/plugin/datatables/dataTables.bootstrap.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/plugin/datatable-responsive/datatables.responsive.min.js"></script>

		<script type="text/javascript">
		
		// DO NOT REMOVE : GLOBAL FUNCTIONS!
		
		$(document).ready(function() {
			
			pageSetUp();
			
			/* // DOM Position key index //
		
			l - Length changing (dropdown)
			f - Filtering input (search)
			t - The Table! (datatable)
			i - Information (records)
			p - Pagination (paging)
			r - pRocessing 
			< and > - div elements
			<"#id" and > - div with an id
			<"class" and > - div with a class
			<"#id.class" and > - div with an id and class
			
			Also see: http://legacy.datatables.net/usage/features
			*/	
	
			/* BASIC ;*/
				var responsiveHelper_dt_basic = undefined;
				var responsiveHelper_datatable_fixed_column = undefined;
				var responsiveHelper_datatable_col_reorder = undefined;
				var responsiveHelper_datatable_tabletools = undefined;
				
				var breakpointDefinition = {
					tablet : 1024,
					phone : 480
				};
	
				$('#dt_basic').dataTable({
					"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>"+
						"t"+
						"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
					"autoWidth" : true,
					"preDrawCallback" : function() {
						// Initialize the responsive datatables helper once.
						if (!responsiveHelper_dt_basic) {
							responsiveHelper_dt_basic = new ResponsiveDatatablesHelper($('#dt_basic'), breakpointDefinition);
						}
					},
					"rowCallback" : function(nRow) {
						responsiveHelper_dt_basic.createExpandIcon(nRow);
					},
					"drawCallback" : function(oSettings) {
						responsiveHelper_dt_basic.respond();
					}
				});
	
			/* END BASIC */
			
			/* COLUMN FILTER  */
		    var otable = $('#datatable_fixed_column').DataTable({
		    	//"bFilter": false,
		    	//"bInfo": false,
		    	//"bLengthChange": false
		    	//"bAutoWidth": false,
		    	//"bPaginate": false,
		    	//"bStateSave": true // saves sort state using localStorage
				"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6 hidden-xs'f><'col-sm-6 col-xs-12 hidden-xs'<'toolbar'>>r>"+
						"t"+
						"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
				"autoWidth" : true,
				"preDrawCallback" : function() {
					// Initialize the responsive datatables helper once.
					if (!responsiveHelper_datatable_fixed_column) {
						responsiveHelper_datatable_fixed_column = new ResponsiveDatatablesHelper($('#datatable_fixed_column'), breakpointDefinition);
					}
				},
				"rowCallback" : function(nRow) {
					responsiveHelper_datatable_fixed_column.createExpandIcon(nRow);
				},
				"drawCallback" : function(oSettings) {
					responsiveHelper_datatable_fixed_column.respond();
				}		
			
		    });
		    
		    // custom toolbar
		    $("div.toolbar").html('<div class="text-right"></div>');
		    	   
		    // Apply the filter
		    $("#datatable_fixed_column thead th input[type=text]").on( 'keyup change', function () {
		    	
		        otable
		            .column( $(this).parent().index()+':visible' )
		            .search( this.value )
		            .draw();
		            
		    } );
		    /* END COLUMN FILTER */   
	    
			/* COLUMN SHOW - HIDE */
			$('#datatable_col_reorder').dataTable({
				"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-6 hidden-xs'C>r>"+
						"t"+
						"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>",
				"autoWidth" : true,
				"preDrawCallback" : function() {
					// Initialize the responsive datatables helper once.
					if (!responsiveHelper_datatable_col_reorder) {
						responsiveHelper_datatable_col_reorder = new ResponsiveDatatablesHelper($('#datatable_col_reorder'), breakpointDefinition);
					}
				},
				"rowCallback" : function(nRow) {
					responsiveHelper_datatable_col_reorder.createExpandIcon(nRow);
				},
				"drawCallback" : function(oSettings) {
					responsiveHelper_datatable_col_reorder.respond();
				}			
			});
			
			/* END COLUMN SHOW - HIDE */
	
			/* TABLETOOLS */
			$('#datatable_tabletools').dataTable({
				
				// Tabletools options: 
				//   https://datatables.net/extensions/tabletools/button_options
				"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-6 hidden-xs'T>r>"+
						"t"+
						"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>",
		        "oTableTools": {
		        	 "aButtons": [
		             "copy",
		             "csv",
		             "xls",
		                {
		                    "sExtends": "pdf",
		                    "sTitle": "SmartAdmin_PDF",
		                    "sPdfMessage": "SmartAdmin PDF Export",
		                    "sPdfSize": "letter"
		                },
		             	{
	                    	"sExtends": "print",
	                    	"sMessage": "Generated by SmartAdmin <i>(press Esc to close)</i>"
	                	}
		             ],
		            "sSwfPath": "<?php echo base_url();?>assets/js/plugin/datatables/swf/copy_csv_xls_pdf.swf"
		        },
				"autoWidth" : true,
				"preDrawCallback" : function() {
					// Initialize the responsive datatables helper once.
					if (!responsiveHelper_datatable_tabletools) {
						responsiveHelper_datatable_tabletools = new ResponsiveDatatablesHelper($('#datatable_tabletools'), breakpointDefinition);
					}
				},
				"rowCallback" : function(nRow) {
					responsiveHelper_datatable_tabletools.createExpandIcon(nRow);
				},
				"drawCallback" : function(oSettings) {
					responsiveHelper_datatable_tabletools.respond();
				}
			});
			
			/* END TABLETOOLS */
		
		})

		</script>
