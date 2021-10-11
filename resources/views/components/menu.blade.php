<link rel="stylesheet" href="css/menu.css">
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