<script setup lang="ts">
import TopTranslators from './TopTranslators/TopTranslators.vue';
import OnGoingTranslations from './OnGoingTranslations/OnGoingTranslations.vue';
import { ref } from 'vue';
import type { Statics, Translator, Language } from '@/models/types';

const data = ref<Statics>({ date: '', translators: [], languages: [] });

const compareCount = (a: Translator, b: Translator) => {
  if (a.count > b.count) {
    return -1;
  }
  if (a.count < b.count) {
    return 1;
  }
  return 0;
};

const comparePercent = (a: Language, b: Language) => {
  if (a.percent > b.percent) {
    return -1;
  }
  if (a.percent < b.percent) {
    return 1;
  }
  return 0;
};

function mapData(data: Statics) {
  data.translators.sort(compareCount);
  data.translators.forEach((value, index) => {
    value.number = index + 1;
    value.textCount = value.count
      .toString()
      .replace(/\B(?=(\d{3})+(?!\d))/g, ',');
  });

  data.languages.sort(comparePercent);
  let position = 1;
  data.languages.forEach((value, index) => {
    if (value.percent !== 100) {
      value.number = position++;
    }
  });

  return data;
}

fetch('statistics.json')
  .then((response) => response.json())
  .then((json) => (data.value = mapData(json)));
</script>

<template>
  <div v-if="data">
    <TopTranslators :data="data" />
    <div class="row join-our-community">
      <div class="col-md-6">
        <div class="black-title">Join our community of contributors</div>
      </div>
      <div class="col-md-4 text-md-right">
        <a
            href="https://crowdin.com/project/prestashop-official"
            class="btn btn-primary">
          Translate now
        </a>
      </div>
    </div>
    <OnGoingTranslations :languages="data.languages" />
  </div>
</template>
