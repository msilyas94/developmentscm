

<div id="main" role="main">
	 <div id="content">

		<!-- RIBBON -->
			<div id="ribbon">
				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li>Home</li><li>Add New Supplier</li>
				</ol>

			</div>
			


<article>
				
							<!-- Widget ID (each widget will need unique ID)-->
							<div class="jarviswidget" id="wid-id-2" data-widget-editbutton="false" data-widget-deletebutton="false">
								
								<div>
				
									
									<!-- end widget edit box -->
				
									<!-- widget content -->
									<div class="widget-body fuelux">
				
										<div class="wizard">

											<ul class="steps">
												<li data-target="#step1" class="active">
													<span class="badge badge-info">1</span>Step 1<span class="chevron"></span>
												</li>
												<li data-target="#step2">
													<span class="badge">2</span>Step 2<span class="chevron"></span>
												</li>
												<li data-target="#step3">
													<span class="badge">3</span>Step 3<span class="chevron"></span>
												</li>
												<li data-target="#step4">
													<span class="badge">4</span>Step 4<span class="chevron"></span>
												</li>
												<li data-target="#step5">
													<span class="badge">5</span>Step 5<span class="chevron"></span>
												</li>
											</ul>


											<div class="actions">

												<button type="button" class="btn btn-sm btn-primary btn-prev">
													<i class="fa fa-arrow-left"></i>Prev
												</button>

												<button type="button" class="btn btn-sm btn-success btn-next" data-last="Finish">
														Next<i class="fa fa-arrow-right"></i>
												</button>

											</div>

										</div>

								<div class="step-content">
									<form class="form-horizontal" id="fuelux-wizard smart-form-register" method="post">
				
										<div class="step-pane active smart-form" id="step1">
												<h3><strong>Step 1 </strong> - Informasi Umum</h3>
				
										<fieldset>
													<h2>Badan Usaha</h2>
													<br>
													
												<div class="col col-4">
															<label class="radio">
																<input type="radio" name="supjp" value="PT" checked="checked">
																<i></i>PT</label>
															<label class="radio">
																<input type="radio" name="supjp" value="CV">
																<i></i>CV</label>
															<label class="radio">
																<input type="radio" name="supjp" value="PERSERO">
																<i></i>PERSERO</label>
														</div>
														<div class="col col-4">
															<label class="radio">
																<input type="radio" name="supjp" value="KOPERASI">
																<i></i>KOPERASI</label>
															<label class="radio">
																<input type="radio" name="supjp" value="OTHERS">
																<i></i>Lain - lain</label>
															
														</div>

										</fieldset>		
											
												<hr/>

											<fieldset>

												<div class="row">
												<div class="col-md-2"><label class="label">Nama Perusahaan</label></div>
													<div class="col-md-6">
															<section>
																
																<label class="input">
																	<input type="text" nama="supname" class="input-sm">
																</label>
															</section>
													</div>	
												</div>
												

												
												<div class="row">
													<div class="col-md-2"><label class="label">Kualifikasi</label></div>
														<div class="col-md-6">
															<select  name="supqualification">
																	<option value ="kecil">kecil</option>
																	<option value="mengengah">menengah</option>
																	<option value="besar">besar</option>
															</select>				
										     		  </div>
												</div>
												<br>

												<div class="row">
													<div class="col-md-2"><label class="label">Deskripsi Perusahaan</label></div>
													<div class="col-md-6">
														<section>
															
															<label class="textarea"> 										
																<textarea rows="3" class="custom-scroll" name="supdeskripsi"></textarea> 
															</label>
															
														</section>
																				
													</div>
												</div>	

												
											
													<div class="row">
														<div class="col-md-2"><label class="label">Alamat</label></div>
															<div class="col-md-4">
																	<section>
																			
																			<label class="textarea"> 										
																				<textarea rows="4" class="custom-scroll" name="supdeskripsi"></textarea> 
																			</label>
															
																	</section>
																			
																</div>
																<div class="col-md-6">
																<section class="col col-6">
																	<label class="input">
																		<input type="text" name="suppliercity" placeholder="Kota">
																	</label>
																</section>

																<section class="col col-6">
																	<label class="input">
																		<input type="text" name="supplierprovince" placeholder="Provinsi">
																	</label>
																</section>
																
																<section class="col col-12">
																	<label class="input">
																		<input type="text" name="suppliercountry" placeholder="Negara">
																	</label>
																</section>
																<section class="col col-4">
																	<label class="input">
																		<input type="text" name="supplierzip" placeholder="Kode Pos">
																	</label>
																</section>
																</div>
														</div>


	
															<div class="row">


																<div class="col-md-2"><label class="label">Kontak</label></div>
																	<section class="col col-4">
																		<label class="input"> <i class="icon-append fa fa-envelope-o"></i>
																			<input type="email" name="supemail" placeholder="E-mail">
																		</label>
																	</section>
																	<section class="col col-3">
																		<label class="input"> <i class="icon-append fa fa-phone"></i>
																			<input type="tel" name="suptel" placeholder="Phone" data-mask="(999) 999-9999">
																		</label>
																	</section>
																	<section class="col col-3">
																		<label class="input"> <i class="icon-append fa fa-fax"></i>
																			<input type="tel" name="supfax" placeholder="fax" data-mask="(999) 999-9999">
																		</label>
																	</section>
																				<div class="col-md-2"><label class="label"></label></div>
																	<section class="col col-6">
																		<label class="input"> <i class="icon-append fa fa-globe"></i>
																			<input type="text" name="supemail" placeholder="website" >
																		</label>
																	</section>
															</div>
													
														<div class="row">

															<div class="col-md-2"><label class="label">Memiliki Afiliasi ?</label></div>
																<section>
																	<div class="inline-group">
																		<label class="radio">
																			<input type="radio" name="afiliasi">
																			<i></i>YA</label>
																		<label class="radio">
																			<input type="radio" name="afiliasi">
																			<i></i>TIDAK</label>
																		
																	</div>
																</section>
																

														</div>
															<fieldset>
																<div class="col-md-2"><label class="label">Jumlah Staff</label></div>
																	<section class="col col-3">
																		<label class="input"> <i class="icon-prepend fa fa-group"></i>
																			<input type="text" name="supjmlstaff" placeholder="Masukkan Jumlah staff">
																		</label>
																	</section>
															</fieldset>
					
															<fieldset>
															<div class="col-md-2"><label class="label">Telah terdaftar sebagai mitra telkom group</label></div>
																	<section>

																		<div class="inline-group">
																			
																			<label class="radio">
																				<input type="radio" name="ismitratelkom" value="0">
																				<i></i>YA</label>
																			<label class="radio">
																				<input type="radio" name="ismitratelkom" value="1">
																				<i></i>TIDAK</label>
																		</div>
																	</section>
															</fieldset>



				
													
				
												</div>
				
												<div class="step-pane smart-form" id="step2">
													<h3><strong>Step 2 </strong> Person In Charge (PIC) dan Penandatangan kontrak</h3>

														<fieldset>
														<h3>PIC</h3>
														<br>

															<div class="row">
																
																<section class="col col-4">
																	<label class="input"> <i class="icon-prepend fa fa-user"></i>
																		<input type="text" name="supnamapic" placeholder="Nama Lengkap">
																	</label>
																</section>
																<section class="col col-4">
																	<label class="input">
																		<input type="text" name="supjabatanpic" placeholder="Jabatan">
																	</label>
																</section>
															</div>
															<div class="row">	
																<section class="col col-3">
																	<label class="input"> <i class="icon-prepend fa fa-envelope"></i>
																		<input type="text" name="supemailpic" placeholder="email">
																	</label>
																</section>
																<section class="col col-3">
																	<label class="input">  <i class="icon-prepend fa fa-phone"></i>
																		<input type="text" name="suptelpic" placeholder="Telephone">
																	</label>
																</section>
																<section class="col col-3">
																	<label class="input">  <i class="icon-prepend fa fa-mobile"></i>
																		<input type="text" name="suphppic" placeholder="Handphone">
																	</label>
																</section>
															</div>
	

														</fieldset>

														<fieldset>
														<h3>Penanda Tangan Kontrak</h3>
														<br>
														<div class="row">
																
																<section class="col col-4">
																	<label class="input"> <i class="icon-prepend fa fa-user"></i>
																		<input type="text" name="supnamapend" placeholder="Nama Lengkap">
																	</label>
																</section>
																<section class="col col-4">
																	<label class="input">
																		<input type="text" name="supjabatanpend" placeholder="Jabatan">
																	</label>
																</section>
															</div>
															<div class="row">	
																<section class="col col-3">
																	<label class="input"> <i class="icon-prepend fa fa-envelope"></i>
																		<input type="text" name="supemailpend" placeholder="email">
																	</label>
																</section>
																<section class="col col-3">
																	<label class="input">  <i class="icon-prepend fa fa-phone"></i>
																		<input type="text" name="suptelpend" placeholder="Telephone">
																	</label>
																</section>
																<section class="col col-3">
																	<label class="input">  <i class="icon-prepend fa fa-mobile"></i>
																		<input type="text" name="suphppend" placeholder="Handphone">
																	</label>
																</section>
															</div>
														</fieldset>
																																
														<fieldset>
																<h3>Legal data <i class="fa fa-gavel"></i></h3>
																<br>

																<div class="table-responsive">

																			<table class="table table-bordered" id="mytable">	
																				
																				<thead>
																					<th>Jenis Sertifikat</th>
																					<th>Nomor</th>
																					<th>Tanggal Terbit</th>
																					<th>Notaris</th>
																				</thead>
																			
																				<tbody>

																					<tr>
																						<td>Akta Pendirian</td>
																						<td><input name="akt_pend" class="form-control" type="text"></td>
																						<td><input name="akt_pend_terbit"class type="date"></td>
																						<td><input name="akt_pend_exp"class type="date"></td>

																					</tr>

																					<tr>
																						<td>Akta Perubahan</td>
																						<td><input name="akt_per" class="form-control" type="text"></td>
																						<td><input name="akt_per_terbit" type="date"></td>
																						<td><input name="akt_per_exp" type="date"></td>

																					</tr>

																				<thead>
																					<th>Jenis Sertifikat</th>
																					<th>Nomor</th>
																					<th>Tanggal Terbit</th>
																					<th>Expired</th>
																				</thead>
																					<tr>
																						<td>SIUP</td>
																						<td><input name="nosiup"class="form-control" type="text"></td>
																						<td><input name="terbit_siup"type="date"></td>
																						<td><input name="exp_siup"type="date"></td>

																					</tr>

																					<tr>
																						<td>TDP(PEMDA)</td>
																						<td><input name="notdp" class="form-control" type="text"></td>
																						<td><input name="terbit_tdp" type="date"></td>
																						<td><input name="exp_tdp" type="date"></td>

																					</tr>

																					<tr>
																						<td>IDP/SITU(PEMDA)</td>
																						<td><input name="noidp" class="form-control" type="text"></td>
																						<td><input name="terbit_idp" type="date"></td>
																						<td><input name="exp_idp" type="date"></td>

																					</tr>

																					<tr>
																						<td>IUJK</td>
																						<td><input name="noiujk" class="form-control" type="text"></td>
																						<td><input name="terbit_iujk" type="date"></td>
																						<td><input name="exp_iujk" type="date"></td>

																					</tr>
																				


																				</tbody>


																			</table>

																</div>
																</fieldset>
																
																<fieldset>
																<div class="table-responsive">

																			<table class="table table-bordered" id="dataTable">
																				<thead>
																					<th>Jenis Sertifikat</th>
																					<th>Nomor</th>
																					<th>Tanggal Terbit</th>
																				</thead>

																				<tbody>
																					<tr>
																						<td>SPKP</td>
																						<td><input name="no_spkp"class="form-control" type="text"></td>
																						<td><input name= "terbit_spkp" type="date"></td>
																					</tr>
																					<tr>
																						<td>NPWP</td>
																						<td><input name="no_npwp" class="form-control" type="text"></td>
																						<td><input name = "terbit_npwp"type="date"></td>
																					</tr>
																					

																				</tbody>

																			</table>
																</div>																

															


															
															
													</fieldset>
												 </div>


				
												<div class="step-pane smart-form" id="step3">
													<h3><strong>Step 3 </strong> - Finansial</h3>

													<fieldset>

													<div class="row">
													<section class="col col-4">
														<label class="input"> <i class="icon-append fa fa-bank"></i>
															<input type="text" name="name" placeholder="modal dasar">
														</label>
													</section>

													<section class="col col-4">
														<label class="input"> <i class="icon-append fa fa-arrow-down"></i>
															<input type="text" name="name" placeholder="modal disetor">
														</label>
													</section>
													</div>

													<h3>Informasi Rekening</h3>
													 <div class="row">
														 <section class="col col-4">
															<label class="input"> <i class="icon-append fa fa-dollar"></i>
																<input type="text" name="name" placeholder="Nomor Rekening">
															</label>
														</section>
														</div>
														<div class ="row">
														<section class="col col-4">
															<label class="input"> <i class="icon-append fa fa-dollar"></i>
																<input type="text" name="name" placeholder="Nama Bank">
															</label>
														</section>
														</div>
														<div class ="row">
														<section class="col col-4">
															<label class="input"> <i class="icon-append fa fa-dollar"></i>
																<input type="text" name="name" placeholder="Cabang Bank">
															</label>
														</section>
														</div>
														<div class ="row">
														<section class="col col-4">
															<label class="input"> <i class="icon-append fa fa-dollar"></i>
																<input type="text" name="name" placeholder="Atas Nama">
															</label>
														</section>
														</div>
														<div class ="row">



															<section class="col col-4">
																	<select class = "form-control" name="matauang">
																			<option selected value="">Select currency</option>
																			<option value="America (United States) Dollars - USD">America (United States) Dollars – USD</option>
																			<option value="Afghanistan Afghanis - AFN">Afghanistan Afghanis – AFN</option>
																			<option value="Albania Leke - ALL">Albania Leke – ALL</option>
																			<option value="Algeria Dinars - DZD">Algeria Dinars – DZD</option>
																			<option value="Argentina Pesos - ARS">Argentina Pesos – ARS</option>
																			<option value="Australia Dollars - AUD">Australia Dollars – AUD</option>
																			<option value="Austria Schillings - ATS">Austria Schillings – ATS</option>
																			 
																			<option value="Bahamas Dollars - BSD">Bahamas Dollars – BSD</option>
																			<option value="Bahrain Dinars - BHD">Bahrain Dinars – BHD</option>
																			<option value="Bangladesh Taka - BDT">Bangladesh Taka – BDT</option>
																			<option value="Barbados Dollars - BBD">Barbados Dollars – BBD</option>
																			<option value="Belgium Francs - BEF">Belgium Francs – BEF</option>
																			<option value="Bermuda Dollars - BMD">Bermuda Dollars – BMD</option>
																			 
																			<option value="Brazil Reais - BRL">Brazil Reais – BRL</option>
																			<option value="Bulgaria Leva - BGN">Bulgaria Leva – BGN</option>
																			<option value="Canada Dollars - CAD">Canada Dollars – CAD</option>
																			<option value="CFA BCEAO Francs - XOF">CFA BCEAO Francs – XOF</option>
																			<option value="CFA BEAC Francs - XAF">CFA BEAC Francs – XAF</option>
																			<option value="Chile Pesos - CLP">Chile Pesos – CLP</option>
																			 
																			<option value="China Yuan Renminbi - CNY">China Yuan Renminbi – CNY</option>
																			<option value="RMB (China Yuan Renminbi) - CNY">RMB (China Yuan Renminbi) – CNY</option>
																			<option value="Colombia Pesos - COP">Colombia Pesos – COP</option>
																			<option value="CFP Francs - XPF">CFP Francs – XPF</option>
																			<option value="Costa Rica Colones - CRC">Costa Rica Colones – CRC</option>
																			<option value="Croatia Kuna - HRK">Croatia Kuna – HRK</option>
																			 
																			<option value="Cyprus Pounds - CYP">Cyprus Pounds – CYP</option>
																			<option value="Czech Republic Koruny - CZK">Czech Republic Koruny – CZK</option>
																			<option value="Denmark Kroner - DKK">Denmark Kroner – DKK</option>
																			<option value="Deutsche (Germany) Marks - DEM">Deutsche (Germany) Marks – DEM</option>
																			<option value="Dominican Republic Pesos - DOP">Dominican Republic Pesos – DOP</option>
																			<option value="Dutch (Netherlands) Guilders - NLG">Dutch (Netherlands) Guilders – NLG</option>
																			 
																			<option value="Eastern Caribbean Dollars - XCD">Eastern Caribbean Dollars – XCD</option>
																			<option value="Egypt Pounds - EGP">Egypt Pounds – EGP</option>
																			<option value="Estonia Krooni - EEK">Estonia Krooni – EEK</option>
																			<option value="Euro - EUR">Euro – EUR</option>
																			<option value="Fiji Dollars - FJD">Fiji Dollars – FJD</option>
																			<option value="Finland Markkaa - FIM">Finland Markkaa – FIM</option>
																			 
																			<option value="France Francs - FRF*">France Francs – FRF*</option>
																			<option value="Germany Deutsche Marks - DEM">Germany Deutsche Marks – DEM</option>
																			<option value="Gold Ounces - XAU">Gold Ounces – XAU</option>
																			<option value="Greece Drachmae - GRD">Greece Drachmae – GRD</option>
																			<option value="Guatemalan Quetzal - GTQ">Guatemalan Quetzal – GTQ</option>
																			<option value="Holland (Netherlands) Guilders - NLG">Holland (Netherlands) Guilders – NLG</option>
																			<option value="Hong Kong Dollars - HKD">Hong Kong Dollars – HKD</option>
																			 
																			<option value="Hungary Forint - HUF">Hungary Forint – HUF</option>
																			<option value="Iceland Kronur - ISK">Iceland Kronur – ISK</option>
																			<option value="IMF Special Drawing Right - XDR">IMF Special Drawing Right – XDR</option>
																			<option value="India Rupees - INR">India Rupees – INR</option>
																			<option value="Indonesia Rupiahs - IDR">Indonesia Rupiahs – IDR</option>
																			<option value="Iran Rials - IRR">Iran Rials – IRR</option>
																			 
																			<option value="Iraq Dinars - IQD">Iraq Dinars – IQD</option>
																			<option value="Ireland Pounds - IEP*">Ireland Pounds – IEP*</option>
																			<option value="Israel New Shekels - ILS">Israel New Shekels – ILS</option>
																			<option value="Italy Lire - ITL*">Italy Lire – ITL*</option>
																			<option value="Jamaica Dollars - JMD">Jamaica Dollars – JMD</option>
																			<option value="Japan Yen - JPY">Japan Yen – JPY</option>
																			 
																			<option value="Jordan Dinars - JOD">Jordan Dinars – JOD</option>
																			<option value="Kenya Shillings - KES">Kenya Shillings – KES</option>
																			<option value="Korea (South) Won - KRW">Korea (South) Won – KRW</option>
																			<option value="Kuwait Dinars - KWD">Kuwait Dinars – KWD</option>
																			<option value="Lebanon Pounds - LBP">Lebanon Pounds – LBP</option>
																			<option value="Luxembourg Francs - LUF">Luxembourg Francs – LUF</option>
																			 
																			<option value="Malaysia Ringgits - MYR">Malaysia Ringgits – MYR</option>
																			<option value="Malta Liri - MTL">Malta Liri – MTL</option>
																			<option value="Mauritius Rupees - MUR">Mauritius Rupees – MUR</option>
																			<option value="Mexico Pesos - MXN">Mexico Pesos – MXN</option>
																			<option value="Morocco Dirhams - MAD">Morocco Dirhams – MAD</option>
																			<option value="Netherlands Guilders - NLG">Netherlands Guilders – NLG</option>
																			 
																			<option value="New Zealand Dollars - NZD">New Zealand Dollars – NZD</option>
																			<option value="Norway Kroner - NOK">Norway Kroner – NOK</option>
																			<option value="Oman Rials - OMR">Oman Rials – OMR</option>
																			<option value="Pakistan Rupees - PKR">Pakistan Rupees – PKR</option>
																			<option value="Palladium Ounces - XPD">Palladium Ounces – XPD</option>
																			<option value="Peru Nuevos Soles - PEN">Peru Nuevos Soles – PEN</option>
																			 
																			<option value="Philippines Pesos - PHP">Philippines Pesos – PHP</option>
																			<option value="Platinum Ounces - XPT">Platinum Ounces – XPT</option>
																			<option value="Poland Zlotych - PLN">Poland Zlotych – PLN</option>
																			<option value="Portugal Escudos - PTE">Portugal Escudos – PTE</option>
																			<option value="Qatar Riyals - QAR">Qatar Riyals – QAR</option>
																			<option value="Romania New Lei - RON">Romania New Lei – RON</option>
																			 
																			<option value="Romania Lei - ROL">Romania Lei – ROL</option>
																			<option value="Russia Rubles - RUB">Russia Rubles – RUB</option>
																			<option value="Saudi Arabia Riyals - SAR">Saudi Arabia Riyals – SAR</option>
																			<option value="Silver Ounces - XAG">Silver Ounces – XAG</option>
																			<option value="Singapore Dollars - SGD">Singapore Dollars – SGD</option>
																			<option value="Slovakia Koruny - SKK">Slovakia Koruny – SKK</option>
																			 
																			<option value="Slovenia Tolars - SIT">Slovenia Tolars – SIT</option>
																			<option value="South Africa Rand - ZAR">South Africa Rand – ZAR</option>
																			<option value="South Korea Won - KRW">South Korea Won – KRW</option>
																			<option value="Spain Pesetas - ESP">Spain Pesetas – ESP</option>
																			<option value="Special Drawing Rights (IMF) - XDR">Special Drawing Rights (IMF) – XDR</option>
																			<option value="Sri Lanka Rupees - LKR">Sri Lanka Rupees – LKR</option>
																			 
																			<option value="Sudan Dinars - SDD">Sudan Dinars – SDD</option>
																			<option value="Sweden Kronor - SEK">Sweden Kronor – SEK</option>
																			<option value="Switzerland Francs - CHF">Switzerland Francs – CHF</option>
																			<option value="Taiwan New Dollars - TWD">Taiwan New Dollars – TWD</option>
																			<option value="Thailand Baht - THB">Thailand Baht – THB</option>
																			<option value="Trinidad and Tobago Dollars - TTD">Trinidad and Tobago Dollars – TTD</option>
																			 
																			<option value="Tunisia Dinars - TND">Tunisia Dinars – TND</option>
																			<option value="Turkey New Lira - TRY">Turkey New Lira – TRY</option>
																			<option value="United Arab Emirates Dirhams - AED">United Arab Emirates Dirhams – AED</option>
																			<option value="United Kingdom Pounds - GBP">United Kingdom Pounds – GBP</option>
																			<option value="United States Dollars - USD">United States Dollars – USD</option>
																			<option value="Venezuela Bolivares - VEB">Venezuela Bolivares – VEB</option>
																			 
																			<option value="Vietnam Dong - VND">Vietnam Dong – VND</option>
																			<option value="Zambia Kwacha - ZMK">Zambia Kwacha – ZMK</option>
																			</select>

																
													 	</div>
													 	</section>														
																
													</fieldset>
													
												</div>
				
												<div class="step-pane" id="step4">
													<h3><strong>Step 4 </strong> - Sertifikasi</h3>
													<fieldset>
														<div class= "table-responsive">
					    				<table class="table table-bordered" id = "addCert">
											
												<thead>
													<th>Jenis Sertifikasi</th>
													<th>Nama Sertifikasi</th>
													<th>Nomor</th>
													<th>Tanggal Terbit</th>
													<th>Expired</th>
												</thead>
												<tbody>
													
												
												<tr>		
												   <td>	
														<select name ="qual[]" class="form-control">
														    <option value="Quality">Quality</option>
														    <option value="HSE">HSE</option>
														    <option value="Lingkungan">Lingkungan</option>
														</select>
													</td>

													<td>	
														
															<input name="crtname[]"class="form-control" type="text">
														
													</td>

													<td>	
													
															<input name="crtnum[]"class="form-control" type="text">
													
													</td>

													<td>	
														
															<input name="crtterbit[]"class="form-control" type="date">
														
													</td>

													<td>	
													
															<input name="crtexp[]"class="form-control" type="date">
														
													
														
														
													</td>

													</tr>									



												</tbody>
															
											</table><!--SAMPE SINI -->
										</div>

						<input  type="button" value ="add Certificate" onclick="addnewcert()" />



						<h3>CSR</h3>
				<div class="table-responsive">
				<table id="addNew" class="table table-bordered">
					<thead>
						
						<th>Perusahaan</th>
						<th>Kegiatan</th>
					</thead>
					<tbody>
							<tr>
								<td><input  class="form-control" name="namakegiatancsr[]" type="text"> </td>
								<td><input  class="form-control" name="desckegiatancsr[]" type="text"> </td>
							</tr>
					</tbody>
				</table>	

					<input type="button" value ="add Certificate" onclick="add()" />			
			</div>

