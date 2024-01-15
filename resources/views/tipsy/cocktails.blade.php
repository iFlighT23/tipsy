<div>

    <div style="background-image: url('assets/bgsable2.jpg')">
        <div class="px-4 py-8">
            <fieldset wire:model="filterTheme" class="space-y-6">
                <div class="flex flex-wrap justify-between gap-4">
                    <a href="{{ route('cocktails') }}"
                        class="relative flex flex-col hover:rotate-1 transition-all text-center font-pacifico text-xl  hover:saturate-200 p-2 rounded-lg shadow-xl cursor-pointer {{ $this->filterTheme == null ? ' rotate-1 ring-offset-4 ring-2 ring-bleu_clair ring-offset-transparent' : 'bg-bleu_clair' }}">Tous</a>
                    @foreach ($currentThemes as $theme)
                        @php
                            $minus = Arr::random(['-', '']);
                            $angle = Arr::random(['2', '3', '6']);
                        @endphp
                        <input type="radio" id="{{ $theme->id }}" value="{{ $theme->id }}"
                            {{ $this->filterTheme == $theme->id ? 'checked' : '' }}
                            class="absolute h-0 w-0 appearance-none ">
                        <label for="{{ $theme->id }}"
                            class="relative flex flex-col hover:rotate-1 transition-all text-center py-2 px-4 font-pacifico text-xl  hover:saturate-200  rounded-lg shadow-xl cursor-pointer {{ $this->filterTheme == $theme->id ? ' rotate-1 ring-offset-4 ring-2 ring-bleu_clair ring-offset-transparent' : $minus . 'rotate-' . $angle . ' bg-' . $theme->color . '-300' }}">{{ $theme->name }}
                        </label>
                    @endforeach
                </div>
            </fieldset>
        </div>
        <div class="flex flex-wrap justify-around p-8">
            @foreach ($recipes as $recipe)
                <div
                    class="group transition m-8 cursor-pointer duration-300 ease-in-out flex flex-col items-stretch w-64  bg-sable_fonce rounded hover:shadow hover:drop-shadow-xl relative max-w-xs overflow-hidden hover:bg-gradient-to-thover: from-rose-500 hover: via-red-500 hover: to-red-100 hover:ring-offset-1 hover:ring-4 hover:ring-bleu_clair">
                    <div>
                        <h3 class="text-center text-xl font-pacifico m-3">{{ $recipe->name }}</h3>
                    </div>
                    <div class="h-56 overflow-hidden">
                        <button wire:click.prefetch='show({{ $recipe }})'><img
                                class="h-56 bg-cover bg-no-repeat bg-center hover:scale-125 overflow-hidden max-w-xs transition duration-300 ease-in-out"
                                src="{{ $recipe->url }}">
                        </button>
                        {{-- wire:click: composant de liewire qui active au click la function show --}}
                    </div>
                    <div class="flex m-3 justify-between">
                        <div class="flex">

                            <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">
                            <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">
                            <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">
                            <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">
                            <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">

                        </div>
                        <div class="flex items-center">
                            <button
                                class="h-10 w-14  bg-white bg-opacity-50 backdrop-blur-lg drop-shadow-lg  overflow-hidden z-0 relative before:[''] before:absolute before:top-16 before:left-0 before:w-full before:h-full shadow-inner before:bg-cyan-600 before:opacity-30 rounded-b-lg before:rounded-r before:transition-all before:duration-500 hover:before:top-0 hover:before:rounded-none"><span
                                    class="relative z-10 hover:text-black ">Share</span>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="w-full flex py-8 justify-center" style="background-image: url('assets/bgsable2.jpg')">
        @if ($perPage <= $totalRecords)
            <button wire:click='loadMore'
                class="rounded-md border border-gray-600 text-sm text-gray-600 py-2 px-6 hover:bg-bleu_fonce hover:text-black cursor-pointer transition-all duration-200">
                Load More
            </button>
        @else
            <p>No more Recipe</p>
        @endif
    </div>

    {{-- JS pour le scroll --}}
    <script>
        const lastRecord = document.querySelector('#last_record');
        const options = {
            root: null,
            threshold: 1,
            rootMargin: '0px'
        }
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    @this.loadMore()
                }
            });
        });
        observer.observe(lastRecord);
    </script>


    {{-- Modal --}}
    @if ($isOpen)
        <div
            class="fixed inset-0 flex items-center border backdrop-blur-sm justify-center drop-shadow-3xl ease-in duration-200 ">
            <div
                class="relative overflow-x-auto mt-8 mx-auto w-2/5 h-3/5 px-8 bg-sable_clair drop-shadow-3xl rounded-lg">
                <div class="flex justify-end mt-2">
                    <button wire:click='closeModal'>
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 15 15">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M11.782 4.032a.575.575 0 1 0-.813-.814L7.5 6.687L4.032 3.218a.575.575 0 0 0-.814.814L6.687 7.5l-3.469 3.468a.575.575 0 0 0 .814.814L7.5 8.313l3.469 3.469a.575.575 0 0 0 .813-.814L8.313 7.5l3.469-3.468Z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
                <div class="flex">
                    <div class="m-5 w-64 bg-sable_fonce rounded-lg text-center flex-col drop-shadow-3xl">
                        <input class="text-center bg-sable_fonce text-lg font-pacifico my-3" wire:model='name'>

                        <div class="h-56 overflow-hidden">
                            <img class="h-56 bg-cover bg-no-repeat bg-center hover:scale-125 overflow-hidden max-w-xs transition duration-300 ease-in-out"
                                src="{{ $recipe->url }}">
                        </div>
                        <div class="flex m-3 justify-between">
                            <div class="flex">

                                <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">
                                <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">
                                <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">
                                <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">
                                <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">

                            </div>
                            <div class="flex items-center">
                                <button
                                    class="h-10 w-14  bg-white bg-opacity-50 backdrop-blur-lg drop-shadow-lg  overflow-hidden z-0 relative before:[''] before:absolute before:top-16 before:left-0 before:w-full before:h-full shadow-inner before:bg-cyan-600 before:opacity-30 rounded-b-lg before:rounded-r before:transition-all before:duration-500 hover:before:top-0 hover:before:rounded-none"><span
                                        class="relative z-10 hover:text-black ">Share</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex-col mx-10 font-poppins">
                        <div class="my-8">
                            <h2 class="font-bold text-xl py-2">Ingrédients</h2>
                            <div class="text-sm">
                                <ul class="marker:text-rouge list-disc leading-6">
                                    @foreach ($steps as $step)
                                        <li>{{ $step->ingredient->name }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div>
                            <h2 class="font-bold text-xl py-2">Etapes</h2>
                            <div class="text-sm">
                                <ul class="marker:text-rouge list-disc">
                                    @foreach ($steps as $step)
                                        <li>Etape
                                            {{ $step->step_number }} -
                                            {{ $step->step_desc }}
                                            {{ $step->dose }} dose de
                                            {{ $step->ingredient->name }}
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="text-xs mt-2 ">
                                @foreach ($themes as $theme)
                                    <span class="bg-{{$theme->color}}-300">{{ $theme->name }}</span>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-5">
                    {{ $descriptions }}
                </div>
            </div>
        </div>
    @endif
</div>
@include('_partial.footer')
