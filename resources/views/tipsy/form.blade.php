<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-application-logo />
        </x-slot>


        {{-- <x-validation-errors class="mb-4" /> --}}
        <form method="post" action="{{ route('tipsy.form') }}">
            @csrf

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full shadow-md" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="Message" value="{{ __('Message') }}" />
                <textarea id="message" class="block mt-1 w-full border border-grey-200 shadow-md" type="text" name="message"></textarea>
            </div>


            <div class="flex items-center gap-8 justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Annuler') }}
                </a>

                <button class="ml-4 rounded-xl bg-bleu_clair hover:bg-bleu_fonce p-2">
                    {{ __('Envoyer') }}
                </button>
            </div>
        </form>
    </x-authentication-card>
    @include('_partial.footer')
</x-guest-layout>

