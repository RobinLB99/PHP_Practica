let enviar = document.getElementById("enviar");
enviar.addEventListener("click", validarDatosGet);

function validarDatosGet() {
    validar = true;
    if(!document.form_data_get.user_text.value && !document.form_data_get.password_text.value && !document.form_data_get.sexo.value){
        alert("No se ha llenado ningun campo.");
        document.form_data_get.user_text.focus();
        validar = false;
    }
    else{
        if (!document.form_data_get.user_text.value) {
            alert("El campo Usuario debe ser llenado");
            document.form_data_get.user_text.focus();
            validar = false;
        }
        if (!document.form_data_get.password_text.value) {
            alert("El campo Contraseña debe ser llenado");
            document.form_data_get.password_text.focus();
            validar = false;
        }
        if (!document.form_data_get.sexo.value) {
            alert("Sebe seleccionar su sexo");
            document.form_data_get.sexo[0].focus();
            validar = false;
        }
    }
    validacion();
}

function validacion() {
    if(validar == true){
        document.form_data_get.submit();
    }
}