<?php 


	echo '1. username == password<br>';
	$username = "Yura";
	$password = "Flashsoft2014";

	$username_user = "Yura";
	$password_user = "Flashsoft2014";

	echo "<h4>Username = $username</h4>";
	echo "<h4>password = $password</h4>";
	echo "<h4>Username User = $username_user</h4>";
	echo "<h4>Password User = $password_user</h4>";
	if(($username == $username_user)&&($password == $password_user) ){
		echo "true = username dan password benar";
	}elseif($username == $username_user){
		echo "password anda salah";
	}elseif($password == $password_user){
		echo "username anda salah";
	}else{
		echo "username dan password beda";
	}
	echo "<hr>";

	// ==========================================

	echo '2. username == password<br>';
	$username = "Yura";
	$password = "Flashsoft2014";

	$username_user = "Budi";
	$password_user = "Flashsoft2014";

	echo "<h4>Username = $username</h4>";
	echo "<h4>password = $password</h4>";
	echo "<h4>Username User = $username_user</h4>";
	echo "<h4>Password User = $password_user</h4>";
	if(($username == $username_user)&&($password == $password_user) ){
		echo "true = username dan password benar";
	}elseif($username == $username_user){
		echo "password anda salah";
	}elseif($password == $password_user){
		echo "username anda salah";
	}else{
		echo "username dan password beda";
	}
	echo "<hr>";

	// ==========================================



	echo '3. username == password<br>';
	$username = "Yura";
	$password = "Flashsoft2014";

	$username_user = "Yura";
	$password_user = "12345";

	echo "<h4>Username = $username</h4>";
	echo "<h4>password = $password</h4>";
	echo "<h4>Username User = $username_user</h4>";
	echo "<h4>Password User = $password_user</h4>";
	if(($username == $username_user)&&($password == $password_user) ){
		echo "true = username dan password benar";
	}elseif($username == $username_user){
		echo "password anda salah";
	}elseif($password == $password_user){
		echo "username anda salah";
	}else{
		echo "username dan password beda";
	}
	echo "<hr>";

	// ==========================================



	echo '4. username == password<br>';
	$username = "Yura";
	$password = "Flashsoft2014";

	$username_user = "Budi";
	$password_user = "12345";

	echo "<h4>Username = $username</h4>";
	echo "<h4>password = $password</h4>";
	echo "<h4>Username User = $username_user</h4>";
	echo "<h4>Password User = $password_user</h4>";
	if(($username == $username_user)&&($password == $password_user) ){
		echo "true = username dan password benar";
	}elseif($username == $username_user){
		echo "password anda salah";
	}elseif($password == $password_user){
		echo "username anda salah";
	}else{
		echo "username dan password salah";
	}
	echo "<hr>";

	// ==========================================
	
	$jam = 10;
	echo '5. jam < 12 <br>';
	echo "jam = $jam<br>";
	if($jam < 12){
		echo "Ohayou Gozaimasu / Good Morning";
	}elseif(($jam >= 12)&&($jam < 18)){
		echo "Konnichiwa / Good Day";
	}elseif($jam >= 18){
		echo "Konbanwa / Good Evening";
	}
	echo "<hr>";

	// ==========================================
	
	$jam = 12;
	echo '6. jam < 12 <br>';
	echo "jam = $jam<br>";
	if($jam < 12){
		echo "Ohayou Gozaimasu / Good Morning";
	}elseif(($jam >= 12)&&($jam < 18)){
		echo "Konnichiwa / Good Day";
	}elseif($jam >= 18){
		echo "Konbanwa / Good Evening";
	}
	echo "<hr>";

	// ==========================================
	
	$jam = 16;
	echo '7. jam < 12 <br>';
	echo "jam = $jam<br>";
	if($jam < 12){
		echo "Ohayou Gozaimasu / Good Morning";
	}elseif(($jam >= 12)&&($jam < 18)){
		echo "Konnichiwa / Good Day";
	}elseif($jam >= 18){
		echo "Konbanwa / Good Evening";
	}
	echo "<hr>";

	// ==========================================
	
	$jam = 19;
	echo '8. jam < 12 <br>';
	echo "jam = $jam<br>";
	if($jam < 12){
		echo "Ohayou Gozaimasu / Good Morning";
	}elseif(($jam >= 12)&&($jam < 18)){
		echo "Konnichiwa / Good Day";
	}elseif($jam >= 18){
		echo "Konbanwa / Good Evening";
	}
	echo "<hr>";



	// ==========================================
	
	$bulan = 2;
	echo '9. Bulan <br>';
	echo "bulan = $bulan<br>";
	if($bulan == 1){
		echo "Januari";
	}elseif($bulan == 2){
		echo "Februari";
	}elseif($bulan == 3){
		echo "Maret";
	}else{
		echo "Oktober";
	}
	echo "<hr>";
?>