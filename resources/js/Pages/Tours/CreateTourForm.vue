<template>
    <jet-form-section @submitted="createTour">
        <template #title>
            Tour Details
        </template>

        <template #description>
            Create a new Tour.
        </template>

        <template #form>
            <div class="col-span-6">
                <jet-label value="Tour title"/>

                <div class="flex items-center mt-2">

                    <div class="ml-4 leading-tight">
                        <jet-input id="title" type="text" class="mt-1 block w-full" v-model="form.title" autofocus/>
                        <jet-input-error :message="form.error('title')" class="mt-2"/>
                    </div>
                </div>
            </div>

            <div class="col-span-6 sm:col-span-4">
                <jet-label value="Tour type"/>

                <div class="flex items-center mt-2">

                    <jet-input id="type" type="text" class="mt-1 block w-full" v-model="form.type" autofocus/>
                    <jet-input-error :message="form.error('type')" class="mt-2"/>
                </div>
            </div>

            <div class="col-span-6 sm:col-span-4">
                <jet-label value="Tour code"/>

                <div class="flex items-center mt-2">

                    <jet-input id="code" type="text" class="mt-1 block w-full" v-model="form.code" autofocus required/>
                    <jet-input-error :message="form.error('code')" class="mt-2"/>
                </div>
            </div>

            <div class="col-span-6 sm:col-span-4">
                <jet-label value="Tour relation"/>

                <div class="flex items-center mt-2">

                    <jet-input id="relation" type="text" class="mt-1 block w-full" v-model="form.relation" autofocus required/>
                    <jet-input-error :message="form.error('relation')" class="mt-2"/>
                </div>
            </div>

            <div class="col-span-6 sm:col-span-4">
                <jet-label value="Tour regional"/>

                <div class="flex items-center mt-2">

                    <jet-input id="regional" type="text" class="mt-1 block w-full" v-model="form.regional" autofocus required/>
                    <jet-input-error :message="form.error('regional')" class="mt-2"/>
                </div>
            </div>

            <div class="col-span-6 sm:col-span-4">
                <jet-label value="Tour start"/>

                <div class="flex items-center mt-2">

                    <jet-input id="start" type="text" class="mt-1 block w-full" v-model="form.start" autofocus required/>
                    <jet-input-error :message="form.error('start')" class="mt-2"/>
                </div>
            </div>

            <div class="col-span-6 sm:col-span-4">
                <jet-label value="Tour end"/>

                <div class="flex items-center mt-2">

                    <jet-input id="end" type="text" class="mt-1 block w-full" v-model="form.end" autofocus required/>
                    <jet-input-error :message="form.error('end')" class="mt-2"/>
                </div>
            </div>

        </template>

        <template #actions>
            <jet-action-message :on="form.recentlySuccessful" class="mr-3">
                Saved.
            </jet-action-message>

            <jet-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Save
            </jet-button>
        </template>
    </jet-form-section>
</template>

<script>
import JetActionMessage from './../../Jetstream/ActionMessage'
import JetButton from './../../Jetstream/Button'
import JetFormSection from './../../Jetstream/FormSection'
import JetInput from './../../Jetstream/Input'
import JetInputError from './../../Jetstream/InputError'
import JetLabel from './../../Jetstream/Label'

export default {
    components: {
        JetActionMessage,
        JetButton,
        JetFormSection,
        JetInput,
        JetInputError,
        JetLabel,
    },

    data() {
        return {
            form: this.$inertia.form({
                title: '',
                type: '',
                code: '',
                regional: '',
                start: '',
                end: '',
                relation: '',
                services: '',
                driver: '',
                notes: '',
            }, {
                bag: 'createTour',
                resetOnSuccess: false,
            })
        }
    },

    methods: {
        createTour() {
            this.form.post(route('tours.store'), {
                preserveScroll: true
            });
        },
    },
}
</script>
