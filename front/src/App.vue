<script setup lang="ts">
import Root from '@/components/Root.vue';
</script>

<template>
  <header>
    <div class="gradient">
      <div class="container">
        <div class="row">
          <div class="col-md-8 push-md-1 text-md-center">
            <h1>Top translation achievements</h1>
            <p class="white-text">
              Hey there!<br />
              This page is dedicated to our community of translators and to the
              translation of the 1.7 version. Check the below results to know
              how far you allowed the community to go thanks to your
              translations. See what has been accomplished since the 1st of
              July, 2016. Feel free to help us!
            </p>
            <div>
              <a
                href="https://crowdin.com/project/prestashop-official"
                class="btn btn-primary"
                >Translate now</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <div class="container">
    <Root />
  </div>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-3 white-title">JOIN THE CROWD</div>
        <div class="col-md-4 white-title">TRANSLATOR'S GUIDE</div>
        <div class="col-md-3 white-title">DISCOVER PRESTASHOP 1.7</div>
      </div>
      <div class="row">
        <div class="col-md-3 white-text">
          To join the Crowdin community or bring your language to further
          completion, go to Crowdin’s PrestaShop page and register.
        </div>
        <div class="col-md-4 white-text">
          Follow our guide to discover the best practices and procedure to
          follow when you translate PrestaShop.
        </div>
        <div class="col-md-3 white-text">
          Check the latest additions and the more significant improvements of
          the 1.7 version, the next major version of PrestaShop.
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <a
            href="https://crowdin.com/project/prestashop-official"
            class="btn btn-outline-info"
            >Translate now</a
          >
        </div>
        <div class="col-md-4">
          <a
            href="http://build.prestashop.com/assets/ext/PrestaShop_Translator_Guide.pdf"
            class="btn btn-outline-info large-padding"
            >Download</a
          >
        </div>
        <div class="col-md-3">
          <a
            href="https://www.prestashop.com/en/1.7"
            class="btn btn-outline-info large-padding"
            >Discover</a
          >
        </div>
      </div>
      <div class="row">
        <div id="badge" class="col-md-10 text-md-center">
          <img src="@/assets/img/badge.png" />
          <hr />
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <a class="build-link" href="http://build.prestashop.com"
            >Follow the blog of our Product &amp; Dev team</a
          >
        </div>
        <div class="col-md-4 text-md-right share">
          <span>Follow us</span>
          <a href="https://www.facebook.com/prestashop"
            ><img src="@/assets/img/facebook.png"
          /></a>
          <a href="https://twitter.com/prestashop"
            ><img src="@/assets/img/twitter.png"
          /></a>
        </div>
      </div>
    </div>
  </footer>
</template>

<style scoped></style>
