<?php

include_once PHARMACARE_CORE_PLUGINS_PATH . '/woocommerce/shortcodes/product-categories-list/media-custom-fields.php';
include_once PHARMACARE_CORE_PLUGINS_PATH . '/woocommerce/shortcodes/product-categories-list/product-categories-list.php';

foreach ( glob( PHARMACARE_CORE_PLUGINS_PATH . '/woocommerce/shortcodes/product-categories-list/variations/*/include.php' ) as $variation ) {
	include_once $variation;
}