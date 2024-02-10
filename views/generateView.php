<!-- TOP TRANSLATORS -->
<div id="top-translators" class="row main-content justify-content-center align-items-center">
    <div>
        <!-- TITLE-->
        <div class="col-md-10">
            <h2>Top translators:</h2>
            <div class="date"> Last update: <strong><?= $formattedCurrentDateTime ?></strong></div>
        </div>
        <!-- 5 TOP CONTRIBUTORS IN ODD POSITIONS ON THE LEFT SIDE (e.g., 1st, 3rd, 5th, 7th, 9th) -->
        <div class="col-xs-3 col-md-4">
            <?php
            // Loop through every second element (even indices) up to the 9th element
            for ($i = 0; $i < 9; $i += 2) {
                renderTopTranslators($translatorsWithoutDuplicate, $i);
            }
            ?>
        </div>
        <!-- COLUMN FOR THE TOP 10 WORD COUNTS-->
        <div class="col-xs-4 col-md-2">
            <div id="arrow">
                <svg class="mask" viewBox="0 0 10 5" preserveAspectRatio="none">
                    <g stroke="none" fill="#fff">
                        <polygon points="-1 -1 -1 5 5 0 11 5 11 -1"></polygon>
                        <div class="words-count text-center">
                    </g>
                </svg>
                <div class="dot"></div>
                <?php
                // Iterate over the first 10 word counts in the array
                for ($i = 0; $i < 10; $i++) {
                    // Get the current translator from the array
                    $currentTranslator = $translatorsWithoutDuplicate[$i];

                    // Extracting the word count and formatting it with commas
                    $count = $currentTranslator['count'];
                    $formattedCount = number_format($count);

                    // Displaying the formatted word count and a dot
                    echo
                    "<div>
                        <div class=\"count\">$formattedCount</div>
                        <div class=\"words\">words</div>
                        <div class=\"dot\"></div>
                    </div>";
                }
                ?>
            </div>
        </div>
    </div>
    <!-- 5 TOP CONTRIBUTORS IN EVEN POSITIONS ON THE RIGHT SIDE (e.g., 2nd, 4th, 6th, 8th, 10th) -->
    <div class="col-xs-3 col-md-4 right-column">

        <?php
        // Loop through every second element (even indices) up to the 9th element
        for ($i = 1; $i < 10; $i += 2) {
            renderTopTranslators($translatorsWithoutDuplicate, $i);
        }
        ?>
    </div>
</div>
<!-- TOGGLE SEE MORE / SEE LESS -->
<div class="col-md-8 see-more text-center" id="top-contributors">
    <span id="more-top-contributors" class="more">See more</span>
    <span id="less-top-contributors" class="less d-none">See less</span>
</div>
<!-- REST OF TRANSLATORS -->
<div id="rest-of-translators" class="col-md-10 d-none">
    <div class="row justify-content-center">
        <div id="all-translators">
            <div class="container">
                <div class="row">
                    <!-- PIONNER => 4 per row -->
                    <div class="step pioneer">
                        <div class="col-md-10 title pioneer">
                            Pioneer (&gt; 20K)
                        </div>
                        <div class="row justify-content-center">
                            <?php
                            $positionCounter = 11;
                            $positionCounter = loopOverRestOfTranslators($translatorsPionner, $positionCounter);
                            ?>
                        </div>
                    </div>
                    <!-- EXPLORER => 4 per row-->
                    <div class="step explorer">
                        <div class="col-md-10 title explorer">
                            Explorer (&gt;8.5K)
                        </div>
                        <div class="row justify-content-center">
                            <?php
                            $positionCounter = loopOverRestOfTranslators($translatorsExplorer, $positionCounter);
                            ?>
                        </div>
                    </div>
                    <!-- ADVENTURER  => 4 per row-->
                    <div class="step adventurer">
                        <div class="col-md-10 title adventurer">
                            Adventurer (&gt;5K)
                        </div>

                        <div class="row justify-content-center">
                            <?php
                            $positionCounter = loopOverRestOfTranslators($translatorsAdventurer, $positionCounter);
                            ?>
                        </div>

                    </div>
                    <!-- BACKPACKER => 4 per row -->
                    <div class="step backpacker">
                        <div class="col-md-10 title backpacker">
                            Backpacker (&gt;2.5K)
                        </div>
                        <div class="row justify-content-center">
                            <?php
                            $positionCounter = loopOverRestOfTranslators($translatorsBackpacker, $positionCounter);
                            ?>
                        </div>
                    </div>
                    <!-- TRAVELER => 4 per row -->
                    <div class="step traveler">
                        <div class="col-md-10 title traveler">
                            Traveler (&gt;500)
                        </div>
                        <div class="row justify-content-center">
                            <?php
                            $positionCounter = loopOverRestOfTranslators($translatorsTraveler, $positionCounter);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- TOGGLE SEE MORE / SEE LESS -->
        <div class="col-md-8 see-more text-center" id="top-contributors-bottom">
            <span class="more d-none" id=>See more</span><span class="less">See less</span>
        </div>
    </div>
