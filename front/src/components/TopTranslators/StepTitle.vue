<script setup lang="ts">
import type { TranslatorsStepInfo } from '@/models/types';

defineProps<{
  step: TranslatorsStepInfo;
}>();
</script>
<template>
  <div class="col-md-10 title" :class="step.class">{{ step.title }}</div>
</template>
