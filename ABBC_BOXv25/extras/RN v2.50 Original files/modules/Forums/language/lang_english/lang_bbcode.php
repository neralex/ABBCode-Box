<?php
/***************************************************************************
 *                         lang_bbcode.php [english]
 *                            -------------------
 *   begin                : Wednesday Oct 3, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: lang_bbcode.php,v 1.3.2.2 2002/12/18 15:40:20 psotfx Exp $
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

/* CONTRIBUTORS
	2002-12-15	Philip M. White (pwhite@mailhaven.com)
		Fixed many minor grammatical problems.
*/

//
// To add an entry to your BBCode guide simply add a line to this file in this format:
// $faq[] = array("question", "answer");
// If you want to separate a section enter $faq[] = array("--","Block heading goes here if wanted");
// Links will be created automatically
//
// DO NOT forget the ; at the end of the line.
// Do NOT put double quotes (") in your BBCode guide entries, if you absolutely must then escape them ie. \"something\"
//
// The BBCode guide items will appear on the BBCode guide page in the same order they are listed in this file
//
// If just translating this file please do not alter the actual HTML unless absolutely necessary, thanks :)
//
// In addition please do not translate the colours referenced in relation to BBCode any section, if you do
// users browsing in your language may be confused to find they're BBCode doesn't work :D You can change
// references which are 'in-line' within the text though.
//

$faq[] = array("--","Introduction");
$faq[] = array("What is BBCode?", "BBCode is a special implementation of HTML. Whether you can actually use BBCode in your posts on the forum is determined by the administrator. In addition you can disable BBCode on a per post basis via the posting form. BBCode itself is similar in style to HTML, tags are enclosed in square braces [ and ] rather than &lt; and &gt; and it offers greater control over what and how something is displayed. Depending on the template you are using you may find adding BBCode to your posts is made much easier through a clickable interface above the message area on the posting form. Even with this you may find the following guide useful.");

$faq[] = array("--","Text Formatting");
$faq[] = array("How to create bold, italic and underlined text", "BBCode includes tags to allow you to quickly change the basic style of your text. This is achieved in the following ways: <ul><li>To make a piece of text bold enclose it in <span class='thick'>[b][/b]</span>, eg. <br /><br /><span class='thick'>[b]</span>Hello<span class='thick'>[/b]</span><br /><br />will become <span class='thick'>Hello</span></li><li>For underlining use <span class='thick'>[u][/u]</span>, for example:<br /><br /><span class='thick'>[u]</span>Good Morning<span class='thick'>[/u]</span><br /><br />becomes <span class='underline'>Good Morning</span></li><li>To italicise text use <span class='thick'>[i][/i]</span>, eg.<br /><br />This is <span class='thick'>[i]</span>Great!<span class='thick'>[/i]</span><br /><br />would give This is <span class='italic'>Great!</span></li></ul>");
$faq[] = array("How to change the text colour or size", "To alter the color or size of your text the following tags can be used. Keep in mind that how the output appears will depend on the viewers browser and system: <ul><li>Changing the colour of text is achieved by wrapping it in <span class='thick'>[color=][/color]</span>. You can specify either a recognised colour name (eg. red, blue, yellow, etc.) or the hexadecimal triplet alternative, eg. #FFFFFF, #000000. For example, to create red text you could use:<br /><br /><span class='thick'>[color=red]</span>Hello!<span class='thick'>[/color]</span><br /><br />or<br /><br /><span class='thick'>[color=#FF0000]</span>Hello!<span class='thick'>[/color]</span><br /><br />will both output <span style=\"color:red\">Hello!</span></li><li>Changing the text size is achieved in a similar way using <span class='thick'>[size=][/size]</span>. This tag is dependent on the template you are using but the recommended format is a numerical value representing the text size in pixels, starting at 1 (so tiny you will not see it) through to 29 (very large). For example:<br /><br /><span class='thick'>[size=9]</span>SMALL<span class='thick'>[/size]</span><br /><br />will generally be <span style=\"font-size:9px\">SMALL</span><br /><br />whereas:<br /><br /><span class='thick'>[size=24]</span>HUGE!<span class='thick'>[/size]</span><br /><br />will be <span style=\"font-size:24px\">HUGE!</span></li></ul>");
$faq[] = array("Can I combine formatting tags?", "Yes, of course you can, for example to get someones attention you may write:<br /><br /><span class='thick'>[size=18][color=red][b]</span>LOOK AT ME!<span class='thick'>[/b][/color][/size]</span><br /><br />this would output <span style=\"color:red;font-size:18px\"><span class='thick'>LOOK AT ME!</span></span><br /><br />We don't recommend you output lots of text that looks like this though! Remember it is up to you, the poster to ensure tags are closed correctly. For example the following is incorrect:<br /><br /><span class='thick'>[b][u]</span>This is wrong<span class='thick'>[/b][/u]</span>");

