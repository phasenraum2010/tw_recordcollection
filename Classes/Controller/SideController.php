<?php
namespace ThomasWoehlke\TwRecordcollection\Controller;


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
class SideController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * sideRepository
	 *
	 * @var \ThomasWoehlke\TwRecordcollection\Domain\Repository\SideRepository
	 * @inject
	 */
	protected $sideRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$sides = $this->sideRepository->findAll();
		$this->view->assign('sides', $sides);
	}

	/**
	 * action show
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\Side $side
	 * @return void
	 */
	public function showAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\Side $side) {
		$this->view->assign('side', $side);
	}

	/**
	 * action new
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\Side $newSide
	 * @dontvalidate $newSide
	 * @return void
	 */
	public function newAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\Side $newSide = NULL) {
		$this->view->assign('newSide', $newSide);
	}

	/**
	 * action create
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\Side $newSide
	 * @return void
	 */
	public function createAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\Side $newSide) {
		$this->sideRepository->add($newSide);
		$this->flashMessageContainer->add('Your new Side was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\Side $side
	 * @return void
	 */
	public function editAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\Side $side) {
		$this->view->assign('side', $side);
	}

	/**
	 * action update
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\Side $side
	 * @return void
	 */
	public function updateAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\Side $side) {
		$this->sideRepository->update($side);
		$this->flashMessageContainer->add('Your Side was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\Side $side
	 * @return void
	 */
	public function deleteAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\Side $side) {
		$this->sideRepository->remove($side);
		$this->flashMessageContainer->add('Your Side was removed.');
		$this->redirect('list');
	}

}
?>