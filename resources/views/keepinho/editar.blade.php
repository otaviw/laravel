<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<div class="container">
    <header class="header">
        <h1>🍍 Bem Vindo ao Keepinho �</h1>
        <p>Essa é sua super página de edição</p>
    </header>

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

    <form action="{{ route('keep.editarGravar')}}" method="post" class="form-container">
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="titulo">Título:</label>
            <input type="hidden" name="id" value="{{ $nota->id }}">
            <input type="text" name="titulo" value="{{ old('titulo', $nota->titulo) }}">
        </div>
        <div class="form-group">
            <textarea name="texto" cols="30" rows="10">{{ old('nota', $nota->texto) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Editar nota</button>
    </form>
</div>