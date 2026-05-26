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

        <label for="nome">SENHA</label>
        <input type="text" name="senha" id="senha">
        
        <button type="submit">Salvar</button>

        @isset($success)
            <h1>Cadastrado com sucesso!</h1>
        @endisset
    </form>

    @isset($admins)
        @foreach ($admins as $admin)
            <h3>{{ $admin->nome }}</h3>
            <h3>{{ $admin->email }}</h3>
            <h3>{{ $admin->telefone }}</h3>
            <h3>{{ $admin->usuario }}</h3>
        @endforeach
    @endisset
</div>
