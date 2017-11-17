<div class="container">

      <?php if (isset($edit_success) && $edit_success == true): ?>
        <div class="alert alert-info" role="alert" id="success_message"><i class="glyphicon glyphicon-thumbs-up"></i> The user has been edited succesfully. 
        <a href="<?php echo url::to('admin'); ?>" class="btn btn-primary">back to admin</a>
        </div>
      <?php endif?>

        <div class="row row-centered">
                <div class="col-md-12 title-profile">
                        <h1>Editing the profile of: <span><?php echo $user->first_name; ?> <?php echo $user->last_name; ?></span>.</h1>
                        <p>This is the information we have from this student. Use the form to change the information.</p>

                        <p><strong>Last time updated: </strong><?php echo $user->last_updated; ?></p>

                </div>
        </div>
</div>

<div class="edit-form">
	<form class="form-group" method="post" action="">
                
        <h4>Account details</h4>

        <input type="hidden" name="user_id" value="<?php echo $user->id ?>">            

        <label for="inputEmail" class="">Email address</label>
        <input name="new_email" type="email" id="inputEmail" class="form-control" value="<?php echo $user->email; ?>">

        <label for="inputUsername" class="">User name</label>
        <input name="new_username" type="text" id="inputEmail" class="form-control" value="<?php echo $user->username;?>">

        <h4>Personal information</h4>

        <label for="inputFirstName" class="">First name</label>
        <input name="new_firstname" type="text" id="inputFirstName" class="form-control" value="<?php echo $user->first_name; ?>">

        <label for="inputUsername" class="">Last name</label>
        <input name="new_lastname" type="text" id="inputEmail" class="form-control" value="<?php echo $user->last_name; ?>">

        <label for="country" class="">Country in which the student lives now (please provide an ID-number from <a type="button" class="" data-toggle="modal" data-target="#myModal">this list</a>).</label>
        <input step="1" min="1" max="249" name="new_currentcountry" type="number" id="inputCurrentCountry" class="form-control" placeholder="<?php echo $user->country_current_id ?> | <?php $country_current = Country_Model::retrieveByID($user->country_current_id); echo $country_current->name ?>" required> .

        <label for="inputCurrentCity" class="">City in which the student lives now</label>
        <input name="new_currentcity" type="text" id="inputCurrentCity" class="form-control" value="<?php echo $user->current_city; ?>">

        <label for="inputCountryOrigin" class="">Country where the student is originally from (please provide an ID-number from <a type="button" class="" data-toggle="modal" data-target="#myModal">this list</a>).</label>
        <input step="1" min="1" max="249" name="new_origincountry" type="number" id="inputCountryOrigin" class="form-control" placeholder="<?php echo $user->country_origin_id ?> | <?php $origin_country = Country_Model::retrieveByID($user->country_origin_id); echo $origin_country->name ?>" required>

        <label for="inputBirthday" class="">Birthday</label>
        <input name="new_birthday" type="date" id="inputBirthday" class="form-control" value="<?php echo $user->birthday; ?>">

        <label for="inputPhone" class="">Phone number</label>
        <input type="new_phone" id="inputPhone" class="form-control" value="<?php echo $user->phone; ?>">

        <label for="inputLinkedIn" class="">LinkedIn (full LinkedIn URL)</label>
        <input type="new_linkedin" id="inputLinkedIn" class="form-control" value="<?php echo $user->linkedin; ?>">

        <label for="inputFacebook" class="">Facebook (full Facebook URL)</label>
        <input type="new_facebook" id="inputFacebook" class="form-control" value="<?php echo $user->facebook; ?>">

        <label for="inputGithub" class="">Github (full Github URL)</label>
        <input type="new_phone" id="inputGithub" class="form-control" value="<?php echo $user->github; ?>">      

        <label for="inputPassword" class="">User Password</label>
        <input type="new_password" id="inputPassword" class="form-control" value="<?php echo $user->password; ?>">

        <button class="btn btn-lg btn-warning btn-block button" type="submit">Change details</button>      

        </form>

        <a href="<?php echo url::to('admin'); ?>" class="btn btn-primary">back to admin</a>
