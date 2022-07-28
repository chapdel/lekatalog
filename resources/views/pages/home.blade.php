<div>
    <div class="max-w-screen-xl mx-auto pt-20 grid lg:grid-cols-2">
        <div class="space-y-4 h-80 flex flex-col justify-center">
            <h1 class="text-4xl font-semibold dark:text-gray-200">
                {{ __("C'est quoi le Katalog?") }}
            </h1>
            <p class="dark:text-gray-300">
                {{
                __(
                "LE KATALOG est une base de données d’influenceuses et influenceurs Camerounais et internationaux,
                idéaux pour tous types de campagnes de communication online et Offline. Ce sont des voix qui portent et
                des visages rayonnants qui sauront défendre la réputation des marques tout en les accompagnant dans
                l’atteinte de leurs objectifs R.O.I. De l’égérie à l’adviser retrouvez en feuilletant dans le katalog de
                quoi DONNEZ UNE VOIX ET UN VISAGE A VOTRE MARQUE."
                )
                }}
            </p>
            <div class="bg-white w-8/12 rounded-xl shadow flex space-x-4 py-1.5 px-3 items-center">
                <NuxtLink to="/campaigns"
                    class="inline-flex justify-center py-2 px-4 lg:px-8 border border-transparent shadow-sm text-sm font-medium rounded-xl text-white bg-primary-600 hover:bg-primary-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                    {{ __("Nos campagnes") }}
                </NuxtLink>
                <NuxtLink to="/catalogs" class="flex text-secondary-500 hover:text-primary-500 space-x-3 items-center">
                    <span>{{ __("Feuilleter le katalog") }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4" fill="currentColor" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                    </svg>
                </NuxtLink>
            </div>
        </div>
        <div class="pt-20 lg:ml-24">
            <div class="relative w-96 bg-blue-500">
                <div
                    class="bg-[url('http://le-katalog.com/wp-content/uploads/2021/05/kid-representation.jpg')] bg-cover bg-center absolute h-72 w-64 origin-bottom-right rounded-lg rotate-36 shadow">
                </div>
                <div
                    class="bg-[url('https://le-katalog.com/wp-content/uploads/2020/12/leader-Happy-Ndongo-1.jpg')] bg-cover bg-center bg-indigo-500 absolute h-72 w-64 origin-bottom-right rounded-lg rotate-24 shadow">
                </div>
                <div
                    class="bg-[url('http://le-katalog.com/wp-content/uploads/2021/05/all-influencer-representation.jpg')] bg-cover bg-center bg-purple-500 absolute h-72 w-64 origin-bottom-right rounded-lg rotate-12 shadow">
                </div>
                <div
                    class="bg-[url('https://le-katalog.com/wp-content/uploads/2020/12/muriel-blanche-cat.jpg')] bg-cover bg-center absolute h-72 w-64 rounded-lg shadow">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="mt-20 lg:mt-48 mb-20">
    <section class="splide" aria-label="Splide Basic HTML Example">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
                    <img src="https://kinsta.com/fr/wp-content/uploads/sites/4/2019/12/wordpress-rest-api.jpg"
                        alt="Sample 1" class="h-96 object-cover w-full rounded-2xl" />
                </li>
                <li class="splide__slide">
                    <img src="https://kinsta.com/fr/wp-content/uploads/sites/4/2019/12/wordpress-rest-api.jpg"
                        alt="Sample 1" class="h-96 object-cover w-full rounded-2xl" />
                </li>
                <li class="splide__slide">
                    <img src="https://kinsta.com/fr/wp-content/uploads/sites/4/2019/12/wordpress-rest-api.jpg"
                        alt="Sample 1" class="h-96 object-cover w-full rounded-2xl" />
                </li>
            </ul>
        </div>
    </section>
</div>
<div class="h-[32rem] w-full bg-primary-500 py-20">
    <div class="max-w-screen-xl mx-auto grid grid-cols-12 gap-10">
        <div class="h-[24rem] w-10/12 mx-auto bg-secondary-500 col-span-8 rounded-xl">
            <video id="my-video" class="video-js h-full w-full rounded vjs-theme-forest" controls preload="auto"
                poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" data-setup="{}">
                <source src="https://le-katalog.com/wp-content/uploads/2021/07/video-katalog.mp4" type="video/mp4" />
                <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a
                    web browser that
                    <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                </p>
            </video>
        </div>
        <div class="col-span-4 flex items-center text-3xl font-semibold text-gray-100 lg:text-5xl">
            @lang("Developpez votre marque grâce au marketing d'influence.")
        </div>
    </div>
</div>
<div class="max-w-screen-xl mx-auto py-[7rem]">
    <div class="flex flex-col-reverse text-center my-8">
        <div>
            <h2 class="text-4xl font-bold">
                {!! __("Ils ont feuilleté :app", ['app' => "<span class='text-primary-600 dark:text-primary-200'>Le
                    Katalog</span>"]) !!}
            </h2>
        </div>
    </div>

    <section class="text-gray-600 dark:text-gray-300 body-font">

        @for ($i = 0; $i < 3; $i++) <div>
            <div class="max-w-screen-xl mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                <div
                    class="@if($i % 2 == 1) order-2 @else order-1 lg:pr-24 md:pr-16 @endif  lg:flex-grow md:w-1/2  flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
                    <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-700 dark:text-gray-200">
                        Before they sold out 1
                        <br class="hidden lg:inline-block" />readymade gluten
                    </h1>
                    <p class="mb-8 leading-relaxed">
                        Copper mug try-hard pitchfork pour-over freegan heirloom neutra
                        air plant cold-pressed tacos poke beard tote bag. Heirloom echo
                        park mlkshk tote bag selvage hot chicken authentic tumeric
                        truffaut hexagon try-hard chambray.
                    </p>
                    <a href=""
                        class="flex space-x-3 items-center text-primary-500 font-semibold dark:text-secondary-500">
                        <span>En savoir plus</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="w-5" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z" />
                        </svg>
                    </a>
                </div>
                <div
                    class="@if($i % 2 == 1) order-1 order-1 lg:pr-24 md:pr-16 @else order-2 @endif lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                    <img class="object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600" />
                </div>
            </div>



</div>

@endfor

</section>
{{-- <section class="space-y-3">
    <h2 class="text-4xl font-bold">
        {{__("Types d'influenceurs")}}
    </h2>
    <div class="grid grid-cols-5">
        <div class="bg-purple-500 px-2 py-1 text-gray-100 rounded-l">
            dd
        </div>
    </div>
</section> --}}
</div>
<script>
    document.addEventListener( 'DOMContentLoaded', function() {
      var splide = new Splide( '.splide' , {
        rewind: true,
        type: 'loop',
        padding: '5rem',
        lazyLoad: 'nearby',
        gap: '2rem',
        arrows: false,
      });
      splide.mount();
    } );

    // plyr

</script>
