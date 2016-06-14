<?php
	require_once('../resources/php/sql.php');
	/*include 'db.inc.php';*/
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>DHSupport Ticket</title>
	<link rel="stylesheet" href="css/foundation.min.css">
	<link rel="stylesheet" href="style.css">
	<style>
		@media print {
			.no-print, .no-print * {
				display: none !important;
			}
		}
	</style>
</head>
<body>
    <div class="off-canvas-wrapper">
    	<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
    		<div class="off-canvas position-left reveal-for-large" id="my-info" data-off-canvas data-position="left">
    			<div class="row column">
    			</div>
    		</div>
    		<div class="off-canvas-content" data-off-canvas-content>
    			<div class="callout primary no-print">
    				<div class="row column">
        				<img class="logo" src="img/logo.png">
                        <nav>
                            <ul class="menu">
                                <li><a href="index.php">Check in</a></li>
                                <li><a href="checkout.php">Sök</a></li>
                            </ul>
                        </nav>
    				</div>
    			</div>
                
