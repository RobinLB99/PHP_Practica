const enviar = document.getElementById('btn-enviar');
enviar.addEventListener("click", validData);

/* Funcion para enviar los datos a validar*/
function submitForm(){
    if(validar == true){
        document.form_post.submit();
    }
}

function validData() {
    validar = true;
    /* !document.form_post.user.value && !document.form_post.password.value && !document.form_post.sexo_rdo.checked
        Sera la condicion del alerta si no se llenaron los datos en los campos requeridos del formulario
        La forma de acceder a un dato de un <input> de un <form> es la siguiente:
            document.nombreDelFormulario.nombreDelInput.value */
    if(!document.form_post.user.value && !document.form_post.password.value && !document.form_post.sexo_rdo.checked) {
        alert("No se llenaron los campos requeridos");
        /* focus();
            servira para resaltar la atencion sobre ese campo */
        document.form_post.user.focus();
        validar = false;
    }
    else {
        if(!document.form_post.user.value) {
            alert("!El campo Usuario esta vacio!");
            document.form_post.user.focus();
            validar = false;
        }
        else if(!document.form_post.password.value){
            alert("!El campo Contraseña esta vacio!");
            validar = false;
        }
        else if(!document.form_post.sexo_rdo[0].checked && !document.form_post.sexo_rdo[1].checked) {
            alert("Debe selecconar un sexo");
            document.form_post.sexo_rdo[0].focus();
            validar = false;
        }
    }
    submitForm();
}