<template>
<div class="min-h-screen flex flex-col bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <nav class="bg-gray-800">
        <!-- Primary Navigation Menu -->
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex space-x-8">
                        <div class="flex items-center">
                            <Link href="/ ">
                                <ApplicationLogo class="block h-9 w-auto" />
                            </Link>
                        </div>
                        <!-- Navigation Links -->
                        <div class="flex space-x-8">
                            <NavLink href="/map" >
                                Map
                            </NavLink>
                            <NavLink href="/weather" >
                                Weather
                            </NavLink>
                            <NavLink href="/blog">
                                Blog
                            </NavLink>
                            <NavLink href="/Ralfapi">
                                Ralf API
                            </NavLink>
                            <NavLink href="/AndraApi">
                                Andra API
                            </NavLink>
                            <a href="https://epood.ta20pajuniit.itmajakas.ee/" class="inline-flex items-center">
                               <div class="bg-red-600 text-white hover:bg-red-700 px-4 py-2 rounded-md">E-pood</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <main class="bg-gray-800 font-sans antialiased flex flex-col flex-1">
        <slot></slot>
    </main>
</div>
</template>

<script setup>
import { inject, ref } from 'vue';
import { Link } from '@inertiajs/inertia-vue3';

const route = inject('route')
</script>