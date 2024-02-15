<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document de prueba</title>
</head>

<body>
    <center>
        <div>
            @if(isset($user) && $user->nombreusuario && $user->apellidousuario)
            <h1>Bienvenido {{ $user->nombreusuario . ' ' . $user->apellidousuario }}</h1>
            @endif
            <form action="{{ route('crearusuario') }}" method="post">
                @csrf <!-- Agrega el token CSRF -->
                <div>
                    <h4>Id</h4>
                    <input type="text" id='id' name="id">
                </div>
                <div>
                    <h4>Nombre</h4>
                    <input type="text" id='nombre' name="nombre">
                </div>
                <div>
                    <h4>Apellido</h4>
                    <input type="text" id='apellido' name="apellido">
                </div>
                <div>
                    <h4>Correo</h4>
                    <input type="text" id='correo' name="correo">
                </div>
                <div>
                    <h4>telefono</h4>
                    <input type="text" id='telefono' name="telefono">
                </div>
                <div style="margin-top: 30px">
                    <button type="submit">Guardar</button> <!-- Cambia el tipo a "submit" -->
                </div>
            </form>

        </div>
    </center>

</body>

</html>