<?php
include_once 'login.class.php';
$securearea = new Login();
$response = $securearea->session_check();
ini_set('session.gc_maxlifetime', 86400);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>TrilaSoft</title>
<link rel="stylesheet" href="css/login-screen.css" type="text/css" media="screen" title="default" />
<link rel="stylesheet" href="css/form.css" type="text/css" media="screen" title="default" />
<!--  jquery core -->

<script src="js/jquery-1.8.1.min.js" type="text/javascript"></script>
<script type="text/javascript" src="http://jzaefferer.github.com/jquery-validation/jquery.validate.js"></script>

<script src="js/custom_jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="js/ddaccordion.js"></script>
<script type="text/javascript">
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click", "clickgo", or "mouseover"
	mouseoverdelay: 200, //if revealtype="mouseover", set delay in milliseconds before header expands onMouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false 
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["suffix", "<img src='images/plus.gif' class='statusicon' />", "<img src='images/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "fast", //speed of animation: integer in milliseconds (ie: 200), or keywords "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</script>
 <script type="text/javascript">
        $(document).ready(function(){
       
	    $("input, textarea").addClass("idle");
            $("input, textarea").focus(function(){
                $(this).addClass("activeField").removeClass("idle");
	    }).blur(function(){
                $(this).removeClass("activeField").addClass("idle");
	    });
        });
    </script>
     <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
  <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
<script type="text/javascript" src="ebook/js/swfobject.js"></script>
<script type="text/javascript" src="ebook/js/swfaddress.js"></script>
<script type="text/javascript" src="ebook/js/swfmacmousewheel.js"></script>
</head>
<body >

<!-- start logo -->


<!-- end logo -->
<!--  start top-search -->
	
   
 <?php include('includes/header.php'); ?>
 	<div class="clear"></div>
<!-- Start: login-holder -->
<!-- start content-outer ....................START -->
<div id="content-outer">
<!-- start content -->
<div id="content">
	
	<!--  start page-heading -->
	<div id="page-heading">
		<h1>Employee Intranet</h1>
	</div>
	<!-- end page-heading -->

	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="images/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized"><img src="images/side_shadowright.jpg" width="20" height="300" alt="" /></th>
	</tr>
	<tr>
		<td id="tbl-border-left"></td>
		<td>
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		 
			<!--  start table-content  -->
			<div id="table-content">			
			<div class="left_content">
             
           <?php
           include('includes/leftpanel.php');
           ?>
			</div>
    

    <div class="right_content">  <!-- Start of right content-->    
    

     <h2>Employee Policy Handbook</h2>
       
        
<div id="ebookcontainer">
		<!-- Your ebook will be displayed here. In case user hasn't got actual version of Adobe Flash Player, the below description
		will appear.
		-->
		Hello, you either have JavaScript turned off or an old version of Adobe�s Flash Player.
		<a href="http://www.macromedia.com/go/getflash/">Get Flash/</a> 
	</div>    

         
 <script language="JavaScript" type="text/javascript">			
	   
		var flashvars = {};
		/* Adjust setting below to your personal needs (Don't forget to remove '//' from the beginning of the line)  */
			
		flashvars.locales = "en_EN";
		//flashvars.bookPath = "ebook/content/publication";     //path to folder with publication files
		//flashvars.skinPath = "ebook/content/skin/skin_1.swf"; //path to viewer skin (swf)
		//flashvars.useSounds = "true";                         //use sounds ("true=yes, "false"=no)
		//flashvars.soundsPath = "ebook/content/snd/";          //path to folder with sound
		//flashvars.configPath = "ebook/config/";               //path to folder with eBook configuration (xml)
		//flashvars.logoPath = "ebook/content/logo.png";        //path to logo (png or jpg)
		//flashvars.logoURL = "www.yourpage.pl";                //URL logo link		
		//flashvars.logoURLWindow = "_blank";                   //open URL in new window ("_blank") or in the same window ("_self")
		//flashvars.print = "true";
		//flashvars.save = "true";
		//flashvars.dragSpeed = "5";				            //speed of page flip (1-7)
		//flashvars.print = "true";
		flashvars.save = "false";
		flashvars.buttons = "zoom";
		
		
		/* eBook dimension in percentages or in pixels  (var w = "100%", var w = "800" ) */
		var w = "800";	//width
		var h = "600";	//height
		
		var params = {};
		params.allowfullscreen = "true";
		params.allowscriptaccess = "always";
		params.allownetworking = "all";
		//params.wmode = "transparent"; //uncomment for transparent eBook background
		swfobject.embedSWF( "ebook/ebook.swf", "ebookcontainer", w, h, "10.0.0", "ebook/js/expressInstall.swf", flashvars, params );
	</script>
          
      
     
     	</div><!-- end of right content-->
			
			</div>
			<!--  end table-content  -->
	
			<div class="clear"> </div>
		 
		</div>
		<!--  end content-table-inner ............................................END  -->
		</td>
		<td id="tbl-border-right"></td>
	</tr>
	<tr>
		<th class="sized bottomleft"></th>
		<td id="tbl-border-bottom">&nbsp;</td>
		<th class="sized bottomright"></th>
	</tr>
	</table>
	<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer........................................................END -->

<div class="clear">&nbsp;</div>
    
<!-- End: login-holder -->
</body>
</html>