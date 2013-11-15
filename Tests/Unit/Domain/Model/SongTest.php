<?php

namespace ThomasWoehlke\TwRecordcollection\Tests;
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Test case for class \ThomasWoehlke\TwRecordcollection\Domain\Model\Song.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Record Collection
 *
 */
class SongTest extends \TYPO3\CMS\Extbase\Tests\Unit\BaseTestCase {
	/**
	 * @var \ThomasWoehlke\TwRecordcollection\Domain\Model\Song
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new \ThomasWoehlke\TwRecordcollection\Domain\Model\Song();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getSongReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setSongForStringSetsSong() { 
		$this->fixture->setSong('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getSong()
		);
	}
	
	/**
	 * @test
	 */
	public function getInterpreterReturnsInitialValueForInterpreter() { }

	/**
	 * @test
	 */
	public function setInterpreterForInterpreterSetsInterpreter() { }
	
	/**
	 * @test
	 */
	public function getAlbumNameReturnsInitialValueForAlbumName() { }

	/**
	 * @test
	 */
	public function setAlbumNameForAlbumNameSetsAlbumName() { }
	
	/**
	 * @test
	 */
	public function getYearReturnsInitialValueForYear() { }

	/**
	 * @test
	 */
	public function setYearForYearSetsYear() { }
	
	/**
	 * @test
	 */
	public function getGenreReturnsInitialValueForGenre() { }

	/**
	 * @test
	 */
	public function setGenreForGenreSetsGenre() { }
	
	/**
	 * @test
	 */
	public function getRecordTypeReturnsInitialValueForRecordType() { }

	/**
	 * @test
	 */
	public function setRecordTypeForRecordTypeSetsRecordType() { }
	
	/**
	 * @test
	 */
	public function getRecordLabelReturnsInitialValueForRecordLabel() { }

	/**
	 * @test
	 */
	public function setRecordLabelForRecordLabelSetsRecordLabel() { }
	
	/**
	 * @test
	 */
	public function getSideReturnsInitialValueForSide() { }

	/**
	 * @test
	 */
	public function setSideForSideSetsSide() { }
	
	/**
	 * @test
	 */
	public function getExtraReturnsInitialValueForExtra() { }

	/**
	 * @test
	 */
	public function setExtraForExtraSetsExtra() { }
	
}
?>