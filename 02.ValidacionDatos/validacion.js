let btn_get = document.getElementById('enviar_get');
btn_get.addEventListener('click', validarDatosGet);

let btn_post = document.getElementById('enviar_post');
btn_post.addEventListener('click', validarDatosPost);

function submitFormGet() {
    if(verificar == true) {
        document.valid_data_GET_form.submit();
    }
}

function submitFormPost() {
    if(verificar == true) {
        document.valid_data_POST_form.submit();
    }
}


function validarDatosGet(){
    verificar = true;
    if(!document.valid_data_GET_form.user_text.value && !document.valid_data_GET_form.password_text.value && !document.valid_data_GET_form.sexo_rdo.value){
        alert("No ha llenado los campos del formulario");
        document.valid_data_GET_form.user_text.focus();
        verificar = false;
    }
    else{
        if(!document.valid_data_GET_form.user_text.value){
            alert("El campo Usuario es requerido");
            document.valid_data_GET_form.user_text.focus();
            verificar = false;
        }
        if(!document.valid_data_GET_form.password_text.value){
            alert("El campo Contraseña es requerido");
            document.valid_data_GET_form.password_text.focus();
            verificar = false;
        }
        if(!document.valid_data_GET_form.sexo_rdo[0].checked && !document.valid_data_GET_form.sexo_rdo[1].checked) {
            alert("El campo Sexo es requerido");
            document.valid_data_GET_form.sexo_rdo[0].focus();
            verificar = false;
        }
    }
    submitFormGet();
}

function validarDatosPost(){
    verificar = true;
    if(!document.valid_data_POST_form.user_text.value && !document.valid_data_POST_form.password_text.value && !document.valid_data_POST_form.sexo_rdo.value){
        alert("No ha llenado los campos del formulario");
        document.valid_data_POST_form.user_text.focus();
        verificar = false;
    }
    else{
        if(!document.valid_data_POST_form.user_text.value){
            alert("El campo Usuario es requerido");
            document.valid_data_POST_form.user_text.focus();
            verificar = false;
        }
        if(!document.valid_data_POST_form.password_text.value){
            alert("El campo Contraseña es requerido");
            document.valid_data_POST_form.password_text.focus();
            verificar = false;
        }
        if(!document.valid_data_POST_form.sexo_rdo[0].checked && !document.valid_data_POST_form.sexo_rdo[1].checked) {
            alert("El campo Sexo es requerido");
            document.valid_data_POST_form.sexo_rdo[0].focus();
            verificar = false;
        }
    }
    submitFormPost();
}