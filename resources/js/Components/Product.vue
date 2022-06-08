<template>
    <div class="flex justify-around items-center flex-col border rounded-lg bg-white shadow-xl m-4">
        <div class="py-4 font-bold">
            <h1>{{title}}</h1> 
        </div>
        <div class="p-4">
            <img class="w-[200px] h-[200px] object-contain" :src='"https://epood.ta19heinsoo.itmajakas.ee/" + image '>
        </div>
    </div>
</template>
<script setup>
  const props = defineProps({
  title: String,
  image: String
})
</script>