</div>
<!-- JOIN COMMUNITY -->
<div class="row join-our-community justify-content-center align-items-center">
    <div class="col-md-6 text-center">
        <div class="black-title">Join our community of contributors</div>
    </div>
    <div class="col-md-4 text-center">
        <a href="https://crowdin.com/project/prestashop-official" class="cta--pattern cta"><span>Translate
                now<svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 9 10" style="enable-background:new 0 0 9 10;" xml:space="preserve">
                    <path d="M9,5l-9,5L0,0L9,5z"></path>
                </svg></span></a>
    </div>
</div>
<!-- ONGOING TRANSLATIONS -->
<div class="row main-content justify-content-center align-items-center">
    <div class="col-md-10">
        <h2 class="text-center py-5">Ongoing translations:</h2>
    </div>
    <!-- FOR 10 FIRST TRANSLATIONS LANGUAGES-->
    <div class="col-md-8">
        <div class="row">
            <?php
            $count = 0;
            renderLanguages($languages,$count);
            ?>
        </div>
    </div>
    <!-- TOGGLE SEE MORE / SEE LESS -->
    <div class="col-md-8 see-more text-center" id="translations">
        <span id="more-translations" class="more">See more</span><span id="less-translations" class="less d-none">See
            less</span>
    </div>
    <!-- FOR 10 SECOND TRANSLATIONS LANGUAGES -->
    <div class="col-md-8 d-none" id="rest-of-translations">
        <div class="row justify-content-center align-items-center">
            <?php 
            $count = 10;
            renderLanguages($languages,$count);
            ?>
        </div>
        <!-- FOR THE REST OF LANGUAGES 4 per row -->
        <div class="row justify-content-center">
        <?php 
            foreach ($languages as $key => $item) {
                if ( $key >= 30) {
                    // Extract information about the current language
                    $country = $item['country'];
                    $flag = $item['flag'];
                    $percent = $item['percent'] . '%';
                    
                    echo 
                    "<div class=\"text-md-center col-xs-3 col-md-2 small-flag\">
                        <img src=\"/public/assets/img/flags/$flag.png\" class=\"flag\" />
                        <div class=\"name\">$country</div>
                        <div class=\"percent\">$percent</div>
                    </div>";
                }
            }
            ?>
        </div>
    </div>
    <!-- FULLY TRANSLATED LANGUAGE -->
    <div class="col-md-10">
        <h2 class="text-center py-5">
            Fully translated language:
        </h2>
    </div>
    <!-- FOR FULLY TRANSLATED LANGUAGE 4 PER ROW -->
    <div class="row d-flex justify-content-between">
        <?php

        // Loop through the first 10 languages in the $languages array
        for ($i = 0; $i < 10; $i++) {
            // Get the current language details
            $currentLanguage = $languages[$i];

            // Extract information about the current language
            $country = $currentLanguage['country'];
            $flag = $currentLanguage['flag'];
            $percent = $currentLanguage['percent'] . '%';

            // Display the language information using HTML structure
            echo
            "<div class=\"text-md-center col-md-3 col-xl-2 full-flag\"><img src=\"/public/assets/img/flags/$flag.png\" class=\"flag\">
                <div class=\"name\">$country</div>
                <div class=\"progress\">
                    <div class=\"value\"></div>
                </div>
                <div class=\"percent\">$percent</div>
            </div>";
        }
        ?>
    </div>
</div>