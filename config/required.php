<?php


if($_SERVER['HTTP_HOST']=='localhost'){
	define('DEVELOPMENT',TRUE);
	define('CONFIGURATION','localhost');
}
elseif($_SERVER['HTTP_HOST']=='maxxxxxdlp.ml'){
	define('DEVELOPMENT',TRUE);
	define('CONFIGURATION','ec2');
}
else {
	define('DEVELOPMENT',FALSE);
	define('CONFIGURATION','production');
}


if(CONFIGURATION==='localhost'){

	# Address the website would be served on
	define('LINK', 'http://localhost:80/');

	# Set this to an empty folder. This would be the destination for all uncompressed
	# access.log and other files created in the process.
	# Make sure the web server has write permissions to this folder.
	# **Warning!** All of the files present in this directory would be deleted.
	define('WORKING_LOCATION','/Users/mambo/Downloads/taxons/');

}

elseif(CONFIGURATION==='ec2'){

	define('LINK', 'https://maxxxxxdlp.ml/taxons2/');

	define('WORKING_LOCATION','/home/ec2-user/data/taxons/');

}
else { # these settings would be used during production

	define('LINK', 'http://biwebdbtest.nhm.ku.edu/taxons2/');

	define('WORKING_LOCATION','/home/sp7-stats/taxons/');

}