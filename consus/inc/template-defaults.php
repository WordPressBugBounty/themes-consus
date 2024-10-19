<?php
return array(
	'header'       =>
	array(
		'icon_list'    =>
		array(
			'selective_selector' => '.consus-header__k__DWJyp3kjrs-outer',
			'styleRef'           => 'DWJyp3kjrs',
			'props'              =>
			array(),
		),
		'social_icons' =>
		array(
			'selective_selector' => '.consus-header__k__af_p6Ms1mc2-outer',
			'styleRef'           => 'af_p6Ms1mc2',
			'props'              =>
			array(),
		),
		'logo'         =>
		array(
			'selective_selector' => '.consus-header__k__i9GVFusKz7p-container',
			'styleRef'           => 'i9GVFusKz7p',
			'props'              =>
			array(
				'layoutType' => 'image',
			),
		),
		'header-menu'  =>
		array(
			'selective_selector' => '.consus-header__k__67VjE7pg-QW-outer',
			'styleRef'           => '67VjE7pg-QW',
			'props'              =>
			array(
				'showOffscreenMenuOn' => 'has-offcanvas-mobile',
			),
		),
		'navigation'   =>
		array(
			'selective_selector' => '.consus-header__k__BEfPE27X2Be-nav',
			'styleRef'           => 'zooHwVFNmS',
			'props'              =>
			array(
				'showTopBar' => false,
				'layoutType' => 'logo-spacing-menu',
				'width'      => 'boxed',
				'sticky'     => false,
				'overlap'    => false,
			),
			'style'              =>
			array(
				'descendants' =>
				array(
					'nav' =>
					array(
						'padding'    =>
						array(
							'top' =>
							array(
								'value' => 0,
							),
						),
						'background' =>
						array(
							'color' => 'transparent',
						),
					),
				),
				'ancestor'    =>
				array(
					'sticky' =>
					array(
						'descendants' =>
						array(
							'nav' =>
							array(
								'background' =>
								array(
									'color' => 'white',
								),
							),
						),
					),
				),
			),
		),
		'hero'         =>
		array(
			'selective_selector' => '.consus-header__k__KFTMhA6WOVh-outer',
			'styleRef'           => 'KFTMhA6WOVh',
			'props'              =>
			array(
				'layoutType'  => 'textWithMediaOnRight',
				'heroSection' =>
				array(
					'layout' => 'textWithMediaOnRight',
				),
			),
			'hero_column_width'  => '50',
			'style'              =>
			array(
				'descendants' =>
				array(
					'outer' =>
					array(
						'background' =>
						array(
							'type'      => 'image',
							'overlay'   =>
							array(
								'enabled'  => true,
								'type'     => 'gradient',
								'gradient' => 'linear-gradient(130deg,rgba(var(--kubio-color-6),1) 0%,rgba(var(--kubio-color-5),0) 100%)',
								'shape'    =>
								array(
									'value'  => 'none',
									'isTile' => false,
								),
								'color'    =>
								array(
									'opacity' => '0.70',
								),
							),
							'image'     =>
							array(
								0 =>
								array(
									'source'   =>
									array(),
									'position' =>
									array(
										'x' => 100,
										'y' => 54,
									),
								),
							),
							'slideshow' => null,
						),
						'padding'    =>
						array(
							'top' =>
							array(
								'unit'  => 'px',
								'value' => 90,
							),
						),
						'separators' =>
						array(
							'separatorBottom' =>
							array(),
						),
					),
				),
			),
		),
	),
	'footer'       =>
	array(
		'footer' =>
		array(
			'selective_selector' => '.consus-footer__k__vP0mYzy99sE-outer',
			'styleRef'           => 'vP0mYzy99sE',
			'props'              =>
			array(
				'attrs' =>
				array(
					'name' => 'Footer',
				),
			),
			'style'              =>
			array(
				'descendants' =>
				array(
					'outer' =>
					array(
						'background' =>
						array(
							'color' => 'rgba(var(--kubio-color-6),1)',
						),
					),
				),
			),
		),
	),
	'front-header' =>
	array(
		'icon_list'    =>
		array(
			'selective_selector' => '.consus-front-header__k__ltjkgNXxux-outer',
			'styleRef'           => 'ltjkgNXxux',
			'props'              =>
			array(),
		),
		'social_icons' =>
		array(
			'selective_selector' => '.consus-front-header__k__aOb1pz8UEqv-outer',
			'styleRef'           => 'aOb1pz8UEqv',
			'props'              =>
			array(),
		),
		'logo'         =>
		array(
			'selective_selector' => '.consus-front-header__k__afIZ7lcsb-container',
			'styleRef'           => 'afIZ7lcsb',
			'props'              =>
			array(
				'layoutType' => 'image',
			),
		),
		'header-menu'  =>
		array(
			'selective_selector' => '.consus-front-header__k__c6BbujDIAOY-outer',
			'styleRef'           => 'c6BbujDIAOY',
			'props'              =>
			array(
				'showOffscreenMenuOn' => 'has-offcanvas-mobile',
			),
		),
		'navigation'   =>
		array(
			'selective_selector' => '.consus-front-header__k__xLwdIMLPC_l-nav',
			'styleRef'           => 'Gp3qTlxXlu',
			'props'              =>
			array(
				'showTopBar' => false,
				'layoutType' => 'logo-spacing-menu',
				'width'      => 'boxed',
				'sticky'     => false,
				'overlap'    => false,
			),
			'style'              =>
			array(
				'descendants' =>
				array(
					'nav' =>
					array(
						'padding'    =>
						array(
							'top' =>
							array(
								'value' => 0,
							),
						),
						'background' =>
						array(
							'color' => 'transparent',
						),
					),
				),
				'ancestor'    =>
				array(
					'sticky' =>
					array(
						'descendants' =>
						array(
							'nav' =>
							array(
								'background' =>
								array(
									'color' => 'white',
								),
							),
						),
					),
				),
			),
		),
		'title'        =>
		array(
			'selective_selector' => '.consus-front-header__k__ukjZtaF3MN-text',
			'styleRef'           => 'ukjZtaF3MN',
			'props'              =>
			array(
				'link' =>
				array(
					'typeOpenLink' => 'sameWindow',
				),
			),
			'style'              =>
			array(
				'descendants' =>
				array(
					'text' =>
					array(
						'textAlign' => 'center',
					),
				),
			),
		),
		'subtitle'     =>
		array(
			'selective_selector' => '.consus-front-header__k__6JrzJfgx-N2-text',
			'styleRef'           => '6JrzJfgx-N2',
			'props'              =>
			array(),
			'style'              =>
			array(
				'descendants' =>
				array(
					'text' =>
					array(
						'textAlign' => 'center',
					),
				),
			),
		),
		'button-0'     =>
		array(
			'selective_selector' => '.consus-front-header__k__krjLr6qWdH7-link',
			'styleRef'           => 'krjLr6qWdH7',
			'props'              =>
			array(
				'link'          =>
				array(
					'value'         => '',
					'typeOpenLink'  => 'sameWindow',
					'noFollow'      => false,
					'lightboxMedia' => '',
				),
				'preserveSpace' =>
				array(
					'text' => false,
				),
				'icon'          =>
				array(
					'name' => 'font-awesome/arrow-right',
				),
			),
		),
		'button-1'     =>
		array(
			'selective_selector' => '.consus-front-header__k__DiSHF4d4Ej-link',
			'styleRef'           => 'DiSHF4d4Ej',
			'props'              =>
			array(
				'link'          =>
				array(
					'value'         => '',
					'typeOpenLink'  => 'sameWindow',
					'noFollow'      => false,
					'lightboxMedia' => '',
				),
				'preserveSpace' =>
				array(
					'text' => false,
				),
				'icon'          =>
				array(
					'name' => 'font-awesome/arrow-right',
				),
			),
		),
		'buttons'      =>
		array(
			'selective_selector' => '.consus-front-header__k__9uoTT9gnxCy-outer',
			'styleRef'           => '9uoTT9gnxCy',
			'props'              =>
			array(),
		),
		'hero'         =>
		array(
			'image'              =>
			array(
				'selective_selector' => '.consus-front-header__k__Ibn-_ygGi9-outer',
				'styleRef'           => 'Ibn-_ygGi9',
				'props'              =>
				array(
					'link' =>
					array(
						'typeOpenLink'  => 'sameWindow',
						'lightboxMedia' => '',
					),
				),
			),
			'selective_selector' => '.consus-front-header__k__J6FPNZyUrn-outer',
			'styleRef'           => 'J6FPNZyUrn',
			'props'              =>
			array(
				'layoutType'  => 'textWithMediaOnRight',
				'heroSection' =>
				array(
					'layout' => 'textWithMediaOnRight',
				),
			),
			'hero_column_width'  => '50',
			'style'              =>
			array(
				'descendants' =>
				array(
					'outer' =>
					array(
						'background' =>
						array(
							'type'      => 'image',
							'image'     =>
							array(
								0 =>
								array(
									'source'     =>
									array(
										'type' => 'image',
									),
									'position'   =>
									array(
										'x' => 100,
										'y' => 51,
									),
									'attachment' => 'scroll',
								),
							),
							'overlay'   =>
							array(
								'enabled'  => true,
								'color'    =>
								array(
									'opacity' => '0.50',
								),
								'type'     => 'gradient',
								'gradient' => 'linear-gradient(112deg,rgba( 0,0,0,0.3 ) 12%,rgba( 0,0,0,0.6 ) 100%)',
							),
							'slideshow' => null,
						),
						'padding'    =>
						array(),
						'separators' =>
						array(
							'separatorBottom' =>
							array(),
						),
					),
				),
			),
		),
	),
	'colors'       =>
	array(
		'kubio-color-1'           =>
		array(
			0 => 72,
			1 => 31,
			2 => 255,
		),
		'kubio-color-2'           =>
		array(
			0 => 84,
			1 => 89,
			2 => 122,
		),
		'kubio-color-3'           =>
		array(
			0 => 236,
			1 => 239,
			2 => 241,
		),
		'kubio-color-4'           =>
		array(
			0 => 255,
			1 => 87,
			2 => 34,
		),
		'kubio-color-5'           =>
		array(
			0 => 255,
			1 => 255,
			2 => 255,
		),
		'kubio-color-6'           =>
		array(
			0 => 38,
			1 => 50,
			2 => 56,
		),
		'kubio-color-1-variant-1' =>
		array(
			0 => 210,
			1 => 201,
			2 => 255,
		),
		'kubio-color-1-variant-2' =>
		array(
			0 => 141,
			1 => 116,
			2 => 255,
		),
		'kubio-color-1-variant-3' =>
		array(
			0 => 72,
			1 => 31,
			2 => 255,
		),
		'kubio-color-1-variant-4' =>
		array(
			0 => 47,
			1 => 20,
			2 => 169,
		),
		'kubio-color-1-variant-5' =>
		array(
			0 => 23,
			1 => 10,
			2 => 84,
		),
		'kubio-color-2-variant-1' =>
		array(
			0 => 142,
			1 => 151,
			2 => 206,
		),
		'kubio-color-2-variant-2' =>
		array(
			0 => 84,
			1 => 89,
			2 => 122,
		),
		'kubio-color-2-variant-3' =>
		array(
			0 => 43,
			1 => 53,
			2 => 121,
		),
		'kubio-color-2-variant-4' =>
		array(
			0 => 2,
			1 => 18,
			2 => 121,
		),
		'kubio-color-2-variant-5' =>
		array(
			0 => 25,
			1 => 26,
			2 => 36,
		),
		'kubio-color-3-variant-1' =>
		array(
			0 => 236,
			1 => 239,
			2 => 241,
		),
		'kubio-color-3-variant-2' =>
		array(
			0 => 155,
			1 => 206,
			2 => 240,
		),
		'kubio-color-3-variant-3' =>
		array(
			0 => 75,
			1 => 174,
			2 => 240,
		),
		'kubio-color-3-variant-4' =>
		array(
			0 => 152,
			1 => 154,
			2 => 155,
		),
		'kubio-color-3-variant-5' =>
		array(
			0 => 69,
			1 => 70,
			2 => 70,
		),
		'kubio-color-4-variant-1' =>
		array(
			0 => 255,
			1 => 216,
			2 => 204,
		),
		'kubio-color-4-variant-2' =>
		array(
			0 => 255,
			1 => 151,
			2 => 119,
		),
		'kubio-color-4-variant-3' =>
		array(
			0 => 255,
			1 => 87,
			2 => 34,
		),
		'kubio-color-4-variant-4' =>
		array(
			0 => 169,
			1 => 58,
			2 => 22,
		),
		'kubio-color-4-variant-5' =>
		array(
			0 => 84,
			1 => 29,
			2 => 11,
		),
		'kubio-color-5-variant-1' =>
		array(
			0 => 255,
			1 => 255,
			2 => 255,
		),
		'kubio-color-5-variant-2' =>
		array(
			0 => 204,
			1 => 204,
			2 => 204,
		),
		'kubio-color-5-variant-3' =>
		array(
			0 => 153,
			1 => 153,
			2 => 153,
		),
		'kubio-color-5-variant-4' =>
		array(
			0 => 101,
			1 => 101,
			2 => 101,
		),
		'kubio-color-5-variant-5' =>
		array(
			0 => 50,
			1 => 50,
			2 => 50,
		),
		'kubio-color-6-variant-1' =>
		array(
			0 => 153,
			1 => 201,
			2 => 225,
		),
		'kubio-color-6-variant-2' =>
		array(
			0 => 95,
			1 => 125,
			2 => 140,
		),
		'kubio-color-6-variant-3' =>
		array(
			0 => 38,
			1 => 50,
			2 => 56,
		),
		'kubio-color-6-variant-4' =>
		array(
			0 => 19,
			1 => 43,
			2 => 55,
		),
		'kubio-color-6-variant-5' =>
		array(
			0 => 1,
			1 => 37,
			2 => 55,
		),
	),
	'fonts'        =>
	array(
		'Open Sans'  =>
		array(
			0  => 400,
			1  => '300',
			2  => '300italic',
			3  => '400',
			4  => '400italic',
			5  => '600',
			6  => '600italic',
			7  => '700',
			8  => '700italic',
			9  => '800',
			10 => '800italic',
		),
		'Mulish'     =>
		array(
			0 => 400,
			1 => 300,
			2 => 700,
			3 => 900,
			4 => 800,
			5 => 600,
			6 => 500,
		),
		'Roboto'     =>
		array(
			0  => 400,
			1  => '100',
			2  => '100italic',
			3  => '300',
			4  => '300italic',
			5  => 'regular',
			6  => 'italic',
			7  => '500',
			8  => '500italic',
			9  => '700',
			10 => '700italic',
			11 => '900',
			12 => '900italic',
		),
		'Carter One' =>
		array(
			0 => 400,
		),
		'Lora'       =>
		array(
			0 => 300,
			1 => 600,
			2 => 500,
		),
		'Cabin'      =>
		array(
			0 => 600,
			1 => 500,
			2 => 400,
		),
		'Poppins'    =>
		array(
			0 => 700,
			1 => 400,
		),
	),
);
