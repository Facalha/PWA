<div class="container mt-4">
    <!-- Formulário de Anotações -->
    <div class="card">
        <div class="card-header">
            <h4>Adicionar Anotação</h4>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="addNote">
                <div class="form-group">
                    <label for="note">Digite sua anotação</label>
                    <input type="text" id="note" wire:model="note" class="form-control" placeholder="Digite sua anotação">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Adicionar</button>
                    <button type="button" class="btn btn-secondary ml-2" wire:click="clearForm">Limpar</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Lista de Anotações -->
    <div class="card mt-4">
        <div class="card-header">
            <h4>Anotações</h4>
        </div>
        <div class="card-body">
            @if ($annotations->isEmpty())
                <p class="text-muted">Nenhuma anotação encontrada.</p>
            @else
                <ul class="list-group">
                    @foreach ($annotations as $annotation)
                        <li class="list-group-item">
                            {{ $annotation->note }}
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>
    </div>
</div>
