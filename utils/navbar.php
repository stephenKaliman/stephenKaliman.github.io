
<?php
	function create_menu(string active_page)
	{
	  echo '<ul>';
		echo '<li><a '.(active_page=="home" ? "class=\"active\"":"").' href=\"#home\">Home</a></li>';
		echo '<li><a '.(active_page=="about" ? "class=\"active\"":"").' href=\"#about\">About Me</a></li>';
		echo '<li><a '.(active_page=="resume" ? "class=\"active\"":"").' href=\"#resume\">Resume</a></li>';
		echo '</ul>';
	}	
?>
