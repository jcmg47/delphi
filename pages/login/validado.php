<?php
session_start();
  if ($_SESSION["login"]!="true"){
  	?>
  	<script type="text/javascript">
			window.location="../login/";
	</script>
<?php
  }

?>