$faq[] = array("--","Quoting and outputting fixed-width text");
$faq[] = array("Quoting text in replies", "There are two ways you can quote text, with a reference or without.<ul><li>When you utilise the Quote function to reply to a post on the board you should notice that the post text is added to the message window enclosed in a <span class='thick'>[quote=\"\"][/quote]</span> block. This method allows you to quote with a reference to a person or whatever else you choose to put! For example to quote a piece of text Mr. Blobby wrote you would enter:<br /><br /><span class='thick'>[quote=\"Mr. Blobby\"]</span>The text Mr. Blobby wrote would go here<span class='thick'>[/quote]</span><br /><br />The resulting output will automatically add, Mr. Blobby wrote: before the actual text. Remember you <span class='thick'>must</span> include the parenthesis \"\" around the name you are quoting, they are not optional.</li><li>The second method allows you to blindly quote something. To utilise this enclose the text in <span class='thick'>[quote][/quote]</span> tags. When you view the message it will simply show, Quote: before the text itself.</li></ul>");
$faq[] = array("Outputting code or fixed width data", "If you want to output a piece of code or in fact anything that requires a  fixed width, eg. Courier type font you should enclose the text in <span class='thick'>[code][/code]</span> tags, eg.<br /><br /><span class='thick'>[code]</span>echo \"This is some code\";<span class='thick'>[/code]</span><br /><br />All formatting used within <span class='thick'>[code][/code]</span> tags is retained when you later view it.");

$faq[] = array("--","Generating lists");
$faq[] = array("Creating an Un-ordered list", "BBCode supports two types of lists, unordered and ordered. They are essentially the same as their HTML equivalents. An unordered list ouputs each item in your list sequentially one after the other indenting each with a bullet character. To create an unordered list you use <span class='thick'>[list][/list]</span> and define each item within the list using <span class='thick'>[*]</span>. For example to list your favorite colours you could use:<br /><br /><span class='thick'>[list]</span><br /><span class='thick'>[*]</span>Red<br /><span class='thick'>[*]</span>Blue<br /><span class='thick'>[*]</span>Yellow<br /><span class='thick'>[/list]</span><br /><br />This would generate the following list:<ul><li>Red</li><li>Blue</li><li>Yellow</li></ul>");
$faq[] = array("Creating an Ordered list", "The second type of list, an ordered list gives you control over what is output before each item. To create an ordered list you use <span class='thick'>[list=1][/list]</span> to create a numbered list or alternatively <span class='thick'>[list=a][/list]</span> for an alphabetical list. As with the unordered list items are specified using <span class='thick'>[*]</span>. For example:<br /><br /><span class='thick'>[list=1]</span><br /><span class='thick'>[*]</span>Go to the shops<br /><span class='thick'>[*]</span>Buy a new computer<br /><span class='thick'>[*]</span>Swear at computer when it crashes<br /><span class='thick'>[/list]</span><br /><br />will generate the following:<ol type=\"1\"><li>Go to the shops</li><li>Buy a new computer</li><li>Swear at computer when it crashes</li></ol>Whereas for an alphabetical list you would use:<br /><br /><span class='thick'>[list=a]</span><br /><span class='thick'>[*]</span>The first possible answer<br /><span class='thick'>[*]</span>The second possible answer<br /><span class='thick'>[*]</span>The third possible answer<br /><span class='thick'>[/list]</span><br /><br />giving<ol type=\"a\"><li>The first possible answer</li><li>The second possible answer</li><li>The third possible answer</li></ol>");

