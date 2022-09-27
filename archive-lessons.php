<?php

if (isset($_GET['value01'])) {
	get_template_part( 'archive-lessons__dd-link' );
} else {
	get_template_part( 'archive-lessons__main' );
}
?>
