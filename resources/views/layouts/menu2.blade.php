<div class="menu w-full h-full flex flex-col items-center border border-solid border-black">
    <button class="m-15px w-11/12 h-50px text-lg border border-solid border-black" type="button">Dashboard</button>
    <button class="m-15px w-11/12 h-50px text-lg border border-solid border-black" type="button">Postagens</button>
    <button class="m-15px w-11/12 h-50px text-lg border border-solid border-black" type="button">Conta</button>
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