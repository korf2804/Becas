<?php

foreach ($result->result() as $value) {
	echo $value->carrera."<br />";
	echo $value->Timpresas."<br />";
	echo $value->Tfotocopiadas."<br />";
	echo $value->semestre."<br />";
}

?>