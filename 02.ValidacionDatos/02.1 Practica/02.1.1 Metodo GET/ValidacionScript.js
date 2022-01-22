const enviar = document.getElementById('btn_enviar');
enviar.addEventListener("click", validarDatosGet);

function validarDatosGet() {
    validar = true;
    if (!document.form_get.user.value && !document.form_get.password.value && !document.form_get.sexo.checked) {
        alert("Los campos requeridos no fueron llenados!");
        validar = false;
    }
    else{
        if (!document.form_get.user.value) {
            alert("LLene el campo Usuario");
            document.form_get.user.focus();
            validar = false;
        }
        else if (!document.form_get.password.value) {
            alert("LLene el campo Contraseña");
            document.form_get.password.focus();
            validar = false;
        }
        else if (!document.form_get.sexo[0].checked && !document.form_get.sexo[1].checked) {
            alert("Debe selecionar su sexo");
            document.form_get.sexo[0].focus();
            validar = false;
        }
    }
    formSubmit();
}

function formSubmit() {
    if (validar === true) {
        document.form_get.submit();    
    }
}