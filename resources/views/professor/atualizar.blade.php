<div>
    <form action="{{ route('professor.save') }}" method="post">
            @csrf

            <input type="hidden" name="id" value="{{ $prof->id }}">

            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="{{ $prof->nome }}">
            <label for="nome">Email</label>
            <input type="text" name="email" id="email" value="{{ $prof->email }}">
            <label for="nome">Telefone</label>
            <input type="text" name="telefone" id="telefone" value="{{ $prof->telefone }}">
            <button type="submit">Salvar</button>
            @isset($success)
                <h1>{{ $success }}</h1>
            @endisset
        </form>
</div>