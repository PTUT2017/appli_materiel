$(document).ready(function(){

	var couleur="rouge";

	$("#contenu img").click(function(){
		//console.log(couleur);


		var col=$(this).attr("class");
		var n=$("."+col+"[src='vide.png']").length;
		console.log(7-n);
		var row=7-n;


		if(row<7)
		{
			if (couleur=="rouge")
			{
				$("#row"+row+" img."+col).attr('src', 'rouge.png');
				couleur="jaune";
			}
			else
			{
				$("#row"+row+" img."+col).attr('src', 'jaune.png');
				couleur="rouge";
			}
		}

	});








	$(":button").click(function(){
		$("img").attr('src', 'vide.png');
			
	});




});