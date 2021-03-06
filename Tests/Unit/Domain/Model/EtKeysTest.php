<?php
namespace ArbkomEKvW\Evangtermine\Tests\Unit\Domain\Model;

/**
 * *************************************************************
 * Copyright notice
 *
 * (c) 2015 Christoph Roth <christoph.roth@lka.ekvw.de>, Evangelische Kirche von Westfalen
 *
 * All rights reserved
 *
 * This script is part of the TYPO3 project. The TYPO3 project is
 * free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * The GNU General Public License can be found at
 * http://www.gnu.org/copyleft/gpl.html.
 *
 * This script is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * This copyright notice MUST APPEAR in all copies of the script!
 * *************************************************************
 */

/**
 * Test case for class \ArbkomEKvW\Evangtermine\Domain\Model\EtKeys.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Christoph Roth <christoph.roth@lka.ekvw.de>
 */
 class EtKeysTest extends \ArbkomEKvW\Evangtermine\Tests\Unit\AbkekvwTestCase {
 	
 	/**
 	 * @var \ArbkomEKvW\Evangtermine\Domain\Model\EtKeys
 	 */
 	protected $subject = NULL;
 	
 	protected function setUp() {
 		$this->subject = $this->objectManager->get('\ArbkomEKvW\Evangtermine\Domain\Model\EtKeys');
 	}
 	
 	protected function tearDown() {
 		unset ($this->subject);
 	}
 	
 	
 	/**
 	 * 
 	 * @test
 	 */
 	public function getStandardValues() {
 		$this->assertEquals('', $this->subject->getValue());
 	}
 	
 	/**
 	 *
 	 * @test
 	 */
 	public function getCustomValues() {
 		$this->subject->setRegion('19032');
 		$this->subject->setQ('Tür');
 		$this->assertEquals('region=19032&q=T%FCr', $this->subject->getValue());
 	}
 	
 	/**
 	 * @test
 	 */
 	public function setOnlyID() {
 		$this->subject->setID('12345');
 		$this->assertEquals('ID=12345', $this->subject->getValue());
 	}
 }
