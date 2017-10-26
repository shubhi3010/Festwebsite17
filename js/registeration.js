$(document).ready(function(){
$("#31").click(function(){
        var n=$("#user").val();
		
		$(this).hide();
		
		if(n>1)
		{
			$("#a").hide();
		$("#b").show();
		for(var i=2;i<=n;i++)
		{
		$("#"+i+"").show();
		}}
		$("#32").show();	
		
    });
	$("#32").click(function(){
			$("#z").hide();
		$("#table").show();
		})
});