<?php
/**
 * Structure_Dummy_Name class
 *
 * @package APIAPIStructureDummyName
 * @since 1.0.0
 */

namespace APIAPI\Structure_Dummy_Name;

use APIAPI\Core\Structures\Structure;

if ( ! class_exists( 'APIAPI\Structure_Dummy_Name\Structure_Dummy_Name' ) ) {

	/**
	 * Structure implementation for [...].
	 *
	 * @since 1.0.0
	 */
	class Structure_Dummy_Name extends Structure {
		/**
		 * Sets up the API structure.
		 *
		 * This method should populate the routes array, and can also be used to
		 * handle further initialization functionality, like setting the authenticator
		 * class and default authentication data.
		 *
		 * @since 1.0.0
		 * @access protected
		 */
		protected function setup() {
			// You must set the following data.
			//$this->title       = 'Title of the API, for example "Google Analytics".';
			//$this->description = 'Third-person description of what the API does, for example "Views and manages your Google Analytics data.".';
			//$this->base_uri    = 'Base URI (without any routes) to access the API.';

			// The following must be set if the API supports or partly requires authentication.
			//$this->authenticator = 'Identifier of a registered authenticator.';
			//$this->authentication_data_defaults = array(); // What you can set here depends on the specified authenticator.

			// You must specific all available routes and their methods of the API, providing details on how each one works.
			// The following is a simple example of a single route.
			/*$this->routes['/account/settings.json'] = array(
				'methods' => array(
					'GET'  => array(
						'description'          => 'Returns settings for the authenticating user.',
						'needs_authentication' => true,
						'params'               => array(),
					),
					'POST' => array(
						'description'          => 'Updates the authenticating user’s settings.',
						'needs_authentication' => true,
						'params'               => array(
							'age'  => array(
								'description' => 'The age of this user.',
								'type'        => 'integer',
								'minimum'     => 0,
							),
							'lang' => array(
								'description' => 'The language in which the interface renders for this user.',
								'type'        => 'string',
							),
						),
					),
				),
			);*/
		}
	}

}
