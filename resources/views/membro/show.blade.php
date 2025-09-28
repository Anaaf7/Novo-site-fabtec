<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Detalhes do Membro</title>
</head>
<body>
    <div>
        <a href="{{ route('membro.index') }}">← Voltar</a>
        <h1>Detalhes do Membro</h1>
    </div>

    <div>
        <h2>Dados Pessoais</h2>

        <div>
            <span>Nome</span>
            <div>{{ $membro->nome }}</div>
        </div>

        <div>
            <span>Cargo</span>
            <div>{{ $membro->cargo }}</div>
        </div>

        <div>
            <span>Função</span>
            <div>{{ $membro->funcao }}</div>
        </div>

        <div>
            <span>Data de Entrada</span>
            <div>{{ \Carbon\Carbon::parse($membro->data_entrada)->format('d/m/Y') }}</div>
        </div>

        <div>
            <span>Data de Saída</span>
            <div>{{ $membro->data_saida ? \Carbon\Carbon::parse($membro->data_saida)->format('d/m/Y') : 'Ativo' }}</div>
        </div>

        @if($membro->linkedin)
        <div>
            <span>LinkedIn</span>
            <div><a href="{{ $membro->linkedin }}" target="_blank">{{ $membro->linkedin }}</a></div>
        </div>
        @endif

        @if($membro->lattes)
        <div>
            <span>Lattes</span>
            <div><a href="{{ $membro->lattes }}" target="_blank">{{ $membro->lattes }}</a></div>
        </div>
        @endif

        @if($membro->github)
        <div>
            <span>GitHub</span>
            <div><a href="{{ $membro->github }}" target="_blank">{{ $membro->github }}</a></div>
        </div>
        @endif
    </div>

    <div>
        <div>
            <a href="{{ route('membro.edit', $membro->id) }}">Editar</a>

            <form action="{{ route('membro.destroy', $membro->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este membro?')">Excluir</button>
            </form>
            
            <a href="{{ route('membro.index') }}">Ver Todos os Membros</a>
        </div>
    </div>
</body>
</html>