<x-app-layout>
<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/index.css" />
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/info_conta.css">
        <title>Conta</title>
    </head>

    <div class="container">
        <div class="menu">
            <button class="botao botao_dashboard" type="button">Dashboard</button>
            <button class="botao botao_postagens" type="button">Postagens</button>
            <button class="botao botao_conta" type="button" name="button_conta">Conta</button>
        </div>
        <div class="info_conta">
            <h1>Olá Fulano</h1>
            <h2>Informações da conta</h2>
            <address>
                <ul>
                    <li>Nome completo: Fulano da Silva</li>
                    <li>Nome de usuário: fulano</li>
                    <li>Email: fulano@e-mail.com</li>
                </ul>
            </address>
        </div>
    </div>
</x-app-layout>