@extends('layouts.app')

@section('titulo', 'Carla Rogado — O Método Invisível por trás dos eventos mais importantes')

@section('conteudo')

{{-- ============================== HERO ============================== --}}
<section class="relative flex min-h-svh items-center overflow-hidden bg-ink text-ivory">

    <div class="absolute inset-0" aria-hidden="true">
        {{-- Placeholder: substituir por vídeo/foto oficial da produtora --}}
        <img src="https://images.unsplash.com/photo-1519741497674-611481863552?w=2000&q=80&auto=format&fit=crop"
             alt="" class="kenburns h-full w-full object-cover opacity-60">
        <div class="absolute inset-0 bg-gradient-to-b from-ink/70 via-ink/30 to-ink"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-ink/60 to-transparent"></div>
    </div>

    <span class="vertical-text absolute right-8 bottom-32 hidden text-ivory/40 lg:block hero-fade" style="--line-delay: 1.4s">
        Brasília — Brasil &amp; Internacional
    </span>

    <div class="relative z-10 mx-auto w-full max-w-7xl px-6 pt-32 pb-24 md:px-10">
        <p class="hero-fade kicker !text-gold-light" style="--line-delay: 0.2s">Cerimonial &amp; Produção Executiva</p>

        <h1 class="mt-8 font-display text-[13vw] leading-[1.04] font-light sm:text-6xl md:text-7xl xl:text-[5.4rem]">
            <span class="hero-line" style="--line-delay: 0.35s"><span>O Método <em class="text-gold-light italic">Invisível</em></span></span>
            <span class="hero-line" style="--line-delay: 0.5s"><span>por trás dos eventos</span></span>
            <span class="hero-line" style="--line-delay: 0.65s"><span>mais importantes.</span></span>
        </h1>

        <p class="hero-fade mt-9 max-w-xl text-sm leading-relaxed font-light text-ivory/70 md:text-base" style="--line-delay: 0.9s">
            Cerimonial e produção executiva de eventos sociais, corporativos, institucionais e internacionais.
            Há mais de 19 anos, transformamos planejamento rigoroso em execução impecável, em Brasília e no mundo.
        </p>

        <div class="hero-fade mt-12 flex flex-col gap-4 sm:flex-row" style="--line-delay: 1.1s">
            <a href="https://wa.me/5561999999999" target="_blank" rel="noopener" class="btn btn-gold"><span>Falar no WhatsApp</span></a>
            <a href="#apresentacao" class="btn btn-ghost"><span>Conheça o método</span></a>
        </div>
    </div>

    <a href="#apresentacao" class="hero-fade absolute bottom-10 left-1/2 flex -translate-x-1/2 flex-col items-center gap-3" style="--line-delay: 1.5s" aria-label="Rolar para baixo">
        <span class="text-[0.55rem] uppercase tracking-[0.45em] text-ivory/50">Descubra</span>
        <span class="scroll-hint"></span>
    </a>
</section>

{{-- ============================ MARQUEE ============================= --}}
<div class="marquee border-y border-gold/20 bg-ivory py-5" aria-hidden="true">
    @for ($i = 0; $i < 2; $i++)
        <div class="marquee__track" style="--marquee-speed: 38s">
            @foreach (['Casamentos', 'Corporativo', 'Institucional', 'Governamental', 'Destination Weddings', 'Congressos & Fóruns', 'Internacional', 'Cultural'] as $palavra)
                <span class="mx-8 font-display text-xl font-light text-ink/70 italic md:text-2xl">{{ $palavra }}</span>
                <span class="text-gold">✦</span>
            @endforeach
        </div>
    @endfor
</div>