</div>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Country List</h4>
      </div>
      <div class="modal-body">
        <p>
(1,     'AF',   'Afghanistan'), <br>
(2,     'AX',   'land Islands'), <br>
(3,     'AL',   'Albania'), <br>
(4,     'DZ',   'Algeria'), <br>
(5,     'AS',   'American Samoa'),  <br>
(6,     'AD',   'Andorra'), <br>
(7,     'AO',   'Angola'), <br>
(8,     'AI',   'Anguilla'), <br>
(9,     'AQ',   'Antarctica'), <br>
(10,    'AG',   'Antigua and Barbuda'), <br>
(11,    'AR',   'Argentina'), <br>
(12,    'AM',   'Armenia'), <br>
(13,    'AW',   'Aruba'), <br>
(14,    'AU',   'Australia'), <br>
(15,    'AT',   'Austria'), <br>
(16,    'AZ',   'Azerbaijan'), <br>
(17,    'BS',   'Bahamas'), <br>
(18,    'BH',   'Bahrain'), <br>
(19,    'BD',   'Bangladesh'), <br>
(20,    'BB',   'Barbados'), <br>
(21,    'BY',   'Belarus'), <br>
(22,    'BE',   'Belgium'), <br>
(23,    'BZ',   'Belize'), <br>
(24,    'BJ',   'Benin'), <br>
(25,    'BM',   'Bermuda'), <br>
(26,    'BT',   'Bhutan'), <br>
(27,    'BO',   'Bolivia, Plurinational State of'),  <br>
(28,    'BQ',   'Bonaire, Sint Eustatius and Saba'), <br>
(29,    'BA',   'Bosnia and Herzegovina'), <br>
(30,    'BW',   'Botswana'), <br>
(31,    'BV',   'Bouvet Island'), <br>
(32,    'BR',   'Brazil'), <br>
(33,    'IO',   'British Indian Ocean Territory'), <br>
(34,    'BN',   'Brunei Darussalam'), <br>
(35,    'BG',   'Bulgaria'), <br>
(36,    'BF',   'Burkina Faso'), <br>
(37,    'BI',   'Burundi'), <br>
(38,    'KH',   'Cambodia'), <br>
(39,    'CM',   'Cameroon'), <br>
(40,    'CA',   'Canada'), <br>
(41,    'CV',   'Cape Verde'), <br>
(42,    'KY',   'Cayman Islands'), <br>
(43,    'CF',   'Central African Republic'), <br>
(44,    'TD',   'Chad'), <br>
(45,    'CL',   'Chile'), <br>
(46,    'CN',   'China'), <br>
(47,    'CX',   'Christmas Island'), <br>
(48,    'CC',   'Cocos (Keeling) Islands'), <br>
(49,    'CO',   'Colombia'), <br>
(50,    'KM',   'Comoros'), <br>
(51,    'CG',   'Congo'), <br>
(52,    'CD',   'Congo, the Democratic Republic of the'), <br>
(53,    'CK',   'Cook Islands'), <br>
(54,    'CR',   'Costa Rica'), <br>
(55,    'CI',   'CÃ´te d\'Ivoire'), <br>
(56,    'HR',   'Croatia'), <br>
(57,    'CU',   'Cuba'), <br>
(58,    'CW',   'CuraÃ§ao'), <br>
(59,    'CY',   'Cyprus'), <br>
(60,    'CZ',   'Czechia'), <br>
(61,    'DK',   'Denmark'), <br>
(62,    'DJ',   'Djibouti'), <br>
(63,    'DM',   'Dominica'), <br>
(64,    'DO',   'Dominican Republic'), <br>
(65,    'EC',   'Ecuador'), <br>
(66,    'EG',   'Egypt'), <br>
(67,    'SV',   'El Salvador'), <br>
(68,    'GQ',   'Equatorial Guinea'), <br>
(69,    'ER',   'Eritrea'), <br>
(70,    'EE',   'Estonia'), <br>
(71,    'ET',   'Ethiopia'), <br>
(72,    'FK',   'Falkland Islands (Malvinas)'), <br>
(73,    'FO',   'Faroe Islands'), <br>
(74,    'FJ',   'Fiji'), <br>
(75,    'FI',   'Finland'), <br>
(76,    'FR',   'France'), <br>
(77,    'GF',   'French Guiana'), <br>
(78,    'PF',   'French Polynesia'), <br>
(79,    'TF',   'French Southern Territories'), <br>
(80,    'GA',   'Gabon'), <br>
(81,    'GM',   'Gambia'), <br>
(82,    'GE',   'Georgia'), <br>
(83,    'DE',   'Germany'), <br>
(84,    'GH',   'Ghana'), <br>
(85,    'GI',   'Gibraltar'), <br>
(86,    'GR',   'Greece'), <br>
(87,    'GL',   'Greenland'), <br>
(88,    'GD',   'Grenada'), <br>
(89,    'GP',   'Guadeloupe'), <br>
(90,    'GU',   'Guam'), <br>
(91,    'GT',   'Guatemala'), <br>
(92,    'GG',   'Guernsey'), <br>
(93,    'GN',   'Guinea'), <br>
(94,    'GW',   'Guinea-Bissau'), <br>
(95,    'GY',   'Guyana'), <br>
(96,    'HT',   'Haiti'), <br>
(97,    'HM',   'Heard Island and McDonald Islands'), <br>
(98,    'VA',   'Holy See (Vatican City State)'), <br>
(99,    'HN',   'Honduras'), <br>
(100,   'HK',   'Hong Kong'), <br>
(101,   'HU',   'Hungary'), <br>
(102,   'IS',   'Iceland'), <br>
(103,   'IN',   'India'), <br>
(104,   'ID',   'Indonesia'), <br>
(105,   'IR',   'Iran, Islamic Republic of'), <br>
(106,   'IQ',   'Iraq'), <br>
(107,   'IE',   'Ireland'), <br>
(108,   'IM',   'Isle of Man'), <br>
(109,   'IL',   'Israel'), <br>
(110,   'IT',   'Italy'), <br>
(111,   'JM',   'Jamaica'), <br>
(112,   'JP',   'Japan'), <br>
(113,   'JE',   'Jersey'), <br>
(114,   'JO',   'Jordan'), <br>
(115,   'KZ',   'Kazakhstan'), <br>
(116,   'KE',   'Kenya'), <br>
(117,   'KI',   'Kiribati'), <br>
(118,   'KP',   'Korea, Democratic People\'s Republic of'), <br>
(119,   'KR',   'Korea, Republic of'), <br>
(120,   'KW',   'Kuwait'), <br>
(121,   'KG',   'Kyrgyzstan'), <br>
(122,   'LA',   'Lao People\'s Democratic Republic'), <br>
(123,   'LV',   'Latvia'), <br>
(124,   'LB',   'Lebanon'), <br>
(125,   'LS',   'Lesotho'), <br>
(126,   'LR',   'Liberia'), <br>
(127,   'LY',   'Libya'), <br>
(128,   'LI',   'Liechtenstein'), <br>
(129,   'LT',   'Lithuania'), <br>
(130,   'LU',   'Luxembourg'), <br>
(131,   'MO',   'Macao'), <br>
(132,   'MK',   'Macedonia'), <br>
(133,   'MG',   'Madagascar'), <br>
(134,   'MW',   'Malawi'), <br>
(135,   'MY',   'Malaysia'), <br>
(136,   'MV',   'Maldives'), <br>
(137,   'ML',   'Mali'), <br>
(138,   'MT',   'Malta'), <br>
(139,   'MH',   'Marshall Islands'), <br>
(140,   'MQ',   'Martinique'), <br>
(141,   'MR',   'Mauritania'), <br>
(142,   'MU',   'Mauritius'), <br>
(143,   'YT',   'Mayotte'), <br>
(144,   'MX',   'Mexico'), <br>
(145,   'FM',   'Micronesia, Federated States of'), <br>
(146,   'MD',   'Moldova'), <br>
(147,   'MC',   'Monaco'), <br>
(148,   'MN',   'Mongolia'), <br>
(149,   'ME',   'Montenegro'), <br>
(150,   'MS',   'Montserrat'), <br>
(151,   'MA',   'Morocco'), <br>
(152,   'MZ',   'Mozambique'), <br>
(153,   'MM',   'Myanmar'), <br>
(154,   'NA',   'Namibia'), <br>
(155,   'NR',   'Nauru'),  <br>
(156,   'NP',   'Nepal'), <br>
(157,   'NL',   'Netherlands'), <br>
(158,   'NC',   'New Caledonia'), <br>
(159,   'NZ',   'New Zealand'), <br>
(160,   'NI',   'Nicaragua'), <br>
(161,   'NE',   'Niger'), <br>
(162,   'NG',   'Nigeria'), <br>
(163,   'NU',   'Niue'), <br>
(164,   'NF',   'Norfolk Island'), <br>
(165,   'MP',   'Northern Mariana Islands'), <br>
(166,   'NO',   'Norway'), <br>
(167,   'OM',   'Oman'), <br>
(168,   'PK',   'Pakistan'), <br>
(169,   'PW',   'Palau'), <br>
(170,   'PS',   'Palestine, State of'), <br>
(171,   'PA',   'Panama'), <br>
(172,   'PG',   'Papua New Guinea'), <br>
(173,   'PY',   'Paraguay'), <br>
(174,   'PE',   'Peru'), <br>
(175,   'PH',   'Philippines'), <br>
(176,   'PN',   'Pitcairn'), <br>
(177,   'PL',   'Poland'), <br>
(178,   'PT',   'Portugal'), <br>
(179,   'PR',   'Puerto Rico'), <br>
(180,   'QA',   'Qatar'), <br>
(181,   'RE',   'RÃ©union'), <br>
(182,   'RO',   'Romania'), <br>
(183,   'RU',   'Russian Federation'), <br>
(184,   'RW',   'Rwanda'), <br>
(185,   'BL',   'Saint BarthÃ©lemy'), <br>
(186,   'SH',   'Saint Helena, Ascension and Tristan da Cunha'), <br>
(187,   'KN',   'Saint Kitts and Nevis'), <br>
(188,   'LC',   'Saint Lucia'), <br>
(189,   'MF',   'Saint Martin (French part)'), <br>
(190,   'PM',   'Saint Pierre and Miquelon'), <br>
(191,   'VC',   'Saint Vincent and the Grenadines'), <br>
(192,   'WS',   'Samoa'), <br>
(193,   'SM',   'San Marino'), <br>
(194,   'ST',   'Sao Tome and Principe'), <br>
(195,   'SA',   'Saudi Arabia'), <br>
(196,   'SN',   'Senegal'), <br>
(197,   'RS',   'Serbia'), <br>
(198,   'SC',   'Seychelles'), <br>
(199,   'SL',   'Sierra Leone'), <br>
(200,   'SG',   'Singapore'), <br>
(201,   'SX',   'Sint Maarten (Dutch part)'), <br>
(202,   'SK',   'Slovakia'), <br>
(203,   'SI',   'Slovenia'), <br>
(204,   'SB',   'Solomon Islands'), <br>
(205,   'SO',   'Somalia'), <br>
(206,   'ZA',   'South Africa'), <br>
(207,   'GS',   'South Georgia and the South Sandwich Islands'), <br>
(208,   'SS',   'South Sudan'), <br>
(209,   'ES',   'Spain'), <br>
(210,   'LK',   'Sri Lanka'), <br>
(211,   'SD',   'Sudan'), <br>
(212,   'SR',   'Suriname'), <br>
(213,   'SJ',   'Svalbard and Jan Mayen'), <br>
(214,   'SZ',   'Swaziland'), <br>
(215,   'SE',   'Sweden'), <br>
(216,   'CH',   'Switzerland'), <br>
(217,   'SY',   'Syrian Arab Republic'), <br>
(218,   'TW',   'Taiwan, Province of China'), <br>
(219,   'TJ',   'Tajikistan'), <br>
(220,   'TZ',   'Tanzania, United Republic of'), <br>
(221,   'TH',   'Thailand'), <br>
(222,   'TL',   'Timor-Leste'), <br>
(223,   'TG',   'Togo'), <br>
(224,   'TK',   'Tokelau'), <br>
(225,   'TO',   'Tonga'), <br>
(226,   'TT',   'Trinidad and Tobago'), <br>
(227,   'TN',   'Tunisia'), <br>
(228,   'TR',   'Turkey'), <br>
(229,   'TM',   'Turkmenistan'), <br>
(230,   'TC',   'Turks and Caicos Islands'), <br>
(231,   'TV',   'Tuvalu'), <br>
(232,   'UG',   'Uganda'), <br>
(233,   'UA',   'Ukraine'), <br>
(234,   'AE',   'United Arab Emirates'), <br>
(235,   'GB',   'United Kingdom'), <br>
(236,   'US',   'United States'), <br>
(237,   'UM',   'United States Minor Outlying Islands'), <br>
(238,   'UY',   'Uruguay'), <br>
(239,   'UZ',   'Uzbekistan'), <br>
(240,   'VU',   'Vanuatu'), <br>
(241,   'VE',   'Venezuela, Bolivarian Republic of'), <br>
(242,   'VN',   'Viet Nam'), <br>
(243,   'VG',   'Virgin Islands, British'), <br>
(244,   'VI',   'Virgin Islands, U.S.'), <br>
(245,   'WF',   'Wallis and Futuna'), <br>
(246,   'EH',   'Western Sahara'), <br>
(247,   'YE',   'Yemen'), <br>
(248,   'ZM',   'Zambia'), <br>
(249,   'ZW',   'Zimbabwe'); <br>
</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

