<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header Tailwind CSS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body class="bg-gray-50">
    @include('navbar') <!-- Aquí se incluye el navbar -->
    <!-- Main Header -->

    <!-- Carousel -->
    <div id="carousel" class="relative w-full bg-gray-200 h-64 md:h-96 overflow-hidden">
        <div class="flex transition-transform duration-500 ease-in-out h-full" id="carousel-inner">
            <div class="w-full flex-shrink-0 bg-gradient-to-r from-blue-500 to-purple-600 flex items-center justify-center">
                <div class="text-center text-white">
                    <h2 class="text-3xl font-bold mb-4">Slide 1</h2>
                    <p class="text-xl">Welcome to ExclusiveUnlock</p>
                </div>
            </div>
            <div class="w-full flex-shrink-0 bg-gradient-to-r from-green-500 to-teal-600 flex items-center justify-center">
                <div class="text-center text-white">
                    <h2 class="text-3xl font-bold mb-4">Slide 2</h2>
                    <p class="text-xl">Professional Services</p>
                </div>
            </div>
            <div class="w-full flex-shrink-0 bg-gradient-to-r from-red-500 to-pink-600 flex items-center justify-center">
                <div class="text-center text-white">
                    <h2 class="text-3xl font-bold mb-4">Slide 3</h2>
                    <p class="text-xl">24/7 Support</p>
                </div>
            </div>
        </div>

        <!-- Carousel indicators -->
        <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
            <button onclick="goToSlide(0)" class="w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-75 transition-all carousel-indicator active"></button>
            <button onclick="goToSlide(1)" class="w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-75 transition-all carousel-indicator"></button>
            <button onclick="goToSlide(2)" class="w-3 h-3 rounded-full bg-white bg-opacity-50 hover:bg-opacity-75 transition-all carousel-indicator"></button>
        </div>

        <!-- Carousel controls -->
        <button onclick="previousSlide()" class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-white bg-opacity-20 hover:bg-opacity-40 text-white p-2 rounded-full transition-all">
            <i class="fas fa-chevron-left"></i>
        </button>
        <button onclick="nextSlide()" class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-white bg-opacity-20 hover:bg-opacity-40 text-white p-2 rounded-full transition-all">
            <i class="fas fa-chevron-right"></i>
        </button>
    </div>
    <!-- Login Modal -->

    <div id="authentication-modal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow-lg">
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">Sign in to our platform</h3>
                    <button type="button" onclick="toggleModal('authentication-modal')" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 flex justify-center items-center">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
                <div class="p-4 md:p-5">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">{{ __('Email') }}</label>
                            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus class="block mt-1 w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('email') is-invalid @enderror">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="block text-sm font-medium text-gray-700">{{ __('Password') }}</label>
                            <input id="password" type="password" name="password" required autocomplete="current-password" class="block mt-1 w-full px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm @error('password') is-invalid @enderror">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="mb-4 flex items-center justify-between">
                            <div class="flex items-center">
                                <input class="form-checkbox h-4 w-4 text-indigo-600 border-gray-300 rounded focus:ring-indigo-500" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember" class="ml-2 block text-sm text-gray-900">
                                    {{ __('Remember me') }}
                                </label>
                            </div>

                            @if (Route::has('password.request'))
                            <a class="text-sm text-indigo-600 hover:text-indigo-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                            @endif
                        </div>

                        <div class="flex items-center justify-end">
                            <button type="submit" class="inline-block bg-indigo-500 text-white px-4 py-2 rounded-md text-sm hover:bg-indigo-600">{{ __('Login') }}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Content Cards -->
    <div class="max-w-7xl mx-auto px-4 py-12">
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
            <!-- Card 1 -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow">
                <i class="fas fa-life-ring text-4xl text-blue-600 mb-4"></i>
                <h2 class="text-xl font-semibold mb-2">24 Hours Support</h2>
                <p class="text-gray-600 text-sm">
                    Support 24 hours / 7 days-a-week. ExclusiveUnlock operates a 24 hour/7 day-a-week email & remote support
                    services that is staffed to handle any issue or question for the systems that we develop or support.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-blue-50 p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow">
                <i class="fas fa-tags text-4xl text-blue-600 mb-4"></i>
                <h2 class="text-xl font-semibold mb-2">Attractive Prices</h2>
                <p class="text-gray-600 text-sm">
                    If you find a cheaper price from our competitors but you still want to use ExclusiveUnlock services, please
                    feel free to contact us. All our advertised prices can be negotiated.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow">
                <i class="fas fa-info text-4xl text-blue-600 mb-4"></i>
                <h2 class="text-xl font-semibold mb-2">Simple Instruction</h2>
                <p class="text-gray-600 text-sm">
                    Our instructions are easy to follow and only require that you can enter the unlocking code using your keypad.
                    If you can dial a telephone number, then you can enter the code!
                </p>
            </div>

            <!-- Card 4 -->
            <div class="bg-blue-50 p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow">
                <i class="fas fa-lock text-4xl text-blue-600 mb-4"></i>
                <h2 class="text-xl font-semibold mb-2">Absolutely Safe</h2>
                <p class="text-gray-600 text-sm">
                    Completely safe, with no risk to your phone or hardware. No software downloads are required. Alongside
                    unlocking, your money is completely secure as well.
                </p>
            </div>

            <!-- Card 5 -->
            <div class="bg-white p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow">
                <i class="fas fa-dollar-sign text-4xl text-blue-600 mb-4"></i>
                <h2 class="text-xl font-semibold mb-2">Money Back Guarantee</h2>
                <p class="text-gray-600 text-sm">
                    All of the services on our website are covered by our 100% Money Back Guarantee. We provide such a guarantee
                    to give honest customers the reassurance that the unlocking service they are ordering will be delivered.
                </p>
            </div>

            <!-- Card 6 -->
            <div class="bg-blue-50 p-6 rounded-lg shadow-md text-center hover:shadow-lg transition-shadow">
                <i class="fas fa-envelope text-4xl text-blue-600 mb-4"></i>
                <h2 class="text-xl font-semibold mb-2">Expeditious Delivery</h2>
                <p class="text-gray-600 text-sm">
                    All unlock codes and confirmations are sent by email to the address provided on the order form. We ensure fast
                    delivery of codes. If delayed, we inform our clients/resellers by email.
                </p>
            </div>
        </div>
    </div>

    @include('footer') <!-- Aquí se incluye el navbar -->

    <script>
        // Mobile menu toggle
        function toggleMobileMenu() {
            const drawer = document.getElementById('drawer-navigation');
            const overlay = document.getElementById('mobile-overlay');

            if (drawer.classList.contains('-translate-x-full')) {
                drawer.classList.remove('-translate-x-full');
                overlay.classList.remove('hidden');
            } else {
                drawer.classList.add('-translate-x-full');
                overlay.classList.add('hidden');
            }
        }

        // Modal toggle
        function toggleModal(modalId) {
            const modal = document.getElementById(modalId);
            modal.classList.toggle('hidden');
        }

        // Submenu toggle
        function toggleSubmenu(submenuId) {
            const submenu = document.getElementById(submenuId);
            submenu.classList.toggle('hidden');
        }

        // Carousel functionality
        let currentSlide = 0;
        const totalSlides = 3;

        function updateCarousel() {
            const carousel = document.getElementById('carousel-inner');
            const indicators = document.querySelectorAll('.carousel-indicator');

            carousel.style.transform = `translateX(-${currentSlide * 100}%)`;

            indicators.forEach((indicator, index) => {
                if (index === currentSlide) {
                    indicator.classList.add('active', 'bg-opacity-100');
                    indicator.classList.remove('bg-opacity-50');
                } else {
                    indicator.classList.remove('active', 'bg-opacity-100');
                    indicator.classList.add('bg-opacity-50');
                }
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % totalSlides;
            updateCarousel();
        }

        function previousSlide() {
            currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
            updateCarousel();
        }

        function goToSlide(slideIndex) {
            currentSlide = slideIndex;
            updateCarousel();
        }

        // Auto-advance carousel
        setInterval(nextSlide, 5000);

        // Search functionality

        // Search functionality
        function searchItems(query) {
            const searchResults = document.getElementById('searchResults');
            if (query.length > 2) {
                // Simulate search results
                searchResults.innerHTML = `
                <li class="p-2 hover:bg-gray-100 cursor-pointer">Result 1 for "${query}"</li>
                <li class="p-2 hover:bg-gray-100 cursor-pointer">Result 2 for "${query}"</li>
                <li class="p-2 hover:bg-gray-100 cursor-pointer">Result 3 for "${query}"</li>
                `;
            } else {
                searchResults.innerHTML = '';
            }
        }

        document.getElementById('searchInput')?.addEventListener('keyup', function(e) {
            searchItems(e.target.value);
        });

        // Currency change function
        function setCurrencyTo(currencyId) {
            console.log('Currency changed to:', currencyId);
            // Implement currency change logic here
        }
    </script>

    </body">
    </html">
