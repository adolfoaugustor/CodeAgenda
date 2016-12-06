<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">
            {{$pessoa->apelido}}
            <span class="pull-right">
                <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit"></i></a>
                <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Apagar"><i class="fa fa-minus-circle"></i></a>
            </span>
        </h3>
    </div>

    <div class="panel-body">
        <h3>{{$pessoa->nome}}</h3>
        <table class="table table-hover">
            @foreach($pessoa->telefones as $telefone)
            <tr>
                <td>{{$telefone->descrição}}</td>
                <td>{{$telefone->numero}}</td>
                <td>
                    <a href="#" class="text-danger" data-toggle="tooltip" data-placement="top" title="Apagar"><i class="fa fa-minus-circle"></i></a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>