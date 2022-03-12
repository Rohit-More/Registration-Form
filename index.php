<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Registration Form</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
		<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="index.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="index.js"></script>
	</head>
	<body>
		<div class="wrapper">
			<h2>Registeration Form</h2>
			<div id="error_message"></div>
			<form id="regform">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Name" id="name" name="name">
				</div>
				<div class="form-group">
					<input type="email" class="form-control" placeholder="Email" id="email" name="email">
				</div>
				<div class="form-group">
					<input type="phone" pattern="[0-9]*" name="phone" id="phone" class="form-control" placeholder="Phone Number" maxlength="15">
				</div>
				<div class="form-group phoneinput">
					<!-- country codes (ISO 3166) and Dial codes. -->
					<select name="countryCode" id="countryCode">
						<option value="" Selected>Select Country</option>
						<option data-countryCode="United Kingdom" value="44">UK (+44)</option>
						<option data-countryCode="United States of America" value="1">USA (+1)</option>
						<option data-countryCode="Algeria" value="213">Algeria (+213)</option>
						<option data-countryCode="Andorra" value="376">Andorra (+376)</option>
						<option data-countryCode="Angola" value="244">Angola (+244)</option>
						<option data-countryCode="Anguilla" value="1264">Anguilla (+1264)</option>
						<option data-countryCode="Antigua" value="1268">Antigua &amp; Barbuda (+1268)</option>
						<option data-countryCode="Argentina" value="54">Argentina (+54)</option>
						<option data-countryCode="Armenia" value="374">Armenia (+374)</option>
						<option data-countryCode="Aruba" value="297">Aruba (+297)</option>
						<option data-countryCode="Australia" value="61">Australia (+61)</option>
						<option data-countryCode="Austria" value="43">Austria (+43)</option>
						<option data-countryCode="Azerbaijan" value="994">Azerbaijan (+994)</option>
						<option data-countryCode="Bahamas" value="1242">Bahamas (+1242)</option>
						<option data-countryCode="Bahrain" value="973">Bahrain (+973)</option>
						<option data-countryCode="Bangladesh" value="880">Bangladesh (+880)</option>
						<option data-countryCode="Barbados" value="1246">Barbados (+1246)</option>
						<option data-countryCode="Belarus" value="375">Belarus (+375)</option>
						<option data-countryCode="Belgium" value="32">Belgium (+32)</option>
						<option data-countryCode="Belize" value="501">Belize (+501)</option>
						<option data-countryCode="Benin" value="229">Benin (+229)</option>
						<option data-countryCode="Bermuda" value="1441">Bermuda (+1441)</option>
						<option data-countryCode="Bhutan" value="975">Bhutan (+975)</option>
						<option data-countryCode="Bolivia" value="591">Bolivia (+591)</option>
						<option data-countryCode="Bosnia Herzegovina" value="387">Bosnia Herzegovina (+387)</option>
						<option data-countryCode="Botswana" value="267">Botswana (+267)</option>
						<option data-countryCode="Brazil" value="55">Brazil (+55)</option>
						<option data-countryCode="Brunei" value="673">Brunei (+673)</option>
						<option data-countryCode="Bulgaria" value="359">Bulgaria (+359)</option>
						<option data-countryCode="Burkina Faso" value="226">Burkina Faso (+226)</option>
						<option data-countryCode="Burundi" value="257">Burundi (+257)</option>
						<option data-countryCode="Cambodia" value="855">Cambodia (+855)</option>
						<option data-countryCode="Cameroon" value="237">Cameroon (+237)</option>
						<option data-countryCode="Canada" value="1">Canada (+1)</option>
						<option data-countryCode="Cape Verde Islands" value="238">Cape Verde Islands (+238)</option>
						<option data-countryCode="Cayman Islands" value="1345">Cayman Islands (+1345)</option>
						<option data-countryCode="Central African Republic" value="236">Central African Republic (+236)</option>
						<option data-countryCode="Chile" value="56">Chile (+56)</option>
						<option data-countryCode="China" value="86">China (+86)</option>
						<option data-countryCode="Colombia" value="57">Colombia (+57)</option>
						<option data-countryCode="Comoros" value="269">Comoros (+269)</option>
						<option data-countryCode="Congo" value="242">Congo (+242)</option>
						<option data-countryCode="Cook Islands" value="682">Cook Islands (+682)</option>
						<option data-countryCode="Costa Rica" value="506">Costa Rica (+506)</option>
						<option data-countryCode="Croatia" value="385">Croatia (+385)</option>
						<option data-countryCode="Cuba" value="53">Cuba (+53)</option>
						<option data-countryCode="Cyprus North" value="90392">Cyprus North (+90392)</option>
						<option data-countryCode="Cyprus South" value="357">Cyprus South (+357)</option>
						<option data-countryCode="Czech Republic" value="42">Czech Republic (+42)</option>
						<option data-countryCode="Denmark" value="45">Denmark (+45)</option>
						<option data-countryCode="Djibouti" value="253">Djibouti (+253)</option>
						<option data-countryCode="Dominica" value="1809">Dominica (+1809)</option>
						<option data-countryCode="Dominican Republic" value="1809">Dominican Republic (+1809)</option>
						<option data-countryCode="Ecuador" value="593">Ecuador (+593)</option>
						<option data-countryCode="Egypt" value="20">Egypt (+20)</option>
						<option data-countryCode="El Salvador" value="503">El Salvador (+503)</option>
						<option data-countryCode="Equatorial Guinea" value="240">Equatorial Guinea (+240)</option>
						<option data-countryCode="Eritrea" value="291">Eritrea (+291)</option>
						<option data-countryCode="Estonia" value="372">Estonia (+372)</option>
						<option data-countryCode="Ethiopia" value="251">Ethiopia (+251)</option>
						<option data-countryCode="Falkland Islands" value="500">Falkland Islands (+500)</option>
						<option data-countryCode="Fahroe Islands" value="298">Faroe Islands (+298)</option>
						<option data-countryCode="Fiji" value="679">Fiji (+679)</option>
						<option data-countryCode="Finland" value="358">Finland (+358)</option>
						<option data-countryCode="France" value="33">France (+33)</option>
						<option data-countryCode="French Guiana" value="594">French Guiana (+594)</option>
						<option data-countryCode="French Polynesia" value="689">French Polynesia (+689)</option>
						<option data-countryCode="Gabon" value="241">Gabon (+241)</option>
						<option data-countryCode="Gambia" value="220">Gambia (+220)</option>
						<option data-countryCode="Georgia" value="7880">Georgia (+7880)</option>
						<option data-countryCode="Germany" value="49">Germany (+49)</option>
						<option data-countryCode="Ghana" value="233">Ghana (+233)</option>
						<option data-countryCode="Gibraltar" value="350">Gibraltar (+350)</option>
						<option data-countryCode="Greece" value="30">Greece (+30)</option>
						<option data-countryCode="Greenland" value="299">Greenland (+299)</option>
						<option data-countryCode="Grenada" value="1473">Grenada (+1473)</option>
						<option data-countryCode="Guadeloupe" value="590">Guadeloupe (+590)</option>
						<option data-countryCode="Guam" value="671">Guam (+671)</option>
						<option data-countryCode="Guatemala" value="502">Guatemala (+502)</option>
						<option data-countryCode="Guinea" value="224">Guinea (+224)</option>
						<option data-countryCode="Guinea - Bissau" value="245">Guinea - Bissau (+245)</option>
						<option data-countryCode="Guyana" value="592">Guyana (+592)</option>
						<option data-countryCode="Haiti" value="509">Haiti (+509)</option>
						<option data-countryCode="Honduras" value="504">Honduras (+504)</option>
						<option data-countryCode="Hong Kong" value="852">Hong Kong (+852)</option>
						<option data-countryCode="Hungary" value="36">Hungary (+36)</option>
						<option data-countryCode="Iceland" value="354">Iceland (+354)</option>
						<option data-countryCode="India" value="91">India (+91)</option>
						<option data-countryCode="Indonesia" value="62">Indonesia (+62)</option>
						<option data-countryCode="Iran" value="98">Iran (+98)</option>
						<option data-countryCode="Iraq" value="964">Iraq (+964)</option>
						<option data-countryCode="Ireland" value="353">Ireland (+353)</option>
						<option data-countryCode="Israel" value="972">Israel (+972)</option>
						<option data-countryCode="Italy" value="39">Italy (+39)</option>
						<option data-countryCode="Jamaica" value="1876">Jamaica (+1876)</option>
						<option data-countryCode="Japan" value="81">Japan (+81)</option>
						<option data-countryCode="Jordan" value="962">Jordan (+962)</option>
						<option data-countryCode="Kazakhstan" value="7">Kazakhstan (+7)</option>
						<option data-countryCode="Kenya" value="254">Kenya (+254)</option>
						<option data-countryCode="Kiribati" value="686">Kiribati (+686)</option>
						<option data-countryCode="North Korea" value="850">Korea North (+850)</option>
						<option data-countryCode="South Korea" value="82">Korea South (+82)</option>
						<option data-countryCode="Kuwait" value="965">Kuwait (+965)</option>
						<option data-countryCode="Kyrgyzstan" value="996">Kyrgyzstan (+996)</option>
						<option data-countryCode="Laos" value="856">Laos (+856)</option>
						<option data-countryCode="Latvia" value="371">Latvia (+371)</option>
						<option data-countryCode="Lebanon" value="961">Lebanon (+961)</option>
						<option data-countryCode="Lesotho" value="266">Lesotho (+266)</option>
						<option data-countryCode="Liberia" value="231">Liberia (+231)</option>
						<option data-countryCode="Libya" value="218">Libya (+218)</option>
						<option data-countryCode="Liechtenstein" value="417">Liechtenstein (+417)</option>
						<option data-countryCode="Lithuania" value="370">Lithuania (+370)</option>
						<option data-countryCode="Luxemburg" value="352">Luxembourg (+352)</option>
						<option data-countryCode="Macao" value="853">Macao (+853)</option>
						<option data-countryCode="Macedonia" value="389">Macedonia (+389)</option>
						<option data-countryCode="Madagascar" value="261">Madagascar (+261)</option>
						<option data-countryCode="Malawi" value="265">Malawi (+265)</option>
						<option data-countryCode="Malaysia" value="60">Malaysia (+60)</option>
						<option data-countryCode="Maldives" value="960">Maldives (+960)</option>
						<option data-countryCode="Mali" value="223">Mali (+223)</option>
						<option data-countryCode="Malta" value="356">Malta (+356)</option>
						<option data-countryCode="Marshall Islands" value="692">Marshall Islands (+692)</option>
						<option data-countryCode="Martinique" value="596">Martinique (+596)</option>
						<option data-countryCode="Mauritania" value="222">Mauritania (+222)</option>
						<option data-countryCode="Mayotte" value="269">Mayotte (+269)</option>
						<option data-countryCode="Mexico" value="52">Mexico (+52)</option>
						<option data-countryCode="Micronesia" value="691">Micronesia (+691)</option>
						<option data-countryCode="Moldova " value="373">Moldova (+373)</option>
						<option data-countryCode="Monaco " value="377">Monaco (+377)</option>
						<option data-countryCode="Mongolia " value="976">Mongolia (+976)</option>
						<option data-countryCode="Montserrat " value="1664">Montserrat (+1664)</option>
						<option data-countryCode="Morocco " value="212">Morocco (+212)</option>
						<option data-countryCode="Mozambique " value="258">Mozambique (+258)</option>
						<option data-countryCode="Myanmar " value="95">Myanmar (+95)</option>
						<option data-countryCode="Namibia " value="264">Namibia (+264)</option>
						<option data-countryCode="Nauru " value="674">Nauru (+674)</option>
						<option data-countryCode="Nepal " value="977">Nepal (+977)</option>
						<option data-countryCode="Netherlands " value="31">Netherlands (+31)</option>
						<option data-countryCode="New Caledonia " value="687">New Caledonia (+687)</option>
						<option data-countryCode="New Zealand " value="64">New Zealand (+64)</option>
						<option data-countryCode="Nicaragua " value="505">Nicaragua (+505)</option>
						<option data-countryCode="Niger " value="227">Niger (+227)</option>
						<option data-countryCode="Nigeria " value="234">Nigeria (+234)</option>
						<option data-countryCode="Niue " value="683">Niue (+683)</option>
						<option data-countryCode="Norfolk Islands " value="672">Norfolk Islands (+672)</option>
						<option data-countryCode="Northern Marianas " value="670">Northern Marianas (+670)</option>
						<option data-countryCode="Norway " value="47">Norway (+47)</option>
						<option data-countryCode="Oman " value="968">Oman (+968)</option>
						<option data-countryCode="Palau " value="680">Palau (+680)</option>
						<option data-countryCode="Panama " value="507">Panama (+507)</option>
						<option data-countryCode="Papua New Guinea " value="675">Papua New Guinea (+675)</option>
						<option data-countryCode="Paraguay " value="595">Paraguay (+595)</option>
						<option data-countryCode="Peru " value="51">Peru (+51)</option>
						<option data-countryCode="Philippines " value="63">Philippines (+63)</option>
						<option data-countryCode="Poland " value="48">Poland (+48)</option>
						<option data-countryCode="Portugal " value="351">Portugal (+351)</option>
						<option data-countryCode="Puerto Rico " value="1787">Puerto Rico (+1787)</option>
						<option data-countryCode="Qatar " value="974">Qatar (+974)</option>
						<option data-countryCode="Reunion " value="262">Reunion (+262)</option>
						<option data-countryCode="Romania " value="40">Romania (+40)</option>
						<option data-countryCode="Russia " value="7">Russia (+7)</option>
						<option data-countryCode="Rwanda " value="250">Rwanda (+250)</option>
						<option data-countryCode="San Marino " value="378">San Marino (+378)</option>
						<option data-countryCode="Sao Tome & Principe" value="239">Sao Tome &amp; Principe (+239)</option>
						<option data-countryCode="Saudi Arabia " value="966">Saudi Arabia (+966)</option>
						<option data-countryCode="Senegal " value="221">Senegal (+221)</option>
						<option data-countryCode="Serbia " value="381">Serbia (+381)</option>
						<option data-countryCode="Seychelles " value="248">Seychelles (+248)</option>
						<option data-countryCode="Sierra Leone " value="232">Sierra Leone (+232)</option>
						<option data-countryCode="Singapore " value="65">Singapore (+65)</option>
						<option data-countryCode="Slovak Republic " value="421">Slovak Republic (+421)</option>
						<option data-countryCode="Slovenia " value="386">Slovenia (+386)</option>
						<option data-countryCode="Solomon Islands " value="677">Solomon Islands (+677)</option>
						<option data-countryCode="Somalia " value="252">Somalia (+252)</option>
						<option data-countryCode="South Africa " value="27">South Africa (+27)</option>
						<option data-countryCode="Spain " value="34">Spain (+34)</option>
						<option data-countryCode="Sri Lanka " value="94">Sri Lanka (+94)</option>
						<option data-countryCode="St. Helena" value="290">St. Helena (+290)</option>
						<option data-countryCode="St. Kitts " value="1869">St. Kitts (+1869)</option>
						<option data-countryCode="St. Lucia " value="1758">St. Lucia (+1758)</option>
						<option data-countryCode="Sudan " value="249">Sudan (+249)</option>
						<option data-countryCode="Suriname " value="597">Suriname (+597)</option>
						<option data-countryCode="Swaziland " value="268">Swaziland (+268)</option>
						<option data-countryCode="Sweden " value="46">Sweden (+46)</option>
						<option data-countryCode="Switzerland " value="41">Switzerland (+41)</option>
						<option data-countryCode="Syria " value="963">Syria (+963)</option>
						<option data-countryCode="Taiwan " value="886">Taiwan (+886)</option>
						<option data-countryCode="Tajikstan " value="7">Tajikstan (+7)</option>
						<option data-countryCode="Thailand " value="66">Thailand (+66)</option>
						<option data-countryCode="Togo " value="228">Togo (+228)</option>
						<option data-countryCode="Tonga " value="676">Tonga (+676)</option>
						<option data-countryCode="Trinidad & Tobago" value="1868">Trinidad &amp; Tobago (+1868)</option>
						<option data-countryCode="Tunisia " value="216">Tunisia (+216)</option>
						<option data-countryCode="Turkey " value="90">Turkey (+90)</option>
						<option data-countryCode="Turkmenistan " value="7">Turkmenistan (+7)</option>
						<option data-countryCode="Turkmenistan " value="993">Turkmenistan (+993)</option>
						<option data-countryCode="Turks & Caicos Islands" value="1649">Turks &amp; Caicos Islands (+1649)</option>
						<option data-countryCode="Tuvalu " value="688">Tuvalu (+688)</option>
						<option data-countryCode="Uganda " value="256">Uganda (+256)</option>
						<!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
						<option data-countryCode="Ukraine " value="380">Ukraine (+380)</option>
						<option data-countryCode="United Arab Emirates " value="971">United Arab Emirates (+971)</option>
						<option data-countryCode="Uruguay " value="598">Uruguay (+598)</option>
						<!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
						<option data-countryCode="Uzbekistan " value="7">Uzbekistan (+7)</option>
						<option data-countryCode="Vanuatu " value="678">Vanuatu (+678)</option>
						<option data-countryCode="Vatican " value="379">Vatican City (+379)</option>
						<option data-countryCode="Venezuela " value="58">Venezuela (+58)</option>
						<option data-countryCode="Vietnam " value="84">Vietnam (+84)</option>
						<option data-countryCode="Virgin Islands - British" value="84">Virgin Islands - British (+1284)</option>
						<option data-countryCode="Virgin Islands - US" value="84">Virgin Islands - US (+1340)</option>
						<option data-countryCode="Wallis & Futuna" value="681">Wallis &amp; Futuna (+681)</option>
						<option data-countryCode="Yemen (North)" value="969">Yemen (North)(+969)</option>
						<option data-countryCode="Yemen (South)" value="967">Yemen (South)(+967)</option>
						<option data-countryCode="Zambia " value="260">Zambia (+260)</option>
						<option data-countryCode="Zimbabwe " value="263">Zimbabwe (+263)</option>
					</select>
				</div>
				
				<div class="form-group">
					<select id="department" name="department" class="form-control">
						<option value="Department" selected>Courses</option>
						<option value="Mechanical Engineering">Mechanical Engineering</option>
						<option value="Computer Engineering">Computer Engineering</option>
						<option value="Electronics and Telecommunication">Electronics and Telecommunication</option>
						<option value="Information Technology">Information Technology</option>
						<option value="Civil Engineering">Civil Engineering</option>
					</select>
				</div>
				<button type="submit" class="btn btn-primary" name="submit-btn" >Submit</button>
			</form>
			<p id="disclaimer" style="margin: 10px 5px;">Please Note: By providing your contact information,<br> you are authorising PCCoE<br> to contact you via email, sms / telecall at your free will.</p>
		</div>
	</body>
</html>