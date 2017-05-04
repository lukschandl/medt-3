$(".delete").click(function(){
	console.log("delete");
	
	if(confirm("Projekt löschen"))
	{
		console.log("confirmed" + this.id);

		// Kommunikation mit dem Server aufnehmen um ihm mitzuteilen, dass das Projekt mit der ID "id" zu löschen ist
		var  myAJAXConf = {
			url: "http://localhost/medt-3/UE12/index.php",
			method: "POST",
			data: "deleteProId=" + this.id,  //Typ string
			success: function(serverResponse){
				/*console.log("Server response: " + serverResponse);*/
				if(serverResponse)
				{
					// Tabellenzeile entfernen und Infobox einblenden
					// Löschen erfolgreich einblenden
					
					$('#info-box').hide();
					
					$('#info-box').text("Löschen erfolgreich").addClass("bg-success").show(2000);
					
				}
				else
				{
					$('#info-box').text("Löschen nicht erfolgreich").addClass("bg-error").show();
				}
			},
			error: function(){

			}

		};
		$.ajax(myAJAXConf);
	}
	else
	{
		console.log("not confirmed" + $(this).attr("id"));
	}

});
$(".change").click(function(){
	console.log("change");
});