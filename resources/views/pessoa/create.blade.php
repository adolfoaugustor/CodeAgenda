@extends('layout')

@section('content')
    <div class="col-md-6">
        <form action="" method="post" class="form-horizontal">
            <div class="form-group">
                <label for="nome" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome Completo" value="">
                </div>
            </div>
            <div class="form-group">
                <label for="apelido" class="col-sm-2 control-label">Apelido</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="apelido" id="apelido" placeholder="Apelido" value="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="radio">
                        <label>
                            <input type="radio" name="sexo" ><i class="fa fa-male"></i><br/>
                            <input type="radio" name="sexo" ><i class="fa fa-female"></i>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-6">

    </div>
@endsection