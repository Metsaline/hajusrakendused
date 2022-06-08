<template>
  <div class="flex justify-center items-center font-semibold gap-2" v-if="data">
      <img :src="weatherIcon" alt="" />

      <p><span class="font-normal text-white">{{ data.name }}</span></p>
      <p><span class="font-normal text-white">Temperatuur: {{data.main.temp}}℃</span>{</p>
      <p><span class="font-normal text-white">feels like: {{data.main.feels_like}}℃</span>{</p>
      <p><span class="font-normal text-white">Kirjeldus: {{data.weather[0].description}}</span>{</p>
  </div>
</template> 

<script setup>
import { computed } from "@vue/runtime-core";

const props = defineProps({
  data: Object,
  default: null,
});

const weatherIcon = computed(
  () => `https://openweathermap.org/img/w/${props.data?.weather[0].icon}.png`
);
</script>
