<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<div class="container">
    <header class="header">
        <h1>🍍 Bem Vindo ao Keepinho 🍍</h1>
        <p>Sou o keepinho, o seu assistente pessoal (melhor do que o Google).</p>
    </header>

    <a href="{{ route('keep.lixeira') }}" class="btn btn-danger trash-link">🗑️ Lixeira</a>

    <hr>

    @if($errors->any())
        <div class="error-container">
            <h3 class="error-title">Erro!</h3>
            <ul class="error-list">
                @foreach ($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('keep.gravar')}}" method="post" class="form-container">
        @csrf
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="text" name="titulo" value="{{ old('titulo') }}">
        </div>
        <div class="form-group">
            <textarea name="texto" placeholder="Digite sua nota">{{ old('texto') }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Gravar nota</button>
    </form>

    <div class="notes-container">
        @foreach ($notas as $nota)
            <div class="note-card">
                <h3 class="note-title">{{$nota->titulo}}</h3>
                <p class="note-content">{{$nota->texto}}</p>
                <div class="note-actions">
                    <a href="{{ route('keep.editar', $nota->id) }}" class="btn btn-secondary">Editar nota</a>
                    <form action="{{ route('keep.apagar', $nota->id) }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Apagar</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>