<HTML>
<HEAD>
<TITLE>TI83+ Project Development Page</TITLE>

<script language="JavaScript">
myPix = new Array("images/shot1.gif","images/shot2.gif","images/shot3.gif","images/shot4.gif","images/shot5.gif","images/shot6.gif","images/shot7.gif","images/shot8.gif","images/shot9.gif","images/shot10.gif","images/shot11.gif","images/shot12.gif","images/shot13.gif","images/shot14.gif","images/shot15.gif","images/shot16.gif","images/shot17.gif","images/shot18.gif","images/shot19.gif","images/shot20.gif","images/shot21.gif","images/shot22.gif","images/shot23.gif")
thisPic = 0
zoomx = 100
imgCt = myPix.length - 2

function processPrevious() {
	if (document.images && thisPic > 0) {
		thisPic--
		document.myPicture.src=myPix[thisPic]
		}
	}

function processNext() {
	if (document.images && thisPic < imgCt) {
		thisPic++
		document.myPicture.src=myPix[thisPic]
		}
	}

function Zoom() {
	if (zoomx <300) {
		zoomx = zoomx + 20
		document.myPicture.width=zoomx
		}
	}

function Zoomout() {
	if (zoomx > 100) {
		zoomx = zoomx - 20
		document.myPicture.width=zoomx
		}
	}
function Zoomnorm() {
		zoomx = 100
		document.myPicture.width=zoomx
	}
</script>

