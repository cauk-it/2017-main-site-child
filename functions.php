<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

$tsml_street_only = false;

function theme_override_tsml_strings($translated_text, $text, $domain) {
    if ($domain == '12-step-meeting-list') {
        switch ($translated_text) {
            case 'Region':
                return 'Geographical Area';
        }
    }
    return $translated_text;
}
add_filter('gettext', 'theme_override_tsml_strings', 20, 3);

if (function_exists('tsml_custom_types')) {
    tsml_custom_addresses(array(
		// Gloucester Quaker Meeting House, Gloucester, CAUK
		'Greyfriars, Southgate Street, Gloucester, GL1 1TS, UK' => array(
			'formatted_address' => 'Greyfriars, Southgate Street, Gloucester, GL1 1TS, UK',
			'city' 				=> 'Gloucester',
			'latitude' 			=> '51.863816',
			'longitude' 		=> '-2.246930',
		),
		// The Voice Hub, Newport, South Wales, CAUK
		'McCarthys Court, School Lane, Newport, Gwent, NP20 1UE, UK' => array(
			'formatted_address'	=> 'McCarthys Court, School Lane, Newport, Gwent, NP20 1UE, UK',
			'city'				=> 'Newport',
			'latitude'			=> '51.586003',
			'longitude'			=> '-2.995303',
		),
		// Brunswick Methodist Church, Swansea, CAUK
		'St Helens Road, Swansea, SA1 4BE, UK' => array(
			'formatted_address'	=> 'St Helens Road, Swansea, SA1 4BE, UK',
			'city'				=> 'Swansea',
			'latitude'			=> '51.616714',
			'longitude'			=> '-3.955768'
		),
		// United Reform and Methodist Church, Ashford, CAUK
		'Cade Road, Ashford, Kent, TN23 6JE, UK' => array(
			'formatted_address'	=> 'Cade Road, Ashford, Kent, TN23 6JE, UK',
			'city'				=> 'Ashford',
			'latitude'			=> '51.134574',
			'longitude'			=> '0.864074'
		),
		// Hackbridge Hall, Hackbridge, CAUK
		'London Road, Hackbridge, SM6 7HF, UK' => array(
			'formatted_address'	=> 'London Road, Hackbridge, SM6 7HF, UK',
			'city'				=> 'Hackbridge',
			'latitude'			=> '51.380054',
			'longitude'			=> '-0.155461',
		),
		// Salvation Army, Woking, CAUK
		'Sythwood, Goldsworth Park, Woking, Surrey, GU21 3BE, UK' => array(
			'formatted_address'	=> 'Sythwood, Goldsworth Park, Woking, Surrey, GU21 3BE, UK',
			'city'				=> 'Woking',
			'latitude'			=> '51.323459',
			'longitude'			=> '-0.581964',
		),
		// St David's Church, Stanwell, CAUK
		'Everest Road, Stanwell, Staines-upon-Thames, TW19 7EE, UK' => array(
			'formatted_address'	=> 'Everest Road, Stanwell, Staines-upon-Thames, TW19 7EE, UK',
			'city'				=> 'Staines-upon-Thames',
			'latitude'			=> '51.455263',
			'longitude'			=> '-0.478025',
		),
		// Chesham House, Lancing, CAUK
		'124 South Street, Lancing, BN15 8AJ, UK' => array(
			'formatted_address'	=> '124 South Street, Lancing, BN15 8AJ, UK',
			'city'				=> 'Lancing',
			'latitude'			=> '50.822999',
			'longitude'			=> '-0.324011',
		),
		// All Saints Church, Eastbourne, CAUK
		'21a Grange Road, Eastbourne, BN21 4HE, UK' => array(
			'formatted_address'	=> '21a Grange Road, Eastbourne, BN21 4HE, UK',
			'city'				=> 'Eastbourne',
			'latitude'			=> '50.761831',
			'longitude'			=> '0.279400',
		),
		// South Portslade Community Centre, Portslade, CAUK
		'Church Road, Portslade, BN41 1LB, UK' => array(
			'formatted_address' => 'Church Road, Portslade, BN41 1LB, UK',
			'city'				=> 'Portslade',
			'latitude'			=> '50.833244',
			'longitude'			=> '-0.213686',
		),
		// Belle Vale Fire Station, Liverpool, CAUK
		'Childwall Valley Road, Liverpool, L25 2PY, UK' => array(
			'formatted_address' => 'Childwall Valley Road, Liverpool, L25 2PY, UK',
			'city'				=> 'Liverpool',
			'latitude'			=> '53.390188',
			'longitude'			=> '-2.852806',
		),
    ));
}
?>