{{-- ========================== APRESENTAÇÃO ========================== --}}
<section id="apresentacao" class="relative overflow-hidden py-24 md:py-36">
    <span class="outline-word absolute -top-6 right-0 text-[16vw]" aria-hidden="true">Rogado</span>

    <div class="mx-auto grid max-w-7xl items-center gap-16 px-6 md:px-10 lg:grid-cols-2 lg:gap-24">

        <div>
            <span class="kicker" data-reveal>A Produtora Rogado</span>

            <h2 class="mt-7 font-display text-4xl leading-[1.12] font-light md:text-5xl" data-reveal style="--reveal-delay: 0.1s">
                Referência em eventos de <em class="text-gold italic">alta complexidade</em>, de Brasília para o mundo.
            </h2>

            <div class="mt-8 space-y-5 text-[0.95rem] leading-relaxed font-light text-ink/70" data-reveal style="--reveal-delay: 0.2s">
                <p>
                    A <strong class="font-normal text-ink">Carla Rogado | Cerimonial e Produção de Eventos</strong>, também conhecida como
                    A&nbsp;Produtora&nbsp;Rogado, é referência em eventos de alta complexidade em Brasília, com atuação que já cruzou
                    fronteiras — de destination weddings a fóruns internacionais.
                </p>
                <p>
                    Por trás de cada entrega está o <strong class="font-normal text-ink">Método Invisível</strong>: uma estrutura de bastidores
                    tão bem planejada que garante fluidez, segurança e perfeição aos olhos de quem participa do evento,
                    sem que ninguém perceba o esforço por trás dela.
                </p>
            </div>

            <div class="mt-10 flex items-center gap-8" data-reveal style="--reveal-delay: 0.3s">
                <a href="{{ route('sobre') }}" class="btn btn-dark"><span>Sobre nós</span></a>
                <span class="font-display text-lg font-light text-stone italic">desde 2005</span>
            </div>
        </div>

        <div class="relative pb-16 pl-0 md:pb-20">
            <div class="img-reveal aspect-[4/5] w-[86%]" data-parallax="-0.04">
                <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?w=1200&q=80&auto=format&fit=crop"
                     alt="Mesa posta de evento de alto padrão" class="h-full w-full object-cover">
            </div>

            <div class="img-reveal absolute right-0 bottom-0 aspect-[3/4] w-[46%] shadow-[0_30px_80px_rgba(23,19,14,0.28)]" style="--reveal-delay: 0.25s" data-parallax="0.06">
                <img src="https://images.unsplash.com/photo-1523438885200-e635ba2c371e?w=800&q=80&auto=format&fit=crop"
                     alt="Detalhe de buquê de casamento" class="h-full w-full object-cover">
            </div>

            <div class="float-slow absolute -top-6 right-6 flex h-28 w-28 flex-col items-center justify-center rounded-full bg-gold text-center text-ivory shadow-[0_20px_50px_rgba(176,141,87,0.4)] md:h-32 md:w-32" data-reveal="zoom" style="--reveal-delay: 0.45s">
                <span class="font-display text-3xl font-medium md:text-4xl">19+</span>
                <span class="mt-0.5 px-3 text-[0.5rem] uppercase tracking-[0.22em]">anos de excelência</span>
            </div>
        </div>
    </div>
</section>

{{-- ============================ NÚMEROS ============================= --}}
<section class="border-y border-sand/60 bg-cream/60 py-16 md:py-20">
    <div class="mx-auto grid max-w-6xl grid-cols-2 gap-10 px-6 text-center md:grid-cols-4 md:px-10" data-reveal-group>
        @foreach ([
            ['numero' => '19', 'sufixo' => '+', 'legenda' => 'anos de experiência'],
            ['numero' => '300', 'sufixo' => '+', 'legenda' => 'eventos realizados'], /* ajustar para o número real */
            ['numero' => '4,9', 'sufixo' => '★', 'legenda' => 'avaliação média'],
            ['numero' => '99', 'sufixo' => '%', 'legenda' => 'de recomendação'],
        ] as $stat)
            <div>
                <p class="font-display text-5xl font-light text-ink md:text-6xl">
                    <span data-counter="{{ $stat['numero'] }}">0</span><span class="text-gold">{{ $stat['sufixo'] }}</span>
                </p>
                <p class="mt-3 text-[0.62rem] uppercase tracking-[0.32em] text-stone">{{ $stat['legenda'] }}</p>
            </div>
        @endforeach
    </div>
</section>

