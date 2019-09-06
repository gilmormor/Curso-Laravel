@extends("theme.$theme.layout")
@section('titulo')
    Sistema Menús    
@endsection

@section('scripts')
    <script src="{{asset("assets/pages/scripts/admin/menu/crear.js")}}"></script>
@endsection
@section('contenido')
    @include('includes.form-error')
    @include('includes.mensaje')
    <div class="box box-info">
        <div class="box-header with-border">
        <h3 class="box-title">Crear Menú</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form action="{{route('guardar-menu')}}" id="form-general" name="form-general" class="form-horizontal" method="POST">
            @csrf
            <div class="box-body">
                @include('admin.menu.form')
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    @include('includes.boton-form-crear')
                </div>
            </div>
            <!-- /.box-footer -->
        </form>
    </div>
@endsection