<?php
function GetProjects($projects, $limit = 0){
	$data = [];
	$i = "";
	foreach ($projects as $project) {
		if ($project["id"] > 0) {
			array_push($data, $project);
			$i++;
		}
		if ($i == $limit && $limit > 0) {
            break;
        }
	}
	return $data;
}

?>