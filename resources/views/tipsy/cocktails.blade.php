<div>
    <div>
        <div class=" h-screen bg-repeat" style="background-image: url('assets/bgsable1.jpg')">
            <div class="flex">
                <div class="flex max-full flex-wrap justify-center py-8">
                    @foreach ($recipes as $recipe)
                        <div class="mx-8 w-64 h-85 my-8 bg-topaz rounded-lg text-center flex-col drop-shadow-3xl">
                            <div class="p-2 text-xl uppercase font-extrabold h-8 px-4 w-full mt-2">
                                {{ $recipe->name }}
                            </div>

                            <div class="py-4 h-64">
                                <div class="overflow-hidden cursor-pointer">
                                    <button wire:click='show({{ $recipe }})'><img
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
                                    <input class="p-2 text-2xl bg-topaz capitalize text-center font-bold h-8 px-4 w-full" wire:model='name'>
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
                                            {{-- @foreach ( as  )
                                            <li> </li>
                                            @endforeach --}}
                                        </ul>
                                    </div>
                                </div>
                                <div>
                                    <h2 class="font-bold text-xl py-2">Etapes</h2>
                                    <div class="text-sm">
                                        <ul class="marker:text-sunset list-disc">
                                            @foreach ($steps as $step )
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
                                    <label class="font-semibold" for="name">Thèmes :
                                    </label>
                                        <div class="flex items-center text-xs px-4 w-48 mt-2 ">
                                            <ul class="marker:text-red-400 list-disc">
                                                @foreach ($themes as $theme)
                                                    <li>{{$theme->name}}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <textarea class="bg-old" type="aera" rows="5" cols="100" wire:model='description'></textarea>
                        </div>
                    </div>
                </div>
            @endif
        </div>

            {{-- @if ($isOpen)
                <div class="fixed inset-0 flex items-center justify-center drop-shadow-3xl">
                    <div class="relative overflow-x-auto mt-12 max-w-2xl mx-auto px-8">
                        <div
                            class="flex flex-col text-sm  text-gray-500 uppercase bg-gray-50 rounded shadow-lg p-12 mt-12 dark:bg-gray-700 dark:text-gray-400">
                            <div class="pb-8">
                                <div class="flex justify-center text-xl font-bold h-8 px-4 w-full mt-2">
                                    <input wire:model='name' >
                                </div>
                            </div>

                            <div class="py-4">
                                <label class="font-semibold text-gray-500" for="name">Decription :</label>
                                <div class="flex items-center text-sm h-40 w-full bg-gray-50">
                                  <textarea type="aera" rows="5" cols="30" wire:model='description'></textarea>
                                </div>
                            </div>
                            <div class="py-4">
                                <label class="font-semibold text-gray-500 py-4" for="name">Etapes :</label>
                                <div class="flex items-center px-4 w-full bg-gray-50 mt-2">
                                    <ul class="marker:text-sky-400 list-disc">
                                        @foreach ($steps as $step )
                                        <li>Etape {{ $step->step_number }} -
                                            {{ $step->step_desc }}
                                            {{ $step->dose }} dose de
                                            {{ $step->ingredient->name }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                            </div>

                            <div class="py-4">
                                <label class="font-semibold text-gray-500" for="name">Thèmes :</label>
                                    <div class="flex items-center text-xs px-4 w-48 bg-gray-50 mt-2 ">
                                        <ul class="marker:text-red-400 list-disc">
                                            @foreach ($themes as $theme)
                                            <li>{{$theme->name}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                            </div>
                        </div>
                    </div>
            @endif
        </div> --}}
