<?php

echo '<section>';

//fetch_assoc should not be in the view!
while ($newsItem = $result->fetch_assoc()) {
	
	echo '<article>';
	echo '<h1>'.$newsItem['title'].'</h1>';
	echo '<content>'.$newsItem['content'].'</content>';
	echo '</article>';
}

echo '</section>';