<?php
class Core_view 
{
	public function render($page,$inc_foot_head = true)
	{
		//************ include header ******************
		if ($inc_foot_head) {
			if (file_exists('views/layout/header.php')) {
				include 'views/layout/header.php'; 
			} else {
				echo "<b>Error:</b> Create header.php";
			}
		}
		//************ /include header *****************
		
		if(file_exists('views/'. $page . '.php')) {
			include 'views/'. $page . '.php';
		} else {
			echo "Error: Can't find that view";
		}
		
		//************ include footer ******************
		if ($inc_foot_head) {
			if (file_exists('views/layout/footer.php')) {
				include 'views/layout/footer.php'; 
			} else {
				echo "<b>Error:</b> Create footer.php";
			}
		}
		//************ /include footer ******************
	}
}

