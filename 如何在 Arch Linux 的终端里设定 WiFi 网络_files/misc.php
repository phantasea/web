if($('seccode_cSDMxbKe')) {
	if(!$('vseccode_cSDMxbKe')) {
		var sectpl = seccheck_tpl['cSDMxbKe'] != '' ? seccheck_tpl['cSDMxbKe'].replace(/<hash>/g, 'codecSDMxbKe') : '';
		var sectplcode = sectpl != '' ? sectpl.split('<sec>') : Array('<br />',': ','<br />','');
		var string = '<input name="seccodehash" type="hidden" value="cSDMxbKe" /><input name="seccodemodid" type="hidden" value="portal::view" />' + sectplcode[0] + '验证码' + sectplcode[1] + '<input name="seccodeverify" id="seccodeverify_cSDMxbKe" type="text" autocomplete="off" style="ime-mode:disabled;width:100px" class="txt px vm" onblur="checksec(\'code\', \'cSDMxbKe\', 0, null, \'portal::view\')" />' +
			' <a href="javascript:;" onclick="updateseccode(\'cSDMxbKe\');doane(event);" class="xi2">换一个</a>' +
			'<span id="checkseccodeverify_cSDMxbKe"><img id="checksec_none_cSDMxbKe" src="' + STATICURL + 'image/common/none.gif" width="16" height="16" class="vm" /></span>' +
			sectplcode[2] + '<span id="vseccode_cSDMxbKe">输入下图中的字符<br /><img onclick="updateseccode(\'cSDMxbKe\')" width="100" height="40" src="misc.php?mod=seccode&update=28667&idhash=cSDMxbKe" class="vm" alt="" /></span>' + sectplcode[3];
		evalscript(string);
		$('seccode_cSDMxbKe').innerHTML = string;
	} else {
		var string = '输入下图中的字符<br /><img onclick="updateseccode(\'cSDMxbKe\')" width="100" height="40" src="misc.php?mod=seccode&update=28667&idhash=cSDMxbKe" class="vm" alt="" />';
		evalscript(string);
		$('vseccode_cSDMxbKe').innerHTML = string;
	}
	
}