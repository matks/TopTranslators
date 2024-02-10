//contributors
let btnTopContributors = document.getElementById('top-contributors');
let btnMoreTopContributors = document.getElementById('more-top-contributors');
let btnLessTopContributors = document.getElementById('less-top-contributors');
let restOfTranslators = document.getElementById('rest-of-translators');
let topContributorsBottom = document.getElementById('top-contributors-bottom');

//translations
let btnTranslations = document.getElementById('translations');
let btnMoreTranslations = document.getElementById('more-translations');
let btnLessTranslations = document.getElementById('less-translations');
let restOfTranslations = document.getElementById('rest-of-translations');
let restOfContributorsIsVisible = false;
let restOfTranslationsIsVisible = false;

// fonction for display the rest of top contributors
function toggleRestOfContributors() {

    if (restOfContributorsIsVisible == true) {

        btnTopContributors.classList.remove('open');
        topContributorsBottom.classList.remove('open');
        restOfTranslators.classList.add('d-none');
        btnMoreTopContributors.classList.remove('d-none');
        btnLessTopContributors.classList.add('d-none');

        restOfContributorsIsVisible = false;
      
    } else {
        
        btnTopContributors.classList.add('open');
        topContributorsBottom.classList.add('open');
        restOfTranslators.classList.remove('d-none');
        btnMoreTopContributors.classList.add('d-none');    
        btnLessTopContributors.classList.remove('d-none');
        restOfContributorsIsVisible = true;
    }
}

// fonction for display the rest of translations
function toggleRestOfTranslations() {

    if (restOfTranslationsIsVisible == true) {

        btnTranslations.classList.remove('open');
        restOfTranslations.classList.add('d-none');
        btnMoreTranslations.classList.remove('d-none');
        btnLessTranslations.classList.add('d-none');
        restOfTranslationsIsVisible = false;

    } else {
        
        btnTranslations.classList.add('open');
        restOfTranslations.classList.remove('d-none');
        btnMoreTranslations.classList.add('d-none');    
        btnLessTranslations.classList.remove('d-none');
        restOfTranslationsIsVisible = true;
    }
}

// addevent listener
btnTopContributors.addEventListener('click', toggleRestOfContributors);
topContributorsBottom.addEventListener('click', toggleRestOfContributors);
btnTranslations.addEventListener('click', toggleRestOfTranslations);


