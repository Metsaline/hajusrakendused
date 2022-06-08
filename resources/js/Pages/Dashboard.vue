<template>
  <Head title="Dashboard" />

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-gray-800 border-b border-gray-600 text-white">
         <h1 class="text-xl">Olete sisse logitud</h1> 
        </div>
      </div>
    </div>
  </div>
</template>
<script>
export default { layoutName: "Authenticated" };
</script>
<script setup>
import { Head } from "@inertiajs/inertia-vue3";
</script>

