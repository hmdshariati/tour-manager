<template>
    <app-layout>

        <template>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div
                    v-if="schedules"
                    v-for="schedule in schedules.data" >

                    <ul class="inline-grid grid-cols-7 gap-x-1" >
                        <li>
                            <h1>{{schedule.id}}</h1>
                            <h2>{{schedule.start}}</h2>
                            <h2>{{schedule.end}}</h2>
                        </li>
                    </ul>

                </div>
                <links
                    :urlsArray="paginatedLinks"
                    :previousPageUrl="schedules.prev_page_url"
                    :nextPageUrl="schedules.next_page_url"
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
        'schedules',
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
