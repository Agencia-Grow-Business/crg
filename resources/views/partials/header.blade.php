<header data-header class="site-header fixed inset-x-0 top-0 z-40 text-ivory transition-all duration-500">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-6 py-5 md:px-10 md:py-6">

        <a href="{{ route('home') }}" class="group relative z-50 flex flex-col leading-none">
            <span class="font-display text-2xl font-medium tracking-[0.14em] md:text-[1.7rem]">Carla&nbsp;Rogado</span>
            <span class="mt-1.5 text-[0.55rem] font-light uppercase tracking-[0.4em] text-gold-light">Cerimonial &amp; Produção de Eventos</span>
        </a>

        <nav class="hidden items-center gap-10 lg:flex" aria-label="Navegação principal">
            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'is-active' : '' }}">Início</a>
            <a href="{{ route('sobre') }}" class="nav-link {{ request()->routeIs('sobre') ? 'is-active' : '' }}">Sobre</a>
            <a href="{{ route('home') }}#servicos" class="nav-link">Serviços</a>
            <a href="{{ route('portfolio') }}" class="nav-link {{ request()->routeIs('portfolio') ? 'is-active' : '' }}">Portfólio</a>
            <a href="{{ route('contato') }}" class="nav-link {{ request()->routeIs('contato') ? 'is-active' : '' }}">Contato</a>
            <a href="https://wa.me/5561999999999" target="_blank" rel="noopener" class="btn btn-gold !px-6 !py-3"><span>Fale conosco</span></a>
        </nav>

        <button data-menu-toggle aria-expanded="false" aria-label="Abrir menu"
                class="menu-toggle relative z-50 flex h-11 w-11 flex-col items-center justify-center gap-[7px] lg:hidden">
            <span class="menu-toggle__bar"></span>
            <span class="menu-toggle__bar"></span>
        </button>
    </div>
</header>

{{-- Menu mobile em tela cheia --}}
<div data-menu-overlay class="menu-overlay lg:hidden" aria-label="Menu móvel">
    <nav class="flex h-full flex-col items-center justify-center gap-2 text-center">
        @foreach ([
            ['route' => route('home'), 'label' => 'Início'],
            ['route' => route('sobre'), 'label' => 'Sobre'],
            ['route' => route('home').'#servicos', 'label' => 'Serviços'],
            ['route' => route('portfolio'), 'label' => 'Portfólio'],
            ['route' => route('contato'), 'label' => 'Contato'],
        ] as $i => $item)
            <a href="{{ $item['route'] }}" style="--menu-delay: {{ 0.08 * $i }}s"
               class="menu-overlay__link font-display text-4xl font-light text-ivory transition-colors hover:text-gold-light">
                {{ $item['label'] }}
            </a>
        @endforeach

        <a href="https://wa.me/5561999999999" target="_blank" rel="noopener"
           style="--menu-delay: 0.45s" class="menu-overlay__link btn btn-gold mt-8"><span>Falar no WhatsApp</span></a>

        <p class="menu-overlay__link mt-10 text-[0.6rem] uppercase tracking-[0.4em] text-stone" style="--menu-delay: 0.55s">
            Brasília — Brasil &amp; Internacional
        </p>
    </nav>
</div>
