<?php
require("Database.php");		
$dbObj = new Database();
//case 1  Inserting data using valid SQL insert command	
$result= $dbObj->excecute("INSERT INTO tbluser(name,age,address,nationality) VALUES ('Khin','19','Cebu City','Filipino')" 
);
echo "Case1 result: ".$result;
//case 2 Updating data using valid SQL update command			
//$result = $dbObj->excecute("UPDATE tbluser SET name='Khin Alburo' WHERE id=1");

//echo "Case2 result:".$result;
//case 3 Extracting data using valid SQL select command.			
//$result=$dbObj->excecute("SELECT * FROM tbluser");

//echo "Case3 result:".$result;
//case 4Deleting data using valid SQL delete command.			
//$result=$dbObj->excecute("DELETE FROM tbluser WHERE id=1");
//echo "Case4 result:".$result;

//case 5
//case 6
//case 7
//case 8

?>