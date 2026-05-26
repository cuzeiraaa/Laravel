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

    @isset($profs)
        @foreach ($profs as $prof)
            <h3>{{ $prof->nome }}</h3>
            <br>
            <h3>{{ $prof->email }}</h3>
            <br>
            <h3>{{ $prof->telefone }}</h3>
        @endforeach
    @endisset
</div>
