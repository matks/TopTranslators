<script setup lang="ts">
import Root from '@/components/Root.vue';
import Logo from "@/components/Logo.vue";
</script>

<template>
  <header>
    <div class="gradient">
      <div class="container">
        <div class="row">
          <div class="col-md-8 push-md-1">
            <Logo />
            <h1>Top translation<br/> achievements</h1>
            <p class="black-text">
              PrestaShop is a free and Open Source e-commerce web platform, committed to providing the best shopping cart experience for both merchants and customers. It is written in PHP, is highly customizable, supports all the major payment services, is translated in many languages and localized for many countries, has a fully responsive design (both front and back office), and more!.
              <a href="https://www.prestashop-project.org/" target="_blank">Learn more about PrestaShop Project.</a>
            </p>
            <p class="black-text">This site covers the technical aspects of PrestaShop and it's tailored for theme, module and core developers.</p>
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
      <hr />
      <div class="row">
        <div class="col-md-3 black-title">JOIN THE CROWD</div>
        <div class="col-md-4 black-title">TRANSLATOR'S GUIDE</div>
        <div class="col-md-3 black-title">DISCOVER PRESTASHOP 8</div>
      </div>
      <div class="row">
        <div class="col-md-3 black-text">
          To join the Crowdin community or bring your language to further
          completion, go to Crowdin’s PrestaShop page and register.
        </div>
        <div class="col-md-4 black-text">
          Follow our guide to discover the best practices and procedure to
          follow when you translate PrestaShop.
        </div>
        <div class="col-md-3 black-text">
          Check the latest additions and the more significant improvements of the 8 version,
          the current major version of PrestaShop.
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <a
            href="https://crowdin.com/project/prestashop-official"
            class="btn btn-primary"
            >Translate now</a
          >
        </div>
        <div class="col-md-4">
          <a
            href="https://build.prestashop-project.org/assets/ext/PrestaShop_Translator_Guide.pdf"
            class="btn btn-primary large-padding"
            >Download</a
          >
        </div>
        <div class="col-md-3">
          <a
            href="https://www.prestashop-project.org/releases/"
            class="btn btn-primary large-padding"
            >Discover</a
          >
        </div>
      </div>
      <hr />
      <div class="row footer-menu">
        <div class="col-xs-10">
          <a href="https://www.prestashop-project.org/" target="_blank">
            <Logo />
          </a>
        </div>
        <div class="col-xs-10">
          <ul class="list-unstyled">
            <li class="d-inline-block"><a href="https://build.prestashop-project.org/">Blog</a></li>
            <li class="d-inline-block"><a href="https://github.com/PrestaShop/PrestaShop/">Github</a></li>
            <li class="d-inline-block"><a href="https://www.prestashop-project.org/slack/">Slack</a></li>
          </ul>
          <ul class="list-unstyled">
            <li class="d-inline-block"><a href="https://docs.prestashop-project.org/v.8-documentation/v/english/">User documentation</a></li>
            <li class="d-inline-block"><a href="https://devdocs.prestashop-project.org/">Developer documentation</a></li>
          </ul>
        </div>
      </div>
      <hr />
      <div class="row small">
        <div class="col-md-4">
          Content distributed under the <a href="https://creativecommons.org/licenses/by-sa/4.0/legalcode" target="_blank">Creative Commons BY-SA 4.0 License.</a>
        </div>
        <div class="col-md-6 text-md-right">
         "PrestaShop" and the PrestaShop logos are international trademarks of PrestaShop SA.
        </div>
      </div>
    </div>
  </footer>
</template>

<style scoped></style>
