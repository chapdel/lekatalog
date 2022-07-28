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
                <div class="bg-red-500 absolute h-72 w-64 origin-bottom-right rounded-lg rotate-36 shadow"></div>
                <div class="bg-indigo-500 absolute h-72 w-64 origin-bottom-right rounded-lg rotate-24 shadow"></div>
                <div class="bg-purple-500 absolute h-72 w-64 origin-bottom-right rounded-lg rotate-12 shadow"></div>
                <div class="bg-teal-500 absolute h-72 w-64 rounded-lg shadow"></div>
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
<div class="h-[32rem] w-full bg-primary-500 py-10">
    <div class="max-w-screen-xl mx-auto grid grid-cols-12 gap-10">
        <div class="h-[24rem] w-10/12 mx-auto bg-secondary-500 col-span-8 rounded-xl">
            <video id="my-video" class="video-js h-full w-full rounded vjs-theme-forest" controls preload="auto"
                poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg" data-setup="{}">
                <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4" type="video/mp4" />
                <source src="MY_VIDEO.webm" type="video/webm" />
                <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a
                    web browser that
                    <a href="https://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                </p>
            </video>
        </div>
        <div class="col-span-4 flex items-center text-3xl">
            Lorem, ipsum dolor sit ameEt autem natus aliquam officia quos?
        </div>
    </div>
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
