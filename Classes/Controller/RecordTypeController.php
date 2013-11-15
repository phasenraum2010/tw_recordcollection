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
class RecordTypeController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * recordTypeRepository
	 *
	 * @var \ThomasWoehlke\TwRecordcollection\Domain\Repository\RecordTypeRepository
	 * @inject
	 */
	protected $recordTypeRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$recordTypes = $this->recordTypeRepository->findAll();
		$this->view->assign('recordTypes', $recordTypes);
	}

	/**
	 * action show
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\RecordType $recordType
	 * @return void
	 */
	public function showAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\RecordType $recordType) {
		$this->view->assign('recordType', $recordType);
	}

	/**
	 * action new
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\RecordType $newRecordType
	 * @dontvalidate $newRecordType
	 * @return void
	 */
	public function newAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\RecordType $newRecordType = NULL) {
		$this->view->assign('newRecordType', $newRecordType);
	}

	/**
	 * action create
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\RecordType $newRecordType
	 * @return void
	 */
	public function createAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\RecordType $newRecordType) {
		$this->recordTypeRepository->add($newRecordType);
		$this->flashMessageContainer->add('Your new RecordType was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\RecordType $recordType
	 * @return void
	 */
	public function editAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\RecordType $recordType) {
		$this->view->assign('recordType', $recordType);
	}

	/**
	 * action update
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\RecordType $recordType
	 * @return void
	 */
	public function updateAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\RecordType $recordType) {
		$this->recordTypeRepository->update($recordType);
		$this->flashMessageContainer->add('Your RecordType was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\RecordType $recordType
	 * @return void
	 */
	public function deleteAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\RecordType $recordType) {
		$this->recordTypeRepository->remove($recordType);
		$this->flashMessageContainer->add('Your RecordType was removed.');
		$this->redirect('list');
	}

}
?>