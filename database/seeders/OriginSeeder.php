<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Origin;

class OriginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        //
      DB::table('origins')->insert([
            ['name' => 'Afghanistan', 'code' => 'AF','id'=>'1'],
            ['name' => 'Åland Islands', 'code' => 'AX','id'=>'2'],
            ['name' => 'Albania', 'code' => 'AL','id'=>'3'],
            ['name' => 'Algeria', 'code' => 'DZ','id'=>'4'],
            ['name' => 'American Samoa', 'code' => 'AS','id'=>'5'],
            ['name' => 'Andorra', 'code' => 'AD','id'=>'6'],
            ['name' => 'Angola', 'code' => 'AO','id'=>'7'],
            ['name' => 'Anguilla', 'code' => 'AI','id'=>'8'],
            ['name' => 'Antarctica', 'code' => 'AQ','id'=>'9'],
            ['name' => 'Antigua and Barbuda', 'code' => 'AG','id'=>'10'],
            ['name' => 'Argentina', 'code' => 'AR','id'=>'11'],
            ['name' => 'Armenia', 'code' => 'AM','id'=>'12'],
            ['name' => 'Aruba', 'code' => 'AW','id'=>'13'],
            ['name' => 'Australia', 'code' => 'AU','id'=>'14'],
            ['name' => 'Austria', 'code' => 'AT','id'=>'15'],
            ['name' => 'Azerbaijan', 'code' => 'AZ','id'=>'16'],
            ['name' => 'Bahamas', 'code' => 'BS','id'=>'17'],
            ['name' => 'Bahrain', 'code' => 'BH','id'=>'18'],
            ['name' => 'Bangladesh', 'code' => 'BD','id'=>'19'],
            ['name' => 'Barbados', 'code' => 'BB','id'=>'20'],
            ['name' => 'Belarus', 'code' => 'BY','id'=>'21'],
            ['name' => 'Belgium', 'code' => 'BE','id'=>'22'],
            ['name' => 'Belize', 'code' => 'BZ','id'=>'23'],
            ['name' => 'Benin', 'code' => 'BJ','id'=>'24'],
            ['name' => 'Bermuda', 'code' => 'BM','id'=>'25'],
            ['name' => 'Bhutan', 'code' => 'BT','id'=>'26'],
            ['name' => 'Bolivia, Plurinational State of', 'code' => 'BO','id'=>'27'],
            ['name' => 'Bonaire, Sint Eustatius and Saba', 'code' => 'BQ','id'=>'28'],
            ['name' => 'Bosnia and Herzegovina', 'code' => 'BA','id'=>'29'],
            ['name' => 'Botswana', 'code' => 'BW','id'=>'30'],
            ['name' => 'Bouvet Island', 'code' => 'BV','id'=>'31'],
            ['name' => 'Brazil', 'code' => 'BR','id'=>'32'],
            ['name' => 'British Indian Ocean Territory', 'code' => 'IO','id'=>'33'],
            ['name' => 'Brunei Darussalam', 'code' => 'BN','id'=>'34'],
            ['name' => 'Bulgaria', 'code' => 'BG','id'=>'35'],
            ['name' => 'Burkina Faso', 'code' => 'BF','id'=>'36'],
            ['name' => 'Burundi', 'code' => 'BI','id'=>'37'],
            ['name' => 'Cambodia', 'code' => 'KH','id'=>'38'],
            ['name' => 'Cameroon', 'code' => 'CM','id'=>'39'],
            ['name' => 'Canada', 'code' => 'CA','id'=>'40'],
            ['name' => 'Cape Verde', 'code' => 'CV','id'=>'41'],
            ['name' => 'Cayman Islands', 'code' => 'KY'],
            ['name' => 'Central African Republic', 'code' => 'CF','id'=>'42'],
            ['name' => 'Chad', 'code' => 'TD','id'=>'43'],
            ['name' => 'Chile', 'code' => 'CL','id'=>'44'],
            ['name' => 'China', 'code' => 'CN','id'=>'45'],
            ['name' => 'Christmas Island', 'code' => 'CX','id'=>'46'],
            ['name' => 'Cocos (Keeling) Islands', 'code' => 'CC','id'=>'47'],
            ['name' => 'Colombia', 'code' => 'CO','id'=>'48'],
            ['name' => 'Comoros', 'code' => 'KM','id'=>'49'],
            ['name' => 'Congo', 'code' => 'CG','id'=>'50'],
            ['name' => 'Congo, the Democratic Republic of the', 'code' => 'CD','id'=>'51'],
            ['name' => 'Cook Islands', 'code' => 'CK','id'=>'52'],
            ['name' => 'Costa Rica', 'code' => 'CR','id'=>'53'],
            ['name' => 'Côte d\'Ivoire', 'code' => 'CI','id'=>'54'],
            ['name' => 'Croatia', 'code' => 'HR','id'=>'55'],
            ['name' => 'Cuba', 'code' => 'CU','id'=>'56'],
            ['name' => 'Curaçao', 'code' => 'CW','id'=>'57'],
            ['name' => 'Cyprus', 'code' => 'CY','id'=>'58'],
            ['name' => 'Czech Republic', 'code' => 'CZ','id'=>'59'],
            ['name' => 'Denmark', 'code' => 'DK','id'=>'60'],
            ['name' => 'Djibouti', 'code' => 'DJ','id'=>'61'],
            ['name' => 'Dominica', 'code' => 'DM','id'=>'62'],
            ['name' => 'Dominican Republic', 'code' => 'DO','id'=>'63'],
            ['name' => 'Ecuador', 'code' => 'EC','id'=>'64'],
            ['name' => 'Egypt', 'code' => 'EG','id'=>'65'],
            ['name' => 'El Salvador', 'code' => 'SV','id'=>'66'],
            ['name' => 'Equatorial Guinea', 'code' => 'GQ','id'=>'67'],
            ['name' => 'Eritrea', 'code' => 'ER','id'=>'68'],
            ['name' => 'Estonia', 'code' => 'EE','id'=>'69'],
            ['name' => 'Ethiopia', 'code' => 'ETH','id'=>'70'],
            ['name' => 'Falkland Islands (Malvinas)', 'code' => 'FK','id'=>'71'],
            ['name' => 'Faroe Islands', 'code' => 'FO','id'=>'72'],
            ['name' => 'Fiji', 'code' => 'FJ','id'=>'73'],
            ['name' => 'Finland', 'code' => 'FI','id'=>'74'],
            ['name' => 'France', 'code' => 'FR','id'=>'75'],
            ['name' => 'French Guiana', 'code' => 'GF','id'=>'76'],
            ['name' => 'French Polynesia', 'code' => 'PF','id'=>'77'],
            ['name' => 'French Southern Territories', 'code' => 'TF','id'=>'78'],
            ['name' => 'Gabon', 'code' => 'GA','id'=>'79'],
            ['name' => 'Gambia', 'code' => 'GM','id'=>'80'],
            ['name' => 'Georgia', 'code' => 'GE','id'=>'81'],
            ['name' => 'Germany', 'code' => 'DE','id'=>'82'],
            ['name' => 'Ghana', 'code' => 'GH','id'=>'83'],
            ['name' => 'Gibraltar', 'code' => 'GI','id'=>'84'],
            ['name' => 'Greece', 'code' => 'GR','id'=>'85'],
            ['name' => 'Greenland', 'code' => 'GL','id'=>'86'],
            ['name' => 'Grenada', 'code' => 'GD','id'=>'87'],
            ['name' => 'Guadeloupe', 'code' => 'GP','id'=>'88'],
            ['name' => 'Guam', 'code' => 'GU'],'id'=>'89',
            ['name' => 'Guatemala', 'code' => 'GT','id'=>'90'],
            ['name' => 'Guernsey', 'code' => 'GG','id'=>'91'],
            ['name' => 'Guinea', 'code' => 'GN','id'=>'92'],
            ['name' => 'Guinea-Bissau', 'code' => 'GW','id'=>'93'],
            ['name' => 'Guyana', 'code' => 'GY','id'=>'94'],
            ['name' => 'Haiti', 'code' => 'HT','id'=>'95'],
            ['name' => 'Heard Island and McDonald Mcdonald Islands', 'code' => 'HM','id'=>'96'],
            ['name' => 'Holy See (Vatican City State)', 'code' => 'VA','id'=>'97'],
            ['name' => 'Honduras', 'code' => 'HN','id'=>'98'],
            ['name' => 'Hong Kong', 'code' => 'HK','id'=>'99'],
            ['name' => 'Hungary', 'code' => 'HU','id'=>'100'],
            ['name' => 'Iceland', 'code' => 'IS','id'=>'101'],
            ['name' => 'India', 'code' => 'IN','id'=>'102'],
            ['name' => 'Indonesia', 'code' => 'ID','id'=>'103'],
            ['name' => 'Iran, Islamic Republic of', 'code' => 'IR','id'=>'104'],
            ['name' => 'Iraq', 'code' => 'IQ','id'=>'105'],
            ['name' => 'Ireland', 'code' => 'IE','id'=>'106'],
            ['name' => 'Isle of Man', 'code' => 'IM','id'=>'107'],
            ['name' => 'Israel', 'code' => 'IL','id'=>'108'],
            ['name' => 'Italy', 'code' => 'IT','id'=>'109'],
            ['name' => 'Jamaica', 'code' => 'JM','id'=>'110'],
            ['name' => 'Japan', 'code' => 'JP','id'=>'111'],
            ['name' => 'Jersey', 'code' => 'JE','id'=>'112'],
            ['name' => 'Jordan', 'code' => 'JO','id'=>'113'],
            ['name' => 'Kazakhstan', 'code' => 'KZ','id'=>'114'],
            ['name' => 'Kenya', 'code' => 'KE','id'=>'115'],
            ['name' => 'Kiribati', 'code' => 'KI','id'=>'116'],
            ['name' => 'Korea, Democratic People\'s Republic of', 'code' => 'KP','id'=>'117'],
            ['name' => 'Korea, Republic of', 'code' => 'KR','id'=>'118'],
            ['name' => 'Kuwait', 'code' => 'KW','id'=>'119'],
            ['name' => 'Kyrgyzstan', 'code' => 'KG','id'=>'120'],
            ['name' => 'Lao People\'s Democratic Republic', 'code' => 'LA','id'=>'121'],
            ['name' => 'Latvia', 'code' => 'LV','id'=>'122'],
            ['name' => 'Lebanon', 'code' => 'LB','id'=>'123'],
            ['name' => 'Lesotho', 'code' => 'LS','id'=>'124'],
            ['name' => 'Liberia', 'code' => 'LR','id'=>'125'],
            ['name' => 'Libya', 'code' => 'LY','id'=>'126'],
            ['name' => 'Liechtenstein', 'code' => 'LI','id'=>'127'],
            ['name' => 'Lithuania', 'code' => 'LT','id'=>'128'],
            ['name' => 'Luxembourg', 'code' => 'LU','id'=>'129'],
            ['name' => 'Macao', 'code' => 'MO','id'=>'130'],
            ['name' => 'Macedonia, the Former Yugoslav Republic of', 'code' => 'MK','id'=>'131'],
            ['name' => 'Madagascar', 'code' => 'MG','id'=>'132'],
            ['name' => 'Malawi', 'code' => 'MW','id'=>'133'],
            ['name' => 'Malaysia', 'code' => 'MY','id'=>'134'],
            ['name' => 'Maldives', 'code' => 'MV','id'=>'135'],
            ['name' => 'Mali', 'code' => 'ML','id'=>'136'],
            ['name' => 'Malta', 'code' => 'MT','id'=>'137'],
            ['name' => 'Marshall Islands', 'code' => 'MH','id'=>'138'],
            ['name' => 'Martinique', 'code' => 'MQ','id'=>'139'],
            ['name' => 'Mauritania', 'code' => 'MR','id'=>'140'],
            ['name' => 'Mauritius', 'code' => 'MU','id'=>'141'],
            ['name' => 'Mayotte', 'code' => 'YT','id'=>'142'],
            ['name' => 'Mexico', 'code' => 'MX','id'=>'143'],
            ['name' => 'Micronesia, Federated States of', 'code' => 'FM','id'=>'144'],
            ['name' => 'Moldova, Republic of', 'code' => 'MD','id'=>'145'],
            ['name' => 'Monaco', 'code' => 'MC','id'=>'146'],
            ['name' => 'Mongolia', 'code' => 'MN','id'=>'147'],
            ['name' => 'Montenegro', 'code' => 'ME','id'=>'148'],
            ['name' => 'Montserrat', 'code' => 'MS','id'=>'149'],
            ['name' => 'Morocco', 'code' => 'MA','id'=>'150'],
            ['name' => 'Mozambique', 'code' => 'MZ','id'=>'151'],
            ['name' => 'Myanmar', 'code' => 'MM','id'=>'152'],
            ['name' => 'Namibia', 'code' => 'NA','id'=>'153'],
            ['name' => 'Nauru', 'code' => 'NR','id'=>'154'],
            ['name' => 'Nepal', 'code' => 'NP','id'=>'155'],
            ['name' => 'Netherlands', 'code' => 'NL','id'=>'156'],
            ['name' => 'New Caledonia', 'code' => 'NC','id'=>'157'],
            ['name' => 'New Zealand', 'code' => 'NZ','id'=>'158'],
            ['name' => 'Nicaragua', 'code' => 'NI','id'=>'159'],
            ['name' => 'Niger', 'code' => 'NE','id'=>'160'],
            ['name' => 'Nigeria', 'code' => 'NG','id'=>'161'],
            ['name' => 'Niue', 'code' => 'NU','id'=>'162'],
            ['name' => 'Norfolk Island', 'code' => 'NF','id'=>'163'],
            ['name' => 'Northern Mariana Islands', 'code' => 'MP','id'=>'164'],
            ['name' => 'Norway', 'code' => 'NO','id'=>'165'],
            ['name' => 'Oman', 'code' => 'OM','id'=>'166'],
            ['name' => 'Pakistan', 'code' => 'PK','id'=>'167'],
            ['name' => 'Palau', 'code' => 'PW','id'=>'168'],
            ['name' => 'Palestine, State of', 'code' => 'PS','id'=>'169'],
            ['name' => 'Panama', 'code' => 'PA','id'=>'170'],
            ['name' => 'Papua New Guinea', 'code' => 'PG','id'=>'171'],
            ['name' => 'Paraguay', 'code' => 'PY','id'=>'172'],
            ['name' => 'Peru', 'code' => 'PE','id'=>'173'],
            ['name' => 'Philippines', 'code' => 'PH','id'=>'174'],
            ['name' => 'Pitcairn', 'code' => 'PN','id'=>'175'],
            ['name' => 'Poland', 'code' => 'PL','id'=>'176'],
            ['name' => 'Portugal', 'code' => 'PT','id'=>'177'],
            ['name' => 'Puerto Rico', 'code' => 'PR','id'=>'178'],
            ['name' => 'Qatar', 'code' => 'QA','id'=>'179'],
            ['name' => 'Réunion', 'code' => 'RE','id'=>'180'],
            ['name' => 'Romania', 'code' => 'RO','id'=>'181'],
            ['name' => 'Russian Federation', 'code' => 'RU','id'=>'182'],
            ['name' => 'Rwanda', 'code' => 'RW','id'=>'183'],
            ['name' => 'Saint Barthélemy', 'code' => 'BL','id'=>'184'],
            ['name' => 'Saint Helena, Ascension and Tristan da Cunha', 'code' => 'SH','id'=>'185'],
            ['name' => 'Saint Kitts and Nevis', 'code' => 'KN','id'=>'186'],
            ['name' => 'Saint Lucia', 'code' => 'LC','id'=>'187'],
            ['name' => 'Saint Martin (French part)', 'code' => 'MF','id'=>'188'],
            ['name' => 'Saint Pierre and Miquelon', 'code' => 'PM','id'=>'189'],
            ['name' => 'Saint Vincent and the Grenadines', 'code' => 'VC','id'=>'190'],
            ['name' => 'Samoa', 'code' => 'WS','id'=>'191'],
            ['name' => 'San Marino', 'code' => 'SM','id'=>'192'],
            ['name' => 'Sao Tome and Principe', 'code' => 'ST','id'=>'193'],
            ['name' => 'Saudi Arabia', 'code' => 'SA','id'=>'194'],
            ['name' => 'Senegal', 'code' => 'SN','id'=>'195'],
            ['name' => 'Serbia', 'code' => 'RS','id'=>'196'],
            ['name' => 'Seychelles', 'code' => 'SC','id'=>'197'],
            ['name' => 'Sierra Leone', 'code' => 'SL','id'=>'198'],
            ['name' => 'Singapore', 'code' => 'SG','id'=>'199'],
            ['name' => 'Sint Maarten (Dutch part)', 'code' => 'SX','id'=>'200'],
            ['name' => 'Slovakia', 'code' => 'SK','id'=>'201'],
            ['name' => 'Slovenia', 'code' => 'SI','id'=>'202'],
            ['name' => 'Solomon Islands', 'code' => 'SB','id'=>'203'],
            ['name' => 'Somalia', 'code' => 'SO','id'=>'204'],
            ['name' => 'South Africa', 'code' => 'ZA','id'=>'205'],
            ['name' => 'South Georgia and the South Sandwich Islands', 'code' => 'GS','id'=>'206'],
            ['name' => 'South Sudan', 'code' => 'SS','id'=>'207'],
            ['name' => 'Spain', 'code' => 'ES','id'=>'208'],
            ['name' => 'Sri Lanka', 'code' => 'LK','id'=>'209'],
            ['name' => 'Sudan', 'code' => 'SD','id'=>'210'],
            ['name' => 'Suriname', 'code' => 'SR','id'=>'211'],
            ['name' => 'Svalbard and Jan Mayen', 'code' => 'SJ','id'=>'212'],
            ['name' => 'Swaziland', 'code' => 'SZ','id'=>'213'],
            ['name' => 'Sweden', 'code' => 'SE','id'=>'214'],
            ['name' => 'Switzerland', 'code' => 'CH','id'=>'215'],
            ['name' => 'Syrian Arab Republic', 'code' => 'SY','id'=>'216'],
            ['name' => 'Taiwan', 'code' => 'TW','id'=>'217'],
            ['name' => 'Tajikistan', 'code' => 'TJ','id'=>'218'],
            ['name' => 'Tanzania, United Republic of', 'code' => 'TZ','id'=>'219'],
            ['name' => 'Thailand', 'code' => 'TH','id'=>'220'],
            ['name' => 'Timor-Leste', 'code' => 'TL','id'=>'221'],
            ['name' => 'Togo', 'code' => 'TG','id'=>'222'],
            ['name' => 'Tokelau', 'code' => 'TK','id'=>'223'],
            ['name' => 'Tonga', 'code' => 'TO','id'=>'224'],
            ['name' => 'Trinidad and Tobago', 'code' => 'TT','id'=>'225'],
            ['name' => 'Tunisia', 'code' => 'TN','id'=>'226'],
            ['name' => 'Turkey', 'code' => 'TR','id'=>'227'],
            ['name' => 'Turkmenistan', 'code' => 'TM','id'=>'228'],
            ['name' => 'Turks and Caicos Islands', 'code' => 'TC','id'=>'229'],
            ['name' => 'Tuvalu', 'code' => 'TV','id'=>'230'],
            ['name' => 'Uganda', 'code' => 'UG','id'=>'231'],
            ['name' => 'Ukraine', 'code' => 'UA','id'=>'232'],
            ['name' => 'United Arab Emirates', 'code' => 'AE','id'=>'233'],
            ['name' => 'United Kingdom', 'code' => 'GB','id'=>'234'],
            ['name' => 'United States', 'code' => 'US','id'=>'235'],
            ['name' => 'United States Minor Outlying Islands', 'code' => 'UM','id'=>'236'],
            ['name' => 'Uruguay', 'code' => 'UY','id'=>'237'],
            ['name' => 'Uzbekistan', 'code' => 'UZ','id'=>'238'],
            ['name' => 'Vanuatu', 'code' => 'VU','id'=>'239'],
            ['name' => 'Venezuela, Bolivarian Republic of', 'code' => 'VE','id'=>'240'],
            ['name' => 'Viet Nam', 'code' => 'VN','id'=>'241'],
            ['name' => 'Virgin Islands, British', 'code' => 'VG','id'=>'242'],
            ['name' => 'Virgin Islands, U.S.', 'code' => 'VI','id'=>'243'],
            ['name' => 'Wallis and Futuna', 'code' => 'WF','id'=>'244'],
            ['name' => 'Western Sahara', 'code' => 'EH','id'=>'245'],
            ['name' => 'Yemen', 'code' => 'YE','id'=>'246'],
            ['name' => 'Zambia', 'code' => 'ZM','id'=>'247'],
            ['name' => 'Zimbabwe', 'code' => 'ZW','id'=>'248'],
        ]);
      
    }
}
