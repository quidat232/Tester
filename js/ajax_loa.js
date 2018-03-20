function Login_Box() {
       new Boxy('<div class="login_boxy">'+
'<form method="post" action="xuly_login.php">'+
'<table width="100%" border="0" cellpadding="0" cellspacing="5">'+
'<tr><td class="login_left_boxy">Account</td><td class="login_input_top"><input class="login_input_boxy" type="text" name="username" /></td></tr>'+
'<tr><td class="login_left_boxy">Password</td><td><input class="login_input_boxy" type="password" name="password" /></td></tr>'+
'<tr><td></td><td class="login_left_boxy_ghinho"></td></tr>'+
'<tr><td></td><td class="login_left_boxy_ghinho">Not a member? <a href="dangki.php" target="_blank">Register</a></p></td></tr>'+'<tr><td colspan="2" class="login_bottom_boxy"><input class="login_xxx" type="submit" value="Login" name="login_oki"/>&nbsp;<input class="close" type="submit" value="Cancel" /></td></tr>'+
'</table>'+
'</form></div>', {title: 'Login Form', modal: true});
};
