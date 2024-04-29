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
           //DEJO QUE SE ENVIE (NO PONGO NADA)

        }else{
            e.preventDefault();
        }

    })
}

/*-------------------------ABRIR FORMULARIO DE REGISRTO----------------------*/
//COMPROBAMOS QUE EL ELEMENTO ESTÉ EN ESA PÁGINA (si no da error, pues no la encuentra)
if (document.querySelector('#link-form')) {

    const linkForm = document.getElementById('link-form')
    const form = document.getElementById('form-container')
    const closeForm = document.getElementById('close-form')

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

/* MOSTRAR MAS OPCIONES DE USUARIO */ 
if(document.getElementById('sesion')){
    
    const sesion = document.getElementById('sesion');
    const sesionDown = document.getElementById('sesion-down');
    const triangulo = document.querySelector('.triangulo');

    document.addEventListener('click', function(e) {
        
      
        if (e.target !== sesion && !sesion.contains(e.target)) {
           //Cuando se haga click fuera de la sesión
           sesionDown.classList.remove('visible') 
           triangulo.classList.remove('activo')
            
        }else{
            sesionDown.classList.toggle('visible') 
            triangulo.classList.toggle('activo')
        }
    });
   
}

if(document.getElementById('navegacion')){
    const editar = document.querySelector('#editar')
    const aplicar = document.querySelector('#aplicar')
    const div = document.querySelector('.btn_editar')
    const form = document.querySelector('#navegacion')
    const primerInput = document.querySelector('input')

    editar.addEventListener('click', ()=>{
        const inputs= document.querySelectorAll('input')

        inputs.forEach(input=>{
            input.removeAttribute('readonly')
        })
        div.classList.add('editando')
        form.classList.add('editando')
        primerInput.focus();
    })

    aplicar.addEventListener('click', ()=>{
        const inputs= document.querySelectorAll('input')
        inputs.forEach(input=>{
            input.setAttribute('readonly', true)
        })
        div.classList.remove('editando')
        form.classList.remove('editando')
    })

}


if(document.querySelector('.close_equipo')){
    const close = document.querySelectorAll('.close_equipo');
    const info = document.querySelectorAll('.info_equipo')
    console.log(info)

    close.forEach(cerrar=>{
        cerrar.addEventListener('click',()=>{
            window.history.back();
        })
    })
    

}
