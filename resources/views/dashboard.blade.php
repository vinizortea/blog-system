<x-app-layout>

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/index.css" />
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/welcome.css">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <title>Dashboard</title>
    </head>

    <div class="container">
        <div class="menu">
            <button class="botao" type="button">Dashboard</button>
            <button class="botao" type="button">Postagens</button>
            <button class="botao" type="button">Conta</button>
        </div>
        <div class="welcome">
            <h1 class="mensagem_welcome">Bem-Vindo Fulano</h1>
            <div class="postagens">10 posts mais recentes</div>
        </div> 
    </div>

    <!--Usando Tailwind
    <div class="grid grid-cols-2 w-full h-full">
        <div class="col-start-1 col-end-2 w-1/5 h-full flex flex-col items-center border border-solid border-black">
            <button class="m-15px w-9/10 h-50px text-lg border border-solid border-black" type="button">Dashboard</button>
            <button class="m-15px w-9/10 h-50px text-lg border border-solid border-black" type="button">Postagens</button>
            <button class="m-15px w-9/10 h-50px text-lg border border-solid border-black" type="button">Conta</button>
        </div>
        <div class="col-start-2 col-end-3 w-4/5 h-full flex flex-col items-start border border-solid border-black">
            <h1 class="self-center text-2xl">Bem-Vindo Fulano</h1>
            <div class="w-19/20 h-full mx-1/10 my-10px text-left self-center flex flex-col border border-solid border-black">10 posts mais recentes</div>
        </div> 
    </div>-->

</x-app-layout>