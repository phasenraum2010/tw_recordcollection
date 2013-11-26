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
class ExtraController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * extraRepository
	 *
	 * @var \ThomasWoehlke\TwRecordcollection\Domain\Repository\ExtraRepository
	 * @inject
	 */
	protected $extraRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$extras = $this->extraRepository->findAll();
		$this->view->assign('extras', $extras);
	}

	/**
	 * action show
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\Extra $extra
	 * @return void
	 */
	public function showAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\Extra $extra) {
		$this->view->assign('extra', $extra);
	}

	/**
	 * action new
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\Extra $newExtra
	 * @dontvalidate $newExtra
	 * @return void
	 */
	public function newAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\Extra $newExtra = NULL) {
		$this->view->assign('newExtra', $newExtra);
	}

	/**
	 * action create
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\Extra $newExtra
	 * @return void
	 */
	public function createAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\Extra $newExtra) {
		$this->extraRepository->add($newExtra);
		$this->flashMessageContainer->add('Your new Extra was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\Extra $extra
	 * @return void
	 */
	public function editAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\Extra $extra) {
		$this->view->assign('extra', $extra);
	}

	/**
	 * action update
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\Extra $extra
	 * @return void
	 */
	public function updateAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\Extra $extra) {
		$this->extraRepository->update($extra);
		$this->flashMessageContainer->add('Your Extra was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\Extra $extra
	 * @return void
	 */
	public function deleteAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\Extra $extra) {
		$this->extraRepository->remove($extra);
		$this->flashMessageContainer->add('Your Extra was removed.');
		$this->redirect('list');
	}

}
?>