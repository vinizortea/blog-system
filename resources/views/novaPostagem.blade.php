<x-app-layout>
<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/index.css" />
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/novaPostagem.css">
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
        <div class="nova_postagem">
            <h2>Nova postagem</h2>
            <div class="titulo">
                <h3>Título</h3>
                
            </div>

        </div>
    </div>
</x-app-layout>