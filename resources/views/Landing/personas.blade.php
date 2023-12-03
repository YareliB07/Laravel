@extends('Layout/plantilla')
@section('content')

<section>
    <br>
    <h2>Lista de personas</h2>
    <button onclick="abrirModal()" type="button" class="btn btn-success"><b>Agregar +</b></button>
    <br>

    <div class="container">

        <table id="tabla" class="table table-light">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">Opciones</th>
                </tr>
            </thead>

            <tbody>
            </tbody>

        </table>
    </div>

    <div id="miModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="cerrarModal()">&times;</span>
            <!-- Contenido del modal (formulario para agregar persona) -->
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre">
            <br>
            <label for="apellidoPaterno">Apellido Paterno:</label>
            <input type="text" id="apellidoPaterno">
            <br>
            <label for="apellidoMaterno">Apellido Materno:</label>
            <input type="text" id="apellidoMaterno">
            <br>
            <button onclick="guardarPersona()" class="btn btn-warning">Guardar</button>
        </div>
    </div>

    <script>
        function abrirModal() {
            document.getElementById("miModal").style.display = "flex";
        }

        function cerrarModal() {
            document.getElementById("miModal").style.display = "none";
        }


        function guardarPersona() {
            var nombre = document.getElementById("nombre").value;
            var apellidoPaterno = document.getElementById("apellidoPaterno").value;
            var apellidoMaterno = document.getElementById("apellidoMaterno").value;

            if (nombre && apellidoPaterno && apellidoMaterno) {
                var tabla = document.getElementById("tabla").getElementsByTagName('tbody')[0];

                var fila = tabla.insertRow(tabla.rows.length);
                var celdaID = fila.insertCell(0);
                var celdaNombre = fila.insertCell(1);
                var celdaApellidoPaterno = fila.insertCell(2);
                var celdaApellidoMaterno = fila.insertCell(3);
                var celdaOpciones = fila.insertCell(4);

                var nuevoID = Math.floor(Math.random() * 1000);

                celdaID.innerHTML = nuevoID;
                celdaNombre.innerHTML = nombre;
                celdaApellidoPaterno.innerHTML = apellidoPaterno;
                celdaApellidoMaterno.innerHTML = apellidoMaterno;
                celdaOpciones.innerHTML = "<button onclick='editar(this)' class='btn btn-primary'>Editar</button>" + " " +
                    "<button onclick='eliminar(this)' class='btn btn-danger'>Eliminar</button>";

                cerrarModal();
            } else {
                alert("Por favor, completa todos los campos.");
            }
        }


        function editar(boton) {
            var fila = boton.closest("tr");
            alert("Editando persona con ID: " + fila.cells[0].innerHTML);
        }

        function eliminar(boton) {
            var fila = boton.closest("tr");
            fila.remove();
        }
    </script>

</section>