<script setup lang="ts">
import StepTitle from './StepTitle.vue';
import Avatar from './Avatar.vue';
import { type Translator, type TranslatorsStepInfo } from '@/models/types'
defineProps<{
  translators: Translator[],
  step: TranslatorsStepInfo
}>()
</script>

<template>
  <div class="step" :class="step.class">
    <StepTitle :step="step" />
    <Avatar v-for="(translator, index) in translators" :key="index" :data="translator" :class="{ 'offset-md-1': index % 4 === 0 }" />
  </div>
</template>
