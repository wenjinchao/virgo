<?php
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	
	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	
	$App 	= new App();	
	$Nav	= new Nav();	
	$Menu 	= new Menu();		
	include($App->getProjectCommon());
	
/*******************************************************************************
 * Copyright (c) 2009 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors: Glyn Normington
 *    
 *******************************************************************************/

	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Virgo - Static Analysis";
	$pageKeywords	= "Eclipse, EclipseRT, Virgo, OSGi, History, origin, origins, about, Structure101";
	$pageAuthor		= "Glyn Normington";
		
	ob_start();
?>
	
	<div id="midcolumn">
		<h2>Structure101</h2>
		<table border="0"> 
			<tr height="10" colspan="2"></tr> 
			<tr>
				<td width="80" align="centre" valign="bottom">
					&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://structure101.com/"><img border=0 src="http://structure101.com/images/s101_170.png"></a>
				</td>
				<td>
					We use the excellent <a href="http://structure101.com/">Structure101 for Java</a> to analyse, and remind ourselves of, Virgo code structure.
				</td>
			</tr>
		</table>
	</div>

<?
	$html = ob_get_clean();
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
