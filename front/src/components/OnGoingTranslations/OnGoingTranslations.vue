<script setup lang="ts">
import TenBig from './TenBig.vue';
import SeeMore from '@/components/SeeMore.vue';
import OtherFlags from './OtherFlags.vue';
import FullFlags from './FullFlags.vue';
import type { Language } from '@/models/types';
import { computed, ref } from 'vue';

const props = defineProps<{
  languages: Language[];
}>();

const unfinished = computed(() =>
  props.languages.filter((l) => l.percent !== 100),
);
const top1to10 = computed(() => unfinished.value.slice(0, 10));
const top11to20 = computed(() => unfinished.value.slice(10, 20));
const others = computed(() => unfinished.value.slice(20));
const finished = computed(() =>
  props.languages.filter((l) => l.percent === 100),
);
</script>
<template>
  <div class="row main-content">
    <div class="col-md-10">
      <h2 class="text-md-center">Ongoing translations:</h2>
    </div>
    <div class="col-md-8 push-md-1">
      <div class="row">
        <TenBig :languages="top1to10" />
      </div>
    </div>
    <SeeMore>
      <div class="row">
        <div class="col-md-8 push-md-1">
          <TenBig :languages="top11to20" />
        </div>
      </div>
      <OtherFlags :data="others" />
    </SeeMore>
    <div class="col-md-10">
      <h2 class="text-md-center small-margin">Fully translated languages:</h2>
    </div>
    <FullFlags :data="finished" />
  </div>
</template>
