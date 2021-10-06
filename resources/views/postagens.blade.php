<x-app-layout>
<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/index.css" />
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/postagens.css">
        <title>Conta</title>
    </head>

    <div class="container">
        <div class="menu">
            <button id="botao_dashboard" class="botao" type="button">Dashboard</button>
            <button id="botao_postagens" class="botao" type="button">Postagens</button>
            <button id="botao_conta" class="botao" type="button">Conta</button>
            <script type="text/javascript">
                document.getElementById("botao_dashboard").onclick = function () {
                    location.href = "dashboard";
                };
                document.getElementById("botao_postagens").onclick = function () {
                    location.href = "postagens";
                };
                document.getElementById("botao_conta").onclick = function () {
                    location.href = "conta";
                };
            </script>
        </div>
        <div class="postagens">
            <h2>Lista de postagens</h2>
            <button class="botao_nova_postagem">Adicionar nova postagem</button>
            <div class="dados_postagens">
                <table>
                    <tr>
                        <th>Título</th>
                        <th>Data</th>
                        <th>Ações</th>
                    </tr>
                    <tr>
                        <td>Meu post mais recente</td>
                        <td>02/09/2021</td>
                        <td>
                            <button class="botao_editar">Editar</button>
                            <button class="botao_excluir">Excluir</button>
                        </td>
                    </tr>
                    <tr>
                        <td>Meu 2º post mais recente</td>
                        <td>31/08/2021</td>
                        <td>
                            <button class="botao_editar">Editar</button>
                            <button class="botao_excluir">Excluir</button>
                        </td>
                    </tr>
                </table>
            </div>
            
        </div>
    </div>
</x-app-layout>