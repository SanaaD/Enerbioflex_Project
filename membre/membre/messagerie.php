<?php session_start();
include('header.php');
include('menu.php');
echo '<div id="principal">
<div id="titre_principal"><h2>Messages Reçus<h2></div>
<br />
	<table width="100%">
		<tr>
			<td align="center" colspan="4">
			<div id="inputG">
				<a href="message_new.php" class="input">Nouveau message</a>
				<a href="message_envoye.php" class="input">Messages Envoyés</a>
				<a href="messagerie.php" class="input">Messages Reçus</a>
			</div>
			</td>
		</tr>
	
	<tr>
		<td width="30px"></td>
		<td align="center" class="titre_form" width="250px">Date</td>
		<td align="center" class="titre_form" width="150px">Expediteur</td>
		<td align="center" class="titre_form">Message</td>
	</tr>
	'.Message::liste($_SESSION['id']).'
	</table>
</div>';
include('footer.php');
?>
<!-- <tr>
		<td align="center" colspan="4">
			<img src="'.URLSITE.'/design/image/Non_Lu.png" width="24" height="24" align="absmiddle"> Nouveaux messages
			<img src="'.URLSITE.'/design/image/Lu.png" width="24" height="24" align="absmiddle"> Anciens messages
		</td>
	</tr> -->