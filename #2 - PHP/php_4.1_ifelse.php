<?php 
	
	echo "Putri";
	echo "<hr>";

	$nama = "Putri";
	echo $nama;
	echo "<hr>";

	$nama2 = "Sonia";

	echo "1. Putri == Putri<br>";
	if("Putri" == "Putri"){
		echo "true";
	}else{
		echo "false";
	}
	echo "<hr>";
	// ==========================================


	echo "2. Putri == Putri1<br>";
	if("Putri" == "Putri1"){
		echo "true";
	}else{
		echo "false";
	}
	echo "<hr>";


	// ==========================================

	echo "3. Putri == Sonia<br>";
	if("Putri" == "Sonia"){
		echo "true";
	}else{
		echo "false";
	}
	echo "<hr>";


	// ==========================================

	echo "4. 10 == 10<br>";
	if(10 == 10){
		echo "true";
	}else{
		echo "false";
	}
	echo "<hr>";


	// ==========================================

	echo "5. 10 >= 11<br>";
	if(10 >= 11){
		echo "true";
	}else{
		echo "false";
	}
	echo "<hr>";


	// ==========================================

	echo '6. $nama == Putri<br>';
	if($nama == "Putri"){
		echo "true";
	}else{
		echo "false";
	}
	echo "<hr>";


	// ==========================================

	echo '7. $nama == Sonia<br>';
	if($nama == "Sonia"){
		echo "true";
	}else{
		echo "false";
	}
	echo "<hr>";


	// ==========================================
	
	echo '8. $nama == $nama2<br>';
	if($nama == $nama2){
		echo "true";
	}else{
		echo "false";
	}
	echo "<hr>";

	// ==========================================
	
	echo '9. password == password user<br>';
	$username = "Yura";
	$password = "Flashsoft2014";
	$password_user = "Flashsoft2014";
	if($password == $password_user){
		echo "true = username dan password benar";
	}else{
		echo "false";
	}
	echo "<hr>";

	// ==========================================
	
	echo '10. password == password user<br>';
	$username = "Yura";
	$password = "Flashsoft2014";
	$password_user = "12345";
	if($password == $password_user){
		echo "true = username dan password benar";
	}else{
		echo "false = password beda";
	}
	echo "<hr>";

	// ==========================================
	
	echo '11. username == password<br>';
	$username = "Yura";
	$password = "Flashsoft2014";

	$username_user = "Budi";
	$password_user = "12345";
	if(($username == $username_user)&&($password == $password_user) ){
		echo "true = username dan password benar";
	}else{
		echo "false = password beda";
	}
	echo "<hr>";

	// ==========================================
	
	echo '12. username == password<br>';
	$username = "Yura";
	$password = "Flashsoft2014";

	$username_user = "Yura";
	$password_user = "Flashsoft2014";
	if(($username == $username_user)&&($password == $password_user) ){
		echo "true = username dan password benar";
	}else{
		echo "false = password beda";
	}
	echo "<hr>";

	// ==========================================
	
	$jam = 10;
	echo '13. jam < 12 <br>';
	echo "jam = $jam<br>";
	if($jam < 12){
		echo "Ohayou Gozaimasu / Good Morning";
	}else{
		echo "Konnichiwa / Good Day";
	}
	echo "<hr>";

	// ==========================================
	
	$jam = 12;
	echo '14. jam < 12 <br>';
	echo "jam = $jam<br>";
	if($jam < 12){
		echo "Ohayou Gozaimasu / Good Morning";
	}else{
		echo "Konnichiwa / Good Day";
	}
	echo "<hr>";

	// ==========================================
	
	$jam = 16;
	echo '15. jam < 12 <br>';
	echo "jam = $jam<br>";
	if($jam < 12){
		echo "Ohayou Gozaimasu / Good Morning";
	}else{
		echo "Konnichiwa / Good Day";
	}
	echo "<hr>";
?>