@extends('layouts.app')

@section('titulo', 'Contato — Carla Rogado Produções')
@section('descricao', 'Fale com a equipe da Carla Rogado Produções e descubra como o Método Invisível pode proteger o seu próximo evento.')

@section('conteudo')

@include('partials.page-hero', [
    'kicker' => 'Contato',
    'titulo' => 'Vamos criar algo',
    'destaque' => 'inesquecível?',
    'subtitulo' => 'Conte-nos sobre o seu evento. Nossa equipe responde com a mesma agilidade e cuidado que dedicamos aos bastidores.',
    'imagem' => 'https://images.unsplash.com/photo-1464366400600-7168b8af9bc3?w=2000&q=80&auto=format&fit=crop',
])

<section class="py-20 md:py-28">
    <div class="mx-auto grid max-w-7xl gap-16 px-6 md:px-10 lg:grid-cols-12 lg:gap-20">

        {{-- Informações --}}
        <div class="lg:col-span-5">
            <span class="kicker" data-reveal>Fale conosco</span>
            <h2 class="mt-7 font-display text-4xl leading-[1.12] font-light md:text-5xl" data-reveal style="--reveal-delay: 0.1s">
                Estamos a um <em class="text-gold italic">detalhe</em> de distância.
            </h2>

            <div class="mt-12 space-y-8" data-reveal-group>
                @foreach ([
                    ['rotulo' => 'WhatsApp', 'valor' => '+55 (61) 99999-9999', 'link' => 'https://wa.me/5561999999999'],
                    ['rotulo' => 'E-mail institucional', 'valor' => 'contato@carlarogado.com.br', 'link' => 'mailto:contato@carlarogado.com.br'],
                    ['rotulo' => 'Instagram', 'valor' => '@carlarogado', 'link' => 'https://instagram.com/carlarogado'],
                    ['rotulo' => 'Base', 'valor' => 'Brasília — DF · atendimento no Brasil e no exterior', 'link' => null],
                ] as $info)
                    <div class="border-l border-gold/40 pl-6">
                        <p class="text-[0.6rem] uppercase tracking-[0.34em] text-stone">{{ $info['rotulo'] }}</p>
                        @if ($info['link'])
                            <a href="{{ $info['link'] }}" target="_blank" rel="noopener"
                               class="mt-2 inline-block font-display text-2xl font-light text-ink transition-colors hover:text-gold">{{ $info['valor'] }}</a>
                        @else
                            <p class="mt-2 font-display text-2xl font-light text-ink">{{ $info['valor'] }}</p>
                        @endif
                    </div>
                @endforeach
            </div>

            <div class="img-reveal mt-14 hidden aspect-[4/3] lg:block">
                <img src="https://images.unsplash.com/photo-1511795409834-ef04bbd61622?w=1100&q=80&auto=format&fit=crop"
                     alt="Detalhe de mesa posta" class="h-full w-full object-cover" loading="lazy">
            </div>
        </div>

        {{-- Formulário --}}
        <div class="lg:col-span-7" data-reveal style="--reveal-delay: 0.15s">
            <div class="border border-sand/80 bg-cream/40 p-8 md:p-12">

                @if (session('sucesso'))
                    <div class="mb-8 flex items-center gap-4 border border-gold/40 bg-gold/10 px-6 py-5 text-sm font-light text-ink">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" class="h-5 w-5 flex-shrink-0 text-gold"><circle cx="12" cy="12" r="9"/><path d="m8.5 12.5 2.5 2.5 5-5"/></svg>
                        {{ session('sucesso') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-8 border border-red-300 bg-red-50 px-6 py-5 text-sm font-light text-red-800">
                        <p class="mb-2 font-normal">Verifique os campos abaixo:</p>
                        <ul class="list-inside list-disc space-y-1">
                            @foreach ($errors->all() as $erro)
                                <li>{{ $erro }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('contato.enviar') }}" class="grid gap-8 sm:grid-cols-2">
                    @csrf

                    <div>
                        <label for="nome" class="text-[0.6rem] uppercase tracking-[0.3em] text-stone">Nome *</label>
                        <input type="text" id="nome" name="nome" value="{{ old('nome') }}" required class="field mt-1" placeholder="Seu nome completo">
                    </div>

                    <div>
                        <label for="email" class="text-[0.6rem] uppercase tracking-[0.3em] text-stone">E-mail *</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" required class="field mt-1" placeholder="voce@email.com">
                    </div>

                    <div>
                        <label for="telefone" class="text-[0.6rem] uppercase tracking-[0.3em] text-stone">Telefone / WhatsApp</label>
                        <input type="tel" id="telefone" name="telefone" value="{{ old('telefone') }}" class="field mt-1" placeholder="(61) 9 9999-9999">
                    </div>

                    <div>
                        <label for="tipo_evento" class="text-[0.6rem] uppercase tracking-[0.3em] text-stone">Tipo de evento *</label>
                        <select id="tipo_evento" name="tipo_evento" required class="field mt-1">
                            <option value="" disabled {{ old('tipo_evento') ? '' : 'selected' }}>Selecione</option>
                            @foreach ([
                                'Casamento', 'Destination Wedding', 'Evento corporativo', 'Congresso ou fórum',
                                'Evento institucional / governamental', 'Evento esportivo', 'Evento cultural', 'Evento internacional', 'Outro',
                            ] as $tipo)
                                <option value="{{ $tipo }}" {{ old('tipo_evento') === $tipo ? 'selected' : '' }}>{{ $tipo }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="data_evento" class="text-[0.6rem] uppercase tracking-[0.3em] text-stone">Data prevista</label>
                        <input type="text" id="data_evento" name="data_evento" value="{{ old('data_evento') }}" class="field mt-1" placeholder="Ex.: outubro de 2026">
                    </div>

                    <div class="sm:col-span-2">
                        <label for="mensagem" class="text-[0.6rem] uppercase tracking-[0.3em] text-stone">Conte-nos sobre o evento *</label>
                        <textarea id="mensagem" name="mensagem" rows="4" required class="field mt-1 resize-none" placeholder="Local, número de convidados, o que você imagina...">{{ old('mensagem') }}</textarea>
                    </div>

                    <div class="sm:col-span-2">
                        <button type="submit" class="btn btn-gold w-full sm:w-auto"><span>Enviar mensagem</span></button>
                        <p class="mt-5 text-xs font-light text-stone">Ou, se preferir agilidade: <a href="https://wa.me/5561999999999" target="_blank" rel="noopener" class="text-gold underline underline-offset-4 transition-colors hover:text-ink">fale direto no WhatsApp</a>.</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
