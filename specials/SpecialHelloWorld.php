<?php
/**
 * HelloWorld SpecialPage for MyFirstExtension extension
 *
 * @file
 * @ingroup Extensions
 */

class SpecialHelloWorld extends SpecialPage {
	public function __construct() {
		parent::__construct( 'HelloWorld' );
	}

	public function execute( $par ) {
		$request = $this->getRequest();
		$output = $this->getOutput();
		$this->setHeaders();

		$output->addHTML('<h2>Hello World!</h2>')
	}

	protected function getGroupName() {
		return 'other';
	}
}
