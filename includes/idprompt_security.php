<?php echo "hellosefa easef ase;fl kase;lfk jase;lfk jas;elfk ja;slekfsj";

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
  if(isset($_POST['score']))
  {
    header("Location: ../scoreform.php");
    exit();
  }
  elseif(isset($_POST['review']))
  {
    header("Location: ../scorereview.php");
    exit();
  }
  else
  { echo "ERRRRRROOOOOORRRRR";
  }
}

?>
