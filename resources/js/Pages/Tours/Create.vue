<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create Team
            </h2>
        </template>

        <div>
            <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                <create-tour-form />
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from './../../Layouts/AppLayout'
import CreateTourForm from './CreateTourForm'
import JetSectionBorder from './../../Jetstream/SectionBorder'

export default {
    props: ['tour'],

    components: {
        AppLayout,
        CreateTourForm,
        JetSectionBorder,
    },
}
</script>
