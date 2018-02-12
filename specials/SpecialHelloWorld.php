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

		$output->addHTML('<h2>This is a special page</h2>');
		$output->addHTML("<p>I made a special page and put some words on it. It still doesn't do anything</p>");
	}

	protected function getGroupName() {
		return 'other';
	}
}