<LINK REL="stylesheet" HREF="1.css" TYPE="text/css">
<style type="text/css">
<!-- 
A.2:link{COLOR:#FFFFFF;TEXT-DECORATION:none;} 
A.2:visited{COLOR:#FFFFFF;TEXT-DECORATION: none;} 
A.2:active{COLOR:#FFFFFF} 
A.2:hover{COLOR:#000000;TEXT-DECORATION:none;} 
-->
</style>
<script language="javascript">
		dayInfo = new Array
		dayInfo[1] = "By Josh Rodasti  March 12, 2002"
		dayInfo[2] = "By Josh Rodasti  March 11, 2002"
		dayInfo[3] = "By Josh Rodasti  May 31, 2002"
		function showInfo(thisDay) {
			document.calendar.dateInfo.value = dayInfo[thisDay]
		}
</script>
</HEAD>
<BODY BGCOLOR="#6699CC">
<CENTER>
<TABLE WIDTH="100%" HEIGHT="500" BORDER="0" CELLSPACING="1" CELLPADDING="0">
<TR>
<TD BGCOLOR="#000000">
<TABLE WIDTH="100%" HEIGHT="100%" BORDER="0" CELLSPACING="1" CELLPADDING="0">
<TR> 
<TD BGCOLOR="#99CCFF" HEIGHT="150">
<CENTER>
<FONT FACE="verdana" COLOR="#FFFFFF">
<br>&nbsp<br>
<img src="topic.gif" alt="TI83+ Project Development Site" height="60%" width="80%">
</FONT>
</CENTER>
<p>
</P>
</TD>
</TR>
<TR>
<TD BGCOLOR="#99CCFF" VALIGN="top" WIDTH="100%">
<CENTER>
<TABLE BORDER="0" WIDTH="100%" HEIGHT="15" CELLSPACING="1" CELLPADDING="0">
<TR> 
<TD BGCOLOR="#000000" WIDTH="100%"> 
<TABLE WIDTH="100%" HEIGHT="15" BORDER="0" CELLSPACING="1" CELLPADDING="0">
<TR> 
<TD BGCOLOR="#336699" WIDTH="100%" HEIGHT="15"> 
<CENTER>
<?php require("time.txt");?>
</B></FONT>
</CENTER>
</TD>
</TR>
</TABLE>
</TD>
</TR>
</TABLE>
</CENTER>
<CENTER>
<BR>
<TABLE BORDER="0" CELLSPACING="25">
<TR valign="top"> 
<TD> 
<!--Left Menu-->
<TABLE BORDER="0" WIDTH="150" HEIGHT="250" CELLPADDING="1" CELLSPACING="1" BGCOLOR="#000000">
<TR> 
<TD BACKGROUND="tablebg.gif" HEIGHT="20"> 
<CENTER>
<font face="verdana" size="1" color="#FFFFFF"><b> 
Menu
</b></font> 
</CENTER>
</TD>
</TR>
<TR> 
<TD VALIGN="top" BGCOLOR="#FFFFFF"> 
<P>
<div align="center"><font face="verdana" size="1">
<?php require("leftlinx.txt");?>
</font></div>
</font>
</div>
<P>
</TD>
</TR>
<TR> 
<TD BACKGROUND="tablebg.gif" HEIGHT="20"> 
<CENTER>
<font face="verdana" size="1" color="#FFFFFF"><b> 
Counter
</b></font> 
</CENTER>
</TD>
</TR>
<TR> 
<TD VALIGN="top" BGCOLOR="#FFFFFF" HEIGHT="30"> 
<div align="center"> 
<?php require("counter.txt");?>
</TD>
</TR>
</TABLE>
<!--End Left Menu-->
</TD>
<TD> 
<!--Main Content-->
<TABLE BORDER="0" WIDTH="500" HEIGHT="300" CELLPADDING="1" CELLSPACING="1" BGCOLOR="#000000">
<TR> 
<TD BACKGROUND="tablebg.gif" HEIGHT="20"> 
<div align="center">
<font face="verdana" size="1" color="#FFFFFF"><b>
Screen Shots (80 in Archive)
</b></font> 
</div>
</TD>
</TR>
<TR> 
<TD VALIGN="top" BGCOLOR="#FFFFFF">
<P><BR>
<CENTER>
<table border="0" width="95%">
<tr>
<td>
<font face="verdana" size="1" color="#000000">
<a href="javascript:showInfo(1)" onMouseover="window.status='Click a picture'; return true" onMouseout="window.status=''; return true">
<img nosave src="images/madguy1.gif" alt="By Josh Rodasti" border="none" width="150" height="100"></a><a href="javascript:showInfo(1)" onMouseover="window.status='Click a picture'; return true" onMouseout="window.status=''; return true">
<img nosave src="images/madguy2.gif" alt="By Josh Rodasti" border="none" width="150" height="100"></a><a href="javascript:showInfo(2)" onMouseover="window.status='Click a picture'; return true" onMouseout="window.status=''; return true">
<img nosave src="images/rfrpg1.gif" alt="By Josh Rodasti" border="none" width="150" height="100"></a><a href="javascript:showInfo(1)" onMouseover="window.status='Click a picture'; return true" onMouseout="window.status=''; return true">
<img nosave src="images/ragingflame2title.bmp" alt="By Josh Rodasti" border="none" width="150" height="100"><br><a href="javascript:showInfo(3)" onMouseover="window.status='Click a picture'; return true" onMouseout="window.status=''; return true">
<img nosave src="images/ragingflamesite.bmp" alt="By Josh Rodasti" border="none"></a><br><a href="javascript:showInfo(3)" onMouseover="window.status='Click a picture'; return true" onMouseout="window.status=''; return true">
<img nosave src="images/rf2(1).gif" alt="By Josh Rodasti" border="none"></a><br><a href="javascript:showInfo(3)" onMouseover="window.status='Click a picture'; return true" onMouseout="window.status=''; return true">
<img nosave src="images/rayden x.gif" alt="By Josh Rodasti" border="none"></a><br>
<form name="calendar"><textarea rows="2" columns="10" name="dateInfo" readonly>Click a picture...</textarea></form>

<p align="center"><a href="javascript:Zoom()" onMouseover="window.status='Zoom In'; return true" onMouseout="window.status=''; return true" title="Zoom In"><img src="images/zoomin.gif" border=0></a>&nbsp;&nbsp<a href="javascript:Zoomnorm()" onMouseover="window.status='Standard Zoom'; return true" onMouseout="window.status=''; return true" title="Back to normal"><img src="images/magnifyingglass.gif" border=0></a>&nbsp;&nbsp;<a href="javascript:Zoomout()" onMouseover="window.status='Zoom Out'; return true" onMouseout="window.status=''; return true" title="Zoom Out"><img src="images/zoomout.gif" nosave border=0></a></p>
<p align="center"><img src="images/shot1.gif" name="myPicture" alt="Intro RFRPG" nosave></p>
<h2 align="center"><a href="javascript:processPrevious()" title="Previous frame" onMouseover="window.status='Previous'; return true" onMouseout="window.status=''; return true">Back</a>&nbsp;&nbsp;&nbsp;<a href="javascript:processNext()" title="Next frame" onMouseover="window.status='Next'; return true" onMouseout="window.status=''; return true">Next</a></h1>

</font>
</td>
</tr>
</table>
<P>
</CENTER>
</TD>
</TR>
</TABLE>
<!--End Main Content-->
</TD>
<TD> 
<!-- Right Menu-->
<TABLE BORDER="0" WIDTH="150" HEIGHT="250" CELLPADDING="1" CELLSPACING="1" BGCOLOR="#000000">
<TR> 
<TD BACKGROUND="tablebg.gif" HEIGHT="20"> 
<CENTER>
<font face="verdana" size="1" color="#FFFFFF"><b> 
Links
</b></font> 
</CENTER>
</TD>
</TR>
<TR> 
<TD VALIGN="top" BGCOLOR="#FFFFFF">
<P>                       
<div align="center"> 
<font face="verdana" size="1" color="#000000">
<?php require("rightlinx.txt");?>
</font>
</p>
<p>&nbsp;</p>
</div>
</TD>
</TR>
</TABLE>
<!--End Right Menu-->
</TD>
</TR>
</TABLE>
</TD>
</TR>
</TABLE>
</TD>
</TR>
</TABLE>
<P>
</center>
<center>
<font color="#FFFFFF"> <b> <font size="1" face="verdana">
<a href="http://www.designz4you.com" class="2">template by designz4you.com</a>
</font></b> </font> 
</center>
</BODY>
</HTML>