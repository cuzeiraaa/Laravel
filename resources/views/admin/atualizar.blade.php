<div>
    <form action="{{ route('admin.save') }}" method="post">
            @csrf

            <input type="hidden" name="id" value="{{ $admin->id }}">

            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="{{ $admin->nome }}">
            <label for="nome">Email</label>
            <input type="text" name="email" id="email" value="{{ $admin->email }}">
            <label for="nome">Telefone</label>
            <input type="text" name="telefone" id="telefone" value="{{ $admin->telefone }}">
            <label for="nome">Cpf</label>
            <input type="text" name="cpf" id="cpf" value="{{ $admin->cpf }}">
            <label for="nome">Usuario</label>
            <input type="text" name="usuario" id="usuario" value="{{ $admin->usuario }}">

            <button type="submit">Salvar</button>
            @isset($success)
                <h1>{{ $success }}</h1>
            @endisset
        </form>
</div>