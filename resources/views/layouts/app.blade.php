<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('descricao', 'Carla Rogado | Cerimonial e produção executiva de eventos sociais, corporativos, institucionais e internacionais. Há mais de 19 anos transformando planejamento rigoroso em execução impecável, em Brasília e no mundo.')">

    <title>@yield('titulo', 'Carla Rogado — Cerimonial & Produção de Eventos')</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=cormorant-garamond:300,300i,400,400i,500,500i,600|jost:200,300,400,500&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="is-locked">

    @include('partials.preloader')
    @include('partials.header')

    <main>
        @yield('conteudo')
    </main>

    @include('partials.cta')
    @include('partials.footer')
    @include('partials.whatsapp')

</body>
</html>
