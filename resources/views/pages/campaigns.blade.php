<div class="pt-20 space-y-20  px-4">
    <div class="flex flex-col-reverse text-center mt-8 max-w-screen-xl mx-auto">
        <div>
            <h1 class="text-3xl font-bold text-primary-600 dark:text-primary-200">
                {{ __("Nos campagnes") }}
            </h1>
            <p class="max-w-screen-sm mx-auto text-center font-medium text-gray-700 dark:text-gray-300">
                {{ __("Nous mettons en places des campagnes d'influence") }}
            </p>
        </div>
    </div>
    <div class="max-w-screen-md bg-red-500 mx-auto rounded-xl h-80"></div>
    <div class="max-w-screen-lg mx-auto">
        <div class="w-full flex justify-evenly items-center mt-4 flex-wrap lg:flex-nowrap">
            <img src="https://i0.wp.com/le-katalog.com/wp-content/uploads/2020/09/ref6.png?w=891"
                class="h-14 w-auto mt-4 lg:mt-2" alt="" /><img
                src="https://i0.wp.com/le-katalog.com/wp-content/uploads/2020/09/ref3.png?w=891"
                class="h-14 w-auto mt-2 lg:mt-0" alt="" /><img
                src="https://i0.wp.com/le-katalog.com/wp-content/uploads/2020/09/ref2.png?w=891"
                class="h-14 w-auto mt-2 lg:mt-0" alt="" /><img
                src="https://i0.wp.com/le-katalog.com/wp-content/uploads/2020/09/ref4.png?w=891"
                class="h-12 w-auto mt-2 lg:mt-0" alt="" />
        </div>
    </div>
    <div class="">
        <section class="text-gray-600 dark:text-gray-300 body-font">

            @for ($i = 0; $i < 6; $i++) <div>
                @if ($i +1 != 6 /2 )
                <div class="max-w-screen-xl mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
                    <div
                        class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
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
                    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
                        <img class="object-cover object-center rounded" alt="hero"
                            src="https://dummyimage.com/720x600" />
                    </div>
                </div>
                @else
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
                @endif


    </div>

    @endfor
    </section>
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
