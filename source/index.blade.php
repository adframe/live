@php
    function formatNumber($number) {
        if ($number >= 1000 && $number < 1000000) {
            return number_format($number / 1000, 1) . 'K';
        } elseif ($number >= 1000000) {
            return number_format($number / 1000000, 1) . 'M';
        }
        return $number;
    }
@endphp

@extends('_layouts.main')

@section('body')
    @include('_partials.header')

    <main>
        <section id="hero" class="relative h-screen bg-cover bg-center bg-[url('/assets/images/background.gif')]">
            <div class="absolute inset-0 flex items-center justify-center text-center">
                <div class="flex flex-col gap-8">
                    <h1 class="text-white">
                        TikTok <span class="rounded-lg bg-primary px-4">LIVE</span> Creator Network
                    </h1>

                    <div class="flex flex-col items-center gap-4">
                        <a href="https://www.tiktok.com/t/ZMhNSA4nA/"
                           class="w-48 px-4 py-3 bg-transparent border-2 border-primary text-white font-medium text-center rounded-lg transition-all duration-300 hover:bg-primary hover:text-white">
                            Meld je <strong>gratis</strong> aan
                        </a>
                        <a href="#services"
                           class="w-48 px-4 py-3 bg-transparent border-2 border-primary text-white font-medium text-center rounded-lg transition-all duration-300 hover:bg-primary hover:text-white">
                            Meer info
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="carousel" class="bg-gray-50 py-24">
            <x-container>
                <div class="flex flex-col gap-8">
                    <h2>Vertrouwd door topmakers</h2>

                    <div class="splide">
                        <div class="splide__track py-1">
                            <ul class="splide__list">
                                @foreach($page['creators'] as $key => $creator)
                                    <li class="splide__slide">
                                        <x-profile :creator="$creator" :key="$key"/>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </x-container>
        </section>

        <section id="services" class="bg-primary py-24">
            <x-container>
                <div class="flex flex-col gap-8">
                    <h2 class="text-white">Hoe wij je kunnen helpen</h2>

                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
                        @foreach($page['services'] as $service)
                            <div>
                                <p class="font-bold text-white">{{ $service['name'] }}</p>
                                <p class="text-white">{{ $service['description'] }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </x-container>
        </section>

        <section id="other" class="bg-white lg:py-24">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="col-span-1">
                    <div class="bg-gray-50 sm:p-12 sm:rounded-r-lg">
                        <img src="assets/images/image-01.jpg" alt="TikTok LIVE Creator" class="w-full sm:rounded-lg">
                    </div>
                </div>

                <div class="col-span-1 flex flex-col items-center justify-center gap-4 p-12">
                    <h2>Onze creators gaan dagelijks live en verbinden zich op unieke manieren met duizenden
                        mensen.</h2>
                    <p>Onze creators gaan dagelijks live en verbinden zich op hun eigen unieke manier met duizenden
                        mensen, terwijl ze kwalitatieve content leveren.</p>
                    <p>TikTok LIVE is dé plek waar creators zichzelf kunnen laten zien, hun community kunnen opbouwen en
                        unieke ervaringen kunnen delen. Wij staan klaar om creators te helpen groeien door persoonlijke
                        begeleiding, strategieën voor het vergroten van hun bereik en ondersteuning bij het organiseren
                        van spannende battles en evenementen.</p>
                    <p>Samen zorgen we ervoor dat creators hun volledige potentieel benutten en een blijvende impact
                        maken op hun publiek. Of je nu net begint of al een ervaren streamer bent, wij helpen je om je
                        volgende stap als LIVE creator te zetten.</p>
                </div>
            </div>
        </section>

        <section id="faq" class="bg-gray-50 lg:py-24">
            <x-container>
                <div class="flex flex-col gap-8">
                    <h2>Veelgestelde vragen</h2>

                    <div x-data="{ active: 1 }">
                        <template x-for="question in [
        { id: 1, title: 'Zijn er kosten verbonden aan lidmaatschap?', answer: 'Nee, het is volledig gratis om ons agency te joinen. We worden rechtstreeks betaald door TikTok. Je zal dus evenveel verdienen dan wanneer je zonder agency werkt.' },
        { id: 2, title: 'Hoe oud moet ik zijn om de agency te joinen?', answer: 'Je moet minimum 18 jaar zijn om een agency te joinen. Als je nog geen 18 bent, gelieve dan ook niet aan te melden via onze applicatielink.' },
        { id: 3, title: 'Wat zijn de voordelen van het werken met een agency?', answer: 'Met een agency krijg je ondersteuning, strategische begeleiding, en toegang tot exclusieve kansen die niet beschikbaar zijn voor niet-geaffilieerde creators.' },
        { id: 4, title: 'Hoe lang duurt het voordat ik word goedgekeurd?', answer: 'Na het indienen van je aanvraag streven we ernaar je binnen 5 werkdagen een update te geven. Zorg ervoor dat je alle vereiste gegevens correct hebt ingevuld.' },
        { id: 5, title: 'Kan ik stoppen met de samenwerking wanneer ik wil?', answer: 'Ja, er is geen langdurige verplichting. Als je wilt stoppen, kan dit op elk moment door contact met ons op te nemen.' }
    ]" :key="question.id">
                            <div x-data="{
            id: question.id,
            get expanded() {
                return active === this.id
            },
            set expanded(value) {
                active = value ? this.id : null
            },
        }" role="region" class="block border-b border-gray-800/10 pb-4 pt-4 first:pt-0 last:border-b-0 last:pb-0">
                                <h2>
                                    <button
                                            type="button"
                                            x-on:click="expanded = !expanded"
                                            :aria-expanded="expanded"
                                            class="group flex w-full items-center justify-between text-left font-medium text-gray-800"
                                    >
                                        <span class="flex-1 text-lg" x-text="question.title"></span>

                                        <!-- Heroicons mini chevron-up -->
                                        <svg x-show="expanded" x-cloak
                                             class="size-5 shrink-0 text-gray-300 group-hover:text-gray-800"
                                             aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                             fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M9.47 6.47a.75.75 0 0 1 1.06 0l4.25 4.25a.75.75 0 1 1-1.06 1.06L10 8.06l-3.72 3.72a.75.75 0 0 1-1.06-1.06l4.25-4.25Z"
                                                  clip-rule="evenodd"></path>
                                        </svg>

                                        <!-- Heroicons mini chevron-down -->
                                        <svg x-show="!expanded"
                                             class="size-5 shrink-0 text-gray-300 group-hover:text-gray-800"
                                             aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                             fill="currentColor">
                                            <path fill-rule="evenodd"
                                                  d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                </h2>

                                <div x-show="expanded" x-collapse>
                                    <div class="pt-2 text-gray-600 max-w-xl" x-text="question.answer"></div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </x-container>
        </section>

        <section id="cta" class="bg-secondary py-24">
            <x-container>
                <div class="text-center flex flex-col gap-4">
                    <h2>Klaar om je TikTok LIVE-carrière naar een hoger niveau te tillen?</h2>
                    <p>Wil je meer weten over ons TikTok LIVE Creator Programma? Neem contact op met een van onze
                        LIVE-specialisten!</p>

                    <a href="https://www.tiktok.com/t/ZMhNSA4nA/" target="_blank"
                       class="mx-auto w-40 px-1 py-2 bg-gray-950 text-white rounded-lg hover:bg-gray-800">
                        Let's connect
                    </a>
                </div>
            </x-container>
        </section>
    </main>

    @include('_partials.footer')

    @push('scripts')
        <script>
            document.addEventListener("DOMContentLoaded", (event) => {
                new Splide('.splide', {
                    // Layout
                    perPage: 4,
                    gap: 20,

                    // Responsiveness
                    breakpoints: {
                        768: {
                            perPage: 2,
                        },
                        1024: {
                            perPage: 3,
                        },
                    },

                    // Interaction
                    drag: true,

                    // Navigation
                    arrows: false,
                    pagination: false,

                    // Auto Scroll
                    autoScroll: {
                        speed: 0.5,
                        rewind: true,
                        pauseOnHover: true,
                    },
                }).mount({AutoScroll});
            });
        </script>
    @endpush
@endsection
