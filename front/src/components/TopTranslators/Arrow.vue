<script setup lang="ts">
defineProps<{
  counts: string[];
}>();
</script>

<template>
  <div id="arrow">
    <svg class="mask" viewBox="0 0 10 5" preserveAspectRatio="none">
      <g stroke="none" fill="#fff">
        <polygon points="-1 -1 -1 5 5 0 11 5 11 -1" />
      </g>
    </svg>
    <div class="words-count text-xs-center">
      <div class="dot" />
      <div v-for="(value, i) in counts" :key="i">
        <div class="count">{{ value }}</div>
        <div class="words">words</div>
        <div class="dot" />
      </div>
    </div>
  </div>
</template>
