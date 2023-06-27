<div>
    <div>
        <div class=" h-screen bg-repeat" style="background-image: url('assets/bgsable1.jpg')">
            <div class="flex">
                <div class="flex max-full flex-wrap justify-center py-8">
                    @foreach ($recipes as $recipe)
                        <div class="mx-8 w-64 h-85 my-8 bg-topaz rounded-lg text-center flex-col drop-shadow-3xl">
                            <div class=" text-lg uppercase font-extrabold h-8 px-4 w-full mt-2">
                                {{ $recipe->name }}
                            </div>

                            <div class="py-4 h-64">
                                <div class="overflow-hidden cursor-pointer">
                                    <button wire:click.prefetch ='show({{ $recipe }})'><img
                                            class="transition-all duration-500 ease-in-out hover:scale-110"
                                            src="{{ url('assets/cocktails.svg') }}" alt="cocktail"></button>
                                </div>
                            </div>

                            <div class="flex py-4 px-4 gap-8 justify-end items-baseline">
                                <img src="{{ url('assets/zest.svg') }}" alt="citron">
                                <img src="{{ url('assets/point.svg') }}" alt="share">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div id="target" class="w-full my-8 flex justify-center">
                @if ($perPage <= $totalRecords)
                    <button wire:click='loadMore'
                        class="rounded-md border border-gray-600 text-sm text-gray-600 py-2 px-6 hover:bg-sea hover:text-black cursor-pointer transition-all duration-200" >
                        Load More</button>
                @else
                    <p>No more Recipe</p>
                @endif
            </div>


            @if ($isOpen)
                <div class="fixed inset-0 flex items-center justify-center drop-shadow-3xl">
                    <div
                        class="relative overflow-x-auto mt-8 mx-auto w-1/2 h-3/5 px-8 bg-old drop-shadow-3xl rounded-lg ">
                        <div class="flex justify-end mt-2">
                            <button wire:click='closeModal'><svg xmlns="http://www.w3.org/2000/svg" width="32"
                                    height="32" viewBox="0 0 15 15">
                                    <path fill="currentColor" fill-rule="evenodd"
                                        d="M11.782 4.032a.575.575 0 1 0-.813-.814L7.5 6.687L4.032 3.218a.575.575 0 0 0-.814.814L6.687 7.5l-3.469 3.468a.575.575 0 0 0 .814.814L7.5 8.313l3.469 3.469a.575.575 0 0 0 .813-.814L8.313 7.5l3.469-3.468Z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                        <div class="flex">
                            <div class="m-5 w-64 h-4/5 bg-topaz rounded-lg text-center flex-col drop-shadow-3xl">
                                <div class="p-2 text-2xl font-bold h-8 px-4 w-full">
                                    <input
                                        class="p-2 text-2xl bg-topaz capitalize text-center font-bold h-8 px-4 w-full"
                                        wire:model='name'>
                                </div>

                                <div class="py-4 h-64">
                                    <div>
                                        <img src="{{ url('assets/cocktails.svg') }}" alt="cocktail">
                                    </div>
                                </div>

                                <div class="flex py-4 px-4 gap-8 justify-end items-baseline">
                                    <img src="{{ url('assets/zest.svg') }}" alt="citron">
                                    <img src="{{ url('assets/point.svg') }}" alt="share">
                                </div>
                            </div>

                            <div class="flex-col w-3/5 mx-6 font-poppins">
                                <div class="my-8">
                                    <h2 class="font-bold text-xl py-2">Ingrédients</h2>
                                    <div class="text-sm">
                                        <ul class="marker:text-sunset list-disc leading-6">
                                            @foreach ($steps as $step)
                                                <li>{{ $step->ingredient->name }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <h2 class="font-bold text-xl py-2">Etapes</h2>
                                    <div class="text-sm">
                                        <ul class="marker:text-sunset list-disc">
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
                                <div class="py-4">
                                    <div class="text-xs mt-2 ">
                                        @foreach ($themes as $theme)
                                            <span>{{ $theme->name }}</span>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="py-4">
                            {{ $descriptions }}
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
