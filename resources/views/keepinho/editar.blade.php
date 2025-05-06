<h1 style="display: flex; align-items: center; justify-content: center; flex-direction: column;">🍍Bem Vindo ao Keepinho🍍</h1>
<p style="display: flex; align-items: center; justify-content: center; flex-direction: column;">Sou o keepinho, o seu assistente pessoal (melhor do que o Google).</p>

<form action="{{ route('keep.editarGravar')}}" method="post" style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
    @method('PUT')
    @csrf

    <input type="hidden" name="id" value="{{ $nota->id }}">
    <textarea name="texto" cols="30" rows="10">{{ $nota->texto }}</textarea>
    <br>
    <br>
    <input type="submit" value="Editar nota">
</form>