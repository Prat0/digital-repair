<?php
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$issue=$_POST['issue'];
        $address=$_POST['address'];
        $appliance=$_POST['appliance'];

		$to='prateek730cri09@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message=   "Name :".$name."\n".
                    "Phone :".$phone."\n".
                    "Address :".$address."\n".
                    "Appliance :".$appliance."\n".
                    "Problem facing :"."\n\n".$issue;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>