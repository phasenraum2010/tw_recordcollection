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
class AlbumNameController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * albumNameRepository
	 *
	 * @var \ThomasWoehlke\TwRecordcollection\Domain\Repository\AlbumNameRepository
	 * @inject
	 */
	protected $albumNameRepository;

	/**
	 * songRepository
	 *
	 * @var \ThomasWoehlke\TwRecordcollection\Domain\Repository\SongRepository
	 * @inject 
	 */
	protected $songRepository;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$albumNames = $this->albumNameRepository->findAll();
		$this->view->assign('albumNames', $albumNames);
	}

	/**
	 * action show
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\AlbumName $albumName
	 * @return void
	 */
	public function showAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\AlbumName $albumName) {
		$this->view->assign('albumName', $albumName);
	}

	/**
	 * action new
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\AlbumName $newAlbumName
	 * @dontvalidate $newAlbumName
	 * @return void
	 */
	public function newAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\AlbumName $newAlbumName = NULL) {
		$this->view->assign('newAlbumName', $newAlbumName);
	}

	/**
	 * action create
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\AlbumName $newAlbumName
	 * @return void
	 */
	public function createAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\AlbumName $newAlbumName) {
		$this->albumNameRepository->add($newAlbumName);
		$this->flashMessageContainer->add('Your new AlbumName was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\AlbumName $albumName
	 * @return void
	 */
	public function editAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\AlbumName $albumName) {
		$this->view->assign('albumName', $albumName);
	}

	/**
	 * action update
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\AlbumName $albumName
	 * @return void
	 */
	public function updateAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\AlbumName $albumName) {
		$this->albumNameRepository->update($albumName);
		$this->flashMessageContainer->add('Your AlbumName was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\AlbumName $albumName
	 * @return void
	 */
	public function deleteAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\AlbumName $albumName) {
		$this->albumNameRepository->remove($albumName);
		$this->flashMessageContainer->add('Your AlbumName was removed.');
		$this->redirect('list');
	}

	/**
	 * action getSongsForAlbumName
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\AlbumName $albumName
	 * @return void
	 */
	public function getSongsForAlbumNameAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\AlbumName $albumName) {
			    $songs = $this->songRepository->findByAlbumName($albumName);
			    $this->view->assign('songs', $songs);
		        $this->view->assign('albumName', $albumName);
	}

}
?>