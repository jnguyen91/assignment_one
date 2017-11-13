<?php
if (!defined('APPPATH'))
	exit('No direct script access allowed');
/**
 * views/template.php
 *
 * Pass in $pagetitle (which will in turn be passed along)
 * and $pagebody, the name of the content view.
 * 
 * Yes, this is using an old version of Bootstrap. too bad.
 *
 * ------------------------------------------------------------------------
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>{pagetitle}</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <script type="text/javascript" src="/assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="/assets/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="/assets/css/bootstrap.min.css" media="screen"/>
        <!-- <link rel="stylesheet" type="text/css" href="/assets/css/style.css"/> -->
        <link rel="stylesheet" type="text/css" href="/assets/css/default.css"/>
    </head>
    <body>
        <div id="container">
            <div class="navbar">
                <ul>
                    <li><a href="/welcome">Home</a></li>
                    <li><a href="/fleet">Fleet</a></li>
                    <li><a href="/flights">Flight</a></li>
                </ul>
            </div> 
            {content}
        </div>
    </body>
</html>
