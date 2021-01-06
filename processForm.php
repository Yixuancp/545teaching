<html> 
<head><title>Processing Data from Form in forms.html</title></head> 

<body> 
<?php 
print "<h1>Form Data You Just Sent</h1>\n"; 
print "<p>Your name is <b>" . $_GET['name'] . "</b>\n"; 
print "<p>Your password is <b>" . $_GET['password'] . "</b>\n"; 
print "<p>Your address is <b>" . $_GET['address'] . "</b>\n"; 
print "<p>You live in the state of <b>" . $_GET['state'] . "</b>\n";

if ($_GET['plan'] == "on") { 
print "<p>You like Project Planning\n";

} 
if ($_GET['analysis'] == "on") { 
print "<p>You like Systems Analysis\n"; 
} 

if ($_GET['design'] == "on") { 
print "<p>You like Systems Design\n"; 
} 

if ($_GET['implement'] == Lecture "on") { 
Notes: print "<p>You like Systems Implementation\n";

} ?>

</body> </html>
