<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit Tour
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <tour-form-edit :formdata="tour"></tour-form-edit>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from './../../Layouts/AppLayout'
import JetSectionBorder from './../../Jetstream/SectionBorder'
import TourFormEdit from "./TourFormEdit";

export default {
    props: ['tour'],

    components: {
        TourFormEdit,
        AppLayout,
        JetSectionBorder,
    }
}
</script>
