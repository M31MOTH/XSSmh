<?php
/*
XSSmh - A configurable Cross-site scripting testbed
Daniel "unicornFurnace" Crowley
Copyright (C) 2012 Trustwave Holdings, Inc.

This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program. If not, see <http://www.gnu.org/licenses/>.
*/
?>
<html>
<head>
	<title>XSSmh - Challenge 1 - The Failure of Quote Filters</title>
</head>
<body>
	<center><h1>XSSmh - Challenge 1 - The Failure of Quote Filters</h1></center><br>

	<hr width="40%">
	<hr width="60%">
	<hr width="40%">
	
You must perform a simple XSS attack, but with one catch: No quotes are allowed.<br>
<br>
Your objective is to cause an alert box to pop up on the resulting page.<br>
(Note: Some browsers have anti-XSS protections which prevent this from working. Try using Firefox, Safari, or old versions of Internet Explorer.)

<pre>
PARAMETERS:
Injection Type - Injection into HTML body
Sanitization - Single and double quotes removed
</pre>

<form action="../xss.php" method="get" name="challenge_form">
	<input type="hidden" name="location" value="body"/>
	<input type="hidden" name="blacklist_level" value="medium"/>
	<input type="hidden" name="blacklist_keywords" value="&quot;,'">
	Injection String: <input type="text" name="inject_string"/><br>
	<input type="submit" name="submit" value="Inject!"/>
</form>
<br>
</body>
</html>