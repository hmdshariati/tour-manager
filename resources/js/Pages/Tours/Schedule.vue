<template>
    <app-layout>

        <template>
            <slot>
                <h1>{{schedule.start}} - {{schedule.end}}</h1>
            </slot>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <div
                    v-if="scheduleDetails"
                    v-for="scheduleDetail in scheduleDetails.data" >

                    <ul class="inline-grid grid-cols-7 gap-x-1" >
                        <li>
                            <h1>{{scheduleDetail.id}}</h1>
                            <h2>{{scheduleDetail.date}}</h2>
                            <h2>{{scheduleDetail.note}}</h2>
                        </li>
                    </ul>

                </div>
                <links
                    :urlsArray="paginatedLinks"
                    :previousPageUrl="scheduleDetails.prev_page_url"
                    :nextPageUrl="scheduleDetails.next_page_url"
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
        'schedule',
        'scheduleDetails',
        'paginatedLinks'
    ],
    data() {
        return {

        }
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
