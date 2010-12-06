<?php  	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());

	#*****************************************************************************
	#
	# Copyright (c) 2008, 2009 IBM Corporation and others.
 	# All rights reserved. This program and the accompanying materials
 	# are made available under the terms of the Eclipse Public License v1.0
 	# which accompanies this distribution, and is available at
 	# http://www.eclipse.org/legal/epl-v10.html
 	# Contributors:
	#     IBM Corporation - initial implementation
	#
	# Author: 		Ant Team
	# Date:			November 26, 2008
	#
	# Description: This page presents all test plans used and the milestones they were used for
	#
	#
	#****************************************************************************
	
	
	$pageTitle 		= "Ant Test Plans";
	$pageKeywords	= "ant, script, build, xml, platform, debugging, debugger, breakpoints, launching, test, testing, plan, plans, 3.4, 3.3";
	$pageAuthor		= "Ant Team";
	
	include("../_sideCommon.php");
	
	$html = <<<EOHTML

<div id="maincontent">
	<div id="midcolumn">
		<h1>$pageTitle</h1>	
		<div class="homeitem3col">
			<a name="3-7_testing"></a>
			<h2><b>3.7 Test Plans</b></h2>
			<ul>
				<li><a href="/eclipse/ant/test_plans/3_7M4.php">3.7M4</a></li>
			</ul>
			<a name="3-6_testing"></a>
			<h2><b>3.6 Test Plans</b></h2>
			<ul>
				<li><a href="/eclipse/ant/test_plans/3_6M3.php">3.6M3</a></li>
				<li><a href="/eclipse/ant/test_plans/3_6.php">3.6</a></li>
			</ul>
			<a name="3-5_testing"></a>
			<h2><b>3.5 Test Plans</b></h2>
			<ul>
				<li><a href="/eclipse/ant/test_plans/3_5RC1.php">3.5RC1</a></li>
				<li><a href="/eclipse/ant/test_plans/3_5M7.php">3.5M7</a></li>
				<li><a href="/eclipse/ant/test_plans/3_5M6.php">3.5M6</a></li>
				<li><a href="/eclipse/ant/test_plans/3_5M4.php">3.5M4</a></li>
			</ul>
			<a name="3-4x_testing"></a>
			<h2><b>3.4.x Test Plans</b></h2>
			<ul>
				<li><a href="/eclipse/ant/test_plans/3_4_2.php">3.4.2</a></li>
			</ul>
		</div>
	</div>
	<div id="rightcolumn">
		$commonside
	</div>
</div>


EOHTML;

	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
