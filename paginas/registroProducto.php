<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Poli Coff</title>
    <link href="../estilo/registroProCaf.css" type="text/css" rel="stylesheet">
    <link rel="icon" href="../iconos/LOGOTIPO-05.png">

    <script type="text/javascript" src="../scripts/FileInputController.js"></script>

</head>

<body>
    <header>

    </header>
    <main>
        <section class="cabecera">
            <div id="bloque1">
                <div id="menu_icon">Menu</div>
                <div>
                    <img id="logo1" alt="logoPrincipal" src="../iconos/LOGOTIPO-05.png" usemap="#PoliLogo">
                    <map name="#PoliLogo">
                        <area shape="circle" coords="0,0,300," alt="Poli Coff" href="../index.html" title="Poli Coff">
                    </map>
                </div>
            </div>

            <div>
                <img id="logo2" alt="logoPrincipal" src="../iconos/LOGOTIPO-06.png" usemap="#Policoff">
                <map name="#Policoff">
                    <area shape="rect" coords="0,0,250,50" alt="Poli Coff" href="../index.html" title="Poli Coff">
                </map>
            </div>
            <div id="usuarioPerfil">
                <a href="../paginas/perfilUsuario.html" id="PerfilUsuario">Mi perfil</a>
                <img id="iconoUsuario" alt="iconoUsuario" src="../iconos/iconoUsuario.jpg">
            </div>
        </section>

        <section class="RegistroProducto">

            <p id="tituloRegProducto">Registro de Producto</p>

            <p id="MensajeAdmi">Cada solicitud de ingreso de producto sera evaluada por un administrador y en caso de ser apectada se reflejara la informacion en la plataforma</p>

            <form id="registroPro" name="registroPro" action="../paginas/respuesta.php" method="post" enctype="multipart/form-data" autocomplete="on">

                <div class="registroPro">

                    <label for="DescripcionProducto">Descripción:</label>
                    <input type="text" id="DescripcionProducto" name="DescripcionProducto" size="30" maxlength="30" placeholder="Nombre del producto" required pattern="[A-Za-z0-9]+"><br>

                    <label for="Ingredientes"></label>
                    <input type="Ingredientes" id="Ingredientes" name="Ingredientes" size="60" maxlength="100" placeholder="Ingredientes:" required=""><br>

                    <label for="Categoria" id="Cate">Categoría</label>
                    <select id="Cat1" required>
                        <option value="Preparado">Preparado</option>
                        <option value="Empaquetado">Empaquetado</option>
                        <option value="Liquido">Líquido</option>
                    </select><br>

                    <label for="Precio" id="Prec">Precio</label>
                    <input type="text" id="Precio" name="Precio" size="30" maxlength="6" placeholder="Precio" required="" pattern="[0-9]+\.[0-9]+"><br>

                    <div id="cajaAgreImg" class="input-group file-input-group" data-controller="file-input">
                        <input class="form-control1" type="text" placeholder="Añadir Imagen:" readonly data-target="file-input.value">

                        <input type="file" class="form-control" id="customFile" data-target="file-input.input" data-action="file-input#display">
                        <div class="input-group-append">
                            <label class="btn-secondary" for="customFile">+</label>
                        </div>
                    </div>

                </div>

                <div id="botonSecion">
                    <input type="submit" value="Enviar" name="Enviar" id="botonenvio">
                </div>

            </form>

        </section>

    </main>
    <footer>
        <section id="pie">
            <h4>Acerca de la pagina</h4>
            <h4>Equipo 6 del 6CV1 Curso Ingenieria de Software</h4>
            <p>Esta pagina fue elaborada por alumnos de la
                <a href="https://www.escom.ipn.mx/" target="_blank" title="ESCOM" id="ESCOM">
                    <abbr title="Escuela Superior de Cómputo">ESCOM</abbr>
                </a>
            </p>
        </section>

    </footer>
</body>

</html>