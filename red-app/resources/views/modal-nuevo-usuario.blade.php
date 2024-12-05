<!-- Modal start -->
<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="text-center">Registrar nuevo usuario</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('addUser') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label for="nombre1" class="form-label">Primer nombre</label>
                            <input type="text" id="nombre1" class="form-control" name="nombre1"
                                   required>

                            <label for="nombre2" class="form-label">Segundo Nombre</label>
                            <input type="text" id="nombre2" class="form-control" name="nombre2"
                                   required>

                            <label for="apellido1" class="form-label">Primer Apellido</label>
                            <input type="text" id="apellido1" class="form-control" name="apellido1"
                                   required>

                            <label for="apellido2" class="form-label">Segundo Apellido</label>
                            <input type="text" id="apellido2" class="form-control" name="apellido2"
                                   required>
                        </div>
                        <div class="col">
                            <label for="correo" class="form-label">Correo</label>
                            <input type="email" id="correo" class="form-control" name="correo"
                                   aria-describedby="passwordHelpBlock" required>

                            <label for="telefono" class="form-label">Telefono</label>
                            <input type="number" id="telefono" class="form-control" name="telefono"
                                   required>

                            <label for="contraseña" class="form-label">Contrasña</label>
                            <input type="password" id="contraseña" class="form-control" name="contraseña"
                                   required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-dark w-100 mt-3">
                        Guardar cambios
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Modal end -->
