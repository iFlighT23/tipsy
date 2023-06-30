{{-- <button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button> --}}

<div class="container"  class="font-source-sans-pro bg-gradient-custom overflow-hidden container flex justify-center items-center  filter-goo">
    <button {{ $attributes->merge(['type' => 'share', 'class' => 'button z-10 absolute flex justify-center items-center w-36 h-10 bg-gradient-to-r from-purple-400 via-blue-400 to-teal-400 rounded-full text-white text-lg tracking-wider font-light']) }}>Share

    {{ $slot }}


    <div class="social twitter" class="social twitter opacity-0 relative m-2 w-10 h-10 rounded-full inline-block text-white text-lg text-center">
        <i class="mt-2.5"></i>
        <a href="#" class="text-white"></a>
    </div><a href="https://twitter.com/sa_sha26" target="_blank"><i class="fa fa-twitter"></i></a></div>
    <div class="social facebook"><i class="fa fa-facebook"></i></div>
    <div class=" social google"><i class="fa fa-google-plus"></i></div>
    <div class="social youtube"><a href="https://www.youtube.com/channel/UCCATAa8MWoBuH-sR_Jlx29A" target="_blank"><i class="fa fa-youtube"></i></a></div>
  </div>

  <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
    <defs>
      <filter id="goo">
        <feGaussianBlur in="SourceGraphic" stdDeviation="8" result="blur" />
        <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
        <feBlend in="SourceGraphic" in2="goo" />
        </filter>
    </defs>
  </svg>

</button>