<style type="text/css">
        
.title-profile {
        text-align: center;
        font-family: 'Pacifico', cursive;
        color: white;
        margin-top: 3%;
        margin-bottom: 1%;
}

.title-profile p {
        font-family: 'Raleway', sans-serif;
        margin-top: 3%;
        max-width: 750px;
        margin-left: auto;
        margin-right: auto;
        font-size: 1rem;
}

.title-profile span {
        color: #D9534F;
}

.title-profile span {
        color: #D9534F;
}

.edit-form {
        max-width: 400px;
        width: 100%;
        margin-left: auto;
        margin-right: auto;     
}

.edit-form label {
        font-family: 'Raleway', sans-serif;
        color: white;
        padding-top: 5px;       
}

.edit-form h4 {
        font-family: 'Pacifico', cursive;
        color: white;
        text-align: center;
        margin-bottom: 2rem;
        padding-top: 2rem;
}

.form-control:focus {
  border-color: #FF0000;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(217,83,79, 0.6);
}

.btn-primary, .btn-primary:hover, .btn-primary:active, .btn-primary:visited {
    background-color: #D9534F !important;
    border-color: #D9534F !important;
}

.button {
        width: 30%;
        font-size: 1.1rem;
        margin-top: 10px;
}

.button2 {
        width: 30%;
        font-size: 1.1rem;
        margin-top: 10px;
        float: left;
        margin-bottom: 20vh;
}

.forgot a{
        color: white;
        float: right;
        margin-top: 5px;
}

body {
        background-color: #505050;
}