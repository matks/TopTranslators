<script setup lang="ts">
import TranslatorsStep from './TranslatorsStep.vue'
import configuration from '@/settings';
import type { Translator, TranslatorsStepInfo } from '@/models/types'
import { computed, ref } from 'vue';

type TranslatorsStepsType = { step: TranslatorsStepInfo, translators: Translator[] }

const props = defineProps<{
  translators: Translator[]
}>()

const translatorsSteps = computed<TranslatorsStepsType[]>(() => {
  //console.log(props.translators.slice(10))
  const translators = props.translators.slice(10);
  const result: TranslatorsStepsType[] = [];
  configuration.translatorsSteps.forEach((step) => {
    const stepTranslators: Translator[] = [];
    translators.forEach((translator, idTranslator) => {
      if (translator.count > step.from && !translator.showed) {
        translator.showed = true;
        translator.id = idTranslator;
        stepTranslators.push(translator);
      }
    });
    if (stepTranslators.length > 0) {
      result.push({ step, translators: stepTranslators });
    }
  });
  return result;
});

</script>

<template>
  <div id="all-translators">
    <div class="container">
      <div class="row">
        <TranslatorsStep v-for="translatorsStep in translatorsSteps" :step="translatorsStep.step" :translators="translatorsStep.translators" />
      </div>
    </div>
  </div>
</template>
