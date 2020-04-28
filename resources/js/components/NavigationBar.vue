<template>
    <div class="bg-gray-900">
        <div class="sm:flex sm:items-center sm:justify-between sm:py-4 sm:px-4">
            <div class="flex items-center justify-between py-4 px-4 sm:p-0">
                <div>
                    <slot name="logo"></slot>
                </div>
                <div class="sm:hidden">
                    <button @click="isOpen = !isOpen" type="button"
                            class="text-gray-500 focus:text-white hover:text-white">
                        <svg v-if="isOpen" class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                  d="M13.41,12l6.3-6.29a1,1,0,1,0-1.42-1.42L12,10.59,5.71,4.29A1,1,0,0,0,4.29,5.71L10.59,12l-6.3,6.29a1,1,0,0,0,0,1.42,1,1,0,0,0,1.42,0L12,13.41l6.29,6.3a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42Z"/>
                        </svg>
                        <svg v-if="!isOpen" class="h-6 w-6 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <path
                                d="M3,8H21a1,1,0,0,0,0-2H3A1,1,0,0,0,3,8Zm18,8H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Zm0-5H3a1,1,0,0,0,0,2H21a1,1,0,0,0,0-2Z"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div :class="isOpen ? 'block' : 'hidden'" class="px-4 pt-2 pb-4 sm:flex sm:p-0">
                <slot name="menuitems"></slot>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'NavigationBar',
        data() {
            return {
                isOpen: false,
            }
        },
    }
</script>

<style scoped>

</style>
