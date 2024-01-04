<div class="my-12 flex flex-row justify-around">

    <div
        class="group transition cursor-pointer duration-300 ease-in-out flex flex-col items-stretch w-64  bg-sable_fonce rounded hover:shadow hover:rotate-6 hover:drop-shadow-xl relative max-w-xs overflow-hidden hover:bg-gradient-to-thover: from-rose-500 hover: via-red-500 hover: to-red-100">
        <div>
            <div>
                <h3 class="text-center font-pacifico m-3">{{ $recipe->name }}</h3>
            </div>
            <div class="overflow-hidden relative">
                <button wire:click.prefetch='show({{ $recipe }})'>
                    <img class=" bg-cover h-full bg-no-repeat bg-center group-hover:scale-125  max-w-xs transition duration-300 ease-in-out"
                        src="{{ $recipe->url }}">
                </button>
            </div>
        </div>
        <div class="flex m-3 justify-between">
            <div class="flex">
                <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">
                <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">
                <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">
                <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">
                <img src="img/lemon.svg" alt="Lemon" class="lemon opacity-30">
            </div>

            <button
                class="shareButton h-10 w-14  bg-white bg-opacity-50 backdrop-blur-lg drop-shadow-lg  overflow-hidden z-0 relative before:[''] before:absolute before:top-16 before:left-0 before:w-full before:h-full shadow-inner before:bg-cyan-600 before:opacity-30 rounded-b-lg before:rounded-r before:transition-all before:duration-500 hover:before:top-0 hover:before:rounded-none">
                <span class="relative z-10 hover:text-black ">Share</span>
            </button>

            <div class="socials hidden  w-9/12">
                <div class="flex gap-3  left-3  mt-72 z-10 ml-3">
                    <div
                        class="h-8 w-8  bg-white bg-opacity-50 backdrop-blur-lg drop-shadow-lg  overflow-hidden z-0 relative before:[''] before:absolute before:top-16 before:left-0 before:w-full before:h-full shadow-inner before:bg-yellow-400 before:opacity-30 rounded-b-lg before:rounded-r before:transition-all before:duration-500 hover:before:top-0 hover:before:rounded-none">
                        <span class="relative z-20 hover:text-black "><a href="https://www.tiktok.com">
                                <img src="img/Tiktok.svg" alt="Partager sur Tiktok">
                            </a></span>
                    </div>
                    <div
                        class="h-8 w-8  bg-white bg-opacity-50 backdrop-blur-lg drop-shadow-lg  overflow-hidden z-0 relative before:[''] before:absolute before:top-16 before:left-0 before:w-full before:h-full shadow-inner before:bg-orange-500 before:opacity-30 rounded-b-lg before:rounded-r before:transition-all before:duration-500 hover:before:top-0 hover:before:rounded-none">
                        <span class="relative z-20 hover:text-black "><a href="https://www.instagram.com">
                                <img src="img/Instagram.svg" alt="Partager sur Instagram">
                            </a></span>
                    </div>
                    <div
                        class="h-8 w-8   bg-white bg-opacity-50 backdrop-blur-lg drop-shadow-lg  overflow-hidden z-0 relative before:[''] before:absolute before:top-16 before:left-0 before:w-full before:h-full shadow-inner before:bg-emerald-600 before:opacity-30 rounded-b-lg before:rounded-r before:transition-all before:duration-500 hover:before:top-0 hover:before:rounded-none">
                        <span class="relative z-20 hover:text-black "><a href="https://accounts.snapchat.com">
                                <img src="img/snap.svg" alt="Partager sur Snapchat">
                            </a></span>
                    </div>
                    <div
                        class="h-8 w-8   bg-white bg-opacity-50 backdrop-blur-lg drop-shadow-lg  overflow-hidden z-0 relative before:[''] before:absolute before:top-16 before:left-0 before:w-full before:h-full shadow-inner before:bg-rose-600 before:opacity-30 rounded-b-lg before:rounded-r before:transition-all before:duration-500 hover:before:top-0 hover:before:rounded-none">
                        <span class="relative z-20 hover:text-black "><a href="https://twitter.com">
                                <img src="img/Twitter.svg" alt="Partager sur Twitter">
                            </a></span>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
