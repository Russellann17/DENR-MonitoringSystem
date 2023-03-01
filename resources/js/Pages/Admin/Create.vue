<template>
    <AppLayout Title="Welcome Encoder!">
        <template #header>
        <PrimaryButton class="float-right" @click="createResult">
                Waterbody
            </PrimaryButton>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome Admin!
            </h2>
        </template>
        
        <!-- Code For Table -->
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-center">
                            <tr class="bg-sky-700 ">
                                <th scope="col" class="text-sm font-bold text-white px-6 py-2">ID</th>
                                <th scope="col" class="text-sm font-bold text-white px-6 py-2">Waterbody</th>
                                <th scope="col" class="text-sm font-bold text-white px-6 py-2">Municipaltiy/City</th>
                                <th scope="col" class="text-sm font-bold text-white px-6 py-2">Province</th>
                                <th scope="col" class="text-sm font-bold text-white px-6 py-2">Congressional District</th>
                                <th scope="col" class="text-sm font-bold text-white px-6 py-2">Year Classified</th>
                                <th scope="col" class="text-sm font-bold text-white px-6 py-2">Reference</th>
                                <th scope="col" class="text-sm font-bold text-white px-6 py-2">Actions</th>
                             </tr>
                             <tbody>
                                <tr class="border-b odd:bg-white even:bg-slate-200 hover:bg-blue-500 hover:text-white">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">savcsd1</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">January 28, 2021</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Talomo River</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">1</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Russell Ann Dacal</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Pending</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                <div class="flex gap-2 justify-center px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                <SecondaryButton @click="">
                                    Edit
                                </SecondaryButton>
                                <SecondaryButton @click="">
                                    View
                                </SecondaryButton>
                            </div>
                        </td>
                    </tr>
                </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
            
    </AppLayout>
</template>


<script>

import AppLayout from"@/Layouts/AppLayout.vue";
import PrimaryButton from '@/Components/PrimaryButton.vue';
import SecondaryButton from '@/Components/SecondaryButton.vue';
import DangerButton from '@/Components/DangerButton.vue';
import { router } from '@inertiajs/vue3'

export default{

    components:{
        AppLayout,
        PrimaryButton,
        SecondaryButton,
        DangerButton
    },

    methods:{
        createResult(){
            router.visit(route('encoders.create'), { method: 'get' })
        }
    }
}
</script>
