<template>
    <AppLayout Title="Task Management">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Add Waterbody
            </h2>
        </template>
        <div class="flex px-10 m-10"></div>
        
        <FormSection>
            <template #title>
                
            </template>
            
            <template #form>
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="Name of Station:" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="Station Identification:" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="Geo Coordinates (latitude):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="Geo Coordinates (longitude):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="Status:" />
                <select name ="waterbody" @change="onChange($event)" class="mt-1 block w-full">
                    <option value="">---Status of Waterbody---</option>
                    <option value="">Active</option>
                    <option value="">Inactive</option>
                </select>
                </div>
            </template>
            <template #actions>
                <PrimaryButton>
                    Add Station
                </PrimaryButton>
            </template>
        </FormSection>
    </AppLayout>
</template>

<script>

import AppLayout from"@/Layouts/AppLayout.vue";
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import FormSection from '@/Components/FormSection.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';

export default{
    components:{
        AppLayout,
        PrimaryButton,
        SecondaryButton,
        FormSection,
        InputLabel,
        TextInput
    },
    
    methods:{
        editResult(){
            router.visit(route('encoders.edit'), { method: 'get' })
        }
    }

}
</script>