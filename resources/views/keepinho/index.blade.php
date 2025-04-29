<h1 style="display: flex; align-items: center; justify-content: center; flex-direction: column;">🍍Bem Vindo ao Keepinho🍍</h1>
<p style="display: flex; align-items: center; justify-content: center; flex-direction: column;">Sou o keepinho, o seu assistente pessoal (melhor do que o Google).</p>

<form action="{{ route('keep.gravar')}}" method="post" style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
    @csrf
    <textarea name="texto" cols="30" rows="10"></textarea>
    <br>
    <br>
    <input type="submit" value="Gravar nota">
</form>

@foreach ($notas as $nota)
    <div style="display: flex; align-items: center; justify-content: center; flex-direction: column;">
        <div style="border: 2px solid plum; padding: 5px; border-radius: 3px; display: flex; align-items: center; justify-content: center; flex-direction: column; width: 50%">
          {{$nota-> texto}}
        </div>
    </div>
@endforeach