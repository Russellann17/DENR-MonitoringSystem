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
                <InputLabel for="" value="Name of Waterbody:" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="No of Stations:" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="Location:" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="City:" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="Province:" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="Reg:" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="Program:" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="Classification:" />
                <select name ="waterbody" @change="onChange($event)" class="mt-1 block w-full">
                    <option value="">---Select Classification of Waterbody---</option>
                    <option value="">AA</option>
                    <option value="">A</option>
                    <option value="">B</option>
                    <option value="">C</option>
                    <option value="">D</option>
                    <option value="">SA</option>
                    <option value="">SB</option>
                    <option value="">SC</option>
                    <option value="">SD</option>
                </select>
                </div>
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="Remarks:" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="Reference:" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="Reference Date:" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="Background:" />
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
                    Save
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