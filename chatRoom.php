
<script type="text/javascript" src="jquery-1.10.1.js"></script>
<script type="text/javascript" src="demo.js"></script>


<?php session_start();
//include "getMessageController.php";
?>



<p><span id="sendername"><?php echo $_SESSION['username'] ?> </span> chat avec <span id="gettername"><?php echo $_GET['toname']?></span></p>


<textarea rows="30" cols="150">

</textarea>

<div>
<input type="text" name="content">
<button id="envoyer">Envoyer</button>
</div>
</body>
</html>