# Carla Rogado — Cerimonial & Produção de Eventos

Site institucional desenvolvido em **Laravel 13** + **Tailwind CSS 4** (Vite), com estética editorial de luxo inspirada em referências como Carats + Cake, Colin Cowie, Calder Clark, Boutique de 3 e Jaeder Barreto.

## Páginas

| Rota | Descrição |
| --- | --- |
| `/` | Home — hero, apresentação, números, serviços, tipos de eventos, diferenciais, portfólio, vídeo, prova social e benefícios |
| `/sobre` | Sobre — origem, quem lidera, Método Invisível, onde atuamos, públicos e missão |
| `/portfolio` | Portfólio — galeria com filtros por categoria e lightbox |
| `/contato` | Contato — informações + formulário com validação |

## Efeitos e interações

- Preloader com monograma animado
- Reveal on scroll (IntersectionObserver) com stagger automático
- Parallax sutil em imagens, efeito Ken Burns nos heros
- Contadores animados, marquees infinitos (palavras e logos)
- Carrossel horizontal com arraste (drag-scroll) e setas
- Slider de depoimentos com autoplay
- Lightbox com navegação por teclado
- Cursor personalizado (desktop), menu mobile em tela cheia
- Respeita `prefers-reduced-motion`

## Como rodar

```bash
composer install
npm install
cp .env.example .env && php artisan key:generate   # se necessário
npm run build        # ou `npm run dev` durante o desenvolvimento
php artisan serve
```

Acesse `http://127.0.0.1:8000`.

## Conteúdo a substituir (placeholders)

- **Fotos/vídeo**: imagens ilustrativas do Unsplash — trocar pelo acervo oficial (buscar por `images.unsplash.com` nas views)
- **WhatsApp**: número `5561999999999` (buscar por `wa.me`)
- **E-mail / Instagram**: `contato@carlarogado.com.br` e `@carlarogado`
- **Logos de clientes**: faixa na home (`pages/home.blade.php`, seção "Prova social")
- **Número de eventos realizados**: contador "+300" na home
- **Envio do formulário**: hoje só exibe confirmação — integrar com e-mail/CRM em `routes/web.php`
