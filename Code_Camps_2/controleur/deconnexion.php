<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<body>
		
		<?php
		session_start();
		session_destroy();
		?>
		<!-- DEBUT DU SCRIPT -->
		<SCRIPT LANGUAGE="JavaScript">
			alert('Deconnexion !',' width=500, height=300');
			window.location.href = "../vue/index.php"
		</SCRIPT>
		<!-- FIN DU SCRIPT -->
	</body>
	