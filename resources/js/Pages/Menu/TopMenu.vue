<template #header>
    <!-- Page Heading -->
    <header class="bg-white shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <slot name="header">
                <ul class="top-menu">
                    <li>
                        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                            Edit Tour
                        </h2>
                    </li>
                    <li>
                        <inertia-link :href="'/tours/'+tour.id+'/schedules'" method="get">Schedule</inertia-link>
                    </li>
                </ul>
            </slot>
        </div>
    </header>

</template>

<script>
export default {
    name: "TopMenu",
    props:[
        'tour'
    ]
}
</script>

<style lang="scss" scoped>
.top-menu li {
    float: left;
    padding: 0 1vw 0 0;
}
</style>