<script>

function addnewcert(){
			
			$("#addCert").append( "<tr><td><select name='qual[]'class='form-control'><option value='Quality'>Quality</option><option value='HSE'>HSE</option><option value='Lingkungan'>Lingkungan</option></select></td><td><input name='crtname[]'class='form-control' type='text'></td><td><input name='crtnum[]'class='form-control' type='text'></td><td><input name='crtterbit[]'class='form-control' type='date'></td><td><input name='crtexp[]'class='form-control' type='date'></td></tr>" );
			}


function add(){
		
			$("#addNew").append( "<tr><td><input  class='form-control' name='namakegiatancsr[]' type='text'> <td><input  class='form-control' name='desckegiatancsr[]' type='text'> </td> </td></tr>" );
			}


</script>



													</fieldset>
													
												</div>
				
												<div class="step-pane" id="step5">
													<h3><strong>Step 5 </strong> - Kompetensi Pegawai</h3>
													<fieldset>
														<div class= "table-responsive">
					    				<table class="table table-bordered" id = "addEmp">
											
												<thead>
													<th>Nama</th>
													<th>Nomor</th>
													<th>Bidang</th>
													<th>Tanggal Terbit</th>
													<th>Tanggal Expired (Jika ada)</th>
													
												</thead>
												<tbody>
													
												
												<tr>		
												   <td>	
														<input name=""class="form-control" type="text">
													</td>
													
													<td>	
														
														<input name=""class="form-control" type="text">
														
													</td>

													<td>	
													
															<input name=""class="form-control" type="text">
													
													</td>

													<td>	
														
															<input name=""class="form-control" type="date">
														
													</td>

													<td>	
													
															<input name=""class="form-control" type="date">
														
													
														
														
													</td>

													</tr>									

												</tbody>
															
											</table>
										</div>

						<input  type="button" value ="tambah pegawai" onclick="addnewkaryawan()" />



								<h3>Pengalaman</h3>
									<div class="table-responsive">
									<table class="table table-bordered" id="addPengalaman">
										<thead>
											
											<th>Pemberi pekerjaan</th>
											<th>Deskripsi pekerjaan</th>
											<th>Nilai</th>
										</thead>
										<tbody>
												<tr>
													<td><input  class="form-control" name="namakegiatancsr" type="text"> </td>
													<td><textarea name="supplieraddress" row="2" class="form-control" placeholder="Dekripsikan pekerjaan anda"></textarea></td>
													<td><input  class="form-control" name="desckegiatancsr" type="text"> </td>
												</tr>
										</tbody>
									</table>				
								</div>

						<input  type="button" value ="tambah pegawai" onclick="addExp()" />





			


													</fieldset>
												</div>
											
											<br>
											<input type ="submit" class = "btn btn-danger pull-right" value="SAVE"></span>							
											</form>
										</div>
				
									</div>
									<!-- end widget content -->
				
								</div>
								<!-- end widget div -->
				
							</div>
							<!-- end widget -->
				
						</article>
	 
	 </div>
