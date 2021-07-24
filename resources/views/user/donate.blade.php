@extends('user.site_user.master_user')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@section('title')
  	Donate | WLK Foundation
@endsection
<style>
	.owl-prev *,
        .owl-next *{
            margin-top: 7px;
        }
</style>
@section('content')
			<section class="section normalhead lb" style="background: linear-gradient(45deg, #3ac5c8 1%, #0b509e 100%);">
			<div class="container">
				<div class="row">	
					<div class="col-md-10 col-md-offset-1 col-sm-12 text-center">
						<h2>Donate Now</h2>
					</div><!-- end col -->
				</div><!-- end row -->
			</div><!-- end container -->
		</section><!-- end section -->



   		<section class="section bt">
			<div class="container">
				{{-- <div class="row text-center">
					<div class="col-md-12">
						<div class="media-box" style="margin-top:-100px;">
							<img src="upload/wlkow.jpg" alt="" style="width:100%;" class="img-responsive">
						</div><!-- end media box -->
					</div><!-- end col -->
				</div><!-- end row --> --}}

				<hr class="invis2">

				<div class="row" style="margin-top:-120px;">
					{{-- <div class="col-md-6 col-sm-12 col-xs-12">
						<div class="text-box-2">
							<h3>Donate Form</h3>
                <form action="{{url('/insert_donate')}}" role="form" class="contactform" method="post">
                            {{csrf_field()}}
						    <div class="form-group">
						        <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
						    </div>
						    <div class="form-group">
						        <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
						    </div>
						  
                <div class="form-group">
									<select name="country" class="form-control" title="Country" required>
											<option>Country List</option>
											<option value="Afghanistan"> Afghanistan </option>
											<option value="Albania"> Albania </option>
											<option value="Algeria"> Algeria </option>
											<option value="American Samoa"> American Samoa </option>
											<option value="Andorra"> Andorra </option>
											<option value="Angola"> Angola </option>
											<option value="Anguilla"> Anguilla </option>
											<option value="Antigua and Barbuda"> Antigua and Barbuda </option>
											<option value="Argentina"> Argentina </option>
											<option value="Armenia"> Armenia </option>
											<option value="Aruba"> Aruba </option>
											<option value="Australia"> Australia </option>
											<option value="Austria"> Austria </option>
											<option value="Azerbaijan"> Azerbaijan </option>
											<option value="The Bahamas"> The Bahamas </option>
											<option value="Bahrain"> Bahrain </option>
											<option value="Bangladesh"> Bangladesh </option>
											<option value="Barbados"> Barbados </option>
											<option value="Belarus"> Belarus </option>
											<option value="Belgium"> Belgium </option>
											<option value="Belize"> Belize </option>
											<option value="Benin"> Benin </option>
											<option value="Bermuda"> Bermuda </option>
											<option value="Bhutan"> Bhutan </option>
											<option value="Bolivia"> Bolivia </option>
											<option value="Bosnia and Herzegovina"> Bosnia and Herzegovina </option>
											<option value="Botswana"> Botswana </option>
											<option value="Brazil"> Brazil </option>
											<option value="Brunei"> Brunei </option>
											<option value="Bulgaria"> Bulgaria </option>
											<option value="Burkina Faso"> Burkina Faso </option>
											<option value="Burundi"> Burundi </option>
											<option value="Cambodia"> Cambodia </option>
											<option value="Cameroon"> Cameroon </option>
											<option value="Canada"> Canada </option>
											<option value="Cape Verde"> Cape Verde </option>
											<option value="Cayman Islands"> Cayman Islands </option>
											<option value="Central African Republic"> Central African Republic </option>
											<option value="Chad"> Chad </option>
											<option value="Chile"> Chile </option>
											<option value="People &#x27;s Republic of China"> People &#x27;s Republic of China </option>
											<option value="Republic of China"> Republic of China </option>
											<option value="Christmas Island"> Christmas Island </option>
											<option value="Cocos(Keeling) Islands"> Cocos(Keeling) Islands </option>
											<option value="Colombia"> Colombia </option>
											<option value="Comoros"> Comoros </option>
											<option value="Congo"> Congo </option>
											<option value="Cook Islands"> Cook Islands </option>
											<option value="Costa Rica"> Costa Rica </option>
											<option value="Cote d&#x27;Ivoire"> Cote d&#x27;Ivoire </option>
											<option value="Croatia"> Croatia </option>
											<option value="Cuba"> Cuba </option>
											<option value="Cyprus"> Cyprus </option>
											<option value="Czech Republic"> Czech Republic </option>
											<option value="Denmark"> Denmark </option>
											<option value="Djibouti"> Djibouti </option>
											<option value="Dominica"> Dominica </option>
											<option value="Dominican Republic"> Dominican Republic </option>
											<option value="Ecuador"> Ecuador </option>
											<option value="Egypt"> Egypt </option>
											<option value="El Salvador"> El Salvador </option>
											<option value="Equatorial Guinea"> Equatorial Guinea </option>
											<option value="Eritrea"> Eritrea </option>
											<option value="Estonia"> Estonia </option>
											<option value="Ethiopia"> Ethiopia </option>
											<option value="Falkland Islands"> Falkland Islands </option>
											<option value="Faroe Islands"> Faroe Islands </option>
											<option value="Fiji"> Fiji </option>
											<option value="Finland"> Finland </option>
											<option value="France"> France </option>
											<option value="French Polynesia"> French Polynesia </option>
											<option value="Gabon"> Gabon </option>
											<option value="The Gambia"> The Gambia </option>
											<option value="Georgia"> Georgia </option>
											<option value="Germany"> Germany </option>
											<option value="Ghana"> Ghana </option>
											<option value="Gibraltar"> Gibraltar </option>
											<option value="Greece"> Greece </option>
											<option value="Greenland"> Greenland </option>
											<option value="Grenada"> Grenada </option>
											<option value="Guadeloupe"> Guadeloupe </option>
											<option value="Guam"> Guam </option>
											<option value="Guatemala"> Guatemala </option>
											<option value="Guernsey"> Guernsey </option>
											<option value="Guinea"> Guinea </option>
											<option value="Guinea - Bissau"> Guinea - Bissau </option>
											<option value="Guyana"> Guyana </option>
											<option value="Haiti"> Haiti </option>
											<option value="Honduras"> Honduras </option>
											<option value="Hong Kong"> Hong Kong </option>
											<option value="Hungary"> Hungary </option>
											<option value="Iceland"> Iceland </option>
											<option value="India"> India </option>
											<option value="Indonesia"> Indonesia </option>
											<option value="Iran"> Iran </option>
											<option value="Iraq"> Iraq </option>
											<option value="Ireland"> Ireland </option>
											<option value="Israel"> Israel </option>
											<option value="Italy"> Italy </option>
											<option value="Jamaica"> Jamaica </option>
											<option value="Japan"> Japan </option>
											<option value="Jersey"> Jersey </option>
											<option value="Jordan"> Jordan </option>
											<option value="Kazakhstan"> Kazakhstan </option>
											<option value="Kenya"> Kenya </option>
											<option value="Kiribati"> Kiribati </option>
											<option value="North Korea"> North Korea </option>
											<option value="South Korea"> South Korea </option>
											<option value="Kosovo"> Kosovo </option>
											<option value="Kuwait"> Kuwait </option>
											<option value="Kyrgyzstan"> Kyrgyzstan </option>
											<option value="Laos"> Laos </option>
											<option value="Latvia"> Latvia </option>
											<option value="Lebanon"> Lebanon </option>
											<option value="Lesotho"> Lesotho </option>
											<option value="Liberia"> Liberia </option>
											<option value="Libya"> Libya </option>
											<option value="Liechtenstein"> Liechtenstein </option>
											<option value="Lithuania"> Lithuania </option>
											<option value="Luxembourg"> Luxembourg </option>
											<option value="Macau"> Macau </option>
											<option value="Macedonia"> Macedonia </option>
											<option value="Madagascar"> Madagascar </option>
											<option value="Malawi"> Malawi </option>
											<option value="Malaysia"> Malaysia </option>
											<option value="Maldives"> Maldives </option>
											<option value="Mali"> Mali </option>
											<option value="Malta"> Malta </option>
											<option value="Marshall Islands"> Marshall Islands </option>
											<option value="Martinique"> Martinique </option>
											<option value="Mauritania"> Mauritania </option>
											<option value="Mauritius"> Mauritius </option>
											<option value="Mayotte"> Mayotte </option>
											<option value="Mexico"> Mexico </option>
											<option value="Micronesia"> Micronesia </option>
											<option value="Moldova"> Moldova </option>
											<option value="Monaco"> Monaco </option>
											<option value="Mongolia"> Mongolia </option>
											<option value="Montenegro"> Montenegro </option>
											<option value="Montserrat"> Montserrat </option>
											<option value="Morocco"> Morocco </option>
											<option value="Mozambique"> Mozambique </option>
											<option value="Myanmar"> Myanmar </option>
											<option value="Nagorno - Karabakh"> Nagorno - Karabakh </option>
											<option value="Namibia"> Namibia </option>
											<option value="Nauru"> Nauru </option>
											<option value="Nepal"> Nepal </option>
											<option value="Netherlands"> Netherlands </option>
											<option value="Netherlands Antilles"> Netherlands Antilles </option>
											<option value="New Caledonia"> New Caledonia </option>
											<option value="New Zealand"> New Zealand </option>
											<option value="Nicaragua"> Nicaragua </option>
											<option value="Niger"> Niger </option>
											<option value="Nigeria"> Nigeria </option>
											<option value="Niue"> Niue </option>
											<option value="Norfolk Island"> Norfolk Island </option>
											<option value="Turkish Republic of Northern Cyprus"> Turkish Republic of Northern Cyprus </option>
											<option value="Northern Mariana"> Northern Mariana </option>
											<option value="Norway"> Norway </option>
											<option value="Oman"> Oman </option>
											<option value="Pakistan"> Pakistan </option>
											<option value="Palau"> Palau </option>
											<option value="Palestine"> Palestine </option>
											<option value="Panama"> Panama </option>
											<option value="Papua New Guinea"> Papua New Guinea </option>
											<option value="Paraguay"> Paraguay </option>
											<option value="Peru"> Peru </option>
											<option value="Philippines"> Philippines </option>
											<option value="Pitcairn Islands"> Pitcairn Islands </option>
											<option value="Poland"> Poland </option>
											<option value="Portugal"> Portugal </option>
											<option value="Puerto Rico"> Puerto Rico </option>
											<option value="Qatar"> Qatar </option>
											<option value="Romania"> Romania </option>
											<option value="Russia"> Russia </option>
											<option value="Rwanda"> Rwanda </option>
											<option value="Saint Barthelemy"> Saint Barthelemy </option>
											<option value="Saint Helena"> Saint Helena </option>
											<option value="Saint Kitts and Nevis"> Saint Kitts and Nevis </option>
											<option value="Saint Lucia"> Saint Lucia </option>
											<option value="Saint Martin"> Saint Martin </option>
											<option value="Saint Pierre and Miquelon"> Saint Pierre and Miquelon </option>
											<option value="Saint Vincent and the Grenadines"> Saint Vincent and the Grenadines </option>
											<option value="Samoa"> Samoa </option>
											<option value="San Marino"> San Marino </option>
											<option value="Sao Tome and Principe"> Sao Tome and Principe </option>
											<option value="Saudi Arabia"> Saudi Arabia </option>
											<option value="Senegal"> Senegal </option>
											<option value="Serbia"> Serbia </option>
											<option value="Seychelles"> Seychelles </option>
											<option value="Sierra Leone"> Sierra Leone </option>
											<option value="Singapore"> Singapore </option>
											<option value="Slovakia"> Slovakia </option>
											<option value="Slovenia"> Slovenia </option>
											<option value="Solomon Islands"> Solomon Islands </option>
											<option value="Somalia"> Somalia </option>
											<option value="Somaliland"> Somaliland </option>
											<option value="South Africa"> South Africa </option>
											<option value="South Ossetia"> South Ossetia </option>
											<option value="Spain"> Spain </option>
											<option value="Sri Lanka"> Sri Lanka </option>
											<option value="Sudan"> Sudan </option>
											<option value="Suriname"> Suriname </option>
											<option value="Svalbard"> Svalbard </option>
											<option value="Swaziland"> Swaziland </option>
											<option value="Sweden"> Sweden </option>
											<option value="Switzerland"> Switzerland </option>
											<option value="Syria"> Syria </option>
											<option value="Taiwan"> Taiwan </option>
											<option value="Tajikistan"> Tajikistan </option>
											<option value="Tanzania"> Tanzania </option>
											<option value="Thailand"> Thailand </option>
											<option value="Timor - Leste"> Timor - Leste </option>
											<option value="Togo"> Togo </option>
											<option value="Tokelau"> Tokelau </option>
											<option value="Tonga"> Tonga </option>
											<option value="Transnistria Pridnestrovie"> Transnistria Pridnestrovie </option>
											<option value="Trinidad and Tobago"> Trinidad and Tobago </option>
											<option value="Tristan da Cunha"> Tristan da Cunha </option>
											<option value="Tunisia"> Tunisia </option>
											<option value="Turkey"> Turkey </option>
											<option value="Turkmenistan"> Turkmenistan </option>
											<option value="Turks and Caicos Islands"> Turks and Caicos Islands </option>
											<option value="Tuvalu"> Tuvalu </option>
											<option value="Uganda"> Uganda </option>
											<option value="Ukraine"> Ukraine </option>
											<option value="United Arab Emirates"> United Arab Emirates </option>
											<option value="United Kingdom"> United Kingdom </option>
											<option value="United States"> United States </option>
											<option value="Uruguay"> Uruguay </option>
											<option value="Uzbekistan"> Uzbekistan </option>
											<option value="Vanuatu"> Vanuatu </option>
											<option value="Vatican City"> Vatican City </option>
											<option value="Venezuela"> Venezuela </option>
											<option value="Vietnam"> Vietnam </option>
											<option value="British Virgin Islands"> British Virgin Islands </option>
											<option value="Isle of Man"> Isle of Man </option>
											<option value="US Virgin Islands"> US Virgin Islands </option>
											<option value="Wallis and Futuna"> Wallis and Futuna </option>
											<option value="Western Sahara"> Western Sahara </option>
											<option value="Yemen"> Yemen </option>
											<option value="Zambia"> Zambia </option>
											<option value="Zimbabwe"> Zimbabwe </option>
									</select>
						    </div>
						    <div class="form-group">
										<input type="number" class="form-control" id="Amount" name="amount" placeholder="Amount" >
										<div class="row">
											<div class="col-md-12">
													<button type="button" value="10.00" class="btn add" >$10.00</button>
													<button type="button" value="20.00" class="btn add" >$20.00</button>
													<button type="button" value="50.00" class="btn add" >$50.00</button>
													<button type="button" class="btn" id="custom_donate">Give Custom Amount</button>
											</div>
										</div>
								</div>

								<div class="form-group">
						        <textarea name="comment" id="comment" cols="30" rows="10" class="form-control" placeholder="Comment"></textarea>
						    </div>
						    
								<button type="submit" id="submit" name="submit" class="btn btn-primary btn-block">Submit Form</button>
								
						</form>
						</div>
					</div><!-- end col --> --}}
					{{-- <div class="form-group">
						        <textarea class="form-control" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
						    </div> --}}
					<style>
					.border-donate{
						height: 220px;
						box-shadow: 0px 0px 3px #000;
						margin-bottom: 20px;
						padding: 10px;
						border-radius: 20px;
					}
					</style>
					<div class="col-md-12 col-sm-12 col-xs-12 text-center">
						<div class="text-box-2">
							<div class="row">
								<div class="col-md-4">
									<div class="border-donate">
										<h4>
											ဝေဠုကျော် နေအိမ်
										</h4>
										<p>
											အမှတ် ၂၃၇ ၊ကံ့ကော်မြိုင် ၂လမ်း ၊ ၂၃ရပ်ကွက် ၊ VIP 1 ၊သုဝဏ္ဏ ၊ သင်္ဃန်းကျွန်းမြို့နယ်၊ ရန်ကုန်မြို့။
											( ရေစက် မှတ်တိုင် အနီး )
										</p>
										<p>
											09-4 555 000 10, 09-4 555 000 14 (viber)
											09-77 60 89 484 (Wave Money လွှဲရန်)
										</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="border-donate">
											<h4>
												ဦးစိုးသိမ်း (12/ သကတ ( နိုင် ) 011 519)
											</h4>
											<p>
												ကမ္ဘောဇ ဘဏ် (သုဝဏ္ဏဘဏ်ခွဲ - 1)
												Account No: 078 30 120 600 13 7001
												(မြန်မာကျပ်ငွေဖြင့်သာ)
											</p>
											<p>
												ဖုန်း- 09-4 555 000 10
											</p>
									</div>
								</div>
								<div class="col-md-4">
									<div class="border-donate">
										<h4>
											Daw Nyo Me Thein (12/THAKATA (N ) 123487)
										</h4>
										<p>
											Western Union မှငွေလွှဲလိုသူများအတွက်
											ဖုန်း- 09- 4 555 000 14
										</p>
									</div>
								</div>
							</div>		
							<div class="row">
								<div class="col-md-12">
									<p>
										<strong>
											နိူင်ငံခြားမှ တိုက်ရိုက် ငွေလွှဲလိုသူများအတွက်
