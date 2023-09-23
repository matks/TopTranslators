<script setup lang="ts">
import { ref, type BaseTransitionProps } from 'vue';

const isOpen = ref(false);

const transitionHooks: BaseTransitionProps = {
  onEnter(element) {
    const scrollHeight = element.scrollHeight;
    element.style.height = '0';
    requestAnimationFrame(() => {
      element.style.height = `${scrollHeight}px`;
    });
  },
  onAfterEnter(element) {
    element.style.height = 'auto';
  },
  onLeave(element) {
    element.style.height = `${element.scrollHeight}px`;
    requestAnimationFrame(() => (element.style.height = '0'));
  },
  onAfterLeave(element) {
    element.style.removeProperty('height');
  },
};
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
    <transition name="slide" v-bind="transitionHooks">
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
    </transition>
  </div>
</template>

<style lang="scss">
.slide {
  &-enter-active,
  &-leave-active {
    transition: height 0.5s ease-in-out;
    overflow: hidden;
  }
}
</style>
