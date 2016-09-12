<?php

class PagarMe_CardTest extends PagarMeTestCase {

	public function testCreate()
	{
		$card = self::createTestCard();
		$card->create();
		$this->assertTrue($card->getId());
		$this->assertEqual($card->getFirstDigits(), '411111');
		$this->assertEqual($card->getLastDigits(), '1111');
	}

	public function testCardCreatePassingMonthCardWithaSingleDigit()
	{
		$card = self::createTestCardPassingMonthCardWithaSingleDigit();
		$card->create();
		$this->assertTrue($card->getId());
		$this->assertEqual($card->getFirstDigits(), '411111');
		$this->assertEqual($card->getLastDigits(), '1111');
	}
}
