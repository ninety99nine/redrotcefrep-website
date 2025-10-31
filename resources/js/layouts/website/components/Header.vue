<template>
    <header class="sticky top-2 z-50 mx-2 -mb-20 rounded-xl transition-all duration-1000 border" :class="{ 'bg-white/95 shadow-md border-gray-200': scrolled, 'bg-transparent shadow-none border-transparent': !scrolled }">
        <nav class="px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-center h-16">

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-4">
                    <router-link :to="{ name: 'landing' }" :class="[scrolled ? ($route.name === 'landing' ? 'text-black hover:text-blue-600 font-bold' : 'text-gray-700 hover:text-indigo-600') : ($route.name === 'landing' ? 'text-white hover:text-indigo-200 underline font-bold' : 'text-white hover:text-indigo-200 hover:underline'), 'px-3 py-2 rounded-md text-sm cursor-pointer transition-all duration-1000']">
                        Home
                    </router-link>

                    <router-link :to="{ name: 'landing' }" :class="[scrolled ? ($route.name === 'landing' ? 'text-black hover:text-blue-600 font-bold' : 'text-gray-700 hover:text-indigo-600') : ($route.name === 'landing' ? 'text-white hover:text-indigo-200 underline font-bold' : 'text-white hover:text-indigo-200 hover:underline'), 'px-3 py-2 rounded-md text-sm cursor-pointer transition-all duration-1000']">
                        Industries
                    </router-link>
                    <router-link :to="{ name: 'landing' }" :class="[scrolled ? ($route.name === 'landing' ? 'text-black hover:text-blue-600 font-bold' : 'text-gray-700 hover:text-indigo-600') : ($route.name === 'landing' ? 'text-white hover:text-indigo-200 underline font-bold' : 'text-white hover:text-indigo-200 hover:underline'), 'px-3 py-2 rounded-md text-sm cursor-pointer transition-all duration-1000']">
                        Pricing
                    </router-link>
                    <router-link :to="{ name: 'landing' }" :class="[scrolled ? ($route.name === 'landing' ? 'text-black hover:text-blue-600 font-bold' : 'text-gray-700 hover:text-indigo-600') : ($route.name === 'landing' ? 'text-white hover:text-indigo-200 underline font-bold' : 'text-white hover:text-indigo-200 hover:underline'), 'px-3 py-2 rounded-md text-sm cursor-pointer transition-all duration-1000']">
                        Resources
                    </router-link>
                    <a href="https://perfectorder.shop" class="inline-block px-6 py-2 bg-linear-to-b from-blue-500 to-blue-600 text-white font-semibold rounded-2xl shadow-md hover:bg-indigo-700 hover:scale-110 active:scale-100 transition-all duration-500">
                        Sign In
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <div class="md:hidden flex items-center">
                    <button @click="toggleMenu" class="text-gray-700 hover:text-indigo-600 focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" v-if="!isMenuOpen"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" v-else></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Mobile Navigation Menu -->
            <div v-if="isMenuOpen" class="md:hidden">
                <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                    <router-link :to="{ name: 'landing' }" :class="[$route.name === 'landing' ? 'text-indigo-600 font-bold' : 'text-gray-700 hover:text-indigo-600', 'block px-3 py-2 rounded-md text-base font-medium']">
                        Home
                    </router-link>
                    <router-link :to="{ name: 'landing' }" :class="[$route.name === 'landing' ? 'text-indigo-600 font-bold' : 'text-gray-700 hover:text-indigo-600', 'block px-3 py-2 rounded-md text-base font-medium']">
                        Privacy Policy
                    </router-link>
                    <router-link :to="{ name: 'landing' }" :class="[$route.name === 'landing' ? 'text-indigo-600 font-bold' : 'text-gray-700 hover:text-indigo-600', 'block px-3 py-2 rounded-md text-base font-medium']">
                        Terms of Service
                    </router-link>
                    <router-link :to="{ name: 'landing' }" :class="[$route.name === 'landing' ? 'text-indigo-600 font-bold' : 'text-gray-700 hover:text-indigo-600', 'block px-3 py-2 rounded-md text-base font-medium']">
                        Data Deletion
                    </router-link>
                    <router-link :to="{ name: 'landing' }" class="block px-3 py-2 bg-indigo-600 text-white font-semibold rounded-lg hover:bg-indigo-700 transition-all text-center">
                        Sign In
                    </router-link>
                </div>
            </div>
        </nav>
    </header>
</template>

<script>
export default {
    name: 'WebsiteHeader',
    data() {
        return {
            isMenuOpen: false,
            scrolled: false,
        };
    },
    methods: {
        toggleMenu() {
            this.isMenuOpen = !this.isMenuOpen;
        },
        handleScroll() {
            // Update scrolled state based on scroll position
            this.scrolled = window.scrollY > 0;
        },
    },
    mounted() {
        // Add scroll event listener
        window.addEventListener('scroll', this.handleScroll);
    },
    beforeUnmount() {
        // Clean up scroll event listener
        window.removeEventListener('scroll', this.handleScroll);
    },
};
</script>
