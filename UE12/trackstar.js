$(document).ready(function(){
	$('#info-box').hide();
	$('.delete').click(function() {
	  if(confirm("Soll dieses Projekt wirklich gelöscht werden?")) 
	  {
	    console.log("Löschen true: "); //this ist das span element, da an dieses dass click event gebunden wurde; alternativ: $(this).attr("id")
		$.ajax({
			url: "http://localhost/medt-3/UE12/trackstar.php",
			method: "POST",
			data: "deleteProId=" + $(this).parent().parent().attr("id"),  //Typ string
			success: function(serverResponse){
				console.log("Server response: " + serverResponse);
				if(serverResponse)
				{
					
					$('#info-box').text("Löschen erfolgreich").fadeIn("Slow");
					$('#info-box').addClass("bg-success");
					$('#'+serverResponse).remove();
					$('#info-box').show().fadeOut("Slow");
					
				}
				else
				{
					// Löschen nicht erfolgreich einblenden
				}
			},
			error: function(){

			}
		}); //AJAX-Request mit dem Konfigurationsobjekt absetzen
	  }
	  else {
	    console.log("Löschen fehlgeschlagen: " + $(this).parent().parent().attr("id")); // $(this) erzeugt aus der this-referenz ein jquery-object. jetzt können alle jquery methoden genutzt werden
	  }
	});
});

$('.edit').click(function() {
  console.log("Edit");
});


