<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="author" content="blacklizt">
<meta name="robots" content="all">
<meta name="description" content="Neatblue simple skins modified by Itoshiki">
<meta name="keywords" content="neatblue">
<link rel="stylesheet" href="templates/neatblue/styles/rl_style_pm.css">
<title><?php
if (!isset($nn)) $nn = "\r\n";
if (!isset($page_title)) {
	echo 'Bakaleech v2.0';
} else {
	echo htmlspecialchars($page_title);
}
?></title>
<script type="text/javascript">
/* <![CDATA[ */
var php_js_strings = [];
php_js_strings[87] = " <?php echo lang(87); ?>";
pic1= new Image(); 
pic1.src="templates/neatblue/images/ajax-loading.gif";
/* ]]> */
</script>
<script src="classes/js.js"></script>
<?php
if ($GLOBALS['options']['ajax_refresh']) { echo '<script src="classes/ajax_refresh.js"></script>'.$nn; }
if ($GLOBALS['options']['flist_sort']) { echo '<script src="classes/sorttable.js"></script>'.$nn; }
?>
<script type="text/javascript">function toggle(b){var a=document.getElementById(b);if(a.style.display=="none"){a.style.display="block"}else{a.style.display="none"}};</script>
</head>
<body>
<header><img src="https://raw.githubusercontent.com/ItoshikiMonset/Bakaleechv2/master/templates/neatblue/images/header2.jpg?token=ALF5D3DL2VEER2UEM6LVMH253CWIG" height="220" width="700" alt="rapidleech neatblue by Itoshiki"></header><br />
