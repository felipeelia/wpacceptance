<?php
/**
 * Test contact form is functioning properly
 * Located on /contact/
 *
 * @package wpassure
 */

/**
 * PHPUnit test class
 */
class ContactFormTest extends \WPAssure\PHPUnit\TestCase {

	/**
	 * When I don't fill out required fields, contact form wont submit
	 */
	public function testRequiredFieldsFail() {
		$I = $this->getAnonymousUser();

		$I->moveTo( '/contact' );

		$I->click( '.wpforms-submit' );

		$I->seeText( 'This field is required', null, "Don't see required field error text." );
	}

	/**
	 * When I fill out the form and submit, a new entry appears in the database
	 */
	public function testSubmit() {
		$this->markTestIncomplete( 'This test has not been implemented yet.' );
	}

}
