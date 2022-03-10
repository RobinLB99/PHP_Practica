let enviar = document.getElementById("enviar");
enviar.addEventListener("click", validarDatosPost);

function validarDatosPost(){
    validar = true;
    if(!document.form_data_POST.user_text.value && !document.form_data_POST.password_text.value &&!document.form_data_POST.rdo_sexo.value){
        alert("No se ha ingresado ningun campo.");
        document.form_data_POST.user_text.focus();
        validar = false;
    }
    else{
        if(!document.form_data_POST.user_text.value){
            alert("Debe ingresar el nombre de usuario");
            document.form_data_POST.user_text.focus();
            validar = false;
        }
        if (!document.form_data_POST.password_text.value) {
            alert("Debe ingresar la contraseña");
            document.form_data_POST.password_text.focus();
            validar = false;
        }
        if (!document.form_data_POST.rdo_sexo.value) {
            alert("Debe escojer su sexo");
            document.form_data_POST.rdo_sexo[0].focus();
            validar = false;
        }
    }
    validacion();
}

function validacion(){
    if(validar == true){
        document.form_data_POST.submit();
    }
}