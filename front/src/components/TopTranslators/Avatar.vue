<script setup lang="ts">
import { computed } from 'vue';
import { Twitter, Github, Link } from './Icons';
import { type Translator } from '@/models/types';
import defaultAvatar from '@/assets/img/default-avatar.png';

const props = defineProps<{
  data: Translator;
}>();
const number = computed(() => String(props.data.number).padStart(2, '0'));
const username = computed(() => props.data.username || props.data.name);
</script>

<template>
  <div v-if="data.number <= 10" class="contributor top-contributor">
    <div class="avatar">
      <img :src="data.avatar || defaultAvatar" />
    </div>
    <div class="details">
      <div class="position">#{{ number }}</div>
      <div class="name">{{ data.name }}</div>
      <div class="info">
        <span
          >(<a :href="`https://crowdin.com/profile/${username}`">{{
            username
          }}</a
          >)</span
        >
        <img class="flag" :src="`./assets/img/flags/${data.flag}.png`" />{{
          data.flag
        }}
      </div>
      <div class="links">
        <a v-if="data.website" :href="data.website">
          <Link />
        </a>
        <a v-if="data.github" :href="`https://github.com/${data.github}`">
          <Github />
        </a>
        <a v-if="data.twitter" :href="`https://twitter.com/${data.twitter}`">
          <Twitter />
        </a>
      </div>
    </div>
    <div class="dots">
      <div class="dot" />
      <div class="dot" />
      <div class="dot" />
    </div>
  </div>
  <div v-else class="col-md-2 contributor simple-contributor">
    <div class="avatar">
      <img :src="data.avatar || defaultAvatar" />
    </div>
    <div class="details">
      <div class="fixed-height">
        <div class="name">{{ data.name }}</div>
        <div class="username">{{ username }}</div>
      </div>
      <div class="info">{{ data.flag }} - {{ data.textCount }} words</div>
      <div class="position">#{{ data.number }}</div>
    </div>
  </div>
</template>
