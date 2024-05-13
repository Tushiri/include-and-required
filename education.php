<?php
$edu_bg = array(
	array(
		'edu-stage' => 'Elementary School',
		'school' => 'De Castro Elementary School',
		'year' => '2007 - 2013'
	),
	array(
		'edu-stage' => 'High School',
		'school' => 'Santa Lucia High School',
		'year' => '2013 - 2016'
    ),
    array(
		'edu-stage' => 'Senior High School',
		'school' => 'Arellano University- Pasig Campus',
		'year' => '2016 - 2020'
	),
    array(
		'edu-stage' => 'College',
		'school' => 'Pateros Technological College',
		'year' => '2020 - 2023'
	)
);
?>

<h2>Educational Background</h2>
<?php foreach ($edu_bg as $edu) : ?>
	<div class="edu-info">
		<p class="edu-stage"><?php echo $edu['edu-stage']; ?></p>
		<p class="edu-school"><?php echo $edu['school']; ?></p>
		<p class="edu-year"><?php echo $edu['year']; ?></p>
	</div>
<?php endforeach; ?>
