<?php
session_start();
if(isset($_SESSION['userdata']))
{
    
}else
{
echo "<script>alert('Please Login First to continue')
window.location='login.php'</script>";
}
?>