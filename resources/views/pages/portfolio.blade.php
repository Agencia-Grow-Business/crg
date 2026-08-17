@extends('layouts.app')

@section('titulo', 'Portfólio — Carla Rogado Produções')
@section('descricao', 'Casamentos, eventos corporativos, institucionais e internacionais conduzidos pela Carla Rogado Produções.')

@section('conteudo')

@include('partials.page-hero', [
    'kicker' => 'Portfólio',
    'titulo' => 'Momentos que',
    'destaque' => 'falam por nós.',
    'subtitulo' => 'Uma seleção de celebrações e projetos conduzidos com o rigor do Método Invisível — do altar ao palanque.',
    'imagem' => 'https://images.unsplash.com/photo-1519167758481-83f550bb49b3?w=2000&q=80&auto=format&fit=crop',
])

<section class="py-20 md:py-28">
    <div class="mx-auto max-w-7xl px-6 md:px-10">

        {{-- Filtros --}}
        <div class="flex flex-wrap items-center justify-center gap-3" data-reveal>
            @foreach ([
                'todos' => 'Todos',
                'casamentos' => 'Casamentos',
                'corporativo' => 'Corporativo',
                'institucional' => 'Institucional',
                'internacional' => 'Internacional',
            ] as $slug => $rotulo)
                <button data-filter="{{ $slug }}" class="filter-btn {{ $slug === 'todos' ? 'is-active' : '' }}">{{ $rotulo }}</button>
            @endforeach
        </div>

        {{-- Grade de fotos (placeholders — substituir pelas fotos oficiais) --}}
        <div class="mt-14 grid grid-cols-2 gap-4 md:grid-cols-3 md:gap-6">
            @foreach ([
                ['img' => 'https://images.unsplash.com/photo-1519741497674-611481863552?w=1200&q=80', 'cat' => 'casamentos', 'legenda' => 'Casamento clássico — cerimônia'],
                ['img' => 'https://images.unsplash.com/photo-1507504031003-b417219a0fde?w=1200&q=80', 'cat' => 'corporativo', 'legenda' => 'Convenção corporativa'],
                ['img' => 'https://images.unsplash.com/photo-1519225421980-715cb0215aed?w=1200&q=80', 'cat' => 'casamentos', 'legenda' => 'Recepção — mesa dos convidados'],
                ['img' => 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=1200&q=80', 'cat' => 'institucional', 'legenda' => 'Congresso institucional'],
                ['img' => 'https://images.unsplash.com/photo-1552832230-c0197dd311b5?w=1200&q=80', 'cat' => 'internacional', 'legenda' => 'Fórum internacional — Roma'],
                ['img' => 'https://images.unsplash.com/photo-1465495976277-4387d4b0b4c6?w=1200&q=80', 'cat' => 'casamentos', 'legenda' => 'Saída dos noivos — sparklers'],
                ['img' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?w=1200&q=80', 'cat' => 'corporativo', 'legenda' => 'Jantar de gala corporativo'],
                ['img' => 'https://images.unsplash.com/photo-1505373877841-8d25f7d46678?w=1200&q=80', 'cat' => 'institucional', 'legenda' => 'Cerimônia oficial — palco'],
                ['img' => 'https://images.unsplash.com/photo-1469371670807-013ccf25f16a?w=1200&q=80', 'cat' => 'casamentos', 'legenda' => 'Recepção ao ar livre'],
                ['img' => 'https://images.unsplash.com/photo-1531058020387-3be344556be6?w=1200&q=80', 'cat' => 'internacional', 'legenda' => 'Evento cultural internacional'],
                ['img' => 'https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?w=1200&q=80', 'cat' => 'corporativo', 'legenda' => 'Jantar à luz de velas'],
                ['img' => 'https://images.unsplash.com/photo-1520854221256-17451cc331bf?w=1200&q=80', 'cat' => 'casamentos', 'legenda' => 'Destination wedding'],
            ] as $i => $foto)
                <figure data-category="{{ $foto['cat'] }}" class="card-photo group cursor-pointer {{ $i % 5 === 0 ? 'aspect-[3/4]' : 'aspect-square' }}"
                        data-reveal style="--reveal-delay: {{ ($i % 3) * 0.1 }}s"
                        data-lightbox-src="{{ $foto['img'] }}&auto=format&fit=crop"
                        data-lightbox-caption="{{ $foto['legenda'] }}">
                    <img src="{{ $foto['img'] }}&auto=format&fit=crop" alt="{{ $foto['legenda'] }}" class="h-full w-full object-cover" loading="lazy">
                    <figcaption class="card-photo__veil flex items-end justify-between p-6 opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                        <span class="pr-4 text-[0.62rem] uppercase tracking-[0.24em] text-ivory">{{ $foto['legenda'] }}</span>
                        <span class="flex h-9 w-9 flex-shrink-0 items-center justify-center rounded-full border border-ivory/50 text-ivory">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="h-4 w-4"><circle cx="11" cy="11" r="7"/><path d="m21 21-4.35-4.35M11 8v6M8 11h6"/></svg>
                        </span>
                    </figcaption>
                </figure>
            @endforeach
        </div>

        <p class="mt-14 text-center text-[0.62rem] uppercase tracking-[0.3em] text-stone" data-reveal>
            Imagens ilustrativas — em breve, o acervo oficial da Produtora Rogado
        </p>
    </div>
</section>

{{-- Lightbox --}}
<div class="lightbox" data-lightbox role="dialog" aria-label="Visualização de imagem">
    <button data-lightbox-close aria-label="Fechar"
            class="absolute top-6 right-6 z-10 flex h-12 w-12 items-center justify-center rounded-full border border-ivory/30 text-ivory transition-all hover:border-gold hover:bg-gold">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="h-5 w-5"><path d="M18 6 6 18M6 6l12 12"/></svg>
    </button>

    <button data-lightbox-prev aria-label="Imagem anterior"
            class="absolute top-1/2 left-4 z-10 flex h-12 w-12 -translate-y-1/2 items-center justify-center rounded-full border border-ivory/30 text-ivory transition-all hover:border-gold hover:bg-gold md:left-8">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="h-4 w-4"><path d="M19 12H5m0 0 6 6m-6-6 6-6"/></svg>
    </button>

    <figure class="flex flex-col items-center gap-5">
        <img src="" alt="Imagem ampliada do portfólio">
        <figcaption data-lightbox-caption class="text-[0.65rem] uppercase tracking-[0.3em] text-ivory/60"></figcaption>
    </figure>

    <button data-lightbox-next aria-label="Próxima imagem"
            class="absolute top-1/2 right-4 z-10 flex h-12 w-12 -translate-y-1/2 items-center justify-center rounded-full border border-ivory/30 text-ivory transition-all hover:border-gold hover:bg-gold md:right-8">
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="h-4 w-4"><path d="M5 12h14m0 0-6-6m6 6-6 6"/></svg>
    </button>
</div>

@endsection
