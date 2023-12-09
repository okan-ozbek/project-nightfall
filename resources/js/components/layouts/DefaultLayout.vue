<template>
    <div class="flex flex-col h-screen relative">
        <DefaultHead />
        <header>
            <DefaultNavigation />
        </header>
        <main>
            <slot />
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
