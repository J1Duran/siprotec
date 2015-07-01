@extends('newhome')

@section('content')
    <section class="content-header">
        <h1>

            Modificacion

            <small>de rutas</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <div class="row">
        <div class="col-xs-10 col-md-offset-1" >
            <div class="box box-primary">
                <div class="box-header">
                    <form class="form-horizontal">
                        <div class="box-body">
                            <div class="form-group">
                                <label for="tipo_objeto" class="col-sm-2 control-label">Tipo Aplicativo:</label>
                                <div class="col-sm-2">
                                    <select class="form-control col-sm-2">
                                        <option>AcselX</option>
                                        <option>NAF/option>
                                        <option>ADAM</option>
                                    </select>
                                </div>
                            </div>
                                <div class="form-group">
                                <label for="tipo_objeto" class="col-sm-2 control-label">Tipo Objeto:</label>
                                <div class="col-sm-2">
                                <select class="form-control col-sm-2">
                                    <option>function</option>
                                    <option>index</option>
                                    <option>table</option>
                                    <option>trigger</option>
                                    <option>lob</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="forma_fuente" class="col-sm-2 control-label">Formas fuentes:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="forma_fuente" placeholder="//ruta">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="forma_ejecutable" class="col-sm-2 control-label">Formas ejecutables</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="forma_ejecutable" placeholder="//ruta">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rep_fuentes" class="col-sm-2 control-label">Reportes fuentes</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="rep_fuentes" placeholder="//ruta">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rep_ejecutables" class="col-sm-2 control-label">Reportes ejecutables</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="rep_ejecutables" placeholder="//ruta">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="fmo_fuente_inv" class="col-sm-2 control-label">Formas fuente inverin</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="fmo_fuente_inv" placeholder="//ruta">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="manuales" class="col-sm-2 control-label">Manueales</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="manuales" placeholder="//ruta">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="macros" class="col-sm-2 control-label">Macros</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="macros" placeholder="//ruta">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="docsn" class="col-sm-2 control-label">Tipo docsn</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="docsn" placeholder="//ruta">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="iconos_sis" class="col-sm-2 control-label">Iconos del sistema</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="iconos_sis" placeholder="//ruta">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="librerias" class="col-sm-2 control-label">Librerias</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="librerias" placeholder="//ruta">
                                </div>
                            </div>

                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <button type="submit" class="btn btn-default">Limpiar todo</button>
                            <button type="submit" class="btn btn-info pull-right">Guardar</button>
                        </div><!-- /.box-footer -->
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
@stop