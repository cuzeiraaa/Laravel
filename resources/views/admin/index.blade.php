<div>
    <form action="{{ route('admin.add') }}" method="post">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome">
        <label for="nome">EMAIL</label>

        <input type="text" name="email" id="email">
        <label for="nome">TELEFONE</label>
        <input type="text" name="telefone" id="telefone">
        
        <label for="nome">CPF</label>
        <input type="text" name="cpf" id="cpf">

        <label for="nome">USUARIO</label>
        <input type="text" name="usuario" id="usuario">

        <label for="status">STATUS</label>
        <input type="text" name="status" id="status">

        <label for="nome">SENHA</label>
        <input type="text" name="senha" id="senha">
        
        <button type="submit">Salvar</button>

        @isset($success)
            <h1>Cadastrado com sucesso!</h1>
        @endisset
    </form>

   <table border="1">
        <tr>
            <td>Nome do Admin</td>
            <td colspan="2">Ações</td>
        </tr>
        @isset($admins)
                @foreach($admins as $admin)
                    <tr>
                        <td>
                            <h3>{{ $admin->nome }}</h3>
                        </td>
                        <td>
                            <h3>{{ $admin->email }}</h3>
                        </td>
                        <td>
                            <h3>{{ $admin->telefone }}</h3>
                        </td>
                        <td>
                            <h3>{{ $admin->cpf }}</h3>
                        </td>
                        <td>
                            <form action="{{ route('admin.remove', ['id' => $admin->id]) }}">
                                <button type="submit">Remover</button>
                            </form>
                        </td>
                        <td>
                            <form action="{{ route('admin.atualizar', ['id' => $admin->id]) }}" method="get">
                                <button type="submit">Atualizar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
        @endisset
    </table>
</div>
