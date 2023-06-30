@props(['recipeName' => null, 'url' => null])

<div class="py-12 flex flex-row justify-around">
    <div class="flex flex-col  items-stretch w-64  -rotate-6 bg-topaz rounded hover:shadow hover:rotate-6 hover:drop-shadow-xl relative max-w-xs overflow-hidden bg-cover hover:border-solid hover:border-y- hover:border-t-whithe">
        <div>
            <h3 class="text-center font-pacifico m-3">{{ $recipeName }}</h3>
        </div>
        <div class="h-56 bg-cover bg-no-repeat hover:bg-center hover:scale-110 overflow-hidden max-w-xs transition duration-300 ease-in-out" style="background-image: url('{{ 'img/Fanpop.jpg' }}')">
        </div>

        <div class="flex m-3 justify-center">
            <div class="flex ">
                <img src="/assets/lemon.svg" alt="Lemon">
                <img src="/assets/lemon.svg" alt="Lemon">
                <img src="/assets/lemon.svg" alt="Lemon">
                <img src="/assets/lemon.svg" alt="Lemon">
                <img src="/assets/lemon.svg" alt="Lemon">
            </div>
        </div>
    </div>
</div>
