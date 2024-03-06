function enviarFormulario(){
            var form = document.getElementById("formulario");      
           var nombre =  document.getElementById("nombre").value;      
           if(nombre === ""){
               alert("Preencha todos os campos");
               return;
           }
           var correo =  document.getElementById("correo").value;      
           if(correo === ""){
               alert("Preencha todos os campos");
               return;
           }
           var descripcion =  document.getElementById("descripcion").value;      
           if(descripcion === ""){
               alert("Preencha todos os campos");
               return;
           }
           var telefono =  document.getElementById("telefono").value;      
           if(telefono === ""){
               alert("Preencha todos os campos");
               return;
           }
            var response = grecaptcha.getResponse();
            if (response.length == 0)
            {
                alert("verifique se você é um ser humano");
                evt.preventDefault();
                return false;
            }
           document.getElementById('boton').disabled=true;
           var ajax_url = "datos.php";
           var params = "correo="+document.getElementById("correo").value +"&nombre="+document.getElementById("nombre").value +"&telefono="+document.getElementById("telefono").value +"&descripcion="+document.getElementById("descripcion").value;
           var ajax_request = new XMLHttpRequest();
           ajax_request.open( "POST", ajax_url, true );
           ajax_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
           ajax_request.send( params );
           ajax_request.onreadystatechange = function(){
            if (ajax_request.readyState == 4 && ajax_request.status == 200){
                 document.getElementById("formulario").reset();
                 document.getElementById('boton').disabled=false;
             }else
             {
                 alert("Formulário enviado com sucesso, Obrigado por entrar em contato com a Primus Log. Entraremos em contato em breve");
            }
            
    }
           

    }/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


