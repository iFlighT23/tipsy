<div class="py-12 flex flex-row justify-around">
    <div
        class="flex flex-col  items-stretch w-64  -rotate-6 bg-sable_fonce rounded hover:shadow hover:rotate-6 hover:drop-shadow-xl relative max-w-xs overflow-hidden bg-cover hover:border-solid hover:border-y- hover:border-t-whithe">
        <div>
            <h3 class="text-center font-pacifico m-3">{{ $recipe->name }}</h3>
        </div>
        <div class="h-56 bg-cover bg-no-repeat hover:bg-center hover:scale-110 overflow-hidden max-w-xs transition duration-300 ease-in-out"
            style="background-image: url('{{ $recipe->url }}')">
        </div>

        <div class="flex m-3 justify-center">
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
