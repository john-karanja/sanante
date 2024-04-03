<?php

if ( ! function_exists( 'pharmacare_core_add_fontkiko_to_collection' ) ) {
	function pharmacare_core_add_fontkiko_to_collection( $icons ) {
		$icons[] = 'PharmaCareCoreFontkikoIconPack';
		return $icons;
	}
	
	add_filter( 'qode_framework_filter_add_icon', 'pharmacare_core_add_fontkiko_to_collection' );
}

if ( class_exists( 'QodeFrameworkIconPack' ) ) {
	class PharmaCareCoreFontkikoIconPack extends QodeFrameworkIconPack {
		
		public function __construct() {
			parent::__construct();
		}
		
		public function add_icon_pack() {
			$this->set_base( 'fontkiko' );
			$this->set_name( 'Fontkiko' );
			$this->set_icons( $this->iconsArray() );
			$this->set_specific_icons( $this->specific_icons() );
		}
		
		public function get_style_url() {
			return PHARMACARE_CORE_INC_URL_PATH . '/icons/' . $this->get_base() . '/assets/css/' . $this->get_base() . '.min.css';
		}
		
		public function iconsArray() {
			$icons = array(
				''                               => '',
				'kiko-train'                     => '\f001',
				'kiko-car'                       => '\f002',
				'kiko-truck'                     => '\f003',
				'kiko-bike'                      => '\f004',
				'kiko-sailboat'                  => '\f005',
				'kiko-airplane'                  => '\f006',
				'kiko-helicopter'                => '\f007',
				'kiko-motor-scooter'             => '\f008',
				'kiko-motorcycle'                => '\f009',
				'kiko-air-balloon'               => '\f010',
				'kiko-plane-takes-off'           => '\f011',
				'kiko-plane-lands'               => '\f012',
				'kiko-bus'                       => '\f013',
				'kiko-cargo-vessel'              => '\f014',
				'kiko-electromobile'             => '\f015',
				'kiko-rocket'                    => '\f016',
				'kiko-rocket-shuttle'            => '\f017',
				'kiko-ambulance'                 => '\f018',
				'kiko-police'                    => '\f019',
				'kiko-tank'                      => '\f020',
				'kiko-tractor'                   => '\f021',
				'kiko-tow-truck'                 => '\f022',
				'kiko-airship'                   => '\f023',
				'kiko-scooter'                   => '\f024',
				'kiko-self-balancing-scooter'    => '\f025',
				'kiko-segway'                    => '\f026',
				'kiko-metro'                     => '\f027',
				'kiko-syringe'                   => '\f028',
				'kiko-pills'                     => '\f029',
				'kiko-microscope'                => '\f030',
				'kiko-jar-of-medicine'           => '\f031',
				'kiko-tubes'                     => '\f032',
				'kiko-medicine'                  => '\f033',
				'kiko-toilet'                    => '\f034',
				'kiko-patch'                     => '\f035',
				'kiko-pregnancy'                 => '\f036',
				'kiko-medical-app'               => '\f037',
				'kiko-herbs'                     => '\f038',
				'kiko-recipe'                    => '\f039',
				'kiko-crushing-of-medicines'     => '\f040',
				'kiko-blood'                     => '\f041',
				'kiko-donor'                     => '\f042',
				'kiko-brain'                     => '\f043',
				'kiko-kidneys'                   => '\f044',
				'kiko-liver'                     => '\f045',
				'kiko-lungs'                     => '\f046',
				'kiko-heart'                     => '\f047',
				'kiko-intestine'                 => '\f048',
				'kiko-stomach'                   => '\f049',
				'kiko-healthy-tooth'             => '\f050',
				'kiko-aching-tooth'              => '\f051',
				'kiko-nose'                      => '\f052',
				'kiko-ear'                       => '\f053',
				'kiko-eye'                       => '\f054',
				'kiko-chest'                     => '\f055',
				'kiko-doctor'                    => '\f056',
				'kiko-doctor-woman'              => '\f057',
				'kiko-scheduled-med'             => '\f058',
				'kiko-hand'                      => '\f059',
				'kiko-foot'                      => '\f060',
				'kiko-hospital'                  => '\f061',
				'kiko-stethoscope'               => '\f062',
				'kiko-bacteria'                  => '\f063',
				'kiko-DNA'                       => '\f064',
				'kiko-spine'                     => '\f065,',
				'kiko-bed-rest'                  => '\f066',
				'kiko-bone'                      => '\f067',
				'kiko-medical-cross'             => '\f068',
				'kiko-medical-cross-usa'         => '\f069',
				'kiko-dropper'                   => '\f070',
				'kiko-heart-rate'                => '\f071',
				'kiko-marijuana'                 => '\f072',
				'kiko-fracture'                  => '\f073',
				'kiko-urine'                     => '\f074',
				'kiko-fecal'                     => '\f075',
				'kiko-diagnostics'               => '\f076',
				'kiko-allergy'                   => '\f077',
				'kiko-call-med'                  => '\f078',
				'kiko-crutches'                  => '\f079',
				'kiko-wheelchair'                => '\f080',
				'kiko-skull'                     => '\f081',
				'kiko-childbirth'                => '\f082',
				'kiko-vitamins'                  => '\f083',
				'kiko-exclamation-circle'        => '\f084',
				'kiko-exclamation-triangle'      => '\f085',
				'kiko-arrow-down-circle'         => '\f086',
				'kiko-arrow-up-circle'           => '\f087',
				'kiko-arrow-left-circle'         => '\f088',
				'kiko-arrow-right-circle'        => '\f089',
				'kiko-arrow-up'                  => '\f090',
				'kiko-arrow-down'                => '\f091',
				'kiko-arrow-right'               => '\f092',
				'kiko-arrow-left'                => '\f093',
				'kiko-double-arrow-up'           => '\f094',
				'kiko-double-arrow-down'         => '\f095',
				'kiko-double-arrow-left'         => '\f096',
				'kiko-double-arrow-right'        => '\f097',
				'kiko-clip'                      => '\f098',
				'kiko-triangular-arrow-up'       => '\f099',
				'kiko-triangular-arrow-down'     => '\f100',
				'kiko-triangular-arrow-left'     => '\f101',
				'kiko-triangular-arrow-right'    => '\f102',
				'kiko-email-at'                  => '\f103',
				'kiko-signal'                    => '\f104',
				'kiko-bad-signal'                => '\f105',
				'kiko-no-signal'                 => '\f106',
				'kiko-video'                     => '\f107',
				'kiko-sound-on'                  => '\f108',
				'kiko-sound-off'                 => '\f109',
				'kiko-call-on'                   => '\f110',
				'kiko-call-off'                  => '\f111',
				'kiko-bluetooth'                 => '\f112',
				'kiko-wifi'                      => '\f113',
				'kiko-book-open'                 => '\f114',
				'kiko-book-close'                => '\f115',
				'kiko-bookmark'                  => '\f116',
				'kiko-light-turn-on'             => '\f117',
				'kiko-light-turn-off'            => '\f118',
				'kiko-brush'                     => '\f119',
				'kiko-full-battery'              => '\f120',
				'kiko-half-empty-battery'        => '\f121',
				'kiko-empty-battery'             => '\f122',
				'kiko-check-circle'              => '\f123',
				'kiko-check-square'              => '\f124',
				'kiko-check'                     => '\f125',
				'kiko-cross-circle'              => '\f126',
				'kiko-cross-square'              => '\f127',
				'kiko-cross'                     => '\f128',
				'kiko-clock'                     => '\f129',
				'kiko-cloud-download'            => '\f130',
				'kiko-cloud-load'                => '\f131',
				'kiko-cloud'                     => '\f132',
				'kiko-loading'                   => '\f133',
				'kiko-credit-card'               => '\f134',
				'kiko-crop'                      => '\f135',
				'kiko-pencil'                    => '\f136',
				'kiko-pencil-write'              => '\f137',
				'kiko-drop'                      => '\f138',
				'kiko-no-drop'                   => '\f139',
				'kiko-email'                     => '\f140',
				'kiko-email-open'                => '\f141',
				'kiko-email-forward'             => '\f142',
				'kiko-email-deleted'             => '\f143',
				'kiko-email-attachment'          => '\f144',
				'kiko-emails'                    => '\f145',
				'kiko-expand'                    => '\f146',
				'kiko-open-eye'                  => '\f147',
				'kiko-no-eye'                    => '\f148',
				'kiko-trash'                     => '\f149',
				'kiko-sheet'                     => '\f150',
				'kiko-sheet-plus'                => '\f151',
				'kiko-sheet-minus'               => '\f152',
				'kiko-sheet-text'                => '\f153',
				'kiko-video-file'                => '\f154',
				'kiko-flag'                      => '\f155',
				'kiko-gift'                      => '\f156',
				'kiko-globe-europe'              => '\f157',
				'kiko-globe-north-america'       => '\f158',
				'kiko-globe-asia'                => '\f159',
				'kiko-globe-australia'           => '\f160',
				'kiko-globe'                     => '\f161',
				'kiko-home'                      => '\f162',
				'kiko-hashtag'                   => '\f163',
				'kiko-headphones'                => '\f164',
				'kiko-microphone'                => '\f165',
				'kiko-microphone-off'            => '\f166',
				'kiko-link'                      => '\f167',
				'kiko-zoom'                      => '\f168',
				'kiko-zoom-minus'                => '\f169',
				'kiko-zoom-plus'                 => '\f170',
				'kiko-heart-symbol'              => '\f171',
				'kiko-picture'                   => '\f172',
				'kiko-information'               => '\f173',
				'kiko-layers'                    => '\f174',
				'kiko-hamburger-menu'            => '\f175',
				'kiko-plus'                      => '\f176',
				'kiko-circle-plus'               => '\f177',
				'kiko-square-plus'               => '\f178',
				'kiko-pause'                     => '\f179',
				'kiko-record'                    => '\f180',
				'kiko-forward'                   => '\f181',
				'kiko-previous'                  => '\f182',
				'kiko-note'                      => '\f183',
				'kiko-treble-clef'               => '\f184',
				'kiko-navigation'                => '\f185',
				'kiko-moon'                      => '\f186',
				'kiko-sun'                       => '\f187',
				'kiko-comment'                   => '\f188',
				'kiko-dialogue'                  => '\f189',
				'kiko-user'                      => '\f190',
				'kiko-user-add'                  => '\f191',
				'kiko-user-minus'                => '\f192',
				'kiko-user-check'                => '\f193',
				'kiko-user-x'                    => '\f194',
				'kiko-users'                     => '\f195',
				'kiko-phone'                     => '\f196',
				'kiko-turn-off-phone'            => '\f197',
				'kiko-question'                  => '\f198',
				'kiko-label'                     => '\f199',
				'kiko-off'                       => '\f200',
				'kiko-shield'                    => '\f201',
				'kiko-shield-crossed'            => '\f202',
				'kiko-gear'                      => '\f203',
				'kiko-several-gears'             => '\f204',
				'kiko-wrench'                    => '\f205',
				'kiko-shopping-cart'             => '\f206',
				'kiko-shopping-cart-add'         => '\f207',
				'kiko-shopping-cart-delete'      => '\f208',
				'kiko-shopping-cart-pay'         => '\f209',
				'kiko-shopping-basket'           => '\f210',
				'kiko-shopping-basket-add'       => '\f211',
				'kiko-shopping-basket-delete'    => '\f212',
				'kiko-termometer-minus'          => '\f213',
				'kiko-termometer-plus'           => '\f214',
				'kiko-star'                      => '\f215',
				'kiko-half-star'                 => '\f216',
				'kiko-text'                      => '\f217',
				'kiko-lock'                      => '\f218',
				'kiko-unlock'                    => '\f219',
				'kiko-umbrella'                  => '\f220',
				'kiko-save'                      => '\f221',
				'kiko-save-error'                => '\f222',
				'kiko-paper-bag'                 => '\f223',
				'kiko-circle-checkbox'           => '\f224',
				'kiko-circle-checkbox-full'      => '\f225',
				'kiko-square-checkbox'           => '\f226',
				'kiko-square-checkbox-full'      => '\f227',
				'kiko-marker-map'                => '\f228',
				'kiko-pin'                       => '\f229',
				'kiko-map'                       => '\f230',
				'kiko-lightning'                 => '\f231',
				'kiko-lightning-off'             => '\f232',
				'kiko-pipette'                   => '\f233',
				'kiko-compass'                   => '\f234',
				'kiko-copy'                      => '\f235',
				'kiko-cut'                       => '\f236',
				'kiko-past'                      => '\f237',
				'kiko-information-symbol'        => '\f238',
				'kiko-download-file'             => '\f239',
				'kiko-broken-link'               => '\f240',
				'kiko-email-read'                => '\f241',
				'kiko-spam'                      => '\f242',
				'kiko-globe-latin-america'       => '\f243',
				'kiko-globe-japan'               => '\f244',
				'kiko-globe-africa'              => '\f245',
				'kiko-globe-east'                => '\f246',
				'kiko-globe-antarctic'           => '\f247',
				'kiko-fire'                      => '\f248',
				'kiko-support'                   => '\f249',
				'kiko-recycle-symbol'            => '\f250',
				'kiko-reload-arrow'              => '\f251',
				'kiko-cross-line'                => '\f252',
				'kiko-check-line'                => '\f253',
				'kiko-plus-line'                 => '\f254',
				'kiko-timer'                     => '\f255',
				'kiko-alarm'                     => '\f256',
				'kiko-alarm-off'                 => '\f257',
				'kiko-fingerprint'               => '\f258',
				'kiko-scan-fingerprint'          => '\f259',
				'kiko-computer-virus'            => '\f260',
				'kiko-the-compass'               => '\f234',
				'kiko-wifi-off'                  => '\f261',
				'kiko-quote-left'                => '\f262',
				'kiko-quote-right'               => '\f263',
				'kiko-ellipsis-menu-v'           => '\f264',
				'kiko-ellipsis-menu-h'           => '\f265',
				'kiko-iphone'                    => '\f266',
				'kiko-android-phone'             => '\f267',
				'kiko-google-pixel-phone'        => '\f268',
				'kiko-old-phone'                 => '\f269',
				'kiko-nokia-3310'                => '\f270',
				'kiko-bendable-smartphone'       => '\f271',
				'kiko-tablet'                    => '\f272',
				'kiko-imac-computer'             => '\f274',
				'kiko-notebook'                  => '\f275',
				'kiko-top-notebook'              => '\f276',
				'kiko-screen'                    => '\f277',
				'kiko-mouse'                     => '\f278',
				'kiko-graphic-pen'               => '\f279',
				'kiko-vr'                        => '\f280',
				'kiko-google-glass'              => '\f281',
				'kiko-graphics-tablet'           => '\f282',
				'kiko-printer'                   => '\f283',
				'kiko-scanner'                   => '\f284',
				'kiko-warehouse-scanner'         => '\f285',
				'kiko-iwatch'                    => '\f286',
				'kiko-smart-watch'               => '\f287',
				'kiko-navigator'                 => '\f288',
				'kiko-dashcam'                   => '\f289',
				'kiko-music-speaker'             => '\f290',
				'kiko-yandex-alice'              => '\f291',
				'kiko-cortana-station'           => '\f292',
				'kiko-hello-google'              => '\f293',
				'kiko-amazon-station'            => '\f294',
				'kiko-web-camera'                => '\f295',
				'kiko-desktop-microphone'        => '\f296',
				'kiko-earphones'                 => '\f297',
				'kiko-music-headphones'          => '\f298',
				'kiko-headphones-microphone'     => '\f299',
				'kiko-cable'                     => '\f300',
				'kiko-socket-eu'                 => '\f301',
				'kiko-socket-us'                 => '\f302',
				'kiko-fitness-bracelet'          => '\f303',
				'kiko-gps-tracker'               => '\f304',
				'kiko-satellite-communication'   => '\f305',
				'kiko-television'                => '\f306',
				'kiko-digital-tv'                => '\f307',
				'kiko-router'                    => '\f308',
				'kiko-external-drive'            => '\f309',
				'kiko-go-pro-camera'             => '\f310',
				'kiko-quadcopter'                => '\f311',
				'kiko-radio'                     => '\f312',
				'kiko-transmitter'               => '\f313',
				'kiko-baby-radio-monitor'        => '\f314',
				'kiko-baby-monitor'              => '\f315',
				'kiko-joystick'                  => '\f316',
				'kiko-portable-console'          => '\f317',
				'kiko-ipod'                      => '\f318',
				'kiko-handsfree'                 => '\f319',
				'kiko-camera'                    => '\f320',
				'kiko-professional-camera'       => '\f321',
				'kiko-professional-video-camera' => '\f322',
				'kiko-journalist-microphone'     => '\f323',
				'kiko-studio-lighting'           => '\f324',
				'kiko-robot-pet'                 => '\f325',
				'kiko-robot-vacuum-cleaner'      => '\f326',
				'kiko-robot-big-dog'             => '\f327',
				'kiko-humanoid-robot'            => '\f328',
				'kiko-robot'                     => '\f329',
				'kiko-robot-head'                => '\f330',
				'kiko-desktop-computer'          => '\f273',
				'kiko-anchor'                    => '\f331',
				'kiko-calendar'                  => '\f332',
				'kiko-schedule'                  => '\f333',
				'kiko-address-book'              => '\f334',
				'kiko-facebook'                  => '\f335',
				'kiko-twitter'                   => '\f336',
				'kiko-dribbble'                  => '\f337',
				'kiko-behance'                   => '\f338',
				'kiko-pinterest'                 => '\f339',
				'kiko-vkontakte'                 => '\f340',
				'kiko-odnoklassniki'             => '\f341',
				'kiko-flipboard'                 => '\f342',
				'kiko-whatsapp'                  => '\f343',
				'kiko-blogger'                   => '\f344',
				'kiko-evernote'                  => '\f345',
				'kiko-gmail'                     => '\f346',
				'kiko-line'                      => '\f347',
				'kiko-myspace'                   => '\f348',
				'kiko-pocket'                    => '\f349',
				'kiko-skype'                     => '\f350',
				'kiko-viadeo'                    => '\f351',
				'kiko-xing'                      => '\f352',
				'kiko-linkedin'                  => '\f353',
				'kiko-naver'                     => '\f354',
				'kiko-stumbleupon'               => '\f355',
				'kiko-viber'                     => '\f356',
				'kiko-snapchat'                  => '\f357',
				'kiko-yammer'                    => '\f358',
				'kiko-digg'                      => '\f359',
				'kiko-messenger'                 => '\f360',
				'kiko-live-journal'              => '\f361',
				'kiko-newsvine'                  => '\f362',
				'kiko-qzone'                     => '\f363',
				'kiko-telegram'                  => '\f364',
				'kiko-yummly'                    => '\f365',
				'kiko-douban'                    => '\f366',
				'kiko-flattr'                    => '\f367',
				'kiko-hatena'                    => '\f368',
				'kiko-reddit'                    => '\f369',
				'kiko-tumblr'                    => '\f370',
				'kiko-weibo'                     => '\f371',
				'kiko-google'                    => '\f372',
				'kiko-yandex'                    => '\f373',
				'kiko-share'                     => '\f374',
				'kiko-yandex-aura'               => '\f375',
				'kiko-wechat'                    => '\f376',
				'kiko-baidu'                     => '\f377',
				'kiko-bing'                      => '\f378',
				'kiko-like'                      => '\f379',
				'kiko-unlike'                    => '\f380'
			);
			
			$formatted_icons = array();
			foreach ( $icons as $icon_key => $icon_value ) {
				$formatted_icons[ $icon_key ] = $icon_key;
			}
			
			return $formatted_icons;
		}

        function specific_icons() {
            return array(
                'menu'          => 'kikol kiko-hamburger-menu',
                'close'         => 'kikol kiko-cross-line',
                'back-to-top'   => 'kikol kiko-triangular-arrow-up',
                'left-arrow'    => 'kikol kiko-triangular-arrow-left',
                'right-arrow'   => 'kikol kiko-triangular-arrow-right',
                'mobile-menu'   => 'kikol kiko-hamburger-menu',
                'quote'         => 'kikol kiko-quote-left',
                'facebook'      => 'kikol kiko-facebook',
                'twitter'       => 'kikol kiko-twitter' ,
                'linkedin'      => 'kikol kiko-linkedin',
                'pinterest'     => 'kikol kiko-pinterest',
                'tumblr'        => 'kikol kiko-tumblr' ,
                'vk'            => 'kikol kiko-vkontakte',
                'rating'        => 'kikol kiko-star',
                'search'        => 'kiko-zoom',
                'dropdown-cart' => 'kiko-paper-bag',
                'user'          => 'kiko-user',
            );
        }
	}
}