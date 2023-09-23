<script setup lang="ts">
import { ref } from 'vue';

const isOpen = ref(false);
</script>

<template>
  <div>
    <div
      class="col-md-8 push-md-1 see-more text-md-center"
      :class="{ open: isOpen }"
      @click="isOpen = !isOpen"
    >
      <span class="more">See more</span>
      <span class="less">See less</span>
    </div>
    <div v-show="isOpen" class="col-md-10">
      <div class="row">
        <slot />
        <div
          class="col-md-8 push-md-1 see-more text-md-center"
          :class="{ open: isOpen }"
          @click="isOpen = !isOpen"
        >
          <span class="more">See more</span>
          <span class="less">See less</span>
        </div>
      </div>
    </div>
  </div>
</template>
