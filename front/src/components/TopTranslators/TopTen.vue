<script setup lang="ts">
import Avatar from './Avatar.vue';
import Arrow from './Arrow.vue';
import { computed } from 'vue';
import type { Translator } from '@/models/types';
const props = defineProps<{
  translators: Translator[];
  date: string;
}>();

const first10 = computed(() => props.translators.slice(0, 10));
const leftColumn = computed(() => first10.value.filter((_, i) => i % 2 === 0));
const rightColumn = computed(() => first10.value.filter((_, i) => i % 2 !== 0));
let allCounts = computed(() =>
  first10.value.map((translator) => translator.textCount),
);
</script>

<template>
  <div>
    <div class="col-md-10">
      <h2 class="text-center">Top translators:</h2>
      <div class="text-center date">
        Last update: <strong>{{ date }}</strong>
      </div>
    </div>
    <div class="col-xs-4">
      <Avatar
        v-for="(translator, i) in leftColumn"
        :key="`${translator.name}${translator.username}`"
        :data="translator"
      />
    </div>
    <div class="col-xs-2">
      <Arrow :counts="allCounts" />
    </div>
    <div class="col-xs-4 right-column">
      <Avatar
        v-for="(translator, i) in rightColumn"
        :key="`${translator.name}${translator.username}`"
        :data="translator"
      />
    </div>
  </div>
</template>
