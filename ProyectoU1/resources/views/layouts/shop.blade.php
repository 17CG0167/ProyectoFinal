@extends('layouts.main')
@section('contenido')

      <!-- Page Heading -->
      <!-- Colors: 067e86 -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Es hora de comprar!!</h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-cart-arrow-down fa-sm text-white-50"></i>Comprar</a>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                ABARROTES</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                        <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">Todo lo que necesites lo encontraras aqui</div>
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Frutas y Verduras</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                        <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">Lo mejor y mas freso para tu hogar</div>
                                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Esenciales
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">Nuestra seleccion para ti</div>
                                                </div>
                                               <!-- <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-cart-plus fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                BEBIDAS</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                        <div class="h6 mb-0 mr-3 font-weight-bold text-gray-800">Todo lo que busques en bebidas para tu dia a dia</div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    

                    <!-- Content Row -->

                    <div class="row">

                       
                        <!-- Pie Chart -->
                        <div class="col-lg-6 mb-4">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Porcentaje de mi carrito</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                                            aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Opciones</div>
                                            <a class="dropdown-item" href="#">Agregar Productos</a>
                                            <a class="dropdown-item" href="#">Eliminar Productos</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Vaciar mi carrito</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body" style="height: 485px">
                                 <br><br>   <div class="chart-pie pt-4 pb-2">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <div class="mt-4 text-center small">
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-primary"></i> Abarrotes
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-success"></i> Frutas y Verduras
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-info"></i> Nuestra seleccion para ti
                                        </span>
                                        <span class="mr-2">
                                            <i class="fas fa-circle text-warning"></i> Bebidas
                                        </span>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                          <div class="col-lg-6 mb-4">

                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Observaciones</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                        <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 7rem;"
                                            src="/img/logo.png" alt="...">
                                    </div>
                                    <p>Aquí aparecerá todos los productos que
                                    se vayan agregando, ademas de una breve descripción sobre los productos añadidos al carrito 
                                    <img src="" alt="">
                                    <a>
                                            
                                </div>
                            </div>

                            <!-- Approach -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Informacion</h6>
                                </div>
                                <div class="card-body">
                                    <div class="text-center">
                                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 7rem;"
                                            src="/img/descarga.png" alt="...">
                                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 7rem;"
                                            src="/img/wal.png" alt="...">
                                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 7rem;"
                                            src="/img/bod.png" alt="...">
                                            <img class="img-fluid px-3 px-sm-4 mt-3 mb-4" style="width: 7rem;"
                                            src="/img/alsup.png" alt="...">
                                    </div>
                                <div class="card-body">
                                    <p>Al registrate podras realizar la compra de tus productos desde la comodidad
                                    de tu casa, y en la tienda de tu gusto</p>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-6 mb-4">


@endsection