<?php
namespace ThomasWoehlke\TwRecordcollection\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
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
 *
 *
 * @package tw_recordcollection
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Song extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * song
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $song;

	/**
	 * interpreter
	 *
	 * @var \ThomasWoehlke\TwRecordcollection\Domain\Model\Interpreter
	 */
	protected $interpreter;

	/**
	 * albumName
	 *
	 * @var \ThomasWoehlke\TwRecordcollection\Domain\Model\AlbumName
	 */
	protected $albumName;

	/**
	 * year
	 *
	 * @var \ThomasWoehlke\TwRecordcollection\Domain\Model\Year
	 */
	protected $year;

	/**
	 * genre
	 *
	 * @var \ThomasWoehlke\TwRecordcollection\Domain\Model\Genre
	 */
	protected $genre;

	/**
	 * recordType
	 *
	 * @var \ThomasWoehlke\TwRecordcollection\Domain\Model\RecordType
	 */
	protected $recordType;

	/**
	 * recordLabel
	 *
	 * @var \ThomasWoehlke\TwRecordcollection\Domain\Model\RecordLabel
	 */
	protected $recordLabel;

	/**
	 * side
	 *
	 * @var \ThomasWoehlke\TwRecordcollection\Domain\Model\Side
	 */
	protected $side;

	/**
	 * extra
	 *
	 * @var \ThomasWoehlke\TwRecordcollection\Domain\Model\Extra
	 */
	protected $extra;

	/**
	 * Returns the song
	 *
	 * @return \string $song
	 */
	public function getSong() {
		return $this->song;
	}

	/**
	 * Sets the song
	 *
	 * @param \string $song
	 * @return void
	 */
	public function setSong($song) {
		$this->song = $song;
	}

	/**
	 * Returns the interpreter
	 *
	 * @return \ThomasWoehlke\TwRecordcollection\Domain\Model\Interpreter $interpreter
	 */
	public function getInterpreter() {
		return $this->interpreter;
	}

	/**
	 * Sets the interpreter
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\Interpreter $interpreter
	 * @return void
	 */
	public function setInterpreter(\ThomasWoehlke\TwRecordcollection\Domain\Model\Interpreter $interpreter) {
		$this->interpreter = $interpreter;
	}

	/**
	 * Returns the albumName
	 *
	 * @return \ThomasWoehlke\TwRecordcollection\Domain\Model\AlbumName $albumName
	 */
	public function getAlbumName() {
		return $this->albumName;
	}

	/**
	 * Sets the albumName
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\AlbumName $albumName
	 * @return void
	 */
	public function setAlbumName(\ThomasWoehlke\TwRecordcollection\Domain\Model\AlbumName $albumName) {
		$this->albumName = $albumName;
	}

	/**
	 * Returns the year
	 *
	 * @return \ThomasWoehlke\TwRecordcollection\Domain\Model\Year $year
	 */
	public function getYear() {
		return $this->year;
	}

	/**
	 * Sets the year
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\Year $year
	 * @return void
	 */
	public function setYear(\ThomasWoehlke\TwRecordcollection\Domain\Model\Year $year) {
		$this->year = $year;
	}

	/**
	 * Returns the genre
	 *
	 * @return \ThomasWoehlke\TwRecordcollection\Domain\Model\Genre $genre
	 */
	public function getGenre() {
		return $this->genre;
	}

	/**
	 * Sets the genre
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\Genre $genre
	 * @return void
	 */
	public function setGenre(\ThomasWoehlke\TwRecordcollection\Domain\Model\Genre $genre) {
		$this->genre = $genre;
	}

	/**
	 * Returns the recordType
	 *
	 * @return \ThomasWoehlke\TwRecordcollection\Domain\Model\RecordType $recordType
	 */
	public function getRecordType() {
		return $this->recordType;
	}

	/**
	 * Sets the recordType
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\RecordType $recordType
	 * @return void
	 */
	public function setRecordType(\ThomasWoehlke\TwRecordcollection\Domain\Model\RecordType $recordType) {
		$this->recordType = $recordType;
	}

	/**
	 * Returns the recordLabel
	 *
	 * @return \ThomasWoehlke\TwRecordcollection\Domain\Model\RecordLabel $recordLabel
	 */
	public function getRecordLabel() {
		return $this->recordLabel;
	}

	/**
	 * Sets the recordLabel
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\RecordLabel $recordLabel
	 * @return void
	 */
	public function setRecordLabel(\ThomasWoehlke\TwRecordcollection\Domain\Model\RecordLabel $recordLabel) {
		$this->recordLabel = $recordLabel;
	}

	/**
	 * Returns the side
	 *
	 * @return \ThomasWoehlke\TwRecordcollection\Domain\Model\Side $side
	 */
	public function getSide() {
		return $this->side;
	}

	/**
	 * Sets the side
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\Side $side
	 * @return void
	 */
	public function setSide(\ThomasWoehlke\TwRecordcollection\Domain\Model\Side $side) {
		$this->side = $side;
	}

	/**
	 * Returns the extra
	 *
	 * @return \ThomasWoehlke\TwRecordcollection\Domain\Model\Extra $extra
	 */
	public function getExtra() {
		return $this->extra;
	}

	/**
	 * Sets the extra
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\Extra $extra
	 * @return void
	 */
	public function setExtra(\ThomasWoehlke\TwRecordcollection\Domain\Model\Extra $extra) {
		$this->extra = $extra;
	}

}
?>