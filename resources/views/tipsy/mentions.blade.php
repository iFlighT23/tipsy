<x-guest-layout>
    <h1 class="text-center text-4xl mt-6">Mentions légales</h1>
    <div class=" flex-col  my-16  ">
        <h2 class="text-center text-2xl">Responsable du site :</h2>

        <div class="text-center text-xl mb-6 mt-4">Site crée par trois étudiants dans le cadre d'un projet de formation
        </div>

        {{-- [Adresse de l'entreprise]
[Téléphone de contact]
[Adresse e-mail de contact]

Numéro d'identification :
[Numéro d'identification de l'entreprise, le cas échéant]

Hébergement du site :
[Nom de l'hébergeur du site]
[Adresse de l'hébergeur]
[Téléphone de l'hébergeur]
[Adresse e-mail de l'hébergeur] --}}

        <h3 class="text-center text-2xl">Propriété intellectuelle :</h3>
        <div class="text-center text-xl mb-6 mt-4" Tous les contenus présents sur ce site, y compris, mais sans s'y limiter, les textes, les images, les vidéos, les logos, et les designs sont protégés par le droit d'auteur et sont la propriété de Tipsy ou de tiers ayant autorisé à les utiliser. Toute reproduction, distribution, ou utilisation non autorisée de ces contenus est strictement interdite. </div>

            <h4 class="text-center text-2xl"> Protection des données personnelles :</h4>
            <div class="text-xl mb-6 mt-4"> Les données personnelles collectées sur ce site sont traitées conformément à notre politique de confidentialité, disponible à l'adresse [lien vers votre politique de confidentialité].
            </div>

            <h5 class="text-center text-2xl">Cookies :</h5>
            <div class="text-xl mb-6 mt-4"> Ce site utilise des cookies pour améliorer l'expérience de l'utilisateur. Pour en savoir plus sur l'utilisation des cookies et comment les gérer, veuillez consulter notre politique de cookies, disponible à l'adresse [lien vers votre politique de cookies].
            </div>

            <h6 class="text-center text-2xl">Liens vers des sites tiers :</h6>
            <div class="text-xl mb-6 mt-4"> Ce site peut contenir des liens vers des sites web de tiers. Tipsy n'assume aucune responsabilité pour le contenu ou les pratiques de confidentialité de ces sites tiers. Nous vous encourageons à lire les mentions légales et les politiques de confidentialité de ces sites avant de les utiliser.
            </div>

            <h6 class="text-center text-2xl">Contact :</h6>
            <div class="text-xl mb-6 mt-4"> Pour toute question ou demande concernant ces mentions légales, veuillez nous contacter à l'adresse [adresse e-mail de contact] ou au [numéro de téléphone de contact].
            </div>

        </div>
        @include('_partial.footer')
</x-guest-layout>
