<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../css/registrostyle.css">
    <script src="../js/script.js"></script>
    <script>
        function validarFormulario() {
            var contrasena = document.getElementById("contrasena").value;
            var confirmarContrasena = document.getElementById("confirmar-contrasena").value;
            var aceptarTerminos = document.getElementById("aceptar-terminos");
            var aceptarPolitica = document.getElementById("aceptar-politica");
            var registerButton = document.getElementById("register-button");

            if (contrasena !== confirmarContrasena) {
                alert("Las contraseñas no coinciden. Por favor, inténtalo de nuevo.");
                registerButton.disabled = true;
                return false;
            } else if (!aceptarTerminos.checked || !aceptarPolitica.checked) {
                alert("Debes aceptar los términos y la política de privacidad.");
                return false;
            } else {
                registerButton.disabled = false;
            }

            return true;
        }
    </script>
</head>
<body>
    <a class="back-page" href="../html/acceder.html"><img class="back-page-img" src="../images/flecha-izquierda.png" alt=""></a> 
    <section class="registro">
        <div class="registro-container">
            <div class="division">
                <form class="form-registro" action="registro-db.php" method="post" >
                    <div class="main-text">
                        <h1>REGISTRO</h1>
                    </div>
                    <div class="name"><input placeholder="NOMBRE COMPLETO" type="text" name="nombrecompleto" id=""></div>
                    <div class="email"><input placeholder="EMAIL" type="email" name="email" id=""></div>
                    <div class="contraseña"><input placeholder="CONTRASEÑA" type="password" name="contrasena" id="contrasena"></div>
                    <div class="contraseña"><input placeholder="CONFIRMAR CONTRASEÑA" type="password" name="confirmar-contrasena" id="confirmar-contrasena"></div>
                    <div class="instituto"><input placeholder="NOMBRE DE TU INSTITUCIÓN" type="text" name="institucion" id=""></div>
                    <div class="pais">
                        <select name="pais" id="countrySelect">
                            <option value="Seleccionar un País">
                                PAÍS
                            </option>
                        </select>
                    </div>
                    <div class="nivel-educativo">
                        <select name="niveleducativo" id="">
                            <option value="NIVEL EDUCATIVO">NIVEL EDUCATIVO</option>
                            <option value="primaria">Escuela primaria</option>
                            <option value="secundaria">Escuela secundaria</option>
                            <option value="secundaria">Instituto terciario</option>
                            <option value="universitaria">Universidad</option>
                        </select>
                    </div>
                    <div class="rol-educativo">
                        <select name="rol" id="">
                            <option value="NIVEL EDUCATIVO">ROL EN TU INSTITUCIÓN</option>
                            <option value="primaria">Alumno</option>
                            <option value="secundaria">Profesor</option>
                            <option value="secundaria">Personal Administrativo</option>
                        </select>
                    </div>
                    <div class="aceptar">
                        <input class="checkbox" type="checkbox" name="terminos" id="aceptar-terminos"><a class="aceptar-text" href="../html/terminos.html">Aceptar términos y condiciones</a>
                    </div>
                    <div class="aceptar">
                        <input class="checkbox" type="checkbox" name="politica" id="aceptar-politica"><a class="aceptar-text" href="../html/privacidad.html">Aceptar política de privacidad</a>
                    </div>
                    <div class="register"><a class="register-text" href="../html/acceder.html" id="register-button" onclick="return validarFormulario();">REGISTRARSE</a></div>
                </form>
            </div>
        </div>
    </section>
    <script>
        $(document).ready(function() {
            $("#register-button").click(function() {
                var nombrecompleto = $("input[name='nombrecompleto']").val();
                var email = $("input[name='email']").val();
                var contrasena = $("input[name='contrasena']").val();
                var institucion = $("input[name='institucion']").val();
                var pais = $("select[name='pais']").val();
                var niveleducativo = $("select[name='niveleducativo']").val();
                var rol = $("select[name='rol']").val();
                var terminos = $("input[name='terminos']").val();
                var politica = $("input[name='politica']").val();
                $.ajax({
                    type: "POST",
                    url: "registro-db.php",
                    data: {
                        nombrecompleto: nombrecompleto,
                        email: email,
                        contrasena: contrasena,
                        institucion: institucion,
                        pais: pais,
                        niveleducativo: niveleducativo,
                        rol: rol,
                        terminos: terminos,
                        politica: politica
                    },
                    success: function(response) {
                        // Manejar la respuesta del servidor
                        $("#alert-container").html(response);
                    }
                });
            });
        });
    </script>
</body>

</html>