<?xml version="1.0" encoding="UTF-8"?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head profile="http://selenium-ide.openqa.org/profiles/test-case">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="selenium.base" href="http://talk-shop.net/" />
<title>deleteAccount</title>
</head>
<body>
<table cellpadding="1" cellspacing="1" border="1">
<thead>
<tr><td rowspan="1" colspan="3">deleteAccount</td></tr>
</thead><tbody>
<tr>
	<td>open</td>
	<td>/#</td>
	<td></td>
</tr>
<tr>
	<td>click</td>
	<td>css=div.topBarText</td>
	<td></td>
</tr>
<tr>
	<td>type</td>
	<td>id=username</td>
	<td>stevejobs@apple.com</td>
</tr>
<tr>
	<td>type</td>
	<td>id=password</td>
	<td>11111</td>
</tr>
<tr>
	<td>clickAndWait</td>
	<td>id=submit</td>
	<td></td>
</tr>
<tr>
	<td>click</td>
	<td>css=div.topBarText</td>
	<td></td>
</tr>
<tr>
	<td>clickAndWait</td>
	<td>css=#deleteProfileButton &gt; p.settingsDropDownText</td>
	<td></td>
</tr>
<tr>
	<td>waitForPopUp</td>
	<td>_self</td>
	<td>30000</td>
</tr>
<tr>
	<td>click</td>
	<td>css=div.topBarText</td>
	<td></td>
</tr>
<tr>
	<td>type</td>
	<td>id=username</td>
	<td>stevejobs@apple.com</td>
</tr>
<tr>
	<td>type</td>
	<td>id=password</td>
	<td>11111</td>
</tr>
<tr>
	<td>clickAndWait</td>
	<td>id=submit</td>
	<td></td>
</tr>
<tr>
	<td>click</td>
	<td>id=login-trigger</td>
	<td></td>
</tr>

</tbody></table>
</body>
</html>
