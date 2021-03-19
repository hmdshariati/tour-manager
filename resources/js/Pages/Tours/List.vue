<template>
    <app-layout>
        <template>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div
                    v-if="tours"
                    v-for="tour in tours.data" >

                    <ul class="inline-grid grid-cols-7 gap-x-1" >
                        <li>
                            <inertia-link :href="route('tours.edit',tour.id)">
                                {{ tour.title }}
                            </inertia-link>
                        </li>
                        <li>{{ tour.code }}</li>
                        <li>{{ tour.start }}</li>
                        <li>{{ tour.end }}</li>
                        <li>{{ tour.relation }}</li>
                        <li>{{ tour.regional }}</li>
                        <li>{{ tour.code }}</li>
                    </ul>

                </div>
                <links
                    :urlsArray="paginatedLinks"
                    :previousPageUrl="tours.prev_page_url"
                    :nextPageUrl="tours.next_page_url"
                >
                </links>
            </div>
        </template>
    </app-layout>
</template>

<script>

import AppLayout from "../../Layouts/AppLayout";
import JetSectionBorder from "../../Jetstream/SectionBorder";
import Links from '../shared/Links';

export default {
    name: "List.vue",
    props: [
        'tours',
        'paginatedLinks'
    ],
    data() {

        return {}
    },
    components: {
        AppLayout,
        JetSectionBorder,
        Links
    },

}
</script>

<style scoped>

</style>
