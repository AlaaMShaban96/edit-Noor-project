
<!DOCTYPE html >
<html >
<head>
	
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  
   
	<title>Email Template</title>

	

	<style type="text/css" media="screen">
		/* Linked Styles */
		body { padding:0 !important;
         margin:0 !important;
         display:block !important;
         min-width:100% !important;
         width:100% !important;
         background:#001736;
         -webkit-text-size-adjust:none;
         font-family: 'Times New Roman', Times, serif
          }
		a { color:#66c7ff;
         text-decoration:none }
		p { padding:0 !important; margin:0 !important } 
		/* img { -ms-interpolation-mode: bicubic; Allow smoother rendering of resized image in Internet Explorer } */
		.mcnPreviewText { display: none !important; }

				
		/* Mobile styles */
		@media only screen and (max-device-width: 480px), only screen and (max-width: 480px) {
			.mobile-shell { width: 100% !important; min-width: 100% !important; }
			
			.text-header,
			.m-center { text-align: center !important; }
			
			.center { margin: 0 auto !important; }
			.container { padding: 20px 10px !important }
			
			.td { width: 100% !important; min-width: 100% !important; }

			.m-br-15 { height: 15px !important; }
			.p30-15 { padding: 30px 15px !important; }

			.m-td,
			.m-hide { display: none !important; width: 0 !important; height: 0 !important; font-size: 0 !important; line-height: 0 !important; min-height: 0 !important; }

			.m-block { display: block !important; }

			.fluid-img img { width: 100% !important; max-width: 100% !important; height: auto !important; }

			.column,
			.column-top,
			.column-empty,
			.column-empty2,
			.column-dir-top { float: left !important; width: 100% !important; display: block !important; }

			.column-empty { padding-bottom: 10px !important; }
			.column-empty2 { padding-bottom: 30px !important; }

			.content-spacing { width: 15px !important; }
		}
	</style>
</head>
<body class="body" style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#001736; -webkit-text-size-adjust:none;">
	<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#001736">
		<tr>
			<td align="center" valign="top">
				<table width="650" border="0" cellspacing="0" cellpadding="0" class="mobile-shell">
					<tr>
						<td class="td container" style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; margin:0; font-weight:normal; padding:55px 0px;">
							<!-- Header -->
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="p30-15" style="padding: 0px 30px 30px 30px;">
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
											<tr>
												<th class="column-top" width="145" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;">
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tr>
															{{-- <td class="img m-center" style="font-size:0pt; line-height:0pt; text-align:left;"><img src="{{asset('website/images/favicon-medical.png')}}" width="131" height="38" editable="true" border="0" alt="" /></td> --}}
														</tr>
													</table>
												</th>
												<th class="column-empty" width="1" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal; vertical-align:top;"></th>
												<th class="column" style="font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
													<table width="100%" border="0" cellspacing="0" cellpadding="0">
														<tr>
                                                            {{-- <td ><img src="{{asset('website/images/favicon-medical.png')}}" width="131" height="38" editable="true"  alt="logo" /></td> --}}

															<td class="text-header" style="color:#475c77; font-family:'Muli', Arial,sans-serif; font-size:20px; line-height:16px; text-align:right;"><span class="link2" style="color:#475c77; text-decoration:none;">Jobs Mail</span></td>
														</tr>
													</table>
												</th>
											</tr>
										</table>
									</td>
								</tr>
							</table>
							<!-- END Header -->

						
								<!-- Intro -->
								<section label='Intro'>
									<table width="100%" border="0" cellspacing="0" cellpadding="0">
										<tr>
											<td style="padding-bottom: 10px;">
												<table width="100%" border="0" cellspacing="0" cellpadding="0">
													<tr>
														<td class="tbrr p30-15" style="padding: 60px 30px; border-radius:26px 26px 0px 0px;" bgcolor="#12325c">
															<table width="100%" border="0" cellspacing="0" cellpadding="0">
																<tr>
                                                                    
																	<td class="h1 pb25" style="color:#ffffff; font-family:'Muli', Arial,sans-serif; font-size:20px; line-height:46px; text-align:center; padding-bottom:25px;">
																		cv for job {{$request->title}}
                                                                    </td>
																</tr>
																<tr>
                                                                    <td class=" pb25" style="color:#c1cddc; font-family:'Muli', Arial,sans-serif; font-size:16px; line-height:15px;text-align:center;   padding-bottom:25px;">

                                                                        <h2> Name </h2>
                                                                        <h4>{{$request->name}}</h4>
                                                                        <h2> Email  </h2>
                                                                        <h4>{{$request->email}}</h4>
                                                                        <h2> Phone Number </h2>
                                                                        <h4>{{$request->phone}}</h4>
                                                                        <h2>  Address  </h2>
                                                                        <h4>{{$request->address}}</h4>
                                                                        <h2>  Loction  </h2>
                                                                        <h4>{{$request->loction}}</h4>
                                                                        <h2>  Birth Date  </h2>
                                                                        <h4>{{$request->birthdate}}</h4>
                                                                    </td>
                                                                </tr>
                                                                
																<!-- Button -->
																
															</table>
														</td>
													</tr>
												</table>
											</td>
										</tr>
									</table>
								</section>
							 
								<!-- END Intro -->

							<!-- Footer -->
							<table width="100%" border="0" cellspacing="0" cellpadding="0">
								<tr>
									<td class="p30-15 bbrr" style="padding: 50px 30px; border-radius:0px 0px 26px 26px;" bgcolor="#0e264b">
										<table width="100%" border="0" cellspacing="0" cellpadding="0">
											<tr>
												<td class="text-footer1 pb10" style="color:#c1cddc; font-family:'Muli', Arial,sans-serif; font-size:16px; line-height:20px; text-align:center; padding-bottom:10px;"><span>  service center - Nano Tech</span></td>
											</tr>
											<tr>
												<td class="text-footer2" style="color:#8297b3; font-family:'Muli', Arial,sans-serif; font-size:12px; line-height:26px; text-align:center;"><span>For more inquiries, call 0927780208</span></td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td class="text-footer3 p30-15" style="padding: 40px 30px 0px 30px; color:#475c77; font-family:'Muli', Arial,sans-serif; font-size:12px; line-height:18px; text-align:center;">
										<span class="link2-u" style="color:#475c77; text-decoration:underline;">www.nano-tech.ly/</span>
									</td>
								</tr>
							</table>
							<!-- END Footer -->
						</td>
					</tr>
				</table>
			</td>
		</tr>
    </table> 
</body>
</html>