$faq[] = array("--", "Creating Links");
$faq[] = array("Linking to another site", "phpBB BBCode supports a number of ways of creating URIs, Uniform Resource Indicators better known as URLs.<ul><li>The first of these uses the <span class='thick'>[url=][/url]</span> tag, whatever you type after the = sign will cause the contents of that tag to act as a URL. For example to link to phpBB.com you could use:<br /><br /><span class='thick'>[url=http://www.phpbb.com/]</span>Visit phpBB!<span class='thick'>[/url]</span><br /><br />This would generate the following link, <a href=\"http://www.phpbb.com/\" target=\"_blank\">Visit phpBB!</a> You will notice the link opens in a new window so the user can continue browsing the forums if they wish.</li><li>If you want the URL itself displayed as the link you can do this by simply using:<br /><br /><span class='thick'>[url]</span>http://www.phpbb.com/<span class='thick'>[/url]</span><br /><br />This would generate the following link, <a href=\"http://www.phpbb.com/\" target=\"_blank\">http://www.phpbb.com/</a></li><li>Additionally phpBB features something called <span class='italic'>Magic Links</span>, this will turn any syntatically correct URL into a link without you needing to specify any tags or even the leading http://. For example typing www.phpbb.com into your message will automatically lead to <a href=\"http://www.phpbb.com/\" target=\"_blank\">www.phpbb.com</a> being output when you view the message.</li><li>The same thing applies equally to email addresses, you can either specify an address explicitly for example:<br /><br /><span class='thick'>[email]</span>no.one@domain.adr<span class='thick'>[/email]</span><br /><br />which will output <a href=\"emailto:no.one@domain.adr\">no.one@domain.adr</a> or you can just type no.one@domain.adr into your message and it will be automatically converted when you view.</li></ul>As with all the BBCode tags you can wrap URLs around any of the other tags such as <span class='thick'>[img][/img]</span> (see next entry), <span class='thick'>[b][/b]</span>, etc. As with the formatting tags it is up to you to ensure the correct open and close order is following, for example:<br /><br /><span class='thick'>[url=http://www.phpbb.com/][img]</span>http://www.phpbb.com/images/phplogo.gif<span class='thick'>[/url][/img]</span><br /><br />is <span class='underline'>not</span> correct which may lead to your post being deleted so take care.");

$faq[] = array("--", "Showing images in posts");
$faq[] = array("Adding an image to a post", "phpBB BBCode incorporates a tag for including images in your posts. Two very important things to remember when using this tag are; many users do not appreciate lots of images being shown in posts and secondly the image you display must already be available on the internet (it cannot exist only on your computer for example, unless you run a webserver!). There is currently no way of storing images locally with phpBB (all these issues are expected to  be addressed in the next release of phpBB). To display an image you must surround the URL pointing to the image with <span class='thick'>[img][/img]</span> tags. For example:<br /><br /><span class='thick'>[img]</span>http://www.phpbb.com/images/phplogo.gif<span class='thick'>[/img]</span><br /><br />As noted in the URL section above you can wrap an image in a <span class='thick'>[url][/url]</span> tag if you wish, eg.<br /><br /><span class='thick'>[url=http://www.phpbb.com/][img]</span>http://www.phpbb.com/images/phplogo.gif<span class='thick'>[/img][/url]</span><br /><br />would generate:<br /><br /><a href=\"http://www.phpbb.com/\" target=\"_blank\"><img src=\"http://www.phpbb.com/images/phplogo.gif\" border=\"0\" alt=\"\" /></a><br />");

$faq[] = array("--", "Other matters");
$faq[] = array("Can I add my own tags?", "No, I am afraid not directly in phpBB 2.0. We are looking at offering customisable BBCode tags for the next major version");

//
// This ends the BBCode guide entries
//

?>