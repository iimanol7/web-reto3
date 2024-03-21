/*--------------CAMBIAMOS DE MODO OSCURO A CLARO-----------------*/
//COMPROBAMOS QUE EL ELEMENTO ESTÉ EN ESA PÁGINA (si no da error, pues no la encuentra)
if (document.getElementById('icon-tema')) {
    //selecciono la imagen de cambio de color
    const cambiarColor = document.getElementById('icon-tema')

    cambiarColor.addEventListener("click", () => {
        //si no tiene la clase "light" se la añade, si la tiene la elimina
        document.body.classList.toggle('dark')
        //cambio el icono
        if (cambiarColor.src.includes('sol.png')) {
            cambiarColor.src = "img/luna.png"
        }else {
            cambiarColor.src = "img/sol.png"
        }
    });

}

/*--------HACEMOS VISIBLE EL MENU RESPONSIVE-------------*/
//COMPROBAMOS QUE EL ELEMENTO ESTÉ EN ESA PÁGINA (si no da error, pues no la encuentra)
if (document.getElementById('open-menu')) {

    const open = document.getElementById('open-menu')
    const close = document.getElementById('close-menu')
    const nav = document.getElementById('nav')

    //cuando hacemos click en el boton del menú
    open.addEventListener('click', () => {
        nav.classList.add('show')
    })
    //cuando hacemos click en la "X"
    close.addEventListener('click', () => {
        nav.classList.remove('show')
    })

}
/*---------------------VER CONTRASEÑA-------------------*/
//COMPROBAMOS QUE EL ELEMENTO ESTÉ EN ESA PÁGINA (si no da error, pues no la encuentra)
if (document.getElementById('pass-checkbox')) {
    //si el elemento existe en esa página
    const check = document.getElementById('pass-checkbox')
    const pass = document.getElementById('password')
    const repeatPass = document.getElementById('repeat-password')
    check.addEventListener('click', () => {
        if (check.checked) {
            pass.type = 'text'
            repeatPass.type = 'text'
        } else {
            pass.type = 'password'
            repeatPass.type = 'password'
        }
    })

    //validamos los campos
    const form = document.getElementById('form')
    const formSection = document.getElementById('form-container')
    const mail = document.getElementById('email')
    const error = document.getElementById('validacion')
    const name = document.getElementById('name')
    const surname = document.getElementById('surname')

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        //reinicio valor del error (para que no se repita cada vez)
        error.innerHTML = ""
        //(expresión regular para validar el formato del email)
        const regexEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,4})+$/
        //(Expresión regular para comprobar el formato de la contraseña)
        const regexPass = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).+$/
        //creo una variable para comprobar si todo está correcto
        let esCorrecto = true
        //compruebo si los campos de nombre y apellido estan vacios
        if (name.value.length <= 0 || surname.value.length <= 0) {
            error.innerHTML = "Los campos de Nombre y Apellido no pueden estar vacios. <br>"
            esCorrecto = false
        }if (!regexEmail.test(mail.value)) {

            //coMpruebo que el email esta correcto
            error.innerHTML += "El correo no es valido. <br>"
            esCorrecto = false
        }if (pass.value.length < 6) {
            //compruebo que la contraseña tenga mas de 6 caracteres
            error.innerHTML += "La contraseña debe contener al menos 6 caracteres. <br>"
            esCorrecto = false
        }if (!regexPass.test(pass.value)) {
            //compruebo que la contraseña contenga un número y una mayúscula
            error.innerHTML += "la contraseña debe contener al menos una letra minúscula, una mayúscula y un número. <br>"
            esCorrecto = false
        }if (pass.value !== repeatPass.value) {
            error.innerHTML += "Las contraseñas no coinciden. <br>"
            esCorrecto = false
        }

        //SI TODO ESTÁ CORRECTO:
        if (esCorrecto) {
            //Doy la bienvenida al usuario
            alert("Registro realizado correctamente. Bienvenido, " + name.value + " " + surname.value + ".")
            //Vacio los campos de texto
            name.value = ""
            surname.value = ""
            mail.value = ""
            pass.value = ""
            repeatPass.value = ""
            //Cierro el formulario
            formSection.classList.remove('visible')
        }

    })
}

/*-------------------------ABRIR FORMULARIO DE REGISRTO----------------------*/
//COMPROBAMOS QUE EL ELEMENTO ESTÉ EN ESA PÁGINA (si no da error, pues no la encuentra)
if (document.querySelector('#link-form')) {

    const linkForm = document.getElementById('link-form')
    const form = document.getElementById('form-container')
    const closeForm = document.getElementById('close-form')
    console.log(form)
    linkForm.addEventListener('click', (e) => {
        e.preventDefault()
        //hacemos visible el formulario
        form.classList.add('visible')
    })
    closeForm.addEventListener('click', function () {
        form.classList.remove('visible')
    })

} 
 

if (document.querySelector('.a')) {
    //mantener el foco en el boton seleccionado
    const botones = document.querySelectorAll('.a');

    botones.forEach(boton =>{
        boton.addEventListener('click', ()=>{
             // Eliminar clase 'active' de todos los botones
        botones.forEach(boton => boton.classList.remove('active'));
    
        // Agregar clase 'active' al botón pulsado
        boton.classList.add('active');
        })
    })

}