{{-- ============================ SERVIÇOS ============================ --}}
<section id="servicos" class="relative overflow-hidden bg-ink py-24 text-ivory md:py-36">
    <span class="outline-word absolute -bottom-8 left-0 text-[15vw] opacity-70" aria-hidden="true">serviços</span>

    <div class="relative mx-auto max-w-7xl px-6 md:px-10">
        <div class="grid gap-10 lg:grid-cols-2 lg:items-end">
            <div>
                <span class="kicker" data-reveal>Escopo de serviços</span>
                <h2 class="mt-7 font-display text-4xl leading-[1.12] font-light md:text-5xl" data-reveal style="--reveal-delay: 0.1s">
                    Da estratégia ao <em class="text-gold-light italic">encerramento</em>, cada detalhe sob controle.
                </h2>
            </div>
            <p class="max-w-md text-sm leading-relaxed font-light text-ivory/55 lg:justify-self-end" data-reveal style="--reveal-delay: 0.2s">
                Uma operação completa de bastidores, desenhada para que o evento aconteça com fluidez absoluta —
                e para que você viva cada momento sem preocupações.
            </p>
        </div>

        <div class="mt-16 grid gap-x-14 md:grid-cols-2" data-reveal-group>
            @foreach ([
                ['titulo' => 'Planejamento estratégico do evento', 'texto' => 'Visão, objetivos e cronograma desenhados antes de qualquer execução.'],
                ['titulo' => 'Produção executiva e coordenação geral', 'texto' => 'Comando central de todas as frentes, do primeiro briefing ao pós-evento.'],
                ['titulo' => 'Cerimonial e protocolo institucional', 'texto' => 'Precedência, ritos e etiqueta conduzidos com rigor e naturalidade.'],
                ['titulo' => 'Gestão e recepção de autoridades', 'texto' => 'Recepção de autoridades e convidados estratégicos com discrição e segurança.'],
                ['titulo' => 'Endomarketing e marketing de incentivo', 'texto' => 'Experiências internas que engajam equipes de empresas e instituições.'],
                ['titulo' => 'Supervisão de agendas institucionais', 'texto' => 'Agendas institucionais e corporativas supervisionadas minuto a minuto.'],
                ['titulo' => 'Coordenação de equipes e fornecedores', 'texto' => 'Orquestração precisa de todos os parceiros envolvidos na entrega.'],
                ['titulo' => 'Acompanhamento operacional completo', 'texto' => 'Presença ativa do início ao encerramento, sem margem para imprevistos.'],
            ] as $i => $servico)
                <div class="service-item group flex gap-7 border-b border-ivory/10 py-8">
                    <span class="font-display text-2xl font-light text-gold/70 transition-colors duration-500 group-hover:text-gold-light">{{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}</span>
                    <div>
                        <h3 class="font-display text-xl font-normal md:text-2xl">{{ $servico['titulo'] }}</h3>
                        <p class="mt-2 text-sm leading-relaxed font-light text-ivory/50">{{ $servico['texto'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- ======================== TIPOS DE EVENTOS ======================== --}}
<section class="overflow-hidden py-24 md:py-36">
    <div class="mx-auto max-w-7xl px-6 md:px-10">
        <div class="flex flex-wrap items-end justify-between gap-8">
            <div class="max-w-2xl">
                <span class="kicker" data-reveal>Tipos de eventos</span>
                <h2 class="mt-7 font-display text-4xl leading-[1.12] font-light md:text-5xl" data-reveal style="--reveal-delay: 0.1s">
                    Do casamento mais intimista ao evento governamental de <em class="text-gold italic">maior complexidade</em>.
                </h2>
                <p class="mt-6 max-w-lg text-sm leading-relaxed font-light text-ink/60" data-reveal style="--reveal-delay: 0.2s">
                    Cada projeto recebe o mesmo rigor de planejamento — arraste para explorar.
                </p>
            </div>

            <div class="flex gap-3" data-reveal>
                <button data-scroll-target="#tipos-track" data-dir="prev" aria-label="Anterior"
                        class="flex h-12 w-12 items-center justify-center rounded-full border border-ink/20 text-ink transition-all duration-500 hover:border-gold hover:bg-gold hover:text-ivory">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="h-4 w-4"><path d="M19 12H5m0 0 6 6m-6-6 6-6"/></svg>
                </button>
                <button data-scroll-target="#tipos-track" data-dir="next" aria-label="Próximo"
                        class="flex h-12 w-12 items-center justify-center rounded-full border border-ink/20 text-ink transition-all duration-500 hover:border-gold hover:bg-gold hover:text-ivory">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="h-4 w-4"><path d="M5 12h14m0 0-6-6m6 6-6 6"/></svg>
                </button>
            </div>
        </div>
    </div>

    <div id="tipos-track" class="drag-scroll mt-14 px-6 md:px-10" data-reveal>
        @foreach ([
            ['titulo' => 'Casamentos & Destination Weddings', 'sub' => 'Festas de alto padrão, no Brasil e no exterior', 'img' => 'https://images.unsplash.com/photo-1519225421980-715cb0215aed?w=1000&q=80&auto=format&fit=crop'],
            ['titulo' => 'Eventos Corporativos', 'sub' => 'Celebrações e marcos empresariais', 'img' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?w=1000&q=80&auto=format&fit=crop'],
            ['titulo' => 'Congressos & Fóruns', 'sub' => 'Encontros estratégicos e de alto nível', 'img' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=1000&q=80&auto=format&fit=crop'],
            ['titulo' => 'Institucionais & Governamentais', 'sub' => 'Protocolo rigoroso e execução impecável', 'img' => 'https://images.unsplash.com/photo-1505373877841-8d25f7d46678?w=1000&q=80&auto=format&fit=crop'],
            ['titulo' => 'Eventos Esportivos', 'sub' => 'Operações de grande porte', 'img' => 'https://images.unsplash.com/photo-1461896836934-ffe607ba8211?w=1000&q=80&auto=format&fit=crop'],
            ['titulo' => 'Culturais & Artísticos', 'sub' => 'Experiências que emocionam', 'img' => 'https://images.unsplash.com/photo-1514320291840-2e0a9bf2a9ae?w=1000&q=80&auto=format&fit=crop'],
            ['titulo' => 'Internacionais & Missões Oficiais', 'sub' => 'Atuação sem fronteiras', 'img' => 'https://images.unsplash.com/photo-1552832230-c0197dd311b5?w=1000&q=80&auto=format&fit=crop'],
        ] as $tipo)
            <article class="card-photo group aspect-[3/4] w-[78vw] sm:w-[46vw] lg:w-[30vw] xl:w-[24vw]">
                <img src="{{ $tipo['img'] }}" alt="{{ $tipo['titulo'] }}" class="h-full w-full object-cover" draggable="false" loading="lazy">
                <div class="card-photo__veil"></div>
                <div class="absolute inset-x-0 bottom-0 p-7 text-ivory">
                    <span class="gold-rule mb-4 block w-10 transition-all duration-700 group-hover:w-16"></span>
                    <h3 class="font-display text-2xl leading-tight font-normal">{{ $tipo['titulo'] }}</h3>
                    <p class="mt-2 text-[0.68rem] uppercase tracking-[0.24em] text-ivory/60">{{ $tipo['sub'] }}</p>
                </div>
            </article>
        @endforeach
    </div>
</section>

{{-- ======================= MÉTODO / DIFERENCIAIS ======================= --}}
<section class="relative overflow-hidden border-y border-sand/60 bg-cream/50 py-24 md:py-36">
    <div class="mx-auto grid max-w-7xl gap-16 px-6 md:px-10 lg:grid-cols-12">

        <div class="lg:col-span-5">
            <span class="kicker" data-reveal>Nossos diferenciais</span>

            <blockquote class="mt-8" data-reveal style="--reveal-delay: 0.1s">
                <p class="font-display text-4xl leading-[1.18] font-light md:text-[2.9rem]">
                    “Cerimonial não é luxo. É o que separa um evento <em class="text-stone italic">bonito</em> de um evento
                    <em class="text-gold italic">impecável</em>.”
                </p>
            </blockquote>

            <div class="img-reveal mt-12 hidden aspect-[4/3] lg:block" data-parallax="0.05">
                <img src="https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?w=1100&q=80&auto=format&fit=crop"
                     alt="Recepção de evento à luz de velas" class="h-full w-full object-cover" loading="lazy">
            </div>
        </div>

        <div class="lg:col-span-6 lg:col-start-7">
            <div data-reveal-group>
                @foreach ([
                    ['titulo' => 'Segurança em qualquer ambiente', 'texto' => 'Atuação segura em ambientes sociais, corporativos, institucionais e governamentais.'],
                    ['titulo' => 'Domínio de protocolo', 'texto' => 'Cerimonial, precedência e protocolo conduzidos com maestria e discrição.'],
                    ['titulo' => 'Postura diplomática', 'texto' => 'Comunicação clara e tomada de decisão ágil, mesmo sob pressão.'],
                    ['titulo' => 'Antecipação de riscos', 'texto' => 'Imprevistos resolvidos antes que cheguem aos olhos dos convidados.'],
                    ['titulo' => 'Foco em reputação', 'texto' => 'Foco absoluto na experiência, imagem e reputação de cada cliente.'],
                ] as $i => $dif)
                    <div class="group flex gap-8 border-b border-ink/10 py-8 first:pt-0">
                        <span class="mt-1 flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full border border-gold/40 font-display text-lg text-gold transition-all duration-500 group-hover:bg-gold group-hover:text-ivory">
                            {{ str_pad($i + 1, 2, '0', STR_PAD_LEFT) }}
                        </span>
                        <div>
                            <h3 class="font-display text-2xl font-normal">{{ $dif['titulo'] }}</h3>
                            <p class="mt-2 text-sm leading-relaxed font-light text-ink/60">{{ $dif['texto'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ======================== PORTFÓLIO (PRÉVIA) ======================== --}}
<section class="py-24 md:py-36">
    <div class="mx-auto max-w-7xl px-6 md:px-10">
        <div class="flex flex-wrap items-end justify-between gap-8">
            <div>
                <span class="kicker" data-reveal>Portfólio</span>
                <h2 class="mt-7 font-display text-4xl leading-[1.12] font-light md:text-5xl" data-reveal style="--reveal-delay: 0.1s">
                    Momentos que <em class="text-gold italic">falam</em> por nós.
                </h2>
            </div>
            <a href="{{ route('portfolio') }}" class="btn btn-dark" data-reveal><span>Ver portfólio completo</span></a>
        </div>

        <div class="mt-14 grid grid-cols-2 gap-4 md:grid-cols-4 md:gap-6">
            @foreach ([
                ['img' => 'https://images.unsplash.com/photo-1519167758481-83f550bb49b3?w=1000&q=80&auto=format&fit=crop', 'classe' => 'md:row-span-2 aspect-[3/4] md:aspect-auto', 'legenda' => 'Casamento — salão de festas'],
                ['img' => 'https://images.unsplash.com/photo-1492684223066-81342ee5ff30?w=1000&q=80&auto=format&fit=crop', 'classe' => 'aspect-square', 'legenda' => 'Celebração ao entardecer'],
                ['img' => 'https://images.unsplash.com/photo-1507504031003-b417219a0fde?w=1000&q=80&auto=format&fit=crop', 'classe' => 'aspect-square', 'legenda' => 'Evento corporativo'],
                ['img' => 'https://images.unsplash.com/photo-1469371670807-013ccf25f16a?w=1000&q=80&auto=format&fit=crop', 'classe' => 'aspect-square', 'legenda' => 'Recepção ao ar livre'],
                ['img' => 'https://images.unsplash.com/photo-1465495976277-4387d4b0b4c6?w=1000&q=80&auto=format&fit=crop', 'classe' => 'aspect-square', 'legenda' => 'Sparklers — saída dos noivos'],
                ['img' => 'https://images.unsplash.com/photo-1520854221256-17451cc331bf?w=1000&q=80&auto=format&fit=crop', 'classe' => 'md:col-span-2 aspect-[2/1]', 'legenda' => 'Destination wedding'],
            ] as $i => $foto)
                <figure class="card-photo img-reveal {{ $foto['classe'] }}" style="--reveal-delay: {{ 0.08 * $i }}s">
                    <img src="{{ $foto['img'] }}" alt="{{ $foto['legenda'] }}" class="h-full w-full object-cover" loading="lazy">
                    <figcaption class="card-photo__veil flex items-end p-6 opacity-0 transition-opacity duration-500 group-hover:opacity-100 hover:opacity-100">
                        <span class="text-[0.62rem] uppercase tracking-[0.28em] text-ivory">{{ $foto['legenda'] }}</span>
                    </figcaption>
                </figure>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================== VÍDEO ============================== --}}
<section class="bg-ink py-24 text-ivory md:py-32">
    <div class="mx-auto max-w-6xl px-6 text-center md:px-10">
        <span class="kicker kicker--center justify-center" data-reveal>Bastidores</span>
        <h2 class="mt-7 font-display text-4xl leading-[1.12] font-light md:text-5xl" data-reveal style="--reveal-delay: 0.1s">
            O que ninguém vê, <em class="text-gold-light italic">nós cuidamos</em>.
        </h2>

        {{-- Placeholder: substituir pelo vídeo institucional --}}
        <div class="group relative mt-14 aspect-video cursor-pointer overflow-hidden" data-reveal="zoom" style="--reveal-delay: 0.2s">
            <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?w=1800&q=80&auto=format&fit=crop"
                 alt="Prévia do vídeo institucional" class="h-full w-full object-cover opacity-70 transition-transform duration-1000 group-hover:scale-105" loading="lazy">
            <div class="absolute inset-0 bg-ink/30"></div>

            <div class="absolute inset-0 flex flex-col items-center justify-center gap-6">
                <span class="relative flex h-20 w-20 items-center justify-center rounded-full border border-ivory/60 backdrop-blur-sm transition-all duration-500 group-hover:scale-110 group-hover:border-gold-light md:h-24 md:w-24">
                    <span class="absolute inset-0 animate-ping rounded-full border border-ivory/30 [animation-duration:2.5s]"></span>
                    <svg viewBox="0 0 24 24" fill="currentColor" class="ml-1 h-7 w-7 text-ivory"><path d="M8 5.14v13.72L19 12 8 5.14Z"/></svg>
                </span>
                <span class="text-[0.6rem] uppercase tracking-[0.4em] text-ivory/70">Vídeo institucional · em breve</span>
            </div>
        </div>
    </div>
</section>

{{-- =========================== PROVA SOCIAL =========================== --}}
<section class="py-24 md:py-36">
    <div class="mx-auto max-w-7xl px-6 md:px-10">
        <div class="text-center">
            <span class="kicker kicker--center justify-center" data-reveal>Prova social</span>
            <h2 class="mx-auto mt-7 max-w-3xl font-display text-4xl leading-[1.12] font-light md:text-5xl" data-reveal style="--reveal-delay: 0.1s">
                Marcas e instituições que <em class="text-gold italic">confiaram</em> na Carla Rogado Produções.
            </h2>
        </div>

        {{-- Faixa de logos — substituir pelos logos reais dos clientes --}}
        <div class="marquee mt-16 border-y border-sand/70 py-10" data-reveal>
            @for ($i = 0; $i < 2; $i++)
                <div class="marquee__track" style="--marquee-speed: 30s">
                    @foreach (range(1, 8) as $n)
                        <span class="mx-12 flex items-center gap-3 whitespace-nowrap opacity-45 transition-opacity hover:opacity-100">
                            <span class="font-display text-2xl font-light tracking-[0.18em] text-ink">LOGO</span>
                            <span class="text-[0.6rem] uppercase tracking-[0.3em] text-stone">Cliente {{ str_pad($n, 2, '0', STR_PAD_LEFT) }}</span>
                        </span>
                    @endforeach
                </div>
            @endfor
        </div>

        {{-- Depoimentos --}}
        <div class="mx-auto mt-20 max-w-3xl text-center">
            <div class="relative" data-testimonials data-reveal>
                @foreach ([
                    ['texto' => 'Vivemos o nosso casamento sem perceber uma única engrenagem girando. Tudo simplesmente aconteceu — com uma perfeição que só entendemos depois, ao saber de tudo o que foi resolvido nos bastidores.', 'autor' => 'M. & R.', 'contexto' => 'Casamento — Brasília, DF'],
                    ['texto' => 'Precisão de agenda, condução de autoridades e protocolo impecável. A equipe da Carla trabalha com um nível de antecipação que dá tranquilidade total à organização.', 'autor' => 'Diretoria institucional', 'contexto' => 'Fórum internacional — Roma, Itália'],
                    ['texto' => 'Do primeiro briefing ao encerramento, controle absoluto de cada detalhe. Nossos convidados só viram o resultado: um evento fluido, elegante e sem nenhum tropeço.', 'autor' => 'Gerência de marketing', 'contexto' => 'Evento corporativo — Shopping Center, DF'],
                ] as $dep)
                    <blockquote class="testimonial-slide px-2">
                        <div class="mb-7 flex justify-center gap-1.5 text-gold" aria-label="5 estrelas">
                            @for ($s = 0; $s < 5; $s++)
                                <svg viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4"><path d="M12 2.5 14.9 8.6l6.6.9-4.8 4.6 1.2 6.5L12 17.5 6.1 20.6l1.2-6.5L2.5 9.5l6.6-.9L12 2.5Z"/></svg>
                            @endfor
                        </div>
                        <p class="font-display text-2xl leading-snug font-light text-ink/85 italic md:text-[1.7rem]">“{{ $dep['texto'] }}”</p>
                        <footer class="mt-8">
                            <p class="text-sm font-normal tracking-wide text-ink">{{ $dep['autor'] }}</p>
                            <p class="mt-1 text-[0.62rem] uppercase tracking-[0.3em] text-stone">{{ $dep['contexto'] }}</p>
                        </footer>
                    </blockquote>
                @endforeach
            </div>

            <div class="mt-10 flex items-center justify-center gap-3">
                @for ($d = 0; $d < 3; $d++)
                    <button class="testimonial-dot" aria-label="Ver depoimento {{ $d + 1 }}"></button>
                @endfor
            </div>

            <p class="mt-12 text-[0.62rem] uppercase tracking-[0.3em] text-stone" data-reveal>
                4,9 ★ de avaliação média — 99% dos clientes recomendam
            </p>
        </div>
    </div>
</section>

{{-- ============================ BENEFÍCIOS ============================ --}}
<section class="border-t border-sand/60 bg-cream/50 py-24 md:py-36">
    <div class="mx-auto grid max-w-7xl items-center gap-16 px-6 md:px-10 lg:grid-cols-2">

        <div class="img-reveal order-2 aspect-[4/5] lg:order-1" data-parallax="-0.04">
            <img src="https://images.unsplash.com/photo-1510076857177-7470076d4098?w=1200&q=80&auto=format&fit=crop"
                 alt="Cerimônia ao ar livre" class="h-full w-full object-cover" loading="lazy">
        </div>

        <div class="order-1 lg:order-2">
            <span class="kicker" data-reveal>Benefícios para o cliente</span>
            <h2 class="mt-7 font-display text-4xl leading-[1.12] font-light md:text-5xl" data-reveal style="--reveal-delay: 0.1s">
                Você foca no que importa. <em class="text-gold italic">Nós cuidamos</em> de todo o resto.
            </h2>

            <ul class="mt-10 space-y-5" data-reveal-group>
                @foreach ([
                    'Redução de riscos operacionais e institucionais',
                    'Maior controle, organização e previsibilidade',
                    'Condução adequada de autoridades e lideranças',
                    'Evento alinhado aos objetivos estratégicos da organização',
                    'Tranquilidade para focar no conteúdo e nos relacionamentos',
                ] as $beneficio)
                    <li class="flex items-start gap-5">
                        <span class="mt-1 flex h-7 w-7 flex-shrink-0 items-center justify-center rounded-full bg-gold/15 text-gold">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" class="h-3.5 w-3.5"><path d="m5 13 4 4L19 7"/></svg>
                        </span>
                        <span class="text-[0.95rem] leading-relaxed font-light text-ink/75">{{ $beneficio }}</span>
                    </li>
                @endforeach
            </ul>

            <a href="{{ route('contato') }}" class="btn btn-dark mt-12" data-reveal><span>Planejar meu evento</span></a>
        </div>
    </div>
</section>

@endsection
