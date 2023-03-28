<template>
    <AppLayout Title="Task Management">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Viewing of Result
            </h2>
        </template>
        <div class="flex px-10 m-10"></div>
        
        <FormSection>
            <template #title>
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="Waterbody:" />
                <InputLabel
                    value="Talomo River"
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="Station:" />
                <InputLabel
                    value="1"
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="Sampled on:" />
                <InputLabel
                    value="December 2, 2022"
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="Received on:" />
                <InputLabel
                    value="December 10, 2022"
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="Climate:" />
                <InputLabel
                    value="Sunny"
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="Observation:" />
                <InputLabel
                    value="The water is clear."
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>
                
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="Lab Result:" />
                <input type="file" @change="onFileChange">
                </div>
                
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="Attach photo of station:" />
                <input type="file" @change="onFileChange">
                </div>
                
                <div class="col-span-6 sm:col-span-4">
                <InputLabel for="" value="Encoded by:" />
                <InputLabel
                    value="Russell Ann Dacal"
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>
            </template>
            
            <template #form>
            <div class="col-span-6 sm:col-span-4 gap-8 columns-2">
                <InputLabel for="" value="BOD(mg/L):" />
                <InputLabel
                    value="3.45"
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Temperature(°C):" />
                <InputLabel
                    value="-"
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>

                <div class="col-span-6 sm:col-span-4 gap-8 columns-2">
                <InputLabel for="" value="Chloride(mg/L):" />
                <InputLabel
                    value="-"
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="TSS(mg/L):" />
                <InputLabel
                    value="-"
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>

                <div class="col-span-6 sm:col-span-4 gap-8 columns-2">
                <InputLabel for="" value="Color(TCU):" />
                <InputLabel
                    value="-"
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="DO(mg/L):" />
                <InputLabel
                    value="-"
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
    
                </div>

                <div class="col-span-6 sm:col-span-4 gap-8 columns-2">
                <InputLabel for="" value="Fecal Colliform(mg/L):" />
                <InputLabel
                    value="2.19"
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Nitrate(mg/L):" />
                <InputLabel
                    value="1.20"
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>

                <div class="col-span-6 sm:col-span-4 gap-8 columns-2">
                <InputLabel for="" value="pH(unitless):" />
                <InputLabel
                    value="0.29"
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                    
                <InputLabel for="" value="Phosphate(mg/L):" />
                <InputLabel
                    value="3.01"
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>

                <div class="col-span-6 sm:col-span-4 gap-8">                
                <InputLabel for="" value="Guidelines to use:" />
                <InputLabel
                    value="DAO-2021-19"
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>
            </template>
            <template #actions>
                <div class="flex space-x-8">
                <PrimaryButton>
                    Accept
                </PrimaryButton>
                <DangerButton class="">
                    Reject
                </DangerButton>
            </div>
            </template>
        </FormSection>

<!-- SHOW AND HIDE THE SECONDARY PARAMETER -->
        <div class="pt-6 mb-8">
        <SecondaryButton @click="showSecondary =! showSecondary" class="mt-1 block w-full">
            Secondary Parameter
        </SecondaryButton>
        
        <div v-show="showSecondary" class="pt-6 mb-8">
        <FormSection>
            <template #form>
            <div class="col-span-6 sm:col-span-4 gap-8 columns-4">
                <InputLabel for="" value="Ammonia(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>

                <InputLabel for="" value="Boron(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Fluoride(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>

                <InputLabel for="" value="Selenium(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>

                <div class="col-span-6 sm:col-span-4 gap-8 columns-4">
                <InputLabel for="" value="Sulfate(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Arsenic(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Barium(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Cadmium(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>

                <div class="col-span-6 sm:col-span-4 gap-8 columns-4">
                <InputLabel for="" value="CHC(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Copper(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Iron(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                    
                <InputLabel for="" value="Lead(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                    
                </div>

                <div class="col-span-6 sm:col-span-4 gap-8 columns-4">
                <InputLabel for="" value="Manganese(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Mercury(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>

                <InputLabel for="" value="Nickel(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Zinc(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>

                <div class="col-span-6 sm:col-span-4 gap-8 columns-4">
                <InputLabel for="" value="Benzo(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
            
                <InputLabel for="" value="BTEX(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Benzene(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                    
                <InputLabel for="" value="Toluene(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>

                <div class="col-span-6 sm:col-span-4 gap-8 columns-4">
                <InputLabel for="" value="Ethylbenzene(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Xylenes(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Cyanide(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Organophosphate(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>

                <div class="col-span-6 sm:col-span-4 gap-8 columns-4">
                <InputLabel for="" value="Oil and Grease(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                    
                <InputLabel for="" value="Polychlorinated Biphenyls(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Phenol & Phenolic Substance(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>

                <InputLabel for="" value="Surfactants(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>

                <div class="col-span-6 sm:col-span-4 gap-8 columns-4">
                <InputLabel for="" value="Trichloroethylene(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="TOP(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Adlrin(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                    
                <InputLabel for="" value="Chlordane(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>

                <div class="col-span-6 sm:col-span-4 gap-8 columns-4">
                <InputLabel for="" value="DDT(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Dieldrin(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Endrin(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                    
                <InputLabel for="" value="Heptachlor(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                </div>

                <div class="col-span-6 sm:col-span-4 gap-8 columns-3">
                <InputLabel for="" value="Lindane(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                
                <InputLabel for="" value="Methoxychlor(mg/L):" />
                <InputLabel
                    value=""
                    id=""
                    type="text"
                    class="mt-1 block w-full"/>
                    
                <InputLabel for="" value="Toxaphene(mg/L):" />
                <InputLabel
                    value=""
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
import DangerButton from '@/Components/DangerButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import FormSection from '@/Components/FormSection.vue';
import InputLabel from '@/Components/InputLabel.vue';
import TextInput from '@/Components/TextInput.vue';

export default{
    components:{
        AppLayout,
        PrimaryButton,
        DangerButton,
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
        createResult(){
            router.visit(route('encoders.create'), { method: 'get' })
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



