<h1>{{ $modo }} Usuario</h1>

@if(count($errors)>0)
    <div class="alert alert-dander" role="alert">
        <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul> 
    </div>
    
@endif

<div class="form-group">
<label for="Nombre">Nombre</label>
<input type="text" class="form-control" name="Nombre" value="{{ isset($usuario->Nombre)?$usuario->Nombre:old('Nombre') }}" id="Nombre"><br>
</div>

<div class="form-group">
<label for="ApellidoPaterno">Apellido Paterno</label>
<input type="text" class="form-control" name="ApellidoPaterno" value="{{ isset($usuario->ApellidoPaterno)?$usuario->ApellidoPaterno:old('ApellidoPaterno') }}" id="ApellidoPaterno">
</div>

<div class="form-group">
<label for="ApellidoMaterno">Apellido Materno</label>
<input type="text" class="form-control" name="ApellidoMaterno" value="{{ isset($usuario->ApellidoMaterno)?$usuario->ApellidoMaterno:old('ApellidoMaterno') }}" id="ApellidoMaterno">
</div>

<div class="form-group">
<label for="Registro">Registro</label>
<select mutiple name="Registro" class="form-control" value="{{ isset($usuario->Registro)?$usuario->Registro:'' }}" id="Registro">
    <option value="DNI">DNI</option>
    <option value="Carné">Carné universitario</option>
</select>
</div>

<div class="form-group">
<label for="Documento">Documento</label>
<select mutiple name="Documento" class="form-control" value="{{ isset($usuario->Documento)?$usuario->Documento:'' }}" id="Documento">
    <option value="BoletaPedido">Boleta de Pedido</option>
    <option value="BoletaAtencion">Boleta de Atención</option>
    <option value="SolicitudPrestamo">Solicitud de Prestamo</option>
</select>
</div>

<div class="form-group">
<label for="Estado">Estado</label>
<select mutiple name="Estado" class="form-control" value="{{ isset($usuario->Estado)?$usuario->Estado:'' }}" id="Estado">
    <option value="Egresado">Egresado</option>
    <option value="Estudiante">Estudiante</option>
</select>
</div>

<div class="form-group">
<label for="Libro">Codigo Libro:</label>
<input type="number" name="Libro" class="form-control" pattern="[0-9]+" value="{{ isset($usuario->Libro)?$usuario->Libro:'' }}" id="Libro">
</div>

<div class="form-group">
<label for="Damage">Daño Libro</label>
<select mutiple name="Damage" class="form-control" value="{{ isset($usuario->Damage)?$usuario->Damage:'' }}" id="Damage">
    <option value="Si">Si</option>
    <option value="No">No</option>
</select>
</div>

<div class="form-group">
    <label for="fechaPrestamo">Fecha de Préstamo</label>
    <input type="date" name="fechaPrestamo" class="form-control" id="fechaPrestamo" pattern="\d{4}-\d{2}-\d{2}" title="Ingrese una fecha válida" value="{{ isset($usuario->fechaPrestamo)?$usuario->fechaPrestamo:'' }}" id="fechaPrestamo">
</div>

<div class="form-group">
    <label for="fechaRecepcion">Fecha de Recepción</label>
    <input type="date" name="fechaRecepcion" class="form-control" id="fechaRecepcion" pattern="\d{4}-\d{2}-\d{2}" title="Ingrese una fecha válida" value="{{ isset($usuario->fechaRecepcion)?$usuario->fechaRecepcion:'' }}" id="FechaREcepcion">
</div>




<input class="btn btn-success" type="submit" value="{{ $modo }} Datos">

<a class="btn btn-primary" href="{{ url('usuario/') }}">Regresar</a>