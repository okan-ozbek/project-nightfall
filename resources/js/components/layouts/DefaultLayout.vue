<template>
    <div class="flex flex-col h-screen justify-between relative">
        <DefaultHead />
        <header>
            <DefaultNavigation />
        </header>
        <main class="py-8 mx-[20%]">
            <div class="px-4">
                <slot />
            </div>
        </main>
        <footer>
            <DefaultFooter />
        </footer>
    </div>
</template>
<script setup>
import DefaultHead from "./partials/DefaultHead.vue";
import DefaultNavigation from "@navigation/DefaultNavigation.vue";
import DefaultFooter from "@footer/DefaultFooter.vue";
</script>
