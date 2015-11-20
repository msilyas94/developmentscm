
<div id="main" role="main">
  <div id="content">

  	<!-- RIBBON -->
			<div id="ribbon">

				<span class="ribbon-button-alignment"> 
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
						<i class="fa fa-refresh"></i>
					</span> 
				</span>

				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li>Home</li><li>Detail Supplier</li>
				</ol>
				

			</div>
			<!-- END RIBBON -->
			<?php foreach ($detail->result() as $row){?>
			<div class="well">
					<h1><?php  echo $row->supname;?></h1>
					
					<p>
						Website : <?php if(!empty($row->website)){
										echo $row->website;
									}else{echo "<p color='red'><i>Data belum tersedia</i></p>";}?>
						<br>
						<br>
					</p>
				<fieldset>
					
					
				<div class="col-xs-4 well">
					
					
						<table class="table table-bordered table-striped">
							<thead>
								<h2>Data Personal</h2>
							</thead>
							<tbody>
								
								<tr>
									<th>Badan Usaha</th>
									<td colspan="4"><?php echo $row->badanusaha?></td>
								</tr>
								
								<tr>
									<th>Alamat</th>
									<td colspan="4"><?php echo $row->address;?></td>
								</tr>

								<tr>
									<th>Kota</th>
									<td colspan="4"><?php echo $row->city?></td>
								</tr>

								<tr>
									<th>Propinsi</th>
									<td colspan="4"><?php echo $row->province;?></td>
								</tr>

								<tr>
									<th>Kode pos</th>
									<td colspan="4"><?php echo $row->zip;?></td>
								</tr>

								<tr>
									<th>Negara</th>
									<td colspan="4"><?php echo $row->country;?></td>
								</tr>


								<tr>
									<th>Telepon</th>
									<td colspan="4"><?php echo $row->phone;?></td>
								</tr>

								<tr>
									<th>Email</th>
									<td colspan="4"><?php echo $row->email;?></td>
								</tr>

								
								<tr>
									<th>Afiliasi</th>
									<td colspan="4"><?php if (!empty($row->afiliation))
									{
										echo $row->affiliation;
									}else{echo "<p color='red'><i>Data belum tersedia</i></p>";}
									?></td>
								</tr>

								<tr>
									<th>Jumlah Staff</th>
									<td colspan="4"><?php echo $row->staffnumber;?></td>
								</tr>



								<?php }?>
							</tbody>
						</table>


				
						
					


					
				</div>

				<div class="col-xs-4 well">
				 <h2>Assessment</h2>
					<span class="text"> Param 1 <span class="pull-right"> Value1</span> </span>
						<div class="progress">
							<div class="progress-bar bg-color-blueDark" style="width: 33%;"></div>

						</div> 
					<span class="text"> Param 2 <span class="pull-right"> Value3</span> </span>	
						<div class="progress"> 
							<div class="progress-bar bg-color-blue" style="width: 70%;"></div>
						</div>


				</div>

				<div class="col-xs-4 well">
					<h2>Performance</h2>
						<div>
							<canvas id="radarChart" width="250" height="200"></canvas>
						</div>
						<div>
							<canvas id="radarChart2" width="250" height="200"></canvas>
						</div>
					
				</div>

				<!-- chart performance assesment 
				<div class="col-xs-3">
					<h1>Assessment</h1>
					<div class="row">
						<canvas id="radarChart" width="250" height="200"></canvas>
					</div>
					
					<div class="row">
							<div> 
								<span class="text"> Progress PO <span class="pull-right">3 Ongoing / 9 PO</span> </span>
										<div class="progress">
											<div class="progress-bar bg-color-blueDark" style="width: 33%;"></div>
										</div> 
							</div>

							<div> 
								<span class="text"> Transfered <span class="pull-right">440 GB</span> </span>
										<div class="progress">
											<div class="progress-bar bg-color-blue" style="width: 34%;"></div>
										</div> 
							</div>
							
							<div> 
								<span class="text"> Bugs Squashed<span class="pull-right">77%</span> </span>
										<div class="progress">
											<div class="progress-bar bg-color-blue" style="width: 77%;"></div>
										</div> 
							</div>
							
							<div>
								<span class="text"> User Testing <span class="pull-right">7 Days</span> </span>
										<div class="progress">
											<div class="progress-bar bg-color-redLight" style="width: 84%;"></div>
										</div> 
							</div>

															
					</div>


				</div>
					
					<div class="easy-pie-chart txt-color-orangeDark col-xs-3"  data-percent="35" data-pie-size="100">
							<h1>Performance</h1>
						<span class="percent percent-sign">35</span>
					</div>
						
				-->
					


			</fieldset>
				
				
					
				



				<!-- sampe sini -->
	<fieldset>
			<h3>Detail Company profile</h3>

			<div id="tabs">
				<ul>
					<li>
						<a href="#tabs-a">Contact Personal</a>
					</li>

					<li>
						<a href="#tabs-b">Legal</a>
					</li>

					<li>
						<a href="#tabs-c">Finansial</a>
					</li>

					<li>
						<a href="#tabs-d">Sertifikat</a>
					</li>

					<li>
						<a href="#tabs-e">Kompetensi Pegawai</a>
					</li>


					<li>
						<a href="#tabs-f">Pengalaman</a>
					</li>
					
				</ul>
				<div id="tabs-a">
	
					<table class="table table-bordered table-striped">
						<tr>
							<th>Nomor Akta Pendirian</th>

							<td colspan="4"><?php echo $row->noaktepend;?></td>
						</tr>
						
						<tr>
							<th>Tanggal terbit akta pendirian</th>

							<td colspan="4"><?php echo $row->terbitaktepend;?></td>
						</tr>

						<tr>
							<th>Notaris akta pendirian</th>

							<td colspan="4"><?php echo $row->notarisaktepend;?></td>
						</tr>

						<tr>
							<th>Nomor Akta perubahan</th>

							<td colspan="4"><?php echo $row->noakteper;?></td>
						</tr>
						<tr>
							<th>Tanggal Terbit Akte Perubahan</th>

							<td colspan="4"><?php echo $row->terbitakteper;?></td>
						</tr>

						<tr>
							<th>Notaris Akte Perubahan</th>

							<td colspan="4"><?php echo $row->notarisakteper;?></td>
						</tr>

						

						<tr>
							<th>Nomor SIUP</th>

							<td colspan="4"><?php echo $row->nosiup;?></td>
						</tr>
						<tr>
							<th>Terbit SIUP</th>

							<td colspan="4"><?php echo $row->terbitsiup;?></td>
						</tr>

						<tr>
							<th>Kadaluarsa SIUP</th>

							<td colspan="4"><?php echo $row->expsiup;?></td>
						</tr>

						<tr>
							<th>Nomor TDP</th>

							<td colspan="4"><?php echo $row->notdp;?></td>
						</tr>

						<tr>
							<th>Terbit TDP</th>

							<td colspan="4"><?php echo $row->terbittdp;?></td>
						</tr>
						
						<tr>
							<th>Kadaluarsa TDP</th>

							<td colspan="4"><?php echo $row->exptdp;?></td>
						</tr>

						<tr>
							<th>Nomor IDP</th>

							<td colspan="4"><?php echo $row->noidp;?></td>
						</tr>
						
						<tr>
							<th>Terbit IDP</th>

							<td colspan="4"><?php echo $row->terbitidp;?></td>
						</tr>

						<tr>
							<th>Kadaluarsa IDP</th>

							<td colspan="4"><?php echo $row->expidp;?></td>
						</tr>

						<tr>
							<th>Nomor IUJK</th>

							<td colspan="4"><?php echo $row->noiujk;?></td>
						</tr>
						<tr>
							<th>kadaluarsa TDP</th>

							<td colspan="4"><?php echo $row->exptdp;?></td>
						</tr>


						<tr>
							<th>Kadaluarsa IUJK</th>

							<td colspan="4"><?php echo $row->terbitiujk;?></td>
						</tr>


					</table>

					
				</div>

				<div id="tabs-b">
					<tr>
							<th>Nomor Akta Pendirian</th>

							<td colspan="4"><?php echo $row->noaktepend;?></td>
						</tr>
				</div>

				<div id="tabs-c">
					<tr>
							<th>TesTing</th>

							<td colspan="4"><?php echo $row->noaktepend;?></td>
						</tr>
				</div>

				<div id="tabs-d">
					<tr>
							<th>TesTing</th>

							<td colspan="4"><?php echo $row->noaktepend;?></td>
						</tr>
				</div>


				<div id="tabs-e">
					<tr>
							<th>TesTing</th>

							<td colspan="4"><?php echo $row->noaktepend;?></td>
						</tr>
				</div>


				<div id="tabs-f">
					<tr>
							<th>TesTing</th>

							<td colspan="4"><?php echo $row->noaktepend;?></td>
						</tr>
				</div>
				
			</div>
		</fieldset>

