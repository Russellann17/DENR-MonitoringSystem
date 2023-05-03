<template>
    <AppLayout Title="Welcome Encoder!">
        <template #header>
            
        <PrimaryButton class="float-right" @click="createResult">
                Add User
            </PrimaryButton>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome Admin!
            </h2>
        </template>
        <!-- Code For Table -->
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-4 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflojjjw-hidden">
                        <table class="min-w-full text-center">
                            <tr class="bg-sky-700 ">
                                <th scope="col" class="text-sm font-bold text-white px-6 py-2">Reference No.</th>
                                <th scope="col" class="text-sm font-bold text-white px-6 py-2">Username</th>
                                <th scope="col" class="text-sm font-bold text-white px-6 py-2">Email</th>
                                <th scope="col" class="text-sm font-bold text-white px-6 py-2">User Type</th>
                                <th scope="col" class="text-sm font-bold text-white px-6 py-2">Status</th>
                                <th scope="col" class="text-sm font-bold text-white px-6 py-2">Actions</th>
                             </tr>
                             <tbody>
                                <tr class="border-b odd:bg-white even:bg-slate-200 hover:bg-blue-200 hover:text-white">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">26480</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Kenneth Mac</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">kenmac@gmail.com</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Encoder</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Active</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                <div class="flex gap-2 justify-center px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    <DangerButton @click="">
                                        Delete
                                    </DangerButton>
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
import DangerButton from '@/Components/DangerButton.vue';
import { router } from '@inertiajs/vue3'

export default{

    components:{
        AppLayout,
        PrimaryButton,
        DangerButton
    },

    methods:{
        createResult(){
            router.visit(route('encoders.create'), { method: 'get' })
        },
        editResult(){
            router.visit(route('encoders.edit'), { method: 'get' })
        }

    }
}
</script>
