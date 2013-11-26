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
class RecordLabelController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * recordLabelRepository
	 *
	 * @var \ThomasWoehlke\TwRecordcollection\Domain\Repository\RecordLabelRepository
	 * @inject
	 */
	protected $recordLabelRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$recordLabels = $this->recordLabelRepository->findAll();
		$this->view->assign('recordLabels', $recordLabels);
	}

	/**
	 * action show
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\RecordLabel $recordLabel
	 * @return void
	 */
	public function showAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\RecordLabel $recordLabel) {
		$this->view->assign('recordLabel', $recordLabel);
	}

	/**
	 * action new
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\RecordLabel $newRecordLabel
	 * @dontvalidate $newRecordLabel
	 * @return void
	 */
	public function newAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\RecordLabel $newRecordLabel = NULL) {
		$this->view->assign('newRecordLabel', $newRecordLabel);
	}

	/**
	 * action create
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\RecordLabel $newRecordLabel
	 * @return void
	 */
	public function createAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\RecordLabel $newRecordLabel) {
		$this->recordLabelRepository->add($newRecordLabel);
		$this->flashMessageContainer->add('Your new RecordLabel was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\RecordLabel $recordLabel
	 * @return void
	 */
	public function editAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\RecordLabel $recordLabel) {
		$this->view->assign('recordLabel', $recordLabel);
	}

	/**
	 * action update
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\RecordLabel $recordLabel
	 * @return void
	 */
	public function updateAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\RecordLabel $recordLabel) {
		$this->recordLabelRepository->update($recordLabel);
		$this->flashMessageContainer->add('Your RecordLabel was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\RecordLabel $recordLabel
	 * @return void
	 */
	public function deleteAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\RecordLabel $recordLabel) {
		$this->recordLabelRepository->remove($recordLabel);
		$this->flashMessageContainer->add('Your RecordLabel was removed.');
		$this->redirect('list');
	}

}
?>