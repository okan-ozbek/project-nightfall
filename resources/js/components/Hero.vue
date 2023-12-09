<template>
    <div class="bg-red-600 w-full h-[50vh] bgimg">
        <slot />
    </div>
</template>
<style>
.bgimg {
    background: url('https://images.unsplash.com/photo-1669733041644-34688dd0bad1?q=80&w=2671&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');
    background-size: cover;
    background-position-y: 30%;
}
</style>
