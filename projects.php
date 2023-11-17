<h3>PROJECTS</h3>
<?php
$asprojects = GetProjects($projects);
$pc = count($asprojects);
if ($pc == 0) {
	echo '<h1>No Projects Found!!</h1>';
}else {
?>
	<div class="img-wrap">
		<?php for ($i = 0; $i < $pc ; $i++) { ?>
	<div class="img <?php echo ($i == 0) ? 'active' : ''; ?>">
		<img src=" images/projects/<?php echo $projects[$i]['img']; ?>"  alt="<?php echo $projects[$i]['title']; ?>">
	</div>
<?php } ?>
</div>
<?php } ?>