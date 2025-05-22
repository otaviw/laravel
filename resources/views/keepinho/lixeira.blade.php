<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<div class="container">
    <header class="header">
        <h1>🍍 Bem Vindo ao Keepinho 🍍</h1>
        <h2>🗑️ Lixeira 🗑️</h2>
    </header>

    <hr>

    <div class="back-link">
        <a href="{{ route('keep') }}" class="btn btn-secondary">
            ← Voltar para o index
        </a>
    </div>

    <hr>

    @if (session('sucesso'))
        <div class="success-message">
            {{ session('sucesso') }}
        </div>
    @endif

    <h3 class="deleted-notes-title">Lista de notas apagadas:</h3>
    
    <div class="notes-container">
        @foreach ($notas as $nota)
            <div class="note-card deleted-note">
                <h3 class="note-title">{{$nota->titulo}}</h3>
                <p class="note-content">{{$nota->texto}}</p>
                <div class="note-actions">
                    <a href="{{ route('keep.restaurar', $nota->id) }}" class="btn btn-primary">
                        ♻️ Restaurar nota
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>