</div>


<!--================================================== -->

		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		


		<!-- IMPORTANT: APP CONFIG -->
		
		


		<!-- JQUERY UI + Bootstrap Slider -->
		
	


		<!-- PAGE RELATED PLUGIN(S) -->
		<script src="<?php echo base_url();?>assets/js/plugin/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
		<script src="<?php echo base_url();?>assets/js/plugin/fuelux/wizard/wizard.min.js"></script>
		

		<script type="text/javascript">
		
		// DO NOT REMOVE : GLOBAL FUNCTIONS!
		
		$(document).ready(function() {
			
			pageSetUp();
			
			
	
			//Bootstrap Wizard Validations

			  var $validator = $("#wizard-1").validate({
			    
			    rules: {
			      email: {
			        required: true,
			        email: "Your email address must be in the format of name@domain.com"
			      },
			      fname: {
			        required: true
			      },
			      lname: {
			        required: true
			      },
			      country: {
			        required: true
			      },
			      city: {
			        required: true
			      },
			      postal: {
			        required: true,
			        minlength: 4
			      },
			      wphone: {
			        required: true,
			        minlength: 10
			      },
			      hphone: {
			        required: true,
			        minlength: 10
			      }
			    },
			    
			    messages: {
			      fname: "Please specify your First name",
			      lname: "Please specify your Last name",
			      email: {
			        required: "We need your email address to contact you",
			        email: "Your email address must be in the format of name@domain.com"
			      }
			    },
			    
			    highlight: function (element) {
			      $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
			    },
			    unhighlight: function (element) {
			      $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
			    },
			    errorElement: 'span',
			    errorClass: 'help-block',
			    errorPlacement: function (error, element) {
			      if (element.parent('.input-group').length) {
			        error.insertAfter(element.parent());
			      } else {
			        error.insertAfter(element);
			      }
			    }
			  });
			  
			  $('#bootstrap-wizard-1').bootstrapWizard({
			    'tabClass': 'form-wizard',
			    'onNext': function (tab, navigation, index) {
			      var $valid = $("#wizard-1").valid();
			      if (!$valid) {
			        $validator.focusInvalid();
			        return false;
			      } else {
			        $('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(index - 1).addClass(
			          'complete');
			        $('#bootstrap-wizard-1').find('.form-wizard').children('li').eq(index - 1).find('.step')
			        .html('<i class="fa fa-check"></i>');
			      }
			    }
			  });
			  
		
			// fuelux wizard
			  var wizard = $('.wizard').wizard();
			  
			  wizard.on('finished', function (e, data) {
			    //$("#fuelux-wizard").submit();
			    //console.log("submitted!");
			    $.smallBox({
			      title: "Data anda telah selesai di input :)",
			      content: "<i class='fa fa-clock-o'></i> <i>Finish</i>",
			      color: "#5F895F",
			      iconSmall: "fa fa-check bounce animated",
			      timeout: 4000
			    });
			    
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

function addnewkaryawan(){
		
			$("#addEmp").append( "<tr><td><input name=''class='form-control' type='text'></td><td><input name=[]'certname'class='form-control' type='text'></td><td><input name='certnum'class='form-control' type='text'></td><td><input name='certdoi'class='form-control' type='date'></td><td><input name='certexp'class='form-control' type='date'></td></tr>" );
			}


function addExp(){
		
			$("#addPengalaman").append( "<tr><td><input  class='form-control' name='namakegiatancsr[]' type='text'> </td><td><textarea name='supplieraddress' row='2' class='form-control' placeholder='Dekripsikan pekerjaan anda'></textarea></td><td><input  class='form-control' name='desckegiatancsr' type='text'> </td></tr>" );
			}




</script>





