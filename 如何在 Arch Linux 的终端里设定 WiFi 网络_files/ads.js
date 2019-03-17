var e=document.createElement('div');
e.id='pleaseRemoveOurSiteFromBlackList';
e.style.display='none';
document.body.appendChild(e);

function aliyunad(p,pin,anchor) {
	var s = '47df89fd6c7c4441aac12935e311c0cf';
	var url = 'https://promotion.aliyun.com/promotion/adv/getAliyunAdv.htm?s=' + s + '&p=' + p + '&pin=' + pin + '&cback=drawad_' + anchor;
	(function($){
        $.ajax({
             type: "get",
             async: false, 
             url: url,
             dataType: "jsonp",
             jsonp: "callback",
             jsonpCallback:"drawad_" + anchor,
             success: function(json){
             	if (! json.success) return false;

                eval('ev = ' + json.data[0].content + ';');
                var idx = Math.floor(Math.random() * ev.length);
                var ad = "<a href='" + ev[idx].url + "' target=_blank><img src='" + ev[idx].img + "'/></a>";
                $("#" + anchor).replaceWith(ad);
             },
             error: function(){
                 return false;
             }
         });
     })(jQuery);	
}