Foreign Currency Account No: 20 610920600137201 (နိူင်ငံခြားငွေဖြင့်သာ)
										</strong>
									</p>
									<p>
										ငွေလွှဲသူက ကိုယ်တိုင်မဟုတ်ခဲ့ရင် အလှူရှင်နာမည်လေးနှင့် မြို့နာမည် ၊
ဖုန်းနံပါတ်တို့ကို ထည့်ရေးပေးပါ။
အကောင့် ထဲထည့်ပြီးရင် အလှူရှင်နာမည်လေး ၊လိပ်စာ နှင့် ငွေလွှဲသူနာမည် ၊ငွေပမာဏ ၊ ဖြတ်ပိုင်းတို့ကို ဖုန်းမတ်ဆေ့ (or) viber မှတဆင့်ပို့ပေးပါ။
									</p>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<h3>
										Donation List
									</h3>
									{{-- <table class="table table-bordered">
  <thead>
    <tr style="background-color: #36bbc5;color: #fff;">
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table> --}}
<table class="table table-hover" id="datatable" style="">
                                    <thead class="bg-primary text-primary">
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Description
                                    </th>
                                    <th>Amount</th>
									</thead>
									
                                    <tbody>
									@foreach($donates as $index=>$donate_data)
									<tr>
										<td style="height:50px;">{{$index+1}}</td>
										<td style="height:50px;">{{$donate_data->name}}</td>
										<td style="height:50px;">{!!$donate_data->description!!}</td>
										<td style="height:50px;">{{$donate_data->amount}}</td>
									</tr>
									@endforeach
									</tbody>									
								</table>
								</div>
							</div>				 
						</div>
						</div><!-- end text-box -->
					</div><!-- end col -->
			</div><!-- end container -->
