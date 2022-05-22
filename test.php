 

<form method="post" action="mailto:powerbabaniyi32@gmail.com">


<?php

if(isset($_POST["submit"])) {

mail("powerbabaniyi32@gmail.com", "Here is the subject line", $_POST["message"]. "From: an@email.address");

}

?>
<input type="text" name="email" placeholder="enter email address">
<textarea name="message"></textarea>

<input type="submit" name="submit">

</form>

