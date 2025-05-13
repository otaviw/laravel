<h1 style="display: flex; align-items: center; justify-content: center; flex-direction: column;">🍍Bem Vindo ao Keepinho🍍</h1>
<p style="display: flex; align-items: center; justify-content: center; flex-direction: column;">Sou o keepinho, o seu assistente pessoal (melhor do que o Google).</p>

@if($errors->any())
    <div style="color:red; display: flex; align-items: center; justify-content: center; flex-direction: column;">
        <h3>Erro!</h3>
    </div>
@endif

<form action="{{ route('keep.gravar')}}" method="post" style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
    @csrf
    <label for="titulo">Título:</label>
    <input type="text" name="titulo">
    <br>
    <textarea name="texto" cols="30" rows="10" placeholder="Digite sua nota"></textarea>
    <br>
    <br>
    <input type="submit" value="Gravar nota">
</form>

@foreach ($notas as $nota)
    <div style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
        <div style="border: 2px solid plum; padding: 5px; border-radius: 3px; display: flex; align-items: center; justify-content: center; flex-direction: column; width: 50%">
            {{$nota->titulo}}
            <br>
            {{$nota-> texto}}
            <br>
            <a href="{{ route('keep.editar', $nota->id) }}">Editar nota</a>
            <br>
            <form action="{{ route('keep.apagar', $nota->id) }}" method="post">
                @method('DELETE')
                @csrf
                <input type="submit" value="Apagar">
            </form>
        </div>
    </div>
@endforeach