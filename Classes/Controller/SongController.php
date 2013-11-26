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
class SongController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

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
		$songs = $this->songRepository->findAll();
		$this->view->assign('songs', $songs);
	}

	/**
	 * action show
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\Song $song
	 * @return void
	 */
	public function showAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\Song $song) {
		$this->view->assign('song', $song);
	}

	/**
	 * action new
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\Song $newSong
	 * @dontvalidate $newSong
	 * @return void
	 */
	public function newAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\Song $newSong = NULL) {
		$this->view->assign('newSong', $newSong);
	}

	/**
	 * action create
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\Song $newSong
	 * @return void
	 */
	public function createAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\Song $newSong) {
		$this->songRepository->add($newSong);
		$this->flashMessageContainer->add('Your new Song was created.');
		$this->redirect('list');
	}

	/**
	 * action edit
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\Song $song
	 * @return void
	 */
	public function editAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\Song $song) {
		$this->view->assign('song', $song);
	}

	/**
	 * action update
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\Song $song
	 * @return void
	 */
	public function updateAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\Song $song) {
		$this->songRepository->update($song);
		$this->flashMessageContainer->add('Your Song was updated.');
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\Song $song
	 * @return void
	 */
	public function deleteAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\Song $song) {
		$this->songRepository->remove($song);
		$this->flashMessageContainer->add('Your Song was removed.');
		$this->redirect('list');
	}

	/**
	 * action getSongsForAlbumName
	 *
	 * @param \ThomasWoehlke\TwRecordcollection\Domain\Model\Song $song
	 * @return void
	 */
	public function getSongsForAlbumNameAction(\ThomasWoehlke\TwRecordcollection\Domain\Model\Song $song) {
		$songs = $this->songRepository->findByAlbumName($song->getAlbumName());
		$this->view->assign('albumName', $song->getAlbumName());
        $this->view->assign('songs', $songs);
	}

}
?>