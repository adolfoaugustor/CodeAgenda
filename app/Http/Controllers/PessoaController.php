<?php

namespace CodeAgenda\Http\Controllers;

use CodeAgenda\Entities\Pessoa;

class PessoaController extends Controller{
    public function destroy($id){
        Pessoa::destroy($id);
        return redirect()->route('agenda.index');
    }
}