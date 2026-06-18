<div>
    <form action="{{ route('compo.save') }}" method="post">
            @csrf

            <input type="hidden" name="id" value="{{ $comp->id }}">

            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="{{ $comp->nome }}">
            <label for="nome">Hora Inicio</label>
            <input type="text" name="hora_inicio" id="hora_inicio" value="{{ $comp->hora_inicio }}">
            <label for="nome">Hora fim</label>
            <input type="text" name="hora_fim" id="hora_fim" value="{{ $comp->hora_fim }}">

            <button type="submit">Salvar</button>
            @isset($success)
                <h1>{{ $success }}</h1>
            @endisset
        </form>
</div>