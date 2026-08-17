{{-- Hero interno: espera $titulo, $destaque, $kicker, $imagem --}}
<section class="relative flex min-h-[62vh] items-end overflow-hidden bg-ink pt-40 pb-20 text-ivory md:min-h-[70vh] md:pb-28">
    <div class="absolute inset-0" aria-hidden="true">
        <img src="{{ $imagem }}" alt="" class="kenburns h-full w-full object-cover opacity-45">
        <div class="absolute inset-0 bg-gradient-to-b from-ink/80 via-ink/30 to-ink"></div>
    </div>

    <div class="relative z-10 mx-auto w-full max-w-7xl px-6 md:px-10">
        <p class="hero-fade kicker !text-gold-light" style="--line-delay: 0.2s">{{ $kicker }}</p>
        <h1 class="mt-7 max-w-4xl font-display text-5xl leading-[1.08] font-light md:text-7xl">
            <span class="hero-line" style="--line-delay: 0.4s"><span>{{ $titulo }} <em class="text-gold-light italic">{{ $destaque }}</em></span></span>
        </h1>
        @isset($subtitulo)
            <p class="hero-fade mt-7 max-w-xl text-sm leading-relaxed font-light text-ivory/65 md:text-base" style="--line-delay: 0.7s">{{ $subtitulo }}</p>
        @endisset
    </div>
</section>
