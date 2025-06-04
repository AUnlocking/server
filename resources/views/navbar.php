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

    <!-- Header Top -->
    <div class="hidden lg:block bg-gray-100 border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex items-center justify-between py-2 text-sm">
                <div class="flex items-center space-x-6">
                    <div class="flex items-center text-gray-600">
                        <i class="fas fa-phone mr-2"></i>
                        <span>9999999999</span>
                    </div>
                    <div class="flex items-center text-gray-600">
                        <i class="fas fa-envelope mr-2"></i>
                        <span>contactus@yoursite.com</span>
                    </div>
                </div>

                <div class="flex items-center space-x-4">
                    <!-- Currency Dropdown -->
                    <div class="relative group">
                        <button class="flex items-center text-gray-600 hover:text-gray-800 focus:outline-none">
                            <span class="mr-1">$</span>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div class="absolute right-0 mt-2 w-20 bg-white border border-gray-200 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                            <ul class="py-2 text-sm text-gray-700">
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">$</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">€</a></li>
                                <li><a href="#" class="block px-4 py-2 hover:bg-gray-100">£</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Language Dropdown -->
                    <div class="relative group">
                        <button class="flex items-center text-gray-600 hover:text-gray-800 focus:outline-none">
                            <span class="mr-2">🇬🇧</span>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </button>
                        <div class="absolute right-0 mt-2 w-44 bg-white border border-gray-200 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50 max-h-60 overflow-y-auto">
                            <ul class="py-2 text-sm text-gray-700">
                                <li><a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100"><span class="mr-3">🇨🇳</span>Chinese</a></li>
                                <li><a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100"><span class="mr-3">🇫🇷</span>French</a></li>
                                <li><a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100"><span class="mr-3">🇩🇪</span>German</a></li>
                                <li><a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100"><span class="mr-3">🇬🇧</span>English</a></li>
                                <li><a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100"><span class="mr-3">🇪🇸</span>Spanish</a></li>
                                <li><a href="#" class="flex items-center px-4 py-2 hover:bg-gray-100"><span class="mr-3">🇮🇹</span>Italian</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <nav class="bg-white border-b border-gray-200 shadow-sm">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <!-- Logo -->
                <div class="flex items-center">
                    <a href="#" class="text-xl font-bold text-gray-800">ExclusiveUnlock</a>
                </div>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="./index" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Home</a>

                    <!-- Reseller Pricing Dropdown -->
                    <div class="relative group">
                        <button class="flex items-center text-gray-700 hover:text-blue-600 font-medium focus:outline-none transition-colors">
                            Reseller Pricing
                            <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </button>
                        <div class="absolute left-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                            <ul class="py-2 text-sm text-gray-700">
                                <li><a href="./resellerpricing/imei" class="block px-4 py-2 hover:bg-gray-100 transition-colors">IMEI Service</a></li>
                                <li><a href="./resellerpricing/server" class="block px-4 py-2 hover:bg-gray-100 transition-colors">Server Service</a></li>
                                <li><a href="./resellerpricing/remote" class="block px-4 py-2 hover:bg-gray-100 transition-colors">Remote Service</a></li>
                                <li><a href="./resellerpricing/file" class="block px-4 py-2 hover:bg-gray-100 transition-colors">File Service</a></li>
                            </ul>
                        </div>
                    </div>

                    <a href="./register" class="text-gray-700 hover:text-blue-600 font-medium transition-colors">Registration</a>

                    <!-- Login Button -->
                    <button onclick="toggleModal('authentication-modal')" class="flex items-center px-4 py-2 bg-gray-600 text-white rounded-lg hover:bg-gray-700 transition-colors">
                        <i class="fas fa-lock mr-2"></i>
                        Login
                    </button>
                </div>

                <!-- Mobile menu button -->
                <div class="lg:hidden">
                    <button type="button" onclick="toggleMobileMenu()" class="inline-flex items-center p-2 text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                        <i class="fas fa-bars text-lg"></i>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Services Bar -->
    <div class="bg-blue-600 text-white">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-12">
                <!-- Services Menu -->
                <div class="hidden lg:flex items-center space-x-6">
                    <!-- IMEI Services Dropdown -->
                    <div class="relative group">
                        <button class="flex items-center text-white hover:text-blue-200 font-medium focus:outline-none transition-colors">
                            IMEI Services
                            <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </button>
                        <div class="absolute left-0 mt-2 w-48 bg-white border border-gray-200 rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                            <ul class="py-2 text-sm text-gray-700">
                                <li><a href="./cart/group/1/service/imei/groupname/API-TEST-IMEI" class="block px-4 py-2 hover:bg-gray-100 transition-colors">API TEST IMEI</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Search -->
                <div class="relative group">
                    <button class="flex items-center text-white hover:text-blue-200 p-2 focus:outline-none transition-colors">
                        <i class="fas fa-search"></i>
                    </button>
                    <div class="absolute right-0 mt-2 w-80 bg-white rounded-lg shadow-lg opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-200 z-50">
                        <div class="p-4">
                            <input type="text" id="searchInput" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" placeholder="Search..." autocomplete="off">
                            <ul id="searchResults" class="mt-2"></ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div id="drawer-navigation" class="fixed top-0 left-0 z-40 w-64 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white border-r border-gray-200">
        <div class="flex items-center justify-between mb-4">
            <h5 class="text-base font-semibold text-gray-500 uppercase">Menu</h5>
            <button type="button" onclick="toggleMobileMenu()" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="py-4 overflow-y-auto">
            <ul class="space-y-2 font-medium">
                <li><a href="./index" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 transition-colors">Home</a></li>
                <li>
                    <button type="button" onclick="toggleSubmenu('dropdown-reseller')" class="flex items-center w-full p-2 text-gray-900 rounded-lg hover:bg-gray-100 transition-colors">
                        <span class="flex-1 text-left">Reseller Pricing</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <ul id="dropdown-reseller" class="hidden py-2 space-y-2">
                        <li><a href="./resellerpricing/imei" class="flex items-center w-full p-2 pl-11 text-gray-900 rounded-lg hover:bg-gray-100 transition-colors">IMEI Service</a></li>
                        <li><a href="./resellerpricing/server" class="flex items-center w-full p-2 pl-11 text-gray-900 rounded-lg hover:bg-gray-100 transition-colors">Server Service</a></li>
                        <li><a href="./resellerpricing/remote" class="flex items-center w-full p-2 pl-11 text-gray-900 rounded-lg hover:bg-gray-100 transition-colors">Remote Service</a></li>
                        <li><a href="./resellerpricing/file" class="flex items-center w-full p-2 pl-11 text-gray-900 rounded-lg hover:bg-gray-100 transition-colors">File Service</a></li>
                    </ul>
                </li>
                <li><a href="./register" class="flex items-center p-2 text-gray-900 rounded-lg hover:bg-gray-100 transition-colors">Registration</a></li>
                <li>
                    <button onclick="toggleModal('authentication-modal')" class="flex items-center w-full p-2 text-gray-900 rounded-lg hover:bg-gray-100 transition-colors">
                        <i class="fas fa-lock mr-2"></i>
                        Login
                    </button>
                </li>
            </ul>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-30 hidden" onclick="toggleMobileMenu()"></div>

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
                    <form class="space-y-4">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your email</label>
                            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="name@company.com" required>
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        </div>
                        <div class="flex justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300" required>
                                </div>
                                <label for="remember" class="ml-2 text-sm font-medium text-gray-900">Remember me</label>
                            </div>
                            <a href="#" class="text-sm text-blue-700 hover:underline">Lost Password?</a>
                        </div>
                        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Login to your account</button>
                        <div class="text-sm font-medium text-gray-500">
                            Not registered? <a href="#" class="text-blue-700 hover:underline">Create account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
