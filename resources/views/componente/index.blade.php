<div>
    <form action="{{ route('comp.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="nome">Hora de Inicio:</label>
        <input type="text" name="hora_inicio" id="hora_inicio">

        <label for="nome">Hora de Fim:</label>
        <input type="text" name="hora_fim" id="hora_fim">

        <button type="submit">Salvar</button>

        @isset($success)
            <h1>Cadastrado com sucesso!</h1>
        @endisset
    </form>

    @isset($comps)
        @foreach ($comps as $comp)
            <h3>{{ $comp->nome }}</h3>
            <br>
            <h3>{{ $comp->hora_fim }}</h3>
            <br>
            <h3>{{ $comp->hora_inicio }}</h3>
        @endforeach
    @endisset
</div>
