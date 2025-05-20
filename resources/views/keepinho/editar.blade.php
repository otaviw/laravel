<h1 style="display: flex; align-items: center; justify-content: center; flex-direction: column;">🍍Bem Vindo ao Keepinho🍍</h1>
<p style="display: flex; align-items: center; justify-content: center; flex-direction: column;">Sou o keepinho, o seu assistente pessoal (melhor do que o Google).</p>

@if($errors->any())
    <div style="color:red; display: flex; align-items: center; justify-content: center; flex-direction: column;">
        <h3>Erro!</h3>
    </div>
    <ul>
        @foreach ($errors->all() as $err)
            <li style="color:red; display: flex; align-items: center; justify-content: center; flex-direction: column;">{{ $err }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('keep.editarGravar')}}" method="post" style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
    @method('PUT')
    @csrf
    <label for="titulo">Título:</label>
    <input type="hidden" name="id" value="{{ $nota->id }}">
    <input type="text" name="titulo" value="{{ old('titulo', $nota->titulo) }}">
    <br>
    <textarea name="texto" cols="30" rows="10">{{ old('nota', $nota->texto) }}</textarea>
    <br>
    <br>
    <input type="submit" value="Editar nota">
</form>  