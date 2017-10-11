<?php

function profilepic($u_id,$conn){
$sql = "SELECT * FROM users WHERE user_id='$u_id'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
while($row = mysqli_fetch_assoc($result)) {
	
	if ($row['picture'] == 0) {
		$filename = "uploads/profile".$u_id."*";
		$fileinfo=glob($filename);
		$fileext=explode(".",$fileinfo[0]);
		$fileactualext= $fileext[1];
		//Profilausgabe
		$profilepic='uploads/profile'.$u_id.'.'.$fileactualext.'?'.mt_rand().'';
	} else {
		 $profilepic='uploads/profiledefault.jpg';
	}
}
return $profilepic;
}

}


if(isset($_SESSION['u_id'])){
	profilepic($_SESSION['u_id'],$conn);
    }

    ?>