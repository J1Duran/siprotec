@extends('newhome')

@section('content')
    <section class="content-header">
        <h1>

            Pases

            <small>creados</small>
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

                                {{--</tfoot>--}}
                            </table>



                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            
                        </div><!-- /.box-footer -->
                    </form>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
@stop