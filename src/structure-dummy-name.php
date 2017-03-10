<?php
/**
 * Structure loader.
 *
 * @package APIAPIStructureDummyName
 * @since 1.0.0
 */

if ( ! function_exists( 'apiapi_register_structure_dummy_name' ) ) {

	/**
	 * Registers the structure for [...].
	 *
	 * It is stored in a global if the API-API has not yet been loaded.
	 *
	 * @since 1.0.0
	 */
	function apiapi_register_structure_dummy_name() {
		if ( function_exists( 'apiapi_manager' ) ) {
			apiapi_manager()->structures()->register( 'dummy_name', 'APIAPI\Structure_Dummy_Name\Structure_Dummy_Name' );
		} else {
			if ( ! isset( $GLOBALS['_apiapi_structures_loader'] ) ) {
				$GLOBALS['_apiapi_structures_loader'] = array();
			}

			$GLOBALS['_apiapi_structures_loader']['dummy_name'] = 'APIAPI\Structure_Dummy_Name\Structure_Dummy_Name';
		}
	}

	apiapi_register_structure_dummy_name();

}
