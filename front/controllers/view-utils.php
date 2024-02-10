<?php
function renderTopTranslators($translatorsWithoutDuplicate, $i)
{
    // Get the current translator's details
    $currentTranslator = $translatorsWithoutDuplicate[$i];
    // Extracting relevant information for display
    $position = ($i + 1);
    $name = $currentTranslator['name'];
    $avatar = $currentTranslator['avatar'];
    $username = $currentTranslator['username'];
    $flag = $currentTranslator['flag'];

    if ($position < 10) {
        $position = '#0'.$position;
    } else {
        $position = '#'.$position;
    }

    // Check if avatar is available, otherwise use a default image
    if ($avatar) {
        $avatar = $avatar;
    } else {
        $avatar = "/public/assets/img/ps-logo.png";
    }

    // Displaying the contributor information
    echo
    "<div class=\"contributor top-contributor\">
        <div class=\"avatar\">
            <img src=\"$avatar\"/>
        </div>
        <div class=\"details\">
            <div class=\"position\">$position</div>
            <div class=\"name d-none d-md-block\">$name</div>
            <div class=\"info d-none d-md-block\">
                <span><a href=\"https://crowdin.com/profile/$username\">$username</a></span><img class=\"flag\" src=\"/public/assets/img/flags/$flag.png\" />$flag
            </div>
        </div>
        <div class=\"dots\">
            <div class=\"dot\"></div>
            <div class=\"dot\"></div>
        </div>
    </div>";
}

function renderRestOfTranslators($translators, $i, $positionCounter)
{
    // Get the current translator's details
    $currentTranslator = $translators[$i];

    // Extracting relevant information for display
    $position = '#' . $positionCounter;
    $positionCounter++;
    $name = $currentTranslator['name'];
    $avatar = $currentTranslator['avatar'];
    $username = $currentTranslator['username'];
    $flag = $currentTranslator['flag'];
    $count = $currentTranslator['count'];

    // Check if avatar is available, otherwise use a default image
    if ($avatar) {
        $avatar = $avatar;
    } else {
        $avatar = "/public/assets/img/ps-logo.png";
    }

    echo
    "<div class=\"col-md-2 contributor simple-contributor\">
            <div class=\"avatar\">
                <img src=\"$avatar\" />
            </div>
            <div class=\"details\">
                <div class=\"fixed-height\">
                    <div class=\"name\">$name</div>
                    <div class=\"username\">$username</div>
                </div>
                <div class=\"info\">$flag - $count</div>
                <div class=\"position\">$position</div>
            </div>
        </div>";
}

function loopOverRestOfTranslators($translators, $positionCounter)
{
    for ($i = 0; $i < count($translators); $i++) {
        renderRestOfTranslators(
            $translators,
            $i,
            $positionCounter
        );
        $positionCounter++;
    }

    return $positionCounter;
}

function renderLanguages($languages,$count) {
    foreach ($languages as $key => $item) {
        if ( $key > 9 && $key < 20) {

            // Extract information about the current language
            $country = $item['country'];
            $flag = $item['flag'];
            $percent = $item['percent'] . '%';
            $count++;
            $position = $count;
            if ($position < 10) {
                $position = '0'.$position;
            }
            echo 
            "<div class=\"col-md-5 translation-progress\">
                <div class=\"position\">#$position</div>
                    <div class=\"flag-line\">
                        <img src=\"/public/assets/img/flags/$flag.png\" class=\"flag\" /><span class=\"name\">$country</span><span class=\"percent\">$percent</span>
                    </div>
                    <div class=\"progress\">
                    <div class=\"value\"></div>
                </div>
            </div>";
        }
    }
}



?>