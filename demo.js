$(function () {


	/*window.setInterval($.post("getMessageController.php",{getter:$('#sendername').html(), sender:$('#gettername').html()},function(result){
		//alert(result);
		$('textarea').val(result);

	}), 5000);*/

	/*$.post("getMessageController.php",{getter:$('#sendername').html(), sender:$('#gettername').html()},function(result){
		//alert(result);
		$('textarea').val(result);

	});*/

	window.setInterval(clock,5000);

	function clock()
	{
		/*var t=new Date();
		$('textarea').val(t);*/
		$.post("getMessageController.php",{getter:$('#sendername').html(), sender:$('#gettername').html()},function(result){
			//alert(result);
			if(result !=='[]'){
				$('textarea').val($('textarea').val()+'\n'+result);
				//alert(typeof result);
			}


		});

	}


	$('#envoyer').click(function () {
		//alert('光标激活');
		var gettername=$('#gettername').html();
		var sendername=$('#sendername').html();

		var txt=$("input").val();

		$.post("sendMessageController.php",{content:txt, getter:gettername},function(result){
			//$("span").html(result);
		});
		var myDate = new Date();
		//alert(myDate);
		$('textarea').val($('textarea').val()+'\n'+sendername+':'+txt+'------'+myDate);



	});
});


























