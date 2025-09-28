<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Lista de Membros</title>
</head>
<body>
    <h1>Lista de Membros Cadastrados</h1>

    <div>
        <a href="{{ route('membro.create') }}">Cadastrar Novo Membro</a>
        <a href="/">Voltar para Home</a>
    </div>

    @if($membros->count() > 0)
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Cargo</th>
                    <th>Função</th>
                    <th>Data de Entrada</th>
                    <th>Status</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($membros as $membro)
                <tr>
                    <td>{{ $membro->id }}</td>
                    <td>{{ $membro->nome }}</td>
                    <td>{{ $membro->cargo }}</td>
                    <td>{{ $membro->funcao }}</td>
                    <td>{{ \Carbon\Carbon::parse($membro->data_entrada)->format('d/m/Y') }}</td>
                    <td>{{ $membro->data_saida ? 'Inativo' : 'Ativo' }}</td>
                    <td>
                        <a href="{{ route('membro.show', $membro->id) }}">Ver</a>
                        <a href="{{ route('membro.edit', $membro->id) }}">Editar</a>
                        <form action="{{ route('membro.destroy', $membro->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Tem certeza?')">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
        <p>
            Total de membros: <strong>{{ $membros->count() }}</strong> |
            Ativos: <strong>{{ $membros->where('data_saida', null)->count() }}</strong> |
            Inativos: <strong>{{ $membros->where('data_saida', '!=', null)->count() }}</strong>
        </p>
    @else
        <p>
            Nenhum membro cadastrado ainda.
        </p>
    @endif
</body>
</html>