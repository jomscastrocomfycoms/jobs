<template>
    <div>
        <div class="bg-gray-200 h-1"></div>
        <div class="flex">
            <div class="flex-1" v-for="s in steps" :key="s">
                <div
                    v-if="step >= s"
                    class="bg-sky-400 -mt-1 h-1"
                    :class="{ 'w-1/2': step === s, 'w-full': step < s }"
                ></div>
                <div
                    class="-mt-3 mx-auto rounded-full h-5 w-5"
                    :class="{ 'bg-sky-400': s <= step, 'bg-gray-200': step !== s }"
                ></div>
            </div>
        </div>
    </div>
</template>

<script>

export default {
    name: "Stepper",
    props: ["steps", "step"]
}
</script>

<style scoped>

</style>
