<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annotation extends Model
{
    use HasFactory;

    // Adicione o campo 'note' à propriedade $fillable
    protected $fillable = ['note'];

    public function addNote()
{
    $this->validate([
        'note' => 'required|string',
    ]);

    // Criar a nova anotação
    Annotation::create(['note' => $this->note]);

    // Limpar o formulário
    $this->note = '';

    // Atualizar a lista de anotações
    $this->loadAnnotations();
}

}

