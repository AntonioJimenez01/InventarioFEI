<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vista software</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css2.css">
</head>

<body>
    <div class="container ">
        <form>
            <!-- contenedor de informacion -->
            <div class="row py-3 px-5">
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <label for="nsinv" class="form-label">No Inventario: </label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="nsinv" class="form-control" disabled readonly>
                    </div>
                    <div class="col-sm-12">
                        <label for="nsuv" class="form-label">No UV: </label>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" id="nsuv" class="form-control" disabled readonly>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <label for="tipo">Tipo: </label>
                    </div>
                    <div class="col-sm-8">
                        <input class="form-control" type="text" value="Software" id="tipo" disabled readonly>
                    </div>
                </div>
            </div>
            <!-- contenedor descripcion -->
            <div class="row py-3 px-5">
                <h1>Descripcion</h1>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <label for="marca" class="form-label">Nombre: </label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" id="marca" class="form-control" disabled readonly>
                    </div>
                    <div class="col-sm-12">
                        <label for="modelo" class="form-label">Version: </label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" id="modelo" class="form-control" disabled readonly>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <label for="descsoft">Descripcion: </label>
                    </div>
                    <div class="col-sm-12">
                        <textarea name="descarea" id="descsoft" cols="5" rows="4" class="form-control" disabled readonly></textarea>
                    </div>
                </div>
            </div>
            <!-- contenedor requerimentos -->
            <div class="row py-3 px-5">
                <h1>Requerimentos</h1>
                <div class="col-sm-4">
                    <div class="col-sm-12">
                        <label for="ram" class="form-label">RAM: </label>
                    </div>
                    <div class="col-sm-9">
                        <select id="ram" class="form-control" disabled readonly>
                            <option value="2gb">2 GB</option>
                            <option value="4gb">4 GB</option>
                            <option value="8gb">8 GB</option>
                            <option value="16gb">16 GB</option>
                            <option value="32gb">32 GB</option>
                        </select>
                    </div>
                    <div class="col-sm-12">
                        <label for="procesador" class="form-label">Almacenamiento: </label>
                    </div>
                    <div class="col-sm-9">
                        <input type="text" id="procesador" class="form-control" placeholder="MB" disabled readonly>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="table-responsice-sm">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Sistema operativo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Windows Vista x32/x64</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Windows 8 x32/x64</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Windows 10 x32/x64</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- contenedor disponibilidad -->
            <div class="row py-3 px-5">
                <h1>Disponibilidad</h1>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <label for="instalados">Equipos instalados: </label>
                    </div>
                    <div class="col-sm-6">
                        <input type="number" id="instalados" min="0" max="15" class="form-control" disabled readonly>
                    </div>
                    <div class="col-sm-12">
                        <label for="por_instalar">Equipos por instalar: </label>
                    </div>
                    <div class="col-sm-6">
                        <input type="number" id="por_instalar" min="0" max="15" class="form-control" disabled readonly>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="col-sm-12">
                        <label for="key" class="form-label">Archivo/KEY: </label>
                    </div>
                    <div class="col-sm-12">
                        <input class="form-control" type="file" id="key" disabled readonly>
                    </div>
                </div>
            </div>
            <!-- botones finales -->
            <div class="row ">
                <div class="col-sm-6 py-2 px-5">
                    <button type="button" class="btn btn-secondary btn-lg">Atras</button>
                </div>
                <div class="col-sm-6 py-2 px-5">
                    <button type="button" class="btn btn-primary btn-lg" id="btnguardar">Editar</button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>