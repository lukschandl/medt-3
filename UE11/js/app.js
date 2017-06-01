$(document).ready(function() {
    var id;
    $('#info-box').hide(); // Die Infobox ausblenden!
    $(".delete-icon").click(function () {
        //Modal mit der ID öffnen
        $('#delete-project-modal').modal("show"); 
        id = $(this).parent().parent().parent().attr("id");              
    });
    $(".edit-icon").click(function () {   
       
        $('#edit-project-modal').modal("show");  
        id = $(this).parent().parent().parent().attr("id");          
        $.getJSON("./api/trackstar-api.php?editProId="+id, function(data){             
            data = data.map((x)=> JSON.stringify(x));                      
            var dataObj=JSON.parse(data.join());

            $('#editNameBox').val(dataObj.name);
            $('#editDescBox').val(dataObj.description);            
            $('#editDateBox').val(dataObj.createDate.substring(0,10));
        


        });   
    });
    //Button, der das finale Löschen initiiert!
    $('#delete-project-btn').click(function() {               
            console.log("Löschen true: " + this.id); //this ist das <span>-Element, da an dieses das Click-Event gebunden wurde!
            var myAJAXConf = {
                url: "./api/trackstar-api.php",
                method: "POST",
                data: "deleteProId=" + id,
                dataType: "json",
                success: function (data) {
                    console.log(data);
                    if (data.deleteResponse) {
                        $('#info-box').text("Löschen erfolgreich").removeClass("bg-danger").addClass("bg-success").show().fadeOut(2000);                    
                        $("#"+id).remove();
                    }
                    else {
                        $('#info-box').text("Löschen fehlgeschlagen").removeClass("bg-success").addClass("bg-danger").show().fadeOut(2000);
                    }
                },
                error: function () {
                    $('#info-box').text("Löschen fehlgeschlagen").removeClass("bg-success").addClass("bg-danger").show().fadeOut(2000);
                }
            };
            $.ajax(myAJAXConf);//AJAX-Request mit dem Konfigurationsobjekt absetzen!
            //Model schließen
            $('#delete-project-modal').modal('hide');
    })
    $('#edit-project-btn').click(function(){      
        var currentdate = new Date();
        var datetime = currentdate.getHours() + ":" + currentdate.getMinutes()  + ":" + currentdate.getSeconds();    
        var json={ updateProId: id, updateProName: $('#editNameBox').val(), updateProDesc: $('#editDescBox').val(), updateProDate: $('#editDateBox').val()+" "+datetime};
        var jsonString = JSON.stringify(json);                 
        var myAJAXConf ={
            url: "./api/trackstar-api.php",
            method: "POST",
            data: { updateProData: jsonString},
            success: function(serverResponse){
                $("#"+id).find("td").eq(0).html(json.updateProName);
                $("#"+id).find("td").eq(1).html(json.updateProDesc);
                $("#"+id).find("td").eq(2).html(json.updateProDate);
                $('#info-box').text("Bearbeiten erfolgreich").removeClass("bg-danger").addClass("bg-success").show().fadeOut(4000);
            },
            error: function(){
                $('#info-box').text("Bearbeiten fehlgeschlagen").removeClass("bg-success").addClass("bg-danger").show().fadeOut(4000);
            }
        };
        $.ajax(myAJAXConf);        
        $('#edit-project-modal').modal('hide');
    })
})


