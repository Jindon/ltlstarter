<template>
    <div class="relative">
<!--        <a href="javascript:0;" class="text-gray-400 hover:text-white">{{menuText}}</a>-->
<!--        <slot name="text" @mouseenter="isOpen = true" @mouseleave="isOpen = false"></slot>-->
<!--        <div @click="isOpen = !isOpen" class="relative z-10">-->
<!--            <slot name="text"></slot>-->
<!--        </div>-->
        <div @mouseenter="isOpen = true" class="relative z-10">
            <slot name="text"></slot>
        </div>
        <button v-if="isOpen" @mouseenter="isOpen = false" tabindex="-1" class="fixed inset-0 h-full w-full cursor-default"></button>
        <slot name="dropdown" v-if="isOpen"></slot>
    </div>
</template>

<script>
    export default {
        name: 'DropdownMenu',
        data() {
            return {
                isOpen: false
            }
        }
    }
</script>

<style scoped>

</style>
