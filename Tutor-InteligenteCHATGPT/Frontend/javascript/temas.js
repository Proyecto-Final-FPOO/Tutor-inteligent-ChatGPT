function agregarTemas(textoTemas) {
    var temasArray = textoTemas.split(',');
    var ul = document.getElementById('temas-list');

    temasArray.forEach(function(tema) {
        var div = document.createElement('div');
        div.classList.add('tema');

        var titulo = document.createElement('h4');
        titulo.textContent = tema;
        div.appendChild(titulo);

        var textoDebajo = document.createElement('p');
        textoDebajo.textContent = "un texto cualquiera generado por chatgpt";
        div.appendChild(textoDebajo);

        var boton = document.createElement('button');
        var enlace = document.createElement('a');
        enlace.href = "examen.php";
        enlace.textContent = "tomar evaluacion";

        enlace.style.textDecoration = "none";
        enlace.style.color = "inherit";

        boton.appendChild(enlace);
        div.appendChild(boton);


        // Crear un elemento de lista li para el contenedor div
        var li = document.createElement('li');

        // Agregar el contenedor div al elemento de lista li
        li.appendChild(div);

        // Agregar el elemento de lista li al elemento ul
        ul.appendChild(li);

        boton.addEventListener('click', function () {
            console.log("El botón ha sido clickeado");
            window.location.href = "examen.php";
        });

    });
}

var temasFundamentos = $fun;
agregarTemas(temasFundamentos);

var temasHerencia = $her;
agregarTemas(temasHerencia);

var temasGenericos = $gen;
agregarTemas(temasGenericos);
