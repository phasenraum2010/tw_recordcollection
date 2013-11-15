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
class Interpreter extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * interpreter
	 *
	 * @var \string
	 * @validate NotEmpty
	 */
	protected $interpreter;

	/**
	 * Returns the interpreter
	 *
	 * @return \string $interpreter
	 */
	public function getInterpreter() {
		return $this->interpreter;
	}

	/**
	 * Sets the interpreter
	 *
	 * @param \string $interpreter
	 * @return void
	 */
	public function setInterpreter($interpreter) {
		$this->interpreter = $interpreter;
	}

}
?>