</section><!-- end section -->

		<section class="section lb">
			<div class="container" style="margin-top:-30px;">
				<div class="section-title text-center">
					<h3>Our Activities</h3>
					<hr>
					{{-- <p class="lead">Our search engine optimization works and happy customers in the past.</p> --}}
				</div><!-- end section-title -->

				{{-- <div class="row lightcasestudies">
					<div class="col-md-4">
						<div class="case-box">
							<img src="upload/case_04.jpg" alt="" class="img-responsive">
							<div class="case-info clearfix">
								<div class="pull-left">
									<h4>Carbon Beauty</h4>
									<small>Backlink Service</small> 
								</div>
								<span class="case-link pull-right"><a href="case-studies-single.html"><i class="fa fa-link"></i></a></span>
							</div><!-- end case-info -->
						</div><!-- end case-box -->
					</div><!-- end col -->

					<div class="col-md-4">
						<div class="case-box">
							<img src="upload/case_05.jpg" alt="" class="img-responsive">
							<div class="case-info clearfix">
								<div class="pull-left">
									<h4>Denicler</h4>
									<small>1nd Place Success</small>
								</div>
								<span class="case-link pull-right"><a href="case-studies-single.html"><i class="fa fa-link"></i></a></span>
							</div><!-- end case-info -->
						</div><!-- end case-box -->
					</div><!-- end col -->

					<div class="col-md-4">
						<div class="case-box">
							<img src="upload/case_06.jpg" alt="" class="img-responsive">
							<div class="case-info clearfix">
								<div class="pull-left">
									<h4>KendPark</h4>
									<small>SEO / SEM</small>
								</div>
								<span class="case-link pull-right"><a href="case-studies-single.html"><i class="fa fa-link"></i></a></span>
							</div><!-- end case-info -->
						</div><!-- end case-box -->
					</div><!-- end col -->
				</div><!-- end row --> --}}
				<div class="owl-carousel owl-theme lightcasestudies withhover">
					@foreach($blogs as $blog_data)
					<div class="item-carousel">
						<div class="case-box">
							<img src="{{asset('/upload/blog/'.$blog_data->photo)}}" style="width:352px;height:250px;" alt="" class="img-responsive">
							<div class="magnifier">
								<a href="case-studies-single.html"><i class="fa fa-link"></i></a> 
							</div>
						</div><!-- end case-box -->
					</div><!-- end col -->
					@endforeach

				</div>
			</div><!-- end container -->
		</section><!-- end section -->

@endsection
@section('js')
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	
	<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    
  @if(Session::has('success'))
    <script type="text/javascript">
    toastr.success("{{Session('success')}}");</script>
	@endif
	
		<script>
			$(function(){
				$(document).on('click','.add',function() {
					var amount=$(this).val();
					$('#Amount').val(amount);
				});

					$("#custom_donate").on('click',function() {
					$("#Amount").val("");
					$('#Amount').focus();
				});
			
			});

			$('document').ready(function(){
            var t = $('#datatable').DataTable({
                "ordering": false,
                //"paging": false,
                "bInfo" : false,
                "bLengthChange": false
            });
		});
		</script>
@endsection
