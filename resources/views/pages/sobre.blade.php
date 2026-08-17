@extends('layouts.app')

@section('titulo', 'Sobre — Carla Rogado Produções')
@section('descricao', 'Há mais de 19 anos no mercado de eventos, a Carla Rogado Produções une sensibilidade para experiências memoráveis e rigor estratégico de quem entende de planejamento complexo.')

@section('conteudo')

@include('partials.page-hero', [
    'kicker' => 'Sobre nós',
    'titulo' => 'Sensibilidade e rigor,',
    'destaque' => 'em equilíbrio raro.',
    'subtitulo' => 'Há mais de 19 anos no mercado de eventos, a Carla Rogado Produções nasceu do encontro entre duas coisas raras nesse setor.',
    'imagem' => 'https://images.unsplash.com/photo-1469371670807-013ccf25f16a?w=2000&q=80&auto=format&fit=crop',
])

{{-- ============================ ABERTURA ============================ --}}
<section class="relative overflow-hidden py-24 md:py-32">
    <span class="outline-word absolute top-4 right-0 text-[14vw]" aria-hidden="true">sobre</span>

    <div class="mx-auto max-w-4xl px-6 text-center md:px-10">
        <span class="kicker kicker--center justify-center" data-reveal>A origem</span>
        <p class="mt-10 font-display text-3xl leading-[1.35] font-light text-ink/85 md:text-4xl" data-reveal style="--reveal-delay: 0.15s">
            A Carla Rogado Produções nasceu do encontro entre <em class="text-gold italic">sensibilidade</em> para experiências
            memoráveis e <em class="text-gold italic">rigor estratégico</em> de quem entende de planejamento complexo.
        </p>
    </div>
</section>

