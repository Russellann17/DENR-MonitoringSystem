<template>
    <AppLayout Title="Task Management">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Add of Result
            </h2>
        </template>
        <div class="flex px-10 m-10"></div>
        <div class="md:grid md:grid-cols-3">
        <FormSection>
            <template #title>
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="Waterbody:" />
                <select name ="waterbody" @change="onChange($event)" class="mt-1 block w-full">
                <option value="">---Select Waterbody---</option>
                <option value="">Davao River</option>
                <option value="">Talomo River</option>
                <option value="">Bagangga River</option>
                </select>
                </div>
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="Station:" />
                <select name ="station" @change="onChange($event)" class="mt-1 block w-full">
                <option value="">---Select Station---</option>
                <option value="">1</option>
                <option value="">2</option>
                <option value="">3</option>
                <option value="">4</option>
                <option value="">5</option>
                <option value="">5a</option>
                </select>
                </div>
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="Sampled on:" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="Received on:" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="Climate:" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="Observation:" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>
<!-- ADD FILE BUTTON -->
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="Lab Result:" />
                <input type="file" @change="onFileChange">
                </div>

                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="Attach photo of station:" />
                <input type="file" @change="onFileChange">
                </div>
            </template>
            
            <template #form>
            <div class="col-span-6 sm:col-span-4 gap-8 columns-2">
                <InputLabel for="" value="BOD(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Temperature(°C):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>

                <div class="col-span-6 sm:col-span-4 gap-8 columns-2">
                <InputLabel for="" value="Chloride(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="TSS(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>

                <div class="col-span-6 sm:col-span-4 gap-8 columns-2">
                <InputLabel for="" value="Color(TCU):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="DO(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
    
                </div>

                <div class="col-span-6 sm:col-span-4 gap-8 columns-2">
                <InputLabel for="" value="Fecal Colliform(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Nitrate(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>

                <div class="col-span-6 sm:col-span-4 gap-8 columns-2">
                <InputLabel for="" value="pH(unitless):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                    
                <InputLabel for="" value="Phosphate(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>

                <div class="col-span-6 sm:col-span-4 gap-8">                
                <InputLabel for="" value="Guidelines to use:" />
                <select name ="station" @change="onChange($event)" class="mt-1 block w-full">
                <option value="">---Guidelines---</option>
                <option value="">DAO-2021-19</option>
                <option value="">DAO-2016-08-WQG-and-GES</option>
                </select>
                </div>
            </template>
            <template #actions>
                <PrimaryButton>
                    Save
                </PrimaryButton>
            </template>
        </FormSection>
</div>
<!-- SHOW AND HIDE THE SECONDARY PARAMETER -->
        <div class="pt-6 mb-8">
        <SecondaryButton @click="showSecondary = !showSecondary" class="mt-1 block w-full">
            Secondary Parameter
        </SecondaryButton>
        
        <div v-show="showSecondary" class="pt-6 mb-8">
        <FormSection>
            <template #form>
            <div class="col-span-6 sm:col-span-4 gap-8 columns-4">
                <InputLabel for="" value="Ammonia(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>

                <InputLabel for="" value="Boron(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Fluoride(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>

                <InputLabel for="" value="Selenium(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>

                <div class="col-span-6 sm:col-span-4 gap-8 columns-4">
                <InputLabel for="" value="Sulfate(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Arsenic(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Barium(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Cadmium(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>

                <div class="col-span-6 sm:col-span-4 gap-8 columns-4">
                <InputLabel for="" value="CHC(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Copper(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Iron(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                    
                <InputLabel for="" value="Lead(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                    
                </div>

                <div class="col-span-6 sm:col-span-4 gap-8 columns-4">
                <InputLabel for="" value="Manganese(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Mercury(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Nickel(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Zinc(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>

                <div class="col-span-6 sm:col-span-4 gap-8 columns-4">
                <InputLabel for="" value="Benzo(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
            
                <InputLabel for="" value="BTEX(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Benzene(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                    
                <InputLabel for="" value="Toluene(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>

                <div class="col-span-6 sm:col-span-4 gap-8 columns-4">
                <InputLabel for="" value="Ethylbenzene(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Xylenes(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Cyanide(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Organophosphate(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>

                <div class="col-span-6 sm:col-span-4 gap-8 columns-4">
                <InputLabel for="" value="Oil and Grease(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                    
                <InputLabel for="" value="Polychlorinated Biphenyls(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Phenol & Phenolic Substance(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                    
                <InputLabel for="" value="Surfactants(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>

                <div class="col-span-6 sm:col-span-4 gap-8 columns-4">
                <InputLabel for="" value="Trichloroethylene(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="TOP(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Adlrin(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                    
                <InputLabel for="" value="Chlordane(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>

                <div class="col-span-6 sm:col-span-4 gap-8 columns-4">
                <InputLabel for="" value="DDT(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Dieldrin(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Endrin(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                    
                <InputLabel for="" value="Heptachlor(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>

                <div class="col-span-6 sm:col-span-4 gap-8 columns-3">
                <InputLabel for="" value="Lindane(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Methoxychlor(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                    
                <InputLabel for="" value="Toxaphene(mg/L):" />
                <TextInput
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>
            </template>
            <template #actions>
                <PrimaryButton>
                    Save
                </PrimaryButton>
            </template>
        </FormSection>
    </div>
</div>

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
    
    data(){
        return{
            selectedFile: null,
            showSecondary: false
        }
    },

    methods:{
        editResult(){
            router.visit(route('encoders.edit'), { method: 'get' })
        },
        onFileChange(e) {
            var files = e.target.files || e.dataTransfer.files;
            if (!files.length)
            return;
            this.createImage(files[0]);
         },
        createImage(file) {
            var image = new Image();
            var reader = new FileReader();
            var vm = this;

            reader.onload = (e) => {
            vm.image = e.target.result;
      };
      reader.readAsDataURL(file);
    }

    }

}
</script>