<?php

namespace WIC\Resources;

/**
 * WC API Client Index resource class
 *
 * @since 2.0
 */
class Index extends Resource {


	/**
	 * Setup the resource
	 *
	 * @since 2.0
	 * @param Client $client class instance
	 */
	public function __construct( $client ) {

		parent::__construct( '', '', $client );
	}


	/**
	 * Get the index
	 *
	 * GET /
	 *
	 * @since 2.0
	 * @return array|object orders!
	 */
	public function get() {

		$this->set_request_args( array(
			'method' => 'GET',
			'path'   => '',
		) );

		return $this->do_request();
	}


}
