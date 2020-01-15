

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>301 Redirect Helper</title>

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-131406589-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-131406589-1');
</script>

  </head>
  <body>
    <div class="container">
    	<div class="row">
    		<h1>Welcome to the 301 Redirect Helper</h1>
    		<p>Be you developer or not, this site will help you make your 301 redirects for your .htaccess files</p>
            <footer> I suggest you grab your sitemap from <a href="http://www.web-site-map.com/">Here</a></footer>
    		<form action="sitemap-parser.php" enctype="multipart/form-data" method="POST">
    			<div class="row">
		    		<div class="col-md-6">
		    			<label>New Site</label>
		                <div class="input-group">
		                  <!-- <div class="input-group-btn">
		                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">http:// <span class="caret"></span></button>
		                    <ul class="dropdown-menu">
		                      <li><a href="#">http://</a></li>
		                      <li><a href="#">https://</a></li>
		                    </ul>
		                  </div><-- /btn-group -->
		                  <!-- <input type="text" class="form-control" aria-label="..."> -->
		                </div><!-- /input-group -->
		    			<div class="input-group">
		    				<div class="input-group-addon">http://</div><input type="text" name="newsite">
						</div>
		    			<label>New Site XML</label>
		    			<input type="file" name="xml1">
		    		</div>
		    		<div class="col-md-6">
		    			<label>old Site</label>
		    			<div class="input-group">
		    				<div class="input-group-addon">http://</div><input type="text" name="oldsite">
						</div>
		    			<label>old Site XML</label>
		    			<input type="file" name="xml2">
		    		</div>
		    		<div class="col-md-12">
		    			<input type="submit">
					</div>
				</div>
			</form>
    	</div>
    </div>
    <div class="container">
    	<div class="row">
            <h2>What is a 301 Redirect</h2>
            <p>A 301 redirect is a permanent redirect which passes between 90-99% of link juice (ranking power) to the redirected page. 301 refers to the HTTP status code for this type of redirect. In most instances, the 301 redirect is the best method for implementing redirects on a website.</p>
        </div>
        <div class="row">
            <h2>When to use a 301 Redirect</h2>
            <p>A 301 redirect is a permanent move. This is not useful for temporary changes or instances of A/B testing. The 301 Redirect is used when:</p>
            <ul>
                <li>Links to any outdated URLs need to be sent to your desired page. A case in point would be the merging of two websites.</li>
                <li>There are several URLs used to access your site. Select a single URL as a canonical and preferred destination and use your 301 redirects to direct traffic to the preferred URL.</li>
                <li>You’ve moved your site to a new domain, and you want to make the transition as seamless as possible.</li>
                <li>http to https migration</li>
            </ul>
            <p>Your previous page will be replaced and the new page will be shown in your search engine results with a 301 redirect.</p>
        </div>
        <div class="row">
            <h2>How it works?</h2>
            <p>301 Redirect Helpers takes the sitemap from your old site and compares it to the sitemap of your new site, then it identifies which pages do not have a match from the old site to the new one. This is a very important process because if you have a link out there in the internet universe that links to a dead page on your site that could hurt your SEO value, but if you do a redirect on your website then you could avoid the penalties.</p>


	    	<h2>What type of redirect?</h2>
	    	<p></p>
	    	<h2>What do i keep? </h2>
    	</div>
    </div>

    <footer>
        Sources:
        <ul>
            <li>https://moz.com/learn/seo/redirection</li>
            <li>https://www.seoclarity.net/use-301-redirect-vs-302-redirect-15683/</li>
        </ul>

    </footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>