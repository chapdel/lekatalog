<footer class="bg-gray-800 dark:bg-brand-black-300" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="grid grid-cols-2 gap-8 xl:col-span-2">
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                            Solutions
                        </h3>
                        <ul role="list" class="mt-4 space-y-4">
                            <li>
                                <a href="#" class="text-base text-gray-300 hover:text-white">
                                    Marketing
                                </a>
                            </li>

                            <li>
                                <a href="#" class="text-base text-gray-300 hover:text-white">
                                    Analytics
                                </a>
                            </li>

                            <li>
                                <a href="#" class="text-base text-gray-300 hover:text-white">
                                    Commerce
                                </a>
                            </li>

                            <li>
                                <a href="#" class="text-base text-gray-300 hover:text-white">
                                    Insights
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-12 md:mt-0">
                        <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                            Support
                        </h3>
                        <ul role="list" class="mt-4 space-y-4">
                            <li>
                                <a href="#" class="text-base text-gray-300 hover:text-white">
                                    Pricing
                                </a>
                            </li>

                            <li>
                                <a href="#" class="text-base text-gray-300 hover:text-white">
                                    Documentation
                                </a>
                            </li>

                            <li>
                                <a href="#" class="text-base text-gray-300 hover:text-white">
                                    Guides
                                </a>
                            </li>

                            <li>
                                <a href="#" class="text-base text-gray-300 hover:text-white">
                                    API Status
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                            Company
                        </h3>
                        <ul role="list" class="mt-4 space-y-4">
                            <li>
                                <a href="#" class="text-base text-gray-300 hover:text-white">
                                    About
                                </a>
                            </li>

                            <li>
                                <a href="#" class="text-base text-gray-300 hover:text-white">
                                    Blog
                                </a>
                            </li>

                            <li>
                                <a href="#" class="text-base text-gray-300 hover:text-white">
                                    Jobs
                                </a>
                            </li>

                            <li>
                                <a href="#" class="text-base text-gray-300 hover:text-white">
                                    Press
                                </a>
                            </li>

                            <li>
                                <a href="#" class="text-base text-gray-300 hover:text-white">
                                    Partners
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-12 md:mt-0">
                        <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                            Legal
                        </h3>
                        <ul role="list" class="mt-4 space-y-4">
                            <li>
                                <a href="#" class="text-base text-gray-300 hover:text-white">
                                    Claim
                                </a>
                            </li>

                            <li>
                                <a href="#" class="text-base text-gray-300 hover:text-white">
                                    Privacy
                                </a>
                            </li>

                            <li>
                                <a href="#" class="text-base text-gray-300 hover:text-white">
                                    Terms
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="mt-8 xl:mt-0">
                <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">
                    {{ __("S'abonner à notre newsletter") }}
                </h3>
                <p class="mt-4 text-base text-gray-300">
                    {{
                    __(
                    "Les dernières nouvelles, les articles et les ressources les plus récents, envoyés dans votre boîte
                    de réception chaque semaine."
                    )
                    }}
                </p>
                <form class="mt-4 sm:flex sm:max-w-md" wire:submit.prevent="subscribe">
                    <label for="email-address" class="sr-only">{{
                        __("Adresse Email")
                        }}</label>
                    <input type="email" name="email-address" id="email-address" autocomplete="email"
                        wire:model.lazy="email"
                        class="appearance-none min-w-0 w-full bg-white border border-transparent rounded-md py-2 px-4 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white focus:border-white focus:placeholder-gray-400"
                        placeholder="{{__('Votre adresse Email')}}" />
                    <div class="mt-3 rounded-md sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                        <button type="submit"
                            class="w-full bg-primary-500 border border-transparent rounded-md py-2 px-4 flex items-center justify-center text-base font-medium text-white hover:bg-primary-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-primary-500">
                            {{ __("Souscrire") }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="mt-8 border-t border-gray-700 pt-8 md:flex md:items-center md:justify-between">
            {{--
            <x-happytodev-filament-social-networks name="presence" /> --}}
            <p class="mt-8 text-base text-gray-200 md:mt-0 md:order-1">
                &copy; {{ now()->format('Y') }} Le Katalog. @lang("Propulsé par :powered", ['powered' => "<span><a
                        href='https://westsi2corp.com' target='_blank'
                        class='text-primary-600 font-semibold dark:text-secondary-600'>Westsi2 Corp</a></span>" ])
            </p>
        </div>
    </div>
</footer>
