
<?php
//Store Sitemap Files
$newSitemap = $_FILES['xml1']['tmp_name'];
$oldSitemap = $_FILES['xml2']['tmp_name'];
	
$newsite = $_POST['newsite'];
$oldsite = $_POST['oldsite'];

$newnewurl = array();  
$oldurl = array();  

//Load old sitemap
$DomDocument = new DOMDocument();
$DomDocument->preserveWhiteSpace = false;
$DomDocument->load($newSitemap);
$DomNodeList = $DomDocument->getElementsByTagName('loc');

print_r($newSitemap);

//Grabs each url from old sitemap and put it in $newurl
foreach($DomNodeList as $url) {
    $newurl[] = $url->nodeValue;
}

//strips the url from the link
$newurl = str_replace($newsite, '', $newurl);

//Load New Sitemap
$DomDocument2 = new DOMDocument();
$DomDocument2->preserveWhiteSpace = false;	
$DomDocument2->load($oldSitemap);
$DomNodeList2 = $DomDocument2->getElementsByTagName('loc');

//Grabs each url from new sitemap and put it in $oldurl
foreach($DomNodeList2 as $url2) {
    $oldurl[] = $url2->nodeValue;
}

//strips the url from the link
$oldurl = str_replace($oldsite,'', $oldurl);


//loads all the news site newurl into one big string
$newoptions = '';
asort($newurl);
foreach($newurl as $link){ 
	$newoptions.= '<option value = "'.$link.'">'.$link.'</option>';	
 }


$results = array_diff($oldurl, $newurl);

asort($results);


//compares the old link to the new list of links and returns percentage compared
/*
echo "<ol>";
$c=0;
foreach ($results as $key) {
	$k = 0;
	foreach ($oldurl as $key2) {
		$k++;
		similar_text( $key2,$key[$c], $percent);
		$percentarray[] = $percent;

		echo '<li>'.$percent.' of'.$key.' is going into '.$key2.' </li> <br><br>';
		
	}	
	$percentmax = max($percentarray);	
	echo '------'.$percentmax. '--------- <br>';
	unset($percentarray);
	$c++;
}
echo '</ol>';

*/
?>

<form action="htcaccess-results.php" method="POST">
	<input type="submit" name="submit">
	
	<ol>
	<?php $c=0; ?>
	<?php foreach ($results as $broken_link) { ?>
	<input type="hidden" name="oldlink[]" value="<?php echo $broken_link; ?>">
	<input type="hidden" name="newsite" value="<?php echo $newsite; ?>">
	<?php $c++; ?>
		<li>
			Redirect 301 <?php echo $broken_link; ?> 
			<?php echo $newsite; ?>
			<!-- Use Datalist next time -->
			<select name="newlink[]">
				<?php echo($newoptions); ?>
			</select>
		 </li>
	<?php } ?>
	</ol>
	<input type="submit" name="submit">
</form>
