<?php
$imageFormat = '
<figure>
	<a rel="group" data-description="{{Description}}" class="fancybox" href="{{Path}}" >
		<img src="{{ThumbPath}}" alt="{{Title}}" />
	</a>
</figure>
';
$folderFormat = '
<figure class="folder">
	<a href="{{Path}}">
		<img src="{{ThumbURL}}" alt="{{Title}}"/>
	</a>
	<span>{{Title}}</span>
</figure>';

return array(
	'site_name' => 'Ines Walker | Ceramic Designs',
	'thumbnail_size' => 450, //Thumbnail will not exceed this value in either width or height (pixels).
	'advanced' => array(
    	'debug' => false,
    	'cache_expire' => 60 * 60 * 24 * 7
    	),
	'theme' => array(
		'imageFormat' => $imageFormat,
		'folderFormat' => $folderFormat

	)

);