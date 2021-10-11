<x-app-layout>
<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/index.css" />
        <link rel="stylesheet" href="css/postagens.css">
        <title>Conta</title>
    </head>

    <div class="container">
        <x-menu/>
        <div class="postagens">
            <h2>Lista de postagens</h2>
            <button id="botao_nova_postagem" class="botao">Adicionar nova postagem</button>
            <script type="text/javascript">
                document.getElementById("botao_nova_postagem").onclick = function () {
                    location.href = "novaPostagem";
                };
            </script>
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