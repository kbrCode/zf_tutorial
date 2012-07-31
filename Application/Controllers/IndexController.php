<?php
class IndexController extends Zend_Controller_Action {
// 	function indexAction() {
// 		echo "<p>in IndexController::indexAction()</p>";
// 	}

// 	function addAction() {
// 		echo "<p>in IndexController::addAction()</p>";
// 	}

// 	function editAction() {
// 		echo "<p>in IndexController::editAction()</p>";
// 	}

// 	function deleteAction() {
// 		echo "<p>in IndexController::deleteAction()</p>";
// 	}

	
	function init() {
		$this->view->baseUrl = $this->_request->getBaseUrl();
		Zend_Loader::loadClass('Album');		
	}	
	
	function indexAction() {
		$this->view->title = "My Albums";
		$album = new Album();		
		$this->view->albums = $album->fetchAll();		
	}

	function addAction() {
		$this->view->title = "Add New Album";
	}

	function editAction() {
		$this->view->title = "Edit Album";
	}

	function deleteAction() {
		$this->view->title = "Delete Album";
	}
}