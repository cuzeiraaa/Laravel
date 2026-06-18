<div>
    <form action="{{ route('professor.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">

        <label for="nome">Email</label>
        <input type="text" name="email" id="email">

        <label for="nome">Telefone</label>
        <input type="text" name="telefone" id="telefone">

        <button type="submit">Salvar</button>

        @isset($success)
            <h1>Cadastrado com sucesso!</h1>
        @endisset
    </form>

    <table border="1">
        <tr>
            <td>Nome do Professor</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($profs)
                @foreach($profs as $prof)
                    <tr>
                        <td>
                            <h3>{{ $prof->nome }}</h3>
                        </td>
                        <td>
                            <h3>{{ $prof->email }}</h3>
                        </td>
                        <td>
                            <h3>{{ $prof->telefone }}</h3>
                        </td>
                        <td>
                            <form action="{{ route('professor.remove', ['id' => $prof->id]) }}">
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('professor.atualizar', ['id' => $prof->id]) }}" method="get">
                                <button type="submit">Atualizar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>
</div>
