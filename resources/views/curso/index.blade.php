<div>
    <form action="{{ route('curso.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="nome">Periodo:</label>
        <input type="text" name="periodo" id="periodo">

        <button type="submit">Salvar</button>

        @isset($success)
            <h1>Cadastrado com sucesso!</h1>
        @endisset
    </form>

    @isset($cursos)
        @foreach ($cursos as $curso)
            <h3>{{ $curso->nome }}</h3>
            <br>
            <h3>{{ $curso->periodo }}</h3>
        @endforeach
    @endisset
</div>
