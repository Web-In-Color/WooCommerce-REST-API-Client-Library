<?php

namespace WIC\Exceptions;

use Exception;
/**
 * WC API Client Exception class
 *
 * Provides a simple wrapper around Exception to help with error handling
 *
 * @since 2.0
 */
class ClientException extends Exception {


	/**
	 * Setup the exception
	 *
	 * @param string $message error message
	 * @param int $code error code
	 */
	public function __construct( $message, $code = 0 ) {

		parent::__construct( $message, $code );
	}


}
