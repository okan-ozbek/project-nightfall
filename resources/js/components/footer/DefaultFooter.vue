<template>
    <div class="bg-gray-100 rounded-lg dark:bg-gray-900 m-4">
        <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <DefaultLogo name="Frostbite" />
                <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                    <FooterLink href="#"> About </FooterLink>
                    <FooterLink href="#"> Privacy Policy </FooterLink>
                    <FooterLink href="#"> Licensing </FooterLink>
                    <FooterLink href="#"> Contact </FooterLink>
                </ul>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© {{ new Date().getFullYear() }} <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.</span>
        </div>
    </div>
</template>

<script setup>
import FooterLink from "./partials/FooterLink.vue";
import DefaultLogo from "@layouts/partials/DefaultLogo.vue";
</script>

<style scoped>

</style>


