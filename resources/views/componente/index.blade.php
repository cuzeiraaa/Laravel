<div>
    <form action="{{ route('compo.add') }}" method="post">
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

    <table border="1">
        <tr>
            <td>Nome do componente</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($comps)
                @foreach($comps as $comp)
                    <tr>
                        <td>
                            <h3>{{ $comp->nome }}</h3>
                        </td>
                        <td>
                            <h3>{{ $comp->hora_inicio }}</h3>
                        </td>
                        <td>
                            <h3>{{ $comp->hora_fim }}</h3>
                        </td>
                        <td>
                            <form action="{{ route('compo.remove', ['id' => $comp->id]) }}">
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('compo.atualizar', ['id' => $comp->id]) }}" method="get">
                                <button type="submit">Atualizar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>
</div>
