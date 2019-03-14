<?php echo "hellosefa easef ase;fl kase;lfk jase;lfk jas;elfk ja;slekfsj";

session_start();
$pwdConst = "123Password";
$usnConst = "MyStory";

if(isset($_POST['submit']))
{
  $loggedin = null;
  $JID = $_POST["JID"];
  $user = $_POST["username"];
  $pass = $_POST["password"];

  if($user == $usnConst && $pass ==$pwdConst)
  {
    $_SESSION['loggedin'] = true;
    header("Location: ../idprompt.php");
    exit();
  }
  else
  {
    header("Location:../index.php?index=wrongpassword/username");
    exit();
  }


}
?>
