<x-app-layout>
<head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/index.css" />
        <link rel="stylesheet" href="css/info_conta.css">
        <title>Conta</title>
    </head>

    <div class="container">
        <x-menu/>
        <div class="info_conta">
            <h1>Olá {{$username}}</h1>
            <h2>Informações da conta</h2>
            <address>
                <ul>
                    <li>Nome completo: {{$name}}</li>
                    <li>Nome de usuário: {{$username}}</li>
                    <li>Email: {{$email}}</li>
                </ul>
            </address>
        </div>
    </div>
</x-app-layout>