@extends('layouts.main')
@section('contenido')

     <!-- Content Header (Page header) -->
 <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Usuarios</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item">
                <button class="btn btn-outline-primary btn-sm" data-toggle="modal" data-target="#modal-add">
                <i class="fa fa-plus"></i>Crear Usuario</button>
            </li>
            
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="content">
    <div class="container-fluid">
      <div class="row">
      @if($message=Session::get('Listo'))
                <div class="alert alert-success alert-dismissable fade show col-12" role="alert">
                    <h5>Listo:</h5>
                    <p>{{$message}}</p>
                </div>
            @endif

            <table class="table">
            <thead>
            <tr>
                  <th>Nombre</th>
                  <th>Apellidos</th>
                  <th>Correo electronico</th>
                  <th>Numero de telefono</th>
                  <th>Direccion</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
             
            </tbody>
              
            </table>
      </div>
    </div>
  </div>
  <!--modal edit-->
  <div class="modal fade" id="modal-edit">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Editar usuario</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/admin/productos/edit" method="POST" enctype="multipart/form-data">
            @if($message=Session::get('errorInsert'))
                <div class="alert alert-danger alert-dismissable fade show col-12" role="alert">
                    <h5>Error:</h5>
                    <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                    </ul>
                </div>
            @endif
            @csrf
            <div class="modal-body">
                <input type="hidden" id="idEdit" name="id">
                <div class="form-group">
                     <label for="nombre">Nombre</label>
                     <input type="text" class="form-control form-control-border" id="nomEdit" name="nombre">
                </div>
                <div class="form-group">
                      <label for="Stock">Apellidos</label>
                      <input type="text" class="form-control form-control-border" id="apEdit" name="apellidos">
                </div>
                <div class="form-group">
                     <label for="precio">Correo electronico</label>
                     <input type="number" class="form-control form-control-border" id="correoEdit" name="correo">
                </div>
                <div class="form-group">
                    <label for="Stock">Numero de telefono</label>
                    <input type="text" class="form-control form-control-border" id="numEdit" name="numero">
                </div>
                <div class="form-group">
                    <label for="Stock">Direccion</label>
                    <input type="text" class="form-control form-control-border" id="dirEdit" name="direccion">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
  <!--modal agregar-->
  <div class="modal fade" id="modal-add">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Crear Usuario</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="/admin/productos" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                     <label for="nombre">Nombre</label>
                     <input type="text" class="form-control form-control-border" id="nombre" name="nombre">
                </div>
                <div class="form-group">
                      <label for="Stock">Apellidos</label>
                      <input type="text" class="form-control form-control-border" id="apEdit" name="apellidos">
                </div>
                <div class="form-group">
                     <label for="precio">Correo electronico</label>
                     <input type="number" class="form-control form-control-border" id="correoEdit"  name="correo">
                </div>
                <div class="form-group">
                    <label for="Stock">Numero de telefono</label>
                    <input type="text" class="form-control form-control-border" id="numEdit" name="numero">
                </div>
                <div class="form-group">
                    <label for="Stock">Direccion</label>
                    <input type="text" class="form-control form-control-border" id="dirEdit" name="direccion">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      <!--modal delete-->
      <div class="modal fade" id="modal-delete">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Eliminar usuario</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
            
            <div class="modal-body">
                <h2 class="h6">Desea eliminar el usuario?</h2>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
              <button type="button" class="btn btn-danger btnCloseEliminar">Eliminar</button>
            </div>
           
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
@endsection

@section('scripts')
    

@endsection
