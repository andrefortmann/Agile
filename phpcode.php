<?php 
session_start();
$pdo = new PDO('mysql:host=localhost;dbname=Here the name of the database', 'Here the username', 'Here the password');
?>

<?php
/*
Login
*/
if(isset($_GET['login'])) {
$username = $_POST['username'];
$passwort = $_POST['passwort'];
			
$statement = $pdo->prepare("SELECT * FROM users WHERE username = :username");
$result = $statement->execute(array('username' => $username));
$user = $statement->fetch();
				
if ($user !== false && password_verify($passwort, $user['passwort'])) {
			$_SESSION['userid'] = $user['id'];
			die('Login succesful.<a href="nextpage.php">Click here</a>');
			} 
      else {
			$errorMessage = "Username or Password wrong.<br>";
			}
			
		}
		?>
    
            
	<?php
  /*
  Sign Up
  */
	if(isset($_GET['register'])) {
  			$error = false;
    		$username = $_POST['username'];
				$email = $_POST['email'];
				$passwort = $_POST['passwort'];
				$passwort2 = $_POST['passwort2'];
  
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					echo 'Please type in a valid email.<br>';
					$error = true;
				}     
				if(strlen($passwort) == 0) {
					echo 'Please enter a password<br>';
					$error = true;
				}
				if($passwort != $passwort2) {
					echo 'Passwords must be equal<br>';
					$error = true;
				}
				
		
				if(!$error) { 
					$statement = $pdo->prepare("SELECT * FROM users WHERE username = :username");
					$result = $statement->execute(array('username' => $username));
					$user = $statement->fetch();
					
					if($user !== false) {
						echo 'This username is already used.<br>';
						$error = true;
					}    
				}
				
				
				if(!$error) {    
					$passwort_hash = password_hash($passwort, PASSWORD_DEFAULT);
					
					$statement = $pdo->prepare("INSERT INTO users (username, email, passwort) VALUES (:username, :email, :passwort)");
					$result = $statement->execute(array('username' => $username, 'email' => $email, 'passwort' => $passwort_hash));
					
					if($result) {        
						echo '<script>alert("Sign Up succesful.")</script>';
						$showFormular = false;
					} else {
						echo '<script>alert("An error occured. Sorry...")</script>';
					}
				} 
			}
 
?>
