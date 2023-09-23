<script setup lang="ts">
import FlagBig from './FlagBig.vue';
import { type Language } from '@/models/types';

defineProps<{
  languages: Language[];
}>();
</script>

<template>
  <div>
    <FlagBig v-for="(value, index) in languages" :key="index" :data="value" />
  </div>
</template>
