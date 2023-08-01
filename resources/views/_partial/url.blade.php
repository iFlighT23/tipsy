
<div data-aos="zoom-in-left" class="group w-full bg-cover bg-center h-[350px] hover:saturate-200 " style="background-image: url('{{$theme->url}}')">
    <a href="{{ route('cocktails', ['filterTheme' => $theme->id]) }}" class="transition-all duration-200 text-8xl text-white flex items-center justify-center h-full group-hover:text-black group-hover:backdrop-blur-sm group-hover:bg-white/10 font-poppins font-bold italic ">{{ $theme->name }}</a>
</div>

