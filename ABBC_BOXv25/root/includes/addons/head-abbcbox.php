<?php
/************************************************************************/
/* CSS and JS requirements for ABBC MOD                                 */
/* Using RavenNuke(tm) v2.5+ (required!)                                */
/************************************************************************/

if (realpath(__FILE__) == realpath($_SERVER['SCRIPT_FILENAME'])) {
	header('Location: ../../index.php');
	exit('Access Denied');
}
/************************************************************************/
// SETTINGS - Note that making changes to these settings may require 
// edits or other changes. Please refer to the included documentation
// $LoadABBCcss: only set to false if you are handling your own CSS loads or appending required CSS to your style.css
// $UseCodeHighligher: enables code highlighting
// $use_highlighter: array of modules to use the code highlighter in
// $IE8HighlightFix: true enables loading of conditional ie<9 stylesheet, otherwise ie8 will display code double spaced, comes at cost of code no longer being indented
// $HighlightFixMods: array of modules to use ie8 fix: only needed if BR is used within code samples
/************************************************************************/
$LoadABBCcss       = true;
$UseCodeHighligher = false;
$use_highlighter   = array('Forums','Private_Messages');
$IE8HighlightFix   = false;
$HighlightFixMods  = array('Forums','Private_Messages');
// END SETTINGS
/************************************************************************/
// Only modify below if you know what you are doing :)
/************************************************************************/
// this decides which javascript function will occur when the code button is clicked
if ($UseCodeHighligher){
	define('ABBC_HIGHLIGHT', 'BBCcodetype');
	} else {
	define('ABBC_HIGHLIGHT', 'BBCbasiccode');
}
global $user, $name;
if (!isset($name)) $name = '';
$ThemeSel = get_theme();
if ($LoadABBCcss){
	// only load BBCode Box CSS for Users and when needed
	if ($name =='Forums' OR $name =='Private_Messages') {
		// only load BBCode Box Editor CSS for Users
		if (is_user($user)){
			// include a copy of bbcode_box.css in the the style directory of any desired theme
			$BBCodeCssFile = 'themes/' . $ThemeSel . '/style/bbcode_box.css';
			if (file_exists($BBCodeCssFile)) {
				// theme specific style
				addCSSToHead($BBCodeCssFile, 'file');
				} else {
				// default style
				addCSSToHead('mods/bbcode_box/bbcode_box.css', 'file');
			}
		}
		// include a copy of bbcode_addons.css in the the style directory of any desired theme
		$BBUserCssFile = 'themes/' . $ThemeSel . '/style/bbcode_addons.css';
		if (file_exists($BBUserCssFile)) {
			// theme specific style
			addCSSToHead($BBUserCssFile, 'file');
			} else {
			// default style
			addCSSToHead('mods/bbcode_box/bbcode_addons.css', 'file');
		}
	}
}
if ($UseCodeHighligher){
	if (in_array($name, $use_highlighter)) {
		// this is the default code highlighting style (if no theme specific style, change as desired)
		$DefaultStyle = 'includes/jquery/styles/vs.css';
		// to style by theme, rename to your preferred style to highlight.css, upload to themes/YOUR_THEME/style/
		$CoderCssFile = 'themes/' . $ThemeSel . '/style/highlight.css';
		if (file_exists($CoderCssFile)) {
			addCSSToHead($CoderCssFile, 'file');
			} else {
			addCSSToHead($DefaultStyle, 'file');
		}
		if($IE8HighlightFix AND (in_array($name, $HighlightFixMods))){
			$IE8fix = '<!--[if lt IE 9]><link rel="StyleSheet" href="mods/bbcode_box/ie8_highlight.css" type="text/css" /><![endif]-->';
			addJSToHead($IE8fix, 'inline');
		}
		addJSToBody('includes/jquery/highlight.pack.js', 'file');
		// this file launches code highlighting for forums, but will work for other modules as long as code is wrapped in <pre><code></code></pre>
		addJSToBody('includes/jquery/start-highlight-forums.js', 'file');
	}
}
?>