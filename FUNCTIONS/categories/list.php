<?php

$data['message'] = "success";
$data['categories'] = array(
							"Pinoy Classics",
							"Agahan",
							"Tanghalian",
							"Meryenda",
							"Hapunan",
						);

header('Content-Type: application/json');
print(json_encode($data));
?>