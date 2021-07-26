$("#formContacto").on("submit",function(){
    var formD = new FormData(document.getElementById('formContacto'));
    var distName = $("#distribuidora option:selected").text();
    formD.append("distName",distName);
    enviarCorreo(formD);
})

function enviarCorreo(formD){
    $.ajax({
        url:"server/api-contacto.php",
        type:"POST",
        data:formD,
        cache: false,
        contentType: false,
        processData: false,
        beforeSend:function(){
            $("#preloader").show();
        },
        success:function(data){
            if(data.code == 200)
                alert("Tu mensaje ha sido enviado.\nNos pondremos en contacto contigo a la brevededad.");
            else
                alert(data.msg);
        },
        complete:function(){
            $("#preloader").fadeOut();
            $('#formContacto').trigger("reset");
        }
  });
}