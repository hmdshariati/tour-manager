<template>
    <app-layout>
        <top-menu :tour="tour"/>
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
import TopMenu from "../Menu/TopMenu";

export default {
    data() {
        return {

        }
    },
    props: ['tour'],

    components: {
        TourFormEdit,
        AppLayout,
        JetSectionBorder,
        TopMenu,
    }
}
</script>

