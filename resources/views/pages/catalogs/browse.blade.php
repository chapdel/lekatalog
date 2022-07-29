<div class="min-h-[100vh] relative z-10 max-w-screen-xl mx-auto px-4">
    <div class="relative z-10">
        <div>
            <div class="fading bg-[color:var(--background-color)] transition-colors duration-1000 ease-in-out">
                <div class="container pt-[104px] lg:pt-[160px]">
                    <h1 class="h1 font-semibold text-primary-500 pb-14 uppercase" style="">
                        <div class="overflow-hidden" style="display: block; text-align: start; position: relative;">
                            <div class="lineChild"
                                style="display: block; text-align: start; position: relative; transform: translate(0px, 0px);">
                                @lang("Notre catalogue") </div>
                        </div>
                    </h1>
                    <div class="grid grid-cols-12 gap-[40px]">
                        <div class="col-span-12 col-start-2 lg:col-start-1 lg:col-span-4 mb-[60px] text-lg">
                            <p class="sm-paragraph max-w-[315px] mb-[25px]">Lorem ipsum dolor sit amet consectetur,
                                adipisicing elit. Eos corporis labore atque enim! Dolores autem sint, unde corrupti
                                necessitatibus voluptas doloremque beatae, aliquid, nobis ducimus fuga assumenda illo!
                                Eveniet, ex!</p>

                        </div>
                        @foreach (App\Models\Group::all() as $group)
                        <div class="col-span-4 mb-[56px]">
                            <div>
                                <div
                                    class="group cursor-pointer relative w-full rounded-[20px] overflow-hidden aspect-[343/400] [transform:translateZ(0)] lg:aspect-[434/508]">
                                    <a class="relative block h-full w-full overflow-hidden"
                                        href="{{route('catalogs.details', $group->slug)}}">
                                        <div class="absolute inset-0 w-full h-full"><span
                                                style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img
                                                    alt="Queensmith"
                                                    src="https://le-katalog.com/wp-content/uploads/2020/12/muriel-blanche-cat.jpg"
                                                    decoding="async" data-nimg="fill" class="relative z-10"
                                                    style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover;"
                                                    sizes="100vw"
                                                    srcset="https://le-katalog.com/wp-content/uploads/2020/12/muriel-blanche-cat.jpg"><noscript></noscript></span>
                                        </div>
                                        <div
                                            class="z-10 absolute w-full h-full inset-0 bg-black opacity-0 transition-opacity duration-1000 ease-in-out group-hover:opacity-40">
                                        </div>
                                    </a>
                                    <div class="absolute z-10 top-1/2 -translate-y-1/2 pointer-events-none">
                                        <div class="relative overflow-hidden">
                                            <div class="w-fit">
                                                <div class="w-max flex whitespace-nowrap animate-marquee will-change-transform"
                                                    style="animation-duration: 8000ms;">
                                                    <div class="flex items-center justify-center flex-shrink-0">
                                                        <div class="relative overflow-hidden py-[20px]">
                                                            <div
                                                                class="group-hover:translate-y-0 group-hover:opacity-100 translate-y-[100px] opacity-0 transition-all duration-1000 ease-in-out flex items-center text-dust will-change-transform text-2xl lg:text-5xl">
                                                                <span
                                                                    class="font-display inline-block leading-none font-semibold lg:font-normal text-white">@lang("Ouvrir")</span><svg
                                                                    class="-scale-0 origin-center transition-all duration-1000 ease-in-out group-hover:scale-100 delay-300 w-[20px] h-[20px] lg:w-[24px] lg:h-[24px] mx-[8px] mt-[0px]"
                                                                    width="32" height="32" viewBox="0 0 32 32"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <circle cx="16" cy="16" r="15.5" fill="#EEEAEA"
                                                                        stroke="#EEEAEA"></circle>
                                                                    <path
                                                                        d="M13.2859 10.9953L13.1869 10.9952L13.1858 11.0942L13.175 12.0603L13.1739 12.1614L13.2749 12.1614L20.0123 12.1649L9.99334 22.1838L9.92263 22.2545L9.99334 22.3253L10.6758 23.0077L10.7465 23.0784L10.8172 23.0077L20.8362 12.9886L20.8432 19.7297L20.8433 19.8311L20.9447 19.8296L21.9072 19.8152L22.0058 19.8138L22.0057 19.7152L21.9986 11.1024L21.9985 11.0025L21.8986 11.0025L13.2859 10.9953Z"
                                                                        fill="#16161D" stroke="#16161D"
                                                                        stroke-width="0.2"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="flex justify-between mt-[20px] flex-col items-start uppercase font-semibold">
                                    <a href="{{route('catalogs.details', $group->slug)}}"
                                        class="group inline-flex flex-none items-center cursor-pointer">
                                        <div
                                            class="px-[9px] pt-[4px] pb-[1px] border-[2px] uppercase font-display text-[14px] leading-none tracking-[0.04em] font-semibold rounded-[30px]">
                                            {{$group->name}}</div>
                                        <div
                                            class="ml-[4px] relative overflow-hidden rounded-full border-[2px] w-[23px] h-[23px] transition-all duration-500 ease-in-out border-primary-600 group-hover:bg-neon group-hover:border-neon">
                                            <svg class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 transition-all duration-300 ease-in-out group-hover:translate-x-[50px] group-hover:translate-y-[-50px]"
                                                width="8" height="8" viewBox="0 0 9 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.57072 0.0861157L2.52097 0.0810699L2.50943 1.11517L6.80878 1.11738L0.321655 7.6045L1.05233 8.33518L7.5397 1.84781L7.54413 6.15052L8.57577 6.13512L8.57072 0.0861157Z"
                                                    fill="#16161D" stroke-width="0.2px" stroke="#16161D"></path>
                                            </svg><svg
                                                class="absolute top-1/2 left-1/2 transition-all duration-300 ease-in-out translate-x-[-50px] translate-y-[50px] group-hover:-translate-x-1/2 group-hover:-translate-y-1/2"
                                                width="8" height="8" viewBox="0 0 9 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.57072 0.0861157L2.52097 0.0810699L2.50943 1.11517L6.80878 1.11738L0.321655 7.6045L1.05233 8.33518L7.5397 1.84781L7.54413 6.15052L8.57577 6.13512L8.57072 0.0861157Z"
                                                    fill="#16161D" stroke-width="0.2px" stroke="#16161D"></path>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <div class="col-span-4 mb-[56px]">
                            <div>
                                <div
                                    class="group cursor-pointer relative w-full rounded-[20px] overflow-hidden aspect-[343/400] [transform:translateZ(0)] lg:aspect-[434/508]">
                                    <a class="relative block h-full w-full overflow-hidden" href="/work/queensmith">
                                        <div class="absolute inset-0 w-full h-full"><span
                                                style="box-sizing: border-box; display: block; overflow: hidden; width: initial; height: initial; background: none; opacity: 1; border: 0px; margin: 0px; padding: 0px; position: absolute; inset: 0px;"><img
                                                    alt="Queensmith"
                                                    src="https://le-katalog.com/wp-content/uploads/2020/12/muriel-blanche-cat.jpg"
                                                    decoding="async" data-nimg="fill" class="relative z-10"
                                                    style="position: absolute; inset: 0px; box-sizing: border-box; padding: 0px; border: none; margin: auto; display: block; width: 0px; height: 0px; min-width: 100%; max-width: 100%; min-height: 100%; max-height: 100%; object-fit: cover;"
                                                    sizes="100vw"
                                                    srcset="https://le-katalog.com/wp-content/uploads/2020/12/muriel-blanche-cat.jpg"><noscript></noscript></span>
                                        </div>
                                        <div
                                            class="z-10 absolute w-full h-full inset-0 bg-black opacity-0 transition-opacity duration-1000 ease-in-out group-hover:opacity-40">
                                        </div>
                                    </a>
                                    <div class="absolute z-10 top-1/2 -translate-y-1/2 pointer-events-none">
                                        <div class="relative overflow-hidden">
                                            <div class="w-fit">
                                                <div class="w-max flex whitespace-nowrap animate-marquee will-change-transform"
                                                    style="animation-duration: 8000ms;">
                                                    <div class="flex items-center flex-shrink-0">
                                                        <div class="relative overflow-hidden py-[20px]">
                                                            <div
                                                                class="group-hover:translate-y-0 group-hover:opacity-100 translate-y-[100px] opacity-0 transition-all duration-1000 ease-in-out flex items-center text-dust will-change-transform text-2xl lg:text-5xl">
                                                                <span
                                                                    class="font-display inline-block leading-none font-semibold lg:font-normal text-white">@lang("Ouvrir")</span><svg
                                                                    class="-scale-0 origin-center transition-all duration-1000 ease-in-out group-hover:scale-100 delay-300 w-[20px] h-[20px] lg:w-[24px] lg:h-[24px] mx-[8px] mt-[0px]"
                                                                    width="32" height="32" viewBox="0 0 32 32"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <circle cx="16" cy="16" r="15.5" fill="#EEEAEA"
                                                                        stroke="#EEEAEA"></circle>
                                                                    <path
                                                                        d="M13.2859 10.9953L13.1869 10.9952L13.1858 11.0942L13.175 12.0603L13.1739 12.1614L13.2749 12.1614L20.0123 12.1649L9.99334 22.1838L9.92263 22.2545L9.99334 22.3253L10.6758 23.0077L10.7465 23.0784L10.8172 23.0077L20.8362 12.9886L20.8432 19.7297L20.8433 19.8311L20.9447 19.8296L21.9072 19.8152L22.0058 19.8138L22.0057 19.7152L21.9986 11.1024L21.9985 11.0025L21.8986 11.0025L13.2859 10.9953Z"
                                                                        fill="#16161D" stroke="#16161D"
                                                                        stroke-width="0.2"></path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="flex justify-between mt-[20px] flex-col items-start uppercase font-semibold">
                                    <a href="#" class="group inline-flex flex-none items-center cursor-pointer">
                                        <div
                                            class="px-[9px] pt-[4px] pb-[1px] border-[2px] uppercase font-display text-[14px] leading-none tracking-[0.04em] font-semibold rounded-[30px]">
                                            Univers d'influences</div>
                                        <div
                                            class="ml-[4px] relative overflow-hidden rounded-full border-[2px] w-[23px] h-[23px] transition-all duration-500 ease-in-out border-primary-600 group-hover:bg-neon group-hover:border-neon">
                                            <svg class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 transition-all duration-300 ease-in-out group-hover:translate-x-[50px] group-hover:translate-y-[-50px]"
                                                width="8" height="8" viewBox="0 0 9 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.57072 0.0861157L2.52097 0.0810699L2.50943 1.11517L6.80878 1.11738L0.321655 7.6045L1.05233 8.33518L7.5397 1.84781L7.54413 6.15052L8.57577 6.13512L8.57072 0.0861157Z"
                                                    fill="#16161D" stroke-width="0.2px" stroke="#16161D"></path>
                                            </svg><svg
                                                class="absolute top-1/2 left-1/2 transition-all duration-300 ease-in-out translate-x-[-50px] translate-y-[50px] group-hover:-translate-x-1/2 group-hover:-translate-y-1/2"
                                                width="8" height="8" viewBox="0 0 9 9" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M8.57072 0.0861157L2.52097 0.0810699L2.50943 1.11517L6.80878 1.11738L0.321655 7.6045L1.05233 8.33518L7.5397 1.84781L7.54413 6.15052L8.57577 6.13512L8.57072 0.0861157Z"
                                                    fill="#16161D" stroke-width="0.2px" stroke="#16161D"></path>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
