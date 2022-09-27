<?php

$point_text = block_value('point-text');

?>

<?php
$point_text = strip_tags($point_text, '<br>');
$lists = explode('<br />', $point_text);
foreach ($lists as $list) {
	if (array_keys($lists) == 0) {
		$contents = $list;
	} else {
		$contents = $contents . '<li>' . $list . '</li>';
	}
}
?>

<ul class="bl_c-article_body_points">
	<p>POINT</p>
	<?php echo $contents; ?>
</ul>
