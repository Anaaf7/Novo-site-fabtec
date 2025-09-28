<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Membro</title>
</head>
<body>
    <form method="POST" action="{{ route('membro.store') }}" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="cargo">Cargo</label>
            <select name="cargo" id="cargo" required>
                <option value="">Selecione o cargo</option>
                <option value="desenvolvedor" {{ (isset($membro->cargo) && $membro->cargo == 'desenvolvedor') ? 'selected' : '' }}>Desenvolvedor</option>
                <option value="mobile" {{ (isset($membro->cargo) && $membro->cargo == 'mobile') ? 'selected' : '' }}>Mobile</option>
                <option value="designer" {{ (isset($membro->cargo) && $membro->cargo == 'designer') ? 'selected' : '' }}>Designer</option>
                <option value="infraestrutura" {{ (isset($membro->cargo) && $membro->cargo == 'infraestrutura') ? 'selected' : '' }}>Infraestrutura</option>
            </select>
        </div>

        <div>
            <label for="nome">Nome</label>
            <input
                type="text"
                name="nome"
                placeholder="Informe o nome completo"
                required
                maxlength="100"
                value="{{ isset($membro->nome) ? $membro->nome : '' }}"
                id="nome" />
        </div>

        <div>
            <label for="imagem">Foto/Imagem</label>
            <input
                type="file"
                name="imagem"
                accept="image/*"
                id="imagem" />
        </div>

        <div>
            <label for="linkedin">LinkedIn</label>
            <input
                type="url"
                name="linkedin"
                placeholder="URL do perfil do LinkedIn"
                value="{{ isset($membro->linkedin) ? $membro->linkedin : '' }}"
                id="linkedin" />
        </div>

        <div>
            <label for="lattes">Lattes</label>
            <input
                type="url"
                name="lattes"
                placeholder="URL do currículo Lattes"
                value="{{ isset($membro->lattes) ? $membro->lattes : '' }}"
                id="lattes" />
        </div>

        <div>
            <label for="github">GitHub</label>
            <input
                type="url"
                name="github"
                placeholder="URL do perfil do GitHub"
                value="{{ isset($membro->github) ? $membro->github : '' }}"
                id="github" />
        </div>

        <div>
            <label for="funcao">Função</label>
            <select name="funcao" id="funcao" required>
                <option value="">Selecione a função</option>
                <option value="Voluntário" {{ (isset($membro->funcao) && $membro->funcao == 'Voluntário') ? 'selected' : '' }}>Voluntário</option>
                <option value="Bolsista" {{ (isset($membro->funcao) && $membro->funcao == 'Bolsista') ? 'selected' : '' }}>Bolsista</option>
                <option value="Professor" {{ (isset($membro->funcao) && $membro->funcao == 'Professor') ? 'selected' : '' }}>Professor</option>
            </select>
        </div>

        <div>
            <label for="data_entrada">Data de Entrada</label>
            <input
                type="date"
                name="data_entrada"
                required
                value="{{ isset($membro->data_entrada) ? $membro->data_entrada : '' }}"
                id="data_entrada" />
        </div>

        <div>
            <label for="data_saida">Data de Saída</label>
            <input
                type="date"
                name="data_saida"
                value="{{ isset($membro->data_saida) ? $membro->data_saida : '' }}"
                id="data_saida" />
        </div>

        <div>
            <input
                type="checkbox"
                name="ativo"
                id="ativo"
                {{ !isset($membro->data_saida) ? 'checked' : '' }} />
            <label for="ativo">Membro ainda ativo (não saiu)</label>
        </div>

        <div>
            <button type="submit">
                {{ isset($membro->id) ? 'Alterar' : 'Salvar' }}
            </button>
        </div>
        <div>
            <a href="{{ route('membro.index') }}">
                Ver Todos os Membros
            </a>
        </div>
    </form>

    <script>
        document.getElementById('ativo').addEventListener('change', function() {
            const dataSaidaInput = document.getElementById('data_saida');
            
            if (this.checked) {
                dataSaidaInput.value = '';
                dataSaidaInput.disabled = true;
            } else {
                dataSaidaInput.disabled = false;
            }
        });
        
        document.addEventListener('DOMContentLoaded', function() {
            const ativoCheckbox = document.getElementById('ativo');
            const dataSaidaInput = document.getElementById('data_saida');
            
            if (ativoCheckbox.checked) {
                dataSaidaInput.disabled = true;
            }
        });
    </script>
</body>
</html>