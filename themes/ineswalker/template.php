<!DOCTYPE html>
<html>
<head>
	<meta charset= "UTF-8">
	<title><?php if($vars['current_folder_name']!=''){ 
				echo $vars['current_folder_name'] . ' | '. $settings['site_name'];
				} 
			else{ 
				echo $settings['site_name'];
				} ?></title>
	<link rel="apple-touch-icon" href="/media/apple-touch-icon.png">
	<link rel="shortcut icon" href="/media/favicon.png">
	<link href='http://fonts.googleapis.com/css?family=Merriweather:300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.css" />
	<?php if( is_file($this->photosPathFromRoot.'custom-style.css') ){
		echo '<link rel="stylesheet"  href="/'. str_replace($this->publicPathFromRoot, '', $this->photosPathFromRoot). '/custom-style.css" media="all">';
	}?>
	
	<link rel="stylesheet"  href="<?php echo $this->getThemeURL();?>style.css" media="all">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('.gallery a').fancybox({
				afterLoad: function() {
					var description = $(this.element).attr('data-description');
					if (description != ''){
						this.title = this.title + " – " + $(this.element).attr('data-description');
					}
				},
				padding : 0,
				openEffect: 'fade',
				closeEffect: 'fade',
				prevEffect: 'fade',
				nextEffect: 'fade',
				loop: false,
				closeBtn: false,
				    
			});
		});
	</script>

</head>
<body>
<div class="logo"></div>
<section class="gallery">
	<?php $this->showGallery(); ?>
</section>
<footer id="about">
	<div>
	    <h1>Ines Walker</h1>
	
	    <h2>ceramic designs</h2>
	
	    <h3><a href="mailto:ineslwalker@icloud.com">ineslwalker@icloud.com</a></h3>
	
	    <h3>210 649-0223</h3>
	</div>
</footer>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-53439622-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>



   