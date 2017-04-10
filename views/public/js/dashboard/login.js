define(["jquery", "cookie", "form"], function($){
	$("form").submit(function(){
		$("form").ajaxSubmit({
			success: function(data){
				if(data.code == 200) {
					$.cookie("userInfo", JSON.stringify(data.result));
					location.href = "/";
				}else{
					alert(data.msg);
				}
			}
		});
		return false;
	});
});