<script setup lang="ts">
import { computed } from 'vue';
import type { Language} from '@/models/types'

const props = defineProps<{
  data: Language
}>()
const number = computed(() => String(props.data.number).padStart(2, '0'));
</script>

<template>
  <div class="col-md-5 translation-progress">
    <div class="position">#{{ number }}</div>
    <div class="flag-line">
      <img :src="`./assets/img/flags/${data.flag}.png`" class="flag" />
      <span class="name">{{ data.country }}</span>
      <span class="percent">{{ data.percent }}%</span>
    </div>
    <div class="progress">
      <div class="value" :style="{ width: `${data.percent}%` }"></div>
    </div>
  </div>
</template>