</div>



</div>
</div>

		
		<script src="<?php  echo base_url();?>assets/chart/Chart.js"></script>
		<script src="<?php  echo base_url();?>assets/chart/Chart.min.js"></script>
		<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
		<script data-pace-options='{ "restartOnRequestAfter": true }' src="<?php echo base_url();?>js/plugin/pace/pace.min.js"></script>

		<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<script>
			if (!window.jQuery) {
				document.write('<script src="<?php echo base_url()?>js/libs/jquery-2.1.1.min.js"><\/script>');
			}
		</script>

		<script src="http://ajax.googlealpis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
		<script>
			if (!window.jQuery.ui) {
				document.write('<script src="<?php echo base_url();?>js/libs/jquery-ui-1.10.3.min.js"><\/script>');
			}
		</script>

		<!-- IMPORTANT: APP CONFIG -->
		

		

		<script type="text/javascript">
		
		// DO NOT REMOVE : GLOBAL FUNCTIONS!
		
		$(document).ready(function() {
			
			pageSetUp();
			
			// menu
			$("#menu").menu();
		
			/*
			 * AUTO COMPLETE AJAX
			 */
		
			function log(message) {
				$("<div>").text(message).prependTo("#log");
				$("#log").scrollTop(0);
			}
		
			$("#city").autocomplete({
				source : function(request, response) {
					$.ajax({
						url : "http://ws.geonames.org/searchJSON",
						dataType : "jsonp",
						data : {
							featureClass : "P",
							style : "full",
							maxRows : 12,
							name_startsWith : request.term
						},
						success : function(data) {
							response($.map(data.geonames, function(item) {
								return {
									label : item.name + (item.adminName1 ? ", " + item.adminName1 : "") + ", " + item.countryName,
									value : item.name
								}
							}));
						}
					});
				},
				minLength : 2,
				select : function(event, ui) {
					log(ui.item ? "Selected: " + ui.item.label : "Nothing selected, input was " + this.value);
				}
			});
		
			/*
			 * Spinners
			 */
			$("#spinner").spinner();
			$("#spinner-decimal").spinner({
				step : 0.01,
				numberFormat : "n"
			});
		
			$("#spinner-currency").spinner({
				min : 5,
				max : 2500,
				step : 25,
				start : 1000,
				numberFormat : "C"
			});
		
			/*
			 * CONVERT DIALOG TITLE TO HTML
			 * REF: http://stackoverflow.com/questions/14488774/using-html-in-a-dialogs-title-in-jquery-ui-1-10
			 */
			$.widget("ui.dialog", $.extend({}, $.ui.dialog.prototype, {
				_title : function(title) {
					if (!this.options.title) {
						title.html("&#160;");
					} else {
						title.html(this.options.title);
					}
				}
			}));
		
		
			/*
			* DIALOG SIMPLE
			*/
		
			// Dialog click
			$('#dialog_link').click(function() {
				$('#dialog_simple').dialog('open');
				return false;
		
			});
		
			$('#dialog_simple').dialog({
				autoOpen : false,
				width : 600,
				resizable : false,
				modal : true,
				title : "<div class='widget-header'><h4><i class='fa fa-warning'></i> Empty the recycle bin?</h4></div>",
				buttons : [{
					html : "<i class='fa fa-trash-o'></i>&nbsp; Delete all items",
					"class" : "btn btn-danger",
					click : function() {
						$(this).dialog("close");
					}
				}, {
					html : "<i class='fa fa-times'></i>&nbsp; Cancel",
					"class" : "btn btn-default",
					click : function() {
						$(this).dialog("close");
					}
				}]
			});
		
			/*
			* DIALOG HEADER ICON
			*/
		
			// Modal Link
			$('#modal_link').click(function() {
				$('#dialog-message').dialog('open');
				return false;
			});
		
			$("#dialog-message").dialog({
				autoOpen : false,
				modal : true,
				title : "<div class='widget-header'><h4><i class='icon-ok'></i> jQuery UI Dialog</h4></div>",
				buttons : [{
					html : "Cancel",
					"class" : "btn btn-default",
					click : function() {
						$(this).dialog("close");
					}
				}, {
					html : "<i class='fa fa-check'></i>&nbsp; OK",
					"class" : "btn btn-primary",
					click : function() {
						$(this).dialog("close");
					}
				}]
		
			});
		
			/*
			 * Remove focus from buttons
			 */
			$('.ui-dialog :button').blur();
		
			/*
			 * Just Tabs
			 */
		
			$('#tabs').tabs();
		
			/*
			 *  Simple tabs adding and removing
			 */
		
			$('#tabs2').tabs();
		
			// Dynamic tabs
			var tabTitle = $("#tab_title"), tabContent = $("#tab_content"), tabTemplate = "<li style='position:relative;'> <span class='air air-top-left delete-tab' style='top:7px; left:7px;'><button class='btn btn-xs font-xs btn-default hover-transparent'><i class='fa fa-times'></i></button></span></span><a href='#{href}'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; #{label}</a></li>", tabCounter = 2;
		
			var tabs = $("#tabs2").tabs();
		
			// modal dialog init: custom buttons and a "close" callback reseting the form inside
			var dialog = $("#addtab").dialog({
				autoOpen : false,
				width : 600,
				resizable : false,
				modal : true,
				buttons : [{
					html : "<i class='fa fa-times'></i>&nbsp; Cancel",
					"class" : "btn btn-default",
					click : function() {
						$(this).dialog("close");
		
					}
				}, {
		
					html : "<i class='fa fa-plus'></i>&nbsp; Add",
					"class" : "btn btn-danger",
					click : function() {
						addTab();
						$(this).dialog("close");
					}
				}]
			});
		
			// addTab form: calls addTab function on submit and closes the dialog
			var form = dialog.find("form").submit(function(event) {
				addTab();
				dialog.dialog("close");
				event.preventDefault();
			});
		
			// actual addTab function: adds new tab using the input from the form above
			function addTab() {
				var label = tabTitle.val() || "Tab " + tabCounter, id = "tabs-" + tabCounter, li = $(tabTemplate.replace(/#\{href\}/g, "#" + id).replace(/#\{label\}/g, label)), tabContentHtml = tabContent.val() || "Tab " + tabCounter + " content.";
		
				tabs.find(".ui-tabs-nav").append(li);
				tabs.append("<div id='" + id + "'><p>" + tabContentHtml + "</p></div>");
				tabs.tabs("refresh");
				tabCounter++;
		
				// clear fields
				$("#tab_title").val("");
				$("#tab_content").val("");
			}
		
			// addTab button: just opens the dialog
			$("#add_tab").button().click(function() {
				dialog.dialog("open");
			});
		
			// close icon: removing the tab on click
			$("#tabs2").on("click", 'span.delete-tab', function() {
		
				var panelId = $(this).closest("li").remove().attr("aria-controls");
				$("#" + panelId).remove();
				tabs.tabs("refresh");
			});
		
			/*
			* ACCORDION
			*/
			//jquery accordion
			
		     var accordionIcons = {
		         header: "fa fa-plus",    // custom icon class
		         activeHeader: "fa fa-minus" // custom icon class
		     };
		     
			$("#accordion").accordion({
				autoHeight : false,
				heightStyle : "content",
				collapsible : true,
				animate : 300,
				icons: accordionIcons,
				header : "h4",
			})
		
			/*
			 * PROGRESS BAR
			 */
			$("#progressbar").progressbar({
		     	value: 25,
		     	create: function( event, ui ) {
		     		$(this).removeClass("ui-corner-all").addClass('progress').find(">:first-child").removeClass("ui-corner-left").addClass('progress-bar progress-bar-success');
				}
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

		<script>
			//radar chart data
				var radarData = {
					labels : ["Quality","Cost","Delivery","Flexibility","Responsiveness"],
					datasets : [
						{
							fillColor: "rgba(102,45,145,.1)",
							strokeColor: "rgba(102,45,145,1)",
							pointColor : "rgba(220,220,220,1)",
							pointStrokeColor : "#fff",
							data : [<?php echo "100";?>,<?php echo "100";?>,<?php echo "100";?>,<?php echo "100";?>,<?php echo "100";?>]// data assesment di echo kesini
						}
					
					]
				}

				//Create Radar chart
				var ctx2 = document.getElementById("radarChart").getContext("2d");
				var myNewChart = new Chart(ctx2).Radar(radarData);

				new Chart(ctx2).Radar(radarData,options);


		</script>
		
		<script>
		var radarData<?php echo "2"?> = {
					labels : ["Quality","Cost","Delivery","Flexibility","Responsiveness"],
					datasets : [
						{
							fillColor: "rgba(102,45,145,.1)",
							strokeColor: "rgba(102,45,145,1)",
							pointColor : "rgba(220,220,220,1)",
							pointStrokeColor : "#fff",
							data : [<?php echo "100";?>,<?php echo "100";?>,<?php echo "100";?>,<?php echo "100";?>,<?php echo "100";?>]// data assesment di echo kesini
						}
					
					]
				}

				//Create Radar chart
				var ctx3 = document.getElementById("radarChart2").getContext("2d");
				var myNewChart2 = new Chart(ctx3).Radar(radarData2);

				new Chart(ctx3).Radar(radarData2,options);
		</script>

