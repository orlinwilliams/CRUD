/*
selectores los mismos que css
getter and setter se pueden utilizar var dato=$("#id").html(); me devuelve el valor
attr para asignar valores como clases o id etc...
appendTo lo ingresa al final de los valores
prependTo lo agrega al principio
remove eliminar elementos
$.each(array,function(i, value) ) reocorrer elementos jquery

GET SOLO PAR CONSULTAR
POST PARA INSERTAR MODIFICAR ELIMINAR

*/
$.get("http://localhost/tutorialCRUD/model/viewInfo.php",function(data){
        $("#info").html(data);
    });
$(document).ready(function(){
    
    //OBTENER LOS DATOS
    

    //ADDUSER
    $("#addArticle").click(function(){
        $("#load").hide();
        $("#iconCheck").hide();
        $('.modal').modal('show');    
        $("#Update").hide();
    });
   
    
    //ENVIO DE FORMULARIO
    $("form").submit(function(event){
        //alert("NO ENTRA AL SUBMIT");
        event.preventDefault();
        
        $.ajax({

            beforeSend:function(){
                $("#load").show();
            },
            url:"http://localhost/tutorialCRUD/model/saveInfo.php",
            data:$("form").serialize(),
            type:"POST",
            success:function(resp){
                if(resp==="ERROR"){
                    $("#load").hide("slow");
                    $("#iconCheck").attr("src","icons/X.svg");
                    $("#iconCheck").show("slow");
                        
                }
                else{
                    $("#load").hide("slow");
                    $("#iconCheck").attr("src","icons/check.svg");
                    $("#iconCheck").show("slow");
                    console.log(resp);

                }
            },
            error:function(error){
                console.log(error);
                $("#iconCheck").attr("src","icons/X.svg");
                $("#iconCheck").show();

            },
            complete:function(status){//se ejecuta despues de error o success
                console.log(status);
                $("form")[0].reset();
                $.get("http://localhost/tutorialCRUD/model/viewInfo.php",function(data){
                 $("#info").html(data);
        });


            },
            
        });
    });

});

function eliminar(id){
    var idElegido=id;
    if(id!=0 || id!= null){
        if(confirm("Esta seguro que lo dese eliminar"))
        {   
            $.post("http://localhost/tutorialCRUD/model/deleteInfo.php",//la funcion es como success ahi esta la respuesta del server
            {id:idElegido},
            function(resp){
                alert(resp+idElegido);
                $.get("http://localhost/tutorialCRUD/model/viewInfo.php",function(data){
                    $("#info").html(data);
                });
            }
            );

        }
    }   else{
        alert("ID MALO");
    }

}

function modificar(id){
    
    $("#load").hide();
    $("#iconCheck").hide();
    $('.modal').modal('show');    
    $("#saved").hide();
    $("form")[0].reset();
    
    $("#Update").click(function(event){
    
        event.preventDefault();
    
        $.ajax({
            beforeSend:function(){
                $("#load").show("slow");
            
            },
    
            url:"http://localhost/tutorialCRUD/model/modInfo.php",
            type:"POST",
            data:$("form").serialize()+"&id="+id,
            
            success:function(resp){
                if(resp=="CHANGE"){
                    $("#load").hide("slow");
                    $("#iconCheck").attr("src","icons/check.svg");
                    $("#iconCheck").show("slow");
                    console.log($("form").serialize()+"&id="+id);
    
                }
                else{   
                    $("#load").hide();
                    $("#iconCheck").attr("src","icons/X.svg");
                    $("#iconCheck").show("slow");
                    console.log("ERROR NO ENTRA AL CHANGE");
                }
    
            },
            error:function(error){
                $("#iconCheck").attr("src","icons/X.svg");
                $("#iconCheck").show();
            },
            complete:function(){
                $("form")[0].reset();
                
                $.get("http://localhost/tutorialCRUD/model/viewInfo.php",function(data){
                        $("#info").html(data);
                });
            }
    
    
        })
    
    })

    
}

function busqueda(valor){
    var value="valor="+valor;
    $.ajax({
        url:"http://localhost/tutorialCRUD/model/busqueda.php",
        data:value,
        type:"GET",
        success:function(resp){
            $("#info").html(resp);

        },
        error:function(error){
            console.log(error);
        }



    })


}




