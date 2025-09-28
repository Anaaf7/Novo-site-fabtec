<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Editar Membro</title>
</head>
<body>
    <h1>Editar Membro</h1>
    
    <form action="{{ route('membro.update', $membro->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div>
            <label for="cargo">Cargo</label>
            <select name="cargo" id="cargo" required>
                <option value="">Selecione o cargo</option>
                <option value="desenvolvedor" {{ $membro->cargo == 'desenvolvedor' ? 'selected' : '' }}>Desenvolvedor</option>
                <option value="mobile" {{ $membro->cargo == 'mobile' ? 'selected' : '' }}>Mobile</option>
                <option value="designer" {{ $membro->cargo == 'designer' ? 'selected' : '' }}>Designer</option>
                <option value="infraestrutura" {{ $membro->cargo == 'infraestrutura' ? 'selected' : '' }}>Infraestrutura</option>
            </select>
        </div>
        
        <div>
            <label>Nome:</label>
            <input type="text" name="nome" value="{{ $membro->nome }}" required maxlength="100">
        </div>

        <div>
            <label>Imagem Atual:</label>
            @if($membro->imagem)
                <img src="{{ asset('storage/' . $membro->imagem) }}" width="100" alt="Imagem do membro">
                <br>
            @else
                <p>Nenhuma imagem cadastrada</p>
            @endif
            <label>Nova Imagem (opcional):</label>
            <input type="file" name="imagem" accept="image/*">
        </div>
        
        <div>
            <label>LinkedIn:</label>
            <input type="url" name="linkedin" value="{{ $membro->linkedin }}" placeholder="URL do LinkedIn">
        </div>
        
        <div>
            <label>Lattes:</label>
            <input type="url" name="lattes" value="{{ $membro->lattes }}" placeholder="URL do Lattes">
        </div>
        
        <div>
            <label>GitHub:</label>
            <input type="url" name="github" value="{{ $membro->github }}" placeholder="URL do GitHub">
        </div>
        
        <div>
            <label for="funcao">Função</label>
            <select name="funcao" id="funcao" required>
                <option value="">Selecione a função</option>
                <option value="Voluntário" {{ $membro->funcao == 'Voluntário' ? 'selected' : '' }}>Voluntário</option>
                <option value="Bolsista" {{ $membro->funcao == 'Bolsista' ? 'selected' : '' }}>Bolsista</option>
                <option value="Professor" {{ $membro->funcao == 'Professor' ? 'selected' : '' }}>Professor</option>
            </select>
        </div>
        
        <div>
            <label>Data de Entrada:</label>
            <input type="date" name="data_entrada" value="{{ $membro->data_entrada->format('Y-m-d') }}" required>
        </div>
        
        <div>
            <label>Data de Saída:</label>
            <input type="date" name="data_saida" value="{{ $membro->data_saida ? $membro->data_saida->format('Y-m-d') : '' }}" id="data_saida">
        </div>
        
        <div>
            <input type="checkbox" name="ativo" id="ativo" {{ !$membro->data_saida ? 'checked' : '' }}>
            <label for="ativo">Membro ainda ativo (não saiu)</label>
        </div>
        
        <button type="submit">Atualizar</button>
    </form>
    
    <br>
    
    <form action="{{ route('membro.destroy', $membro->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Tem certeza que deseja excluir este membro? Esta ação não pode ser desfeita.')">
            Excluir Membro
        </button>
    </form>
    
    <br><br>
    
    <a href="{{ route('membro.show', $membro->id) }}">Cancelar</a>
</body>
</html>