$(document).ready(function(){
	$('#search').keyup(function(){
		var search = $(this).val();
		search = $.trim(search);
		
		if(search.length>2)
		{
			$('#loader').show();
			const sleep = (milliseconds) => {
			return new Promise(resolve => setTimeout(resolve, milliseconds))
			} 
			sleep(1000).then(() => {
			$.post('post.php',{search:search},function(data){
				$('#resultat').html(data);
				$('#loader').hide();
			});
			});
		}else{
			$('#resultat').html('');
		}
		
	});
});