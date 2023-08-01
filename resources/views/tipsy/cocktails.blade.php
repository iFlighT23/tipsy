<div>

    <div class="">
        <fieldset wire:model="filterTheme" class="space-y-6">
            <div class="flex   ">
                @foreach ($currentThemes as $theme)
                <input type="radio" id="{{ $theme->id }}" value="{{ $theme->id }}" {{ $this->filterTheme == $theme->id ? 'checked' : '' }} class="absolute h-0 w-0 appearance-none ">
                <label for="{{ $theme->id }}" class="relative flex flex-col bg-{{ $theme->color }}-600 p-2 rounded-lg shadow-xl bg-red-200 cursor-pointer m-4">{{ $theme->name }} </label>
                @endforeach
            </div>
        </fieldset>
    </div>

    <div class="px-10" style="background-image: url('assets/bgsable2.jpg')">
        <div class="flex flex-wrap justify-center py-8" style="background-image: url('assets/bgsable2.jpg')">
            @foreach ($recipes as $recipe)
            <div @if ($loop->last) id="last_record" @endif
                class="mx-8 w-64 my-8 bg-sable_fonce rounded-lg text-center flex-col drop-shadow-3xl">
                <div class="flex-col w-64 rounded">
                    <div class="h-10">
                        <h3 class="text-center capitalize font-pacifico text-lg m-3">{{ $recipe->name }}</h3>
                    </div>
                    <div class=" overflow-hidden cursor-pointer">
                        <button wire:click.prefetch='show({{ $recipe }})'><img class="object-cover h-72 w-64 transition-all duration-500 ease-in-out hover:scale-110" src="{{ url('assets/cocktails.jpg') }}" alt="cocktail">
                        </button>
                    </div>
                    <div class="flex m-3">
                        <div class="flex">
                            <img src="assets/lemon1.svg" alt="Lemon">
                            <img src="assets/lemon1.svg" alt="Lemon">
                            <img src="assets/lemon1.svg" alt="Lemon">
                            <img src="assets/lemon1.svg" alt="Lemon">
                            <img src="assets/lemon1.svg" alt="Lemon">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="w-full flex py-8 justify-center" style="background-image: url('assets/bgsable2.jpg')">
        @if ($perPage <= $totalRecords) <button wire:click='loadMore' class="rounded-md border border-gray-600 text-sm text-gray-600 py-2 px-6 hover:bg-bleu_fonce hover:text-black cursor-pointer transition-all duration-200">
            Load More
            </button>
            @else
            <p>No more Recipe</p>
            @endif
    </div>


    <script>
        const lastRecord = document.querySelector('#last_record');
        const options = {
            root: null
            , threshold: 1
            , rootMargin: '0px'
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


    @if ($isOpen)
    <div class="fixed inset-0 flex items-center border backdrop-blur-sm justify-center drop-shadow-3xl ease-in duration-200 ">
        <div class="relative overflow-x-auto mt-8 mx-auto w-2/5 h-3/5 px-8 bg-sable_clair drop-shadow-3xl rounded-lg">
            <div class="flex justify-end mt-2">
                <button wire:click='closeModal'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 15 15">
                        <path fill="currentColor" fill-rule="evenodd" d="M11.782 4.032a.575.575 0 1 0-.813-.814L7.5 6.687L4.032 3.218a.575.575 0 0 0-.814.814L6.687 7.5l-3.469 3.468a.575.575 0 0 0 .814.814L7.5 8.313l3.469 3.469a.575.575 0 0 0 .813-.814L8.313 7.5l3.469-3.468Z" clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            <div class="flex">
                <div class="m-5 w-64 bg-sable_fonce rounded-lg text-center flex-col drop-shadow-3xl">
                    <div class="h-10">
                        <input class="text-center bg-sable_fonce font-pacifico text-lg my-3" wire:model='name'>
                    </div>
                    <div class="py-4 overflow-hidden">
                        <img class="object-cover h-72 w-64" src="{{ url('assets/cocktail2.jpg') }}" alt="cocktail">
                    </div>
                    <div class="flex mx-3">
                        <div class="flex">
                            <img src="assets/lemon1.svg" alt="Lemon">
                            <img src="assets/lemon1.svg" alt="Lemon">
                            <img src="assets/lemon1.svg" alt="Lemon">
                            <img src="assets/lemon1.svg" alt="Lemon">
                            <img src="assets/lemon1.svg" alt="Lemon">
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
                            <span>{{ $theme->name }}</span>
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
