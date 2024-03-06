function enviarFormulario(){
            var form = document.getElementById("formulario");      
           var nombre =  document.getElementById("nombre").value;      
           if(nombre === ""){
               alert("Fill In All Fields");
               return;
           }
           var correo =  document.getElementById("correo").value;      
           if(correo === ""){
               alert("Fill In All Fields");
               return;
           }
           var descripcion =  document.getElementById("descripcion").value;      
           if(descripcion === ""){
               alert("Fill In All Fields");
               return;
           }
           var telefono =  document.getElementById("telefono").value;      
           if(telefono === ""){
               alert("Fill In All Fields");
               return;
           }
         var response = grecaptcha.getResponse();
            if (response.length == 0)
            {
                alert("verifique que es un humano");
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
                 alert("Form Submitted successfully, Thank you for Contacting Primus Log. We will contact you shortly");
            }
            
    }
           

    }/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


