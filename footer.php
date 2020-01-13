<?php
$fbookIconUrl = 'images/icon_fbook.png';
$twitterIconUrl = 'images/icon_twitter.png';
$youtubeIconUrl = 'images/icon-youtube.png';
function getIconHtml($imgurl, $href, $iconWidth = 20) {	
	ob_start();
	?>
	<a href="<?php echo $href ?>" target="_blank"><img src="<?php echo $imgurl ?>" alt="Facebook" width="<?php echo $iconWidth ?>" border="0" /></a>
	<?php
	$html = ob_get_contents();
	ob_end_clean();
	// return the buffer
	return $html;
	
} 



$practice = new stdClass();
$practice->name = 'Internal Medicine &amp; Primary Care';
$practice->fbookUrl = 'http://www.facebook.com/JacksonvilleInternalMedicine';
$practice->twitterUrl = 'https://twitter.com/OAS_Practices';
$practice->youtubeUrl = 'https://www.youtube.com/channel/UCioC3eXyDwRj7q4jUnvUtxw';

$hospital = new stdClass();
$hospital->fbookUrl = 'http://www.facebook.com/OnslowHospital';
$hospital->twitterUrl = 'http://www.twitter.com/onslowhospital';
$hospital->youtubeUrl = 'http://www.youtube.com/onslowhospital';



 ?>
<img src="images/footer-top.png" width="920" style="margin-bottom:10px;" height="9" />
<div id="footer">
	
	 <p class="footer-nav"><img src="/images/spacer.gif" width="312" height="1" border="0" />&copy;<?php echo date("Y") ;?> <?php echo $practice->name ?>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="index.php" title="Click here to go to the home page">Home</a>&nbsp;|&nbsp;<a href="staff.php" title="Click here to learn more">Staff</a>&nbsp;|&nbsp;<a href="info.php" title="Click here for Patient Info">Patient Info</a>&nbsp;|&nbsp;<a href="physician-qa-series.php" title="Click here for Physician Q&amp;A Series">Physician Q&amp;A Series</a></p>
  <p><?php echo getIconHtml($fbookIconUrl, $practice->fbookUrl) ?><?php echo getIconHtml($twitterIconUrl, $practice->twitterUrl) ?><?php echo getIconHtml($youtubeIconUrl, $practice->youtubeUrl) ?> Connect with <?php echo $practice->name ?> </p>
  <p><?php echo getIconHtml($fbookIconUrl, $hospital->fbookUrl) ?><?php echo getIconHtml($twitterIconUrl, $hospital->twitterUrl) ?><?php echo getIconHtml($youtubeIconUrl, $hospital->youtubeUrl) ?>  Connect with Onslow Memorial Hospital </p>
  <div class="logo-wrap" style="text-align: center; margin: 20px;"><img src="images/logo-oas.png" width="76px;"></div>
</div>

<!-- <div id="footer"><img src="images/footer-top.png" width="920" height="9" />
  <p><a href="http://www.facebook.com/OnslowHospital" target="_blank"><img src="images/FB.png" alt="facebook" width="12" height="12" border="0" /></a> Connect with Onslow Memorial Hospital <img src="/images/spacer.gif" width="312" height="1" border="0" />&copy;<?php echo date("Y") ;?> Jacksonville Internal Medicine&nbsp;&nbsp;|&nbsp;&nbsp;<a href="index.php" title="Click here to go to the home page">Home</a>&nbsp;|&nbsp;<a href="staff.php" title="Click here to learn more">Staff</a>&nbsp;|&nbsp;<a href="info.php" title="Click here for Patient Info">Patient Info</a>&nbsp;|&nbsp;<a href="physician-qa-series.php" title="Click here for Physician Q&amp;A Series">Physician Q&amp;A Series</a></p>
</div> -->
