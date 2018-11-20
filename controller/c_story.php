<?php

/**
 * ''
 */
class StoryController
{
	
	public function review()
	{
		$story=Story::lihatstory();
		if (isset($_SESSION['user'])) {
            require_once('views/member/review.php');
        } else {
            header('location:index.php?controller=home&action=home');
        }
	}
	public function detailreview()
	{
		$story=Story::lihatreview($_GET['idstory']);
		if (isset($_SESSION['user'])) {
            require_once('views/member/review1.php');
        } else {
            header('location:index.php?controller=home&action=home');
        }
	}


}
?>