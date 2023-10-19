<script setup lang="ts">
import type { Language } from '@/models/types';
defineProps<{
  data: Language[];
}>();
</script>

<template>
  <div class="row">
    <div
      v-for="(language, index) in data"
      :key="index"
      class="text-md-center col-md-2 full-flag"
      :class="{ 'offset-md-1': index % 4 === 0 }"
    >
      <img :src="`./assets/img/flags/${language.flag}.png`" class="flag" />
      <div class="name">{{ language.country }}</div>
      <div class="progress">
        <div class="value" />
      </div>
      <div class="percent">{{ language.percent }}%</div>
    </div>
  </div>
</template>
