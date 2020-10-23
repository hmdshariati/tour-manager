<template>
    <div>
        <ul class="flex pl-0 list-none rounded my-2">
            <li
                class="relative block py-2 px-3 leading-tight bg-white border border-gray-300 text-blue-700 border-r-0 ml-0 rounded-l hover:bg-gray-200"
                v-if="previousPageUrl"
            >
                <InertiaLink
                    :href="previousPageUrl"
                    class="page-link"
                >
                    Prev
                </InertiaLink>
            </li>
            <li
                class="relative block py-2 px-3 leading-tight bg-white border border-gray-300 text-blue-700 border-r-0 hover:bg-gray-200"
                v-for="eachUrlArray in urlsArray"
                :key="eachUrlArray.indexKey"
            >
         <span v-if="eachUrlArray.type === 'URLS'">
            <InertiaLink
                :href="eachUrlArray.url"
                class="page-link"
                :class="{ 'bg-blue-500 text-blue-700': eachUrlArray.isCurrentPage === true }"
            >
               {{eachUrlArray.pageNumber}}
            </InertiaLink>
         </span>
                <span v-else-if="eachUrlArray.type === 'ELIPSIS'">
         {{eachUrlArray.url}}
         </span>
            </li>
            <li
                class="relative block py-2 px-3 leading-tight bg-white border border-gray-300 text-blue-700 rounded-r hover:bg-gray-200"
                v-if="nextPageUrl"
            >
                <InertiaLink
                    :href="nextPageUrl"
                    class="page-link"
                >
                    Next
                </InertiaLink>
            </li>
        </ul>
    </div>
</template>

<script>
export default {
    props : ['urlsArray','previousPageUrl','nextPageUrl'],
}
</script>
