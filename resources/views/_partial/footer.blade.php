<footer>

    <div class="flex justify-between items-center bg-bleu_clair h-20 font-poppins px-4 gap-36">

        <x-application-logo />
        <div class="flex text-center text-3xl mr-16 text-rouge font-pacifico">L'abus d'alcool est dangereux pour la santé</div>

        <div class="flex items-center gap-8 ">
            <div class="">
                <a href="{{ route('tipsy.form') }}" class="text-sm">Contact</a>

            </div>

            <div class="">
                <a href="{{ route('tipsy.mentions') }}" class="text-sm">mentions légales</a>

            </div>

            <div class="">
                <a href="{{ route('tipsy.cookies') }}" class="text-sm">cookies et politique de confidentialité</a>

            </div>

            <div class="">
                <a href="{{ route('tipsy.conditions') }}" class="text-sm">CGU</a>

            </div>
        </div>

    </div>
</footer>
