<template>
    <AppLayout Title="Task Management">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Add Waterbody
            </h2>
        </template>
        <div class="flex px-10 m-10"></div>
        <div class="md:grid md:grid-cols-4">
        <FormSection>
            <template #title></template>

            <template #form>
                <div class="col-span-6 sm:col-span-4 gap-8 columns-2">
                <InputLabel for="name" value="Name of Waterbody:" />
                <TextInput
                    id="name"
                    v-model="form.name"
                    type="text"
                    class="mt-1 block w-full"
                    required/>

                <InputLabel for="no_station" value="No of Stations:" />
                <TextInput
                    id="no_station"
                    v-model="form.no_station"
                    type="text"
                    class="mt-1 block w-full"
                    required/>
                </div>

                <div class="col-span-6 sm:col-span-4 gap-8 columns-2">
                <InputLabel for="location" value="Location:" />
                <TextInput
                    id="location"
                    v-model="form.location"
                    type="text"
                    class="mt-1 block w-full"
                    required/>
                
                <InputLabel for="city" value="City/Municipality:" />
                <TextInput
                    id="city"
                    v-model="form.city"
                    type="text"
                    class="mt-1 block w-full"
                    required/>
                </div>

                <div class="col-span-6 sm:col-span-4 gap-8 columns-2">
                <InputLabel for="province" value="Province:" />
                <TextInput
                    id="province"
                    v-model="form.province"
                    type="text"
                    class="mt-1 block w-full"/>

                <InputLabel for="region" value="Region:" />
                <TextInput
                    id="region"
                    v-model="form.region"
                    type="text"
                    class="mt-1 block w-full"/>
                </div>
                
                <div class="col-span-6 sm:col-span-4 gap-8 columns-2">
                <InputLabel for="program" value="Program:" />
                <TextInput
                    id="program"
                    v-model="form.program"
                    type="text"
                    class="mt-1 block w-full"/>
                    
                <InputLabel for="classification" value="Classification:" />
                <select name ="classification" class="mt-1 block w-full">
                    <option selected>Select Classification of Waterbody</option>
                    <option value="AA">AA</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="SA">SA</option>
                    <option value="SB">SB</option>
                    <option value="SC">SC</option>
                    <option value="SD">SD</option>
                </select>
                </div>
                
                <div class="col-span-6 sm:col-span-4 gap-8 columns-2">
                <InputLabel for="class_reference" value="Reference:" />
                <TextInput
                    id="class_reference"
                    v-model="form.class_reference"
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="date_classification" value="Reference Date:" />
                <input
                    id="date_classification"
                    v-model="form.date_classification"
                    type="date"
                    class="mt-1 block w-full"/>
                </div>
               
                <div class="col-span-6 sm:col-span-4  gap-8 columns-2">
                <InputLabel for="background" value="Background:" />
                <TextInput
                    id="background"
                    v-model="form.background"
                    type="text"
                    class="mt-1 block w-full"/>
                    
                <InputLabel for="status" value="Status:" />
                <select name ="status" @change="onChange($event)" class="mt-1 block w-full">
                    <option selected>Pick Status of Waterbody</option>
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
                </div>
            </template>
            <template #actions>
                <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing"  @click='saveWB'>
                    Save
                </PrimaryButton>
            </template>
        </FormSection>
    </div>
    </AppLayout>
</template>

<script>

import AppLayout from"@/Layouts/AppLayout.vue";
import { Link } from '@inertiajs/vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import FormSection from '@/Components/FormSection.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';

export default{
    components:{
        AppLayout,
        Link,
        PrimaryButton,
        SecondaryButton,
        FormSection,
        InputLabel,
        TextInput
    },

    data: function(){ //ibutang ang mga variables
    return{
        form: this.$inertia.form({
            name: null,
            no_station: null,
            location: null,
            city: null,
            province: null,
            region: null,
            program: null,
            classification: null,
            date_classification: null,
            class_reference: null,
            background: null,
            status: null
        }),
    };
},

methods:{
    saveWB(){
        this.$inertia.post(route('admin.store'), this.form,{
            onSuccess:() => {
            this.form.reset();
            }
        });
        }
    }
}
</script>