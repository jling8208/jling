<?php
	$FileName=$_FILES['frResume']['name'];
	$TmpName=$_FILES['frResume']['tmp_name'];

	move_uploaded_file($TmpName,$FileName);

	echo("File Uploaded Successfully");
?>