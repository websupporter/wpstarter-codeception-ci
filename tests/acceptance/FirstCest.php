<?php
/**
 * First Test Suite
 *
 * @package tests
 */

/**
 * Class FirstCest
 */
class FirstCest {

	/**
	 * Basic test.
	 *
	 * @param AcceptanceTester $i
	 */
	public function homepage_test( AcceptanceTester $i ) {

	    $i->amOnPage( '/' );
	    $i->see( 'Test' );
	}
}
