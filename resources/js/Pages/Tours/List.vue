<template>
    <app-layout>
        <template>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div v-for="tour in tours">
                    <p> {{ tour.title }}</p>
                    {{test}}
                </div>
            </div>
        </template>
    </app-layout>
</template>

<script>

import AppLayout from "../../Layouts/AppLayout";
import JetSectionBorder from "../../Jetstream/SectionBorder";

export default {
    name: "List.vue",
    props:['test'],
    data() {

        return {
            tours: [
                {
                    id: 0,
                    title: '-',
                    start: '-'
                }
            ]
        }
    },
    components: {
        AppLayout,
        JetSectionBorder,
    },

}
</script>

<style scoped>

</style>
