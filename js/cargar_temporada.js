    // Obtener el formulario y el menú desplegable
    const formulario = document.getElementById('form-temp');
    const seleccionTemporada = document.getElementById('temporada');

    // Verificar si hay una selección guardada en el almacenamiento local
    const seleccionGuardada = localStorage.getItem('seleccionTemporada');

    //Guardo la temporada que se ha seleccionado
    seleccionTemporada.value = seleccionGuardada;
    

    // cuando cambie la selección de temporada
    seleccionTemporada.addEventListener('change', function() {
        // Guardar la selección actual en el almacenamiento local
        localStorage.setItem('seleccionTemporada', seleccionTemporada.value);

        // Enviar el formulario
        formulario.submit();
       
    });
