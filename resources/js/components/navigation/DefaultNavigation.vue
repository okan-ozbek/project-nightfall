<template>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <DefaultLogo name="Flowbite" />
            <NavHamburger text="Open menu" />
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <NavLink href="#" text="Our story" :active="true" />
                    <NavLink href="#" text="Expertise" />
                    <NavLink href="#" text="Testimonials" />
                    <NavLink href="#" text="Contact us" />
                </ul>
            </div>
        </div>
    </nav>
</template>
<script setup>
import NavLink from "./partials/NavLink.vue";
import NavHamburger from "./partials/NavHamburger.vue";
import DefaultLogo from "@layouts/partials/DefaultLogo.vue";
</script>
