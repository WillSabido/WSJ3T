<?php
/**
 *
 * Main file
 *
 * @version             0.1.0
 * @package             Webi Sabi Framework
 * @copyright			Copyright (C) 2013 WebiSabi. All rights reserved.
 *               
 */

// Define call to JEXEC for security to forbid direct access. 
defined('_JEXEC') or die;
// to avoid the problems
//if(!defined('DS')) {
// define('DS', DIRECTORY_SEPARATOR);
//}
// enable showing errors in PHP
//ini_set('error_reporting', E_ALL);
//ini_set('display_errors','On');
// include framework classes and files
//require_once('lib/ws.framework.php');
// run the framework
//$tpl = new WSTemplate($this);
// EOF

$doc = JFactory::getDocument();
$doc->addStyleSheet($this->baseurl . '/media/jui/css/bootstrap.min.css');
$doc->addStyleSheet($this->baseurl . '/media/jui/css/bootstrap-responsive.css');
$doc->addStyleSheet('templates/' . $this->template . '/css/template.css');
$doc->addScript('/templates/' . $this->template . '/js/main.js', 'text/javascript');
?>

<!DOCTYPE html>
<html>
<head>
	<jdoc:include type="head" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <!-- main container -->
    <div class='container'>
        <!-- header -->
        <div class='row'>
        	<header class='container-fluid'>
        		<a href="/~wpdev/./" id="pull-left">
        			<img src="http://webisabihosting.co.uk/~wpdev/images/ws_logo.png" alt="Webi Sabi - Transient beauty in imperfection">
        		</a>
        	</header>
    	</div>
    	<div class='menu row'>
    		<div class='span12'>
    			<jdoc:include type="modules" name="menu" style="xhtml" />
    		</div>
    	</div>
    	<div class='carousel row'>
    		<div class='span12'>
    			<jdoc:include type="modules" name="top" style="none" />
				<jdoc:include type="modules" name="carousel" style="none" />
    		</div>
    	</div>
        <!-- mid container - includes main content area and right sidebar -->
        <div class='mid_container row'>
            <!-- main content area -->
            <div class='main_content_area span9'>
                <!-- This code will create the module positions for our main content area -->
                <jdoc:include type="modules" name="breadcrumbs" style="none" />
                <jdoc:include type="modules" name="social" style="none" />
				<jdoc:include type="message" />
				<jdoc:include type="component" />
            </div>
            <!-- right sidebar -->
            <div class='right_sidebar span3'>
                <jdoc:include type="modules" name="position-7" style="well" />
            </div>
            <div style='clear:both;'></div>
            <div class='button_box span12'>
                <!-- This code will create the module positions for our boxes area -->
                <jdoc:include type="modules" name="buttons" style="none" />
            </div>
            <div style='clear:both;'></div>
        </div>
        <!-- footer -->
        <div class='footer row'>
            <div id='100' class='span12'>
                <jdoc:include type="modules" name="social" style="none" />
            	<jdoc:include type="modules" name="footer" style="xhtml" />
            </div>
        </div>
    </div>
<script type="text/javascript"> var $ = jQuery.noConflict(); $(document).ready(function() 
 { $('#myCarousel').carousel({ interval: 8000, cycle: true }); }); 

</script>
</body>
</html>