{{-- =========================== QUEM LIDERA =========================== --}}
<section class="border-y border-sand/60 bg-cream/50 py-24 md:py-36">
    <div class="mx-auto grid max-w-7xl items-center gap-16 px-6 md:px-10 lg:grid-cols-2 lg:gap-24">

        <div class="relative">
            <div class="img-reveal aspect-[3/4] w-[88%]" data-parallax="-0.04">
                {{-- Placeholder: substituir por retrato oficial da Carla Rogado --}}
                <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=1100&q=80&auto=format&fit=crop"
                     alt="Retrato de Carla Rogado" class="h-full w-full object-cover">
            </div>
            <div class="absolute right-0 bottom-8 bg-ink px-8 py-6 text-ivory shadow-[0_25px_60px_rgba(23,19,14,0.35)]" data-reveal="right" style="--reveal-delay: 0.3s">
                <p class="font-display text-2xl font-light">Carla Rogado</p>
                <p class="mt-1 text-[0.58rem] uppercase tracking-[0.32em] text-gold-light">Fundadora &amp; Cientista Política</p>
            </div>
        </div>

        <div>
            <span class="kicker" data-reveal>Quem lidera</span>
            <h2 class="mt-7 font-display text-4xl leading-[1.12] font-light md:text-5xl" data-reveal style="--reveal-delay: 0.1s">
                Visão de <em class="text-gold italic">cientista política</em>, alma de anfitriã.
            </h2>

            <div class="mt-8 space-y-5 text-[0.95rem] leading-relaxed font-light text-ink/70" data-reveal style="--reveal-delay: 0.2s">
                <p>
                    À frente da empresa está <strong class="font-normal text-ink">Carla Rogado</strong>, cientista política com formação
                    internacional. Essa origem não é um detalhe.
                </p>
                <p>
                    É o que diferencia a forma como conduzimos cada evento: com a mesma disciplina, leitura de cenário e visão
                    estratégica que se aplica à condução de negociações e negócios de alto nível.
                </p>
            </div>

            <div class="mt-10 grid grid-cols-2 gap-6" data-reveal-group>
                @foreach ([
                    ['titulo' => 'Formação internacional', 'texto' => 'Leitura de cenário e diplomacia aplicadas a eventos'],
                    ['titulo' => 'Disciplina estratégica', 'texto' => 'O rigor de negociações de alto nível em cada projeto'],
                ] as $item)
                    <div class="border-l border-gold/40 pl-6">
                        <h3 class="font-display text-xl font-normal">{{ $item['titulo'] }}</h3>
                        <p class="mt-2 text-sm font-light text-ink/55">{{ $item['texto'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

{{-- ========================= MÉTODO INVISÍVEL ========================= --}}
<section class="relative overflow-hidden bg-ink py-24 text-ivory md:py-36">
    <span class="outline-word absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-[20vw] opacity-50" aria-hidden="true">método</span>

    <div class="relative mx-auto max-w-4xl px-6 text-center md:px-10">
        <span class="kicker kicker--center justify-center" data-reveal>O Método Invisível</span>

        <h2 class="mt-8 font-display text-4xl leading-[1.15] font-light md:text-5xl" data-reveal style="--reveal-delay: 0.1s">
            Todo grande evento parece simples aos olhos de quem o vive. Essa simplicidade é <em class="text-gold-light italic">ilusão</em>.
        </h2>

        <div class="mx-auto mt-9 max-w-2xl space-y-5 text-sm leading-relaxed font-light text-ivory/60 md:text-base" data-reveal style="--reveal-delay: 0.2s">
            <p>
                Uma ilusão construída por uma estrutura de bastidores meticulosamente planejada para absorver qualquer
                imprevisto antes que ele chegue ao convidado.
            </p>
            <p>
                Chamamos essa estrutura de <strong class="font-normal text-gold-light">Método Invisível</strong>: mais do que conduzir um evento,
                o cerimonial protege o investimento do cliente, preserva o planejamento e transforma cada escolha em uma
                execução impecável.
            </p>
        </div>

        <div class="mt-14 grid gap-px overflow-hidden border border-ivory/10 sm:grid-cols-3" data-reveal-group>
            @foreach ([
                ['titulo' => 'Proteger', 'texto' => 'o investimento do cliente'],
                ['titulo' => 'Preservar', 'texto' => 'o planejamento de cada escolha'],
                ['titulo' => 'Transformar', 'texto' => 'tudo em execução impecável'],
            ] as $pilar)
                <div class="bg-ivory/[0.03] px-8 py-10 transition-colors duration-500 hover:bg-ivory/[0.07]">
                    <p class="font-display text-2xl font-light text-gold-light italic">{{ $pilar['titulo'] }}</p>
                    <p class="mt-2 text-xs leading-relaxed font-light tracking-wide text-ivory/55 uppercase">{{ $pilar['texto'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- =========================== ONDE ATUAMOS =========================== --}}
<section class="py-24 md:py-36">
    <div class="mx-auto grid max-w-7xl items-center gap-16 px-6 md:px-10 lg:grid-cols-2 lg:gap-24">

        <div>
            <span class="kicker" data-reveal>Onde atuamos</span>
            <h2 class="mt-7 font-display text-4xl leading-[1.12] font-light md:text-5xl" data-reveal style="--reveal-delay: 0.1s">
                Base em Brasília. Atuação <em class="text-gold italic">sem fronteira</em>.
            </h2>

            <p class="mt-8 text-[0.95rem] leading-relaxed font-light text-ink/70" data-reveal style="--reveal-delay: 0.2s">
                Já conduzimos eventos institucionais e governamentais na capital, festas corporativas de grande porte,
                destination weddings e fóruns internacionais — como o <strong class="font-normal text-ink">United Freedom Forum</strong>, em Roma.
            </p>

            <ul class="mt-10 space-y-0 border-t border-sand" data-reveal-group>
                @foreach ([
                    ['local' => 'Brasília — DF', 'tipo' => 'Eventos institucionais, governamentais e sociais'],
                    ['local' => 'Brasil', 'tipo' => 'Casamentos e eventos corporativos de grande porte'],
                    ['local' => 'Roma — Itália', 'tipo' => 'United Freedom Forum e missões oficiais'],
                    ['local' => 'Internacional', 'tipo' => 'Destination weddings e fóruns pelo mundo'],
                ] as $lugar)
                    <li class="flex flex-wrap items-baseline justify-between gap-2 border-b border-sand py-5">
                        <span class="font-display text-2xl font-light">{{ $lugar['local'] }}</span>
                        <span class="text-[0.62rem] uppercase tracking-[0.24em] text-stone">{{ $lugar['tipo'] }}</span>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="relative">
            <div class="img-reveal aspect-[3/4]" data-parallax="0.05">
                <img src="https://images.unsplash.com/photo-1552832230-c0197dd311b5?w=1200&q=80&auto=format&fit=crop"
                     alt="Roma, Itália — palco de fóruns internacionais" class="h-full w-full object-cover" loading="lazy">
            </div>
            <span class="vertical-text absolute top-8 -right-4 hidden text-stone lg:block">Brasília · Roma · o mundo</span>
        </div>
    </div>
</section>

{{-- ======================== PARA QUEM TRABALHAMOS ======================== --}}
<section class="border-t border-sand/60 bg-cream/50 py-24 md:py-36">
    <div class="mx-auto max-w-7xl px-6 md:px-10">
        <div class="text-center">
            <span class="kicker kicker--center justify-center" data-reveal>Para quem trabalhamos</span>
            <h2 class="mx-auto mt-7 max-w-3xl font-display text-4xl leading-[1.12] font-light md:text-5xl" data-reveal style="--reveal-delay: 0.1s">
                Três públicos. O mesmo <em class="text-gold italic">rigor absoluto</em>.
            </h2>
        </div>

        <div class="mt-16 grid gap-6 md:grid-cols-3" data-reveal-group>
            @foreach ([
                ['titulo' => 'Noivos', 'texto' => 'Que buscam um casamento impecável, inclusive no exterior — vivendo cada segundo sem preocupação.', 'img' => 'https://images.unsplash.com/photo-1520854221256-17451cc331bf?w=900&q=80&auto=format&fit=crop'],
                ['titulo' => 'Empresas & Shoppings', 'texto' => 'Que celebram marcos importantes e precisam de eventos alinhados aos seus objetivos estratégicos.', 'img' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?w=900&q=80&auto=format&fit=crop'],
                ['titulo' => 'Autoridades & Instituições', 'texto' => 'Que exigem sigilo, protocolo rigoroso e execução impecável, sem margem para erro.', 'img' => 'https://images.unsplash.com/photo-1505373877841-8d25f7d46678?w=900&q=80&auto=format&fit=crop'],
            ] as $publico)
                <article class="card-photo group aspect-[3/4]">
                    <img src="{{ $publico['img'] }}" alt="{{ $publico['titulo'] }}" class="h-full w-full object-cover" loading="lazy">
                    <div class="card-photo__veil"></div>
                    <div class="absolute inset-x-0 bottom-0 p-8 text-ivory">
                        <span class="gold-rule mb-4 block w-10 transition-all duration-700 group-hover:w-16"></span>
                        <h3 class="font-display text-3xl font-light">{{ $publico['titulo'] }}</h3>
                        <p class="mt-3 max-h-0 overflow-hidden text-sm leading-relaxed font-light text-ivory/75 opacity-0 transition-all duration-700 group-hover:max-h-40 group-hover:opacity-100">
                            {{ $publico['texto'] }}
                        </p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>

{{-- ============================== MISSÃO ============================== --}}
<section class="py-24 md:py-32">
    <div class="mx-auto max-w-4xl px-6 text-center md:px-10">
        <span class="kicker kicker--center justify-center" data-reveal>Nossa missão</span>
        <p class="mt-10 font-display text-3xl leading-[1.3] font-light text-ink/85 md:text-4xl" data-reveal style="--reveal-delay: 0.15s">
            “Entregar, para cada cliente, um resultado à altura de suas <em class="text-gold italic">ambições mais exigentes</em>,
            com a mesma disciplina de bastidores em qualquer porte ou tipo de evento.”
        </p>
    </div>
</section>

@endsection
