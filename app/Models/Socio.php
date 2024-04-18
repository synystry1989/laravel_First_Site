<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    use HasFactory;
//acrescentar a possibilidade de preencher os campos da tabela
protected $fillable = [

"nome",
"cc",
"morada",
"codigoPostal",
"localidade",
"email",
"telefone",


];
////associar o campo user com a tabela users

public function user()
{
    //este socio pertence a tabela user
    return $this->belongsTo(User::class);
}


}
