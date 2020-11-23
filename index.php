<?php include 'includes/layouts/header.php'?>

<div class="contenedor-barra"><h1>Agenda de contactos</h1></div>

<div class="bg-verde contenedor sombra">
    <form action="#" id="contacto">
        <legend>Añada un contacto <span>Todos los campos son obligatorios</span></legend>
        <?php include 'includes/layouts/formulario.php'?>
    </form>
</div>

<div class="bg-blanco contenedor sombra contactos">
    <div class="contenedor-contactos">
        <h2>Contactos</h2>

        <input type="text" id="buscar" class="buscador sombra" placeholder="Buscar contactos...">

        <p class="total-contactos"><span>2 </span>Contacto/s</p>

        <div class="contenedor-tabla">
            <table id="listado" class="listado">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Empresa</th>
                        <th>Telefono</th>
                        <th>Acciones</th>
                    </tr>
                    <tbody>
                        <tr>
                            <td>Alejandro</td>
                            <td>Fasti</td>
                            <td>2282434242</td>
                            <td>
                                <a class="btn-editar btn" href="editar.php">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <button data-id="1" type="button" class="btn-borrar btn">
                                    <i class="fas fa-dumpster"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Alejandro</td>
                            <td>Fasti</td>
                            <td>2282434242</td>
                            <td>
                                <a class="btn-editar btn" href="#">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <button data-id="1" type="button" class="btn-borrar btn">
                                    <i class="fas fa-dumpster"></i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>Alejandro</td>
                            <td>Fasti</td>
                            <td>2282434242</td>
                            <td>
                                <a class="btn-editar btn" href="#">
                                    <i class="fas fa-edit"></i>
                                </a>

                                <button data-id="1" type="button" class="btn-borrar btn">
                                    <i class="fas fa-dumpster"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </thead>
            </table>
        </div>
    </div>
</div>

<?php include 'includes/layouts/footer.php'?>