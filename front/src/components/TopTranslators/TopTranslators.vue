<script setup lang="ts">
import TopTen from './TopTen.vue';
import AllTranslators from './AllTranslators.vue';
import SeeMore from '../SeeMore.vue';
import type { Statics } from '@/models/types';
const props = defineProps<{
  data: Statics;
}>();
</script>

<template>
  <div id="top-translators" class="row main-content">
    <TopTen :translators="data.translators" :date="data.date" />
    <SeeMore>
      <AllTranslators :translators="data.translators" />
    </SeeMore>
  </div>
</template>
