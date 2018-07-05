
 
  <?php 
 // فراخوانی منوی بالا
 // فراخوانی فایل دیتابیس
include 'configg.php';
 if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email'])){ 
 

     $username = mysqli_real_escape_string($conn, $_POST['username']); 
     $email = mysqli_real_escape_string($conn, $_POST['email']); 
     $password = md5($_POST['password']); 
     $sql = mysqli_query($conn, "SELECT * FROM user WHERE username = '".$username."'");
     if(mysqli_num_rows($sql)>0){ 
         die("Username taken."); 
     }else{ 
     mysqli_query($conn, "INSERT INTO user(username, password, email) VALUES('$username', '$password', '$email')") or die (mysqli_error($conn)); 
	 echo "Account created."; 
 }
 } 
 ?>
 
  <html>
   <form action="register.php" method="post">
      Username: <input name="username" type="text" />
      Password: <input type="password" name="password" />
      Email: <input name="email" type="text" />
      <input type="submit" value="Submit" />
   </form>
 </html>