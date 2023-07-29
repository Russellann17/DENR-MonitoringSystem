<script setup>
</script>

<template>
        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-3">
            <div class="p-6 bg-sky-200">
                <div class="flex items-center">
                    <div class="ml-4 text-xl font-bold">
                        <div>Highest</div>
                    </div>
                </div>
                <div>
                    <div class="mt-7 text-lg text-gray text-center font-semibold">
                       Station 1a
                    </div>
                        <div class="mt-5 text-base font-semibold text-green-700">
                            <div class="text-center">3.5mg/L</div>
                        </div>
                </div>
            </div>

            <div class="p-6 bg-sky-300">
                <div class="flex items-center">
                    <div class="ml-4 text-xl font-bold">
                        <div>Lowest</div>
                    </div>
                </div>
                <div>
                    <div class="mt-7 text-lg text-gray text-center font-semibold">
                        Station 5
                    </div>
                        <div class="mt-5 text-base font-semibold text-red-700">
                            <div class="text-center">1.05</div>
                        </div>
                </div>
            </div>

            <div class="p-6 bg-sky-400">
                <div class="flex items-center">
                    <div class="ml-4 text-xl font-bold">
                        <div>Date Gathered</div>
                    </div>
                </div>

                <div class="ml-12">
                    <div class="mt-7 text-lg text-gray text-center font-semibold">
                        July 23, 2022
                    </div>
                </div>
            </div>
        </div>
        <iframe src="https://my.atlistmaps.com/map/ab1a2d2d-5858-43e7-b30b-01ce681c9c27?share=true" allow="geolocation 'self' https://my.atlistmaps.com" width="50%" height="400px" frameborder="0" scrolling="no" allowfullscreen></iframe>
</template>
