@extends('newhome')

@section('content')
    <section class="content-header">
        <h1>

            Actualizacion de objetos

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <div class="row">
        <div class="col-md-12" >

                <div class="box-header">
                    {{--<form class="form-horizontal" role="form" method="POST" action="{{ route('pase.store') }}">--}}

                       {!! Form::open (['route'=> 'pase.store', 'method' => 'POST', 'class'=>'form-horizontal']) !!}
                         <input type="hidden" name="_token" value="{{ csrf_token() }}">
                         <div class="box-body">
                            <div class="box box-primary">
                                <div class="box-body">
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="especialista" class="col-sm-2 control-label">Especialista:</label>
                                                <div class="col-xs-3">
                                                    <input type="text" class="form-control input-sm" id="especialista" name="id_especialista" placeholder="">
                                                </div>
                                                <label for="tmo" class="col-sm-2 control-label">Ticket/Meta/Incidencia:</label>
                                                <div class="col-xs-3">
                                                    <input type="text" class="form-control input-sm" id="id_imo" name="id_imo" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="tipo_objeto" class="col-sm-2 control-label">Tipo Aplicativo:</label>
                                                <div class="col-xs-3">
                                                    <select class="form-control input-sm" name="tipo_enum">
                                                        <option>Acsel/x</option>
                                                        <option>NAF</option>
                                                        <option>Adam</option>
                                                        <option>Web</option>
                                                    </select>
                                                </div>
                                                <label for="fecha_solicitud" class="col-sm-2 control-label">Fecha de Solicitud:</label>
                                                <div class="col-xs-3">
                                                    <input type="date" class="form-control input-sm" id="fecha_emision" name="fecha_emision" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="tipo_objeto" class="col-sm-2 control-label">Ambiente:</label>
                                                <div class="col-xs-3">
                                                    <select class="form-control input-sm" name="ambiente">
                                                        <option>Web</option>
                                                        <option>Cliente/Servidor</option>

                                                    </select>
                                                </div>
                                                <label for="estatus" class="col-sm-2 control-label">Estatus:</label>
                                                <div class="col-xs-3">
                                                    <input type="text" class="form-control input-sm" id="estatus" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                </div>
                             </div>
                             {{--ventana emergente objetos--}}
                             {{--{!! Form::open (['url' => 'pase-objeto', 'method' => 'POST', 'class'=>'form-horizontal']) !!}--}}
                             <div class="box box-primary">
                                 <div class="box-body">
                                             <a data-toggle="modal" href="#example" class="btn btn-primary btn-large">Agregar objeto</a>
                                             <div id="example" class="modal fade">
                                                 <div class="modal-dialog modal-lg">
                                                     <div class="modal-content">
                                                         <div class="modal-header">
                                                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                             <h4 class="modal-title">Registrar Objeto</h4>
                                                         </div>
                                                         <div class="modal-body">
                                                             <div class="row">
                                                                 <div class="form-group">
                                                                     <label for="nombre_objeto" class="col-sm-2 control-label">Nombre Objeto:</label>
                                                                     <div class="col-xs-3">
                                                                         <input type="text" class="form-control input-sm" id="nombre" name="nombre" placeholder="">
                                                                     </div>
                                                                     <label for="Tipo" class="col-sm-2 control-label">Tipo:</label>
                                                                     <div class="col-xs-3">
                                                                         <input type="text" class="form-control input-sm" id="itipo" name="tipo" placeholder="">
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="row">
                                                                 <div class="form-group">
                                                                     <label for="origen" class="col-sm-2 control-label">origen:</label>
                                                                     <div class="col-xs-3">
                                                                         <input type="text" class="form-control input-sm" id="origen" name="origen" placeholder="">
                                                                     </div>
                                                                     <label for="destino" class="col-sm-2 control-label">Destino:</label>
                                                                     <div class="col-xs-3">
                                                                         <input type="text" class="form-control input-sm" id="destino" name="destino" placeholder="">
                                                                     </div>
                                                                 </div>
                                                             </div>
                                                             <div class="row">

                                                                     <div class="form-group">
                                                                         <label for="accion" class="col-sm-2 control-label">Accion:</label>
                                                                         <div class="col-xs-3">
                                                                             <input type="text" class="form-control input-sm" id="accion" name="accion" placeholder="">
                                                                         </div>
                                                                         <label for="observacion" class="col-sm-2 control-label">Observacion:</label>
                                                                         <div class="col-xs-3">
                                                                             <input type="text" class="form-control input-sm" id="Observacion" name="observacion" placeholder="">
                                                                         </div>
                                                                     </div>

                                                             </div>
                                                             <div class="row">
                                                                 <div class="form-group">
                                                                         <label for="adjuntar" class="col-sm-2 control-label">Adjuntar:</label>
                                                                         <div class="col-xs-3">
                                                                             <input type="file"  name="adjuntar" accept=".zip">

                                                                         </div>

                                                                 </div>
                                                             </div>
                                                         </div>
                                                         <div class="modal-footer">
                                                             <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                                             <button type="submit" class="btn btn-primary" name="objeto" value="objeto">Guardar Objeto</button>
                                                         </div>

                                                     </div>
                                                 </div>
                                             </div>
                                         </div>
                                     </div>
                             {{--{!! Form::close()!!}--}}
                             <div class="box box-primary">
                                 <div class="box-body">
                                     <table id="example2" class="table table-bordered table-hover">
                                         <thead>
                                         <tr>
                                             <th>ID</th>
                                             <th>Nombre Objeto</th>
                                             <th>Tipo</th>
                                             <th>Origen</th>
                                             <th>Destino</th>
                                             <th>Accion</th>
                                             <th>Observacion</th>
                                             <th>Adjunto</th>
                                         </tr>
                                         </thead>
                                         <tbody>
                                         <tr>
                                             <td>Registo de Tabla Reportes/Diarios</td>
                                             <td> Incidencias</td>
                                             <td>Recursos Humanos</td>
                                             <td><small class="label label-primary"><i class="fa fa-clock-o"></i> ACT</small></td>
                                         </tr>
                                         {{--</tfoot>--}}
                                     </table>
                                 </div><!-- /.box-body -->
                             </div><!-- /.box -->

                                <div class="box box-primary">
                                    <div class="box-body">

                                            <label>Especificacion Pase:</label>
                                            <textarea id="especificacion"  class="form-control"  name="especificacion" cols="60" placeholder="..."></textarea>

                                    </div>
                                </div>

                                <div class="box box-primary">
                                    <div class="box-body">
                                            <label>Descripcion:</label>
                                            <textarea id="descripcion"  class="form-control" name="descripcion" cols="60" placeholder="..."></textarea>
                                        </div>
                                </div>
                            <div class="box box-primary">
                                <div class="box-body">
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="realizado_especialista" class="col-sm-2 control-label">Pase realizado por:</label>
                                                <div class="col-xs-3">
                                                    <input type="text" class="form-control" id="pase_realizado" name="pase_realizado" placeholder="">
                                                </div>
                                                <label for="fecha_pase" class="col-sm-2 control-label">Fecha</label>
                                                <div class="col-xs-3">
                                                    <input type="date" class="form-control" id="fecha_realizado" name="fecha_realizado" placeholder="">
                                                </div>
                                        </div>
                                            <HR width="80%">
                                            <div class="row">
                                                <label for="autorizado_especialista" class="col-sm-2 control-label">Autorizado por:</label>
                                                <div class="col-xs-3">
                                                    <select class="form-control input-sm">

                                                    </select>
                                                </div>
                                                <label for="fecha_autorizado" class="col-sm-2 control-label">Fecha</label>
                                                <div class="col-xs-3">
                                                    <input type="date" class="form-control" id="fecha_autorizado" placeholder="">
                                                </div>
                                            </div>
                                        </div>
                                </div>
                             </div>

                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary btn-flat"  name="pase" value="pase">Guardar Pase</button>

                        </div><!-- /.box-footer -->
                    {!! Form::close()!!}
                        {{--</form>--}}
                </div><!-- /.box-body -->e
            <!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
@stop