
<?php
//Store Sitemap Files
$oldSitemap = $_FILES['xml1']['tmp_name'];
$newSitemap = $_FILES['xml2']['tmp_name'];
	
$site1 = $_POST['site1'];
$site2 = $_POST['site2'];

global $newsite;
//$site1 = 'http://www.stevengaffney.com';
//$site2 = 'http://gaffney.pcgdev.com';

$urls = array();  
$urls2 = array();  

//Load old sitemap
$DomDocument = new DOMDocument();
$DomDocument->preserveWhiteSpace = false;
$DomDocument->load($oldSitemap);
$DomNodeList = $DomDocument->getElementsByTagName('loc');

//Grabs each url from old sitemap and put it in $urls
foreach($DomNodeList as $url) {
    $urls[] = $url->nodeValue;
}

//loads all the news site urls into one big string
$newoptions = '';
foreach($urls as $link){ 
	$newoptions.= '<option value = "'.$link.'">'.$link.'</option>';	
 }

//strips the url from the link
$urls = str_replace($site1, '', $urls);

//Load New Sitemap
$DomDocument2 = new DOMDocument();
$DomDocument2->preserveWhiteSpace = false;
$DomDocument2->load($newSitemap);
$DomNodeList2 = $DomDocument2->getElementsByTagName('loc');

//Grabs each url from new sitemap and put it in $urls2
foreach($DomNodeList2 as $url2) {
    $urls2[] = $url2->nodeValue;
}

//strips the url from the link
$urls2 = str_replace($site2, '', $urls2);

$same = array_intersect($urls, $urls2);
$results = array_diff($urls, $urls2);

asort($results);
?>

<form action="htcaccess-results.php" method="POST">
	<input type="submit" name="submit">
	<ol>
	<?php foreach ($results as $broken_link) { ?>
		<li>
			Redirect 301 <?php echo $broken_link; ?> 
			<select>
				<?php echo($newoptions); ?>
			</select>
		 </li>
	<?php } ?>
	</ol>
	<input type="submit" name="submit">
</form>
