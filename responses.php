<?php
    $filename = "formresponses.csv";
    $isItExisting = (file_exists($filename));

 	$handle = fopen($filename, 'a');
	$msg = "Thank you ". $_POST['name'] . " for submitting your information.\n";	//EMail message
	$stringToAdd="";										//File information

	if (!$isItExisting){
		foreach($_POST as $name => $value) {
			$stringToAdd.="$name,";							//Make the column headings
		}
		$stringToAdd.="\n";									//Make sure file goes to next line
		fwrite($handle, $stringToAdd);						//Write the 
	}
	
	$stringToAdd="";										//Reset the file info to blank
	foreach($_POST as $name => $value) {
		print "$name : $value<br/>";						//This is going to the screen
		$msg .="$name : $value\n";							//This is going to the email
		$stringToAdd.="$value,";							//This is going to the file
	}
	$stringToAdd.="\n";

	fwrite($handle, $stringToAdd);

	//now close the file
	fclose($handle); 
	$to = $_POST["email"];
	$headers = "From: ". $_POST["name"] ."<".$_POST["email"]. ">\r\n";
	
	mail($to, 'Form Data', $msg,$headers);

	echo "Email sent";
?>