<!-- TOP TRANSLATORS -->
<div id="top-translators" class="row main-content justify-content-center align-items-center">
    <div>
        <!-- TITLE-->
        <div class="col-md-10">
            <h2>Top translators:</h2>
            <div class="date"> Last update: <strong><?= $formattedCurrentDateTime ?></strong></div>
        </div>
        <!-- !!!insert data!!! => 5 TOP CONTRIBUTORS IN ODD POSITIONS ON THE LEFT SIDE (e.g., 1st, 3rd, 5th, 7th, 9th) -->
        <div class="col-xs-3 col-md-4">
            <div class="contributor top-contributor">
                <!-- avatar -->
                <div class="avatar">
                    <img src="<?= $dataImages[3] ?>" alt="Avatar du contributeur en première position" />;
                </div>
                <!-- detail -->
                <div class="details ">
                    <!-- position -->
                    <div class="position">#01</div>
                    <!-- name -->
                    <div class="name d-none d-md-block"><?= $dataNames[3] ?></div>
                    <!-- crowdin link + flag -->
                    <div class="info d-none d-md-block">
                        <span>(<a href="https://crowdin.com/profile/ggedamed">ggedamed</a>)</span><img class="flag" src="./assets/img/flags/RO.png" />RO
                    </div>
                </div>
                <div class="dots">
                    <div class="dot"></div>
                    <div class="dot"></div>
                </div>
            </div>
            <div class="contributor top-contributor">
                <!-- avatar -->
                <div class="avatar">
                    <img src="<?= $dataImages[5] ?>" alt="Avatar du contributeur en troisième position" />;
                </div>
                <!-- detail -->
                <div class="details">
                    <!-- position -->
                    <div class="position">#03</div>
                    <!-- name -->
                    <div class="name d-none d-md-block"><?= $dataNames[5] ?></div>
                    <!-- crowdin link + flag -->
                    <div class="info d-none d-md-block">
                        <span>(<a href="https://crowdin.com/profile/ggedamed">ggedamed</a>)</span><img class="flag" src="./assets/img/flags/RO.png" />RO
                    </div>
                </div>
                <div class="dots">
                    <div class="dot"></div>
                    <div class="dot"></div>
                </div>
            </div>
            <div class="contributor top-contributor">
                <!-- avatar -->
                <div class="avatar">
                    <img src="<?= $dataImages[7] ?>" alt="Avatar du contributeur en cinquième position" />
                </div>
                <!-- detail -->
                <div class="details">
                    <!-- position -->
                    <div class="position">#05</div>
                    <!-- name -->
                    <div class="name d-none d-md-block"><?= $dataNames[7] ?></div>
                    <!-- crowdin link + flag -->
                    <div class="info d-none d-md-block">
                        <span>(<a href="https://crowdin.com/profile/ggedamed">ggedamed</a>)</span><img class="flag" src="./assets/img/flags/RO.png" />RO
                    </div>
                </div>
                <div class="dots">
                    <div class="dot"></div>
                    <div class="dot"></div>
                </div>
            </div>
            <div class="contributor top-contributor">
                <!-- avatar -->
                <div class="avatar">
                <img src="<?= $dataImages[9] ?>" alt="Avatar du contributeur en septième position" />
                </div>
                <!-- detail -->
                <div class="details">
                    <!-- position -->
                    <div class="position">#07</div>
                    <!-- name -->
                    <div class="name d-none d-md-block"><?= $dataNames[9] ?></div>
                    <!-- crowdin link + flag -->
                    <div class="info d-none d-md-block">
                        <span>(<a href="https://crowdin.com/profile/ggedamed">ggedamed</a>)</span><img class="flag" src="./assets/img/flags/RO.png" />RO
                    </div>
                </div>
                <div class="dots">
                    <div class="dot"></div>
                    <div class="dot"></div>
                </div>
            </div>
            <div class="contributor top-contributor">
                <!-- avatar -->
                <div class="avatar">
                <img src="<?= $dataImages[11] ?>" alt="Avatar du contributeur en neuvième position" />
                </div>
                <!-- detail -->
                <div class="details">
                    <!-- position -->
                    <div class="position">#09</div>
                    <!-- name -->
                    <div class="name d-none d-md-block"><?= $dataNames[11] ?></div>
                    <!-- crowdin link + flag -->
                    <div class="info d-none d-md-block">
                        <span>(<a href="https://crowdin.com/profile/ggedamed">ggedamed</a>)</span><img class="flag" src="./assets/img/flags/RO.png" />RO
                    </div>
                </div>
                <div class="dots">
                    <div class="dot"></div>
                    <div class="dot"></div>
                </div>
            </div>
        </div>
        <!-- !!!insert data!!! => RANKING COLUMN FOR WORDS COUNT -->
        <div class="col-xs-4 col-md-2">
            <div id="arrow">
                <svg class="mask" viewBox="0 0 10 5" preserveAspectRatio="none">
                    <g stroke="none" fill="#fff">
                        <polygon points="-1 -1 -1 5 5 0 11 5 11 -1"></polygon>
                        <div class="words-count text-center">
                    </g>
                </svg>
                <div class="dot"></div>
                <!-- 1st position of words count -->
                <div>
                    <div class="count">218,962</div>
                    <div class="words">words</div>
                    <div class="dot"></div>
                </div>
                <!-- 2nd position of words count -->
                <div>
                    <div class="count">212,888</div>
                    <div class="words">words</div>
                    <div class="dot"></div>
                </div>
                <!-- 3nd position of words count-->
                <div>
                    <div class="count">212,888</div>
                    <div class="words">words</div>
                    <div class="dot"></div>
                </div>
                <!-- 4th position of words count-->
                <div>
                    <div class="count">200,208</div>
                    <div class="words">words</div>
                    <div class="dot"></div>
                </div>
                <!-- 5th position of words count -->
                <div>
                    <div class="count">173,500</div>
                    <div class="words">words</div>
                    <div class="dot"></div>
                </div>
                <!--6th position of words count -->
                <div>
                    <div class="count">173,500</div>
                    <div class="words">words</div>
                    <div class="dot"></div>
                </div>
                <!-- 7th position of words count -->
                <div>
                    <div class="count">157,303</div>
                    <div class="words">words</div>
                    <div class="dot"></div>
                </div>
                <!-- 8th position of words count -->
                <div>
                    <div class="count">116,697</div>
                    <div class="words">words</div>
                    <div class="dot"></div>
                </div>
                <!-- 9th position of words count -->
                <div>
                    <div class="count">103,693</div>
                    <div class="words">words</div>
                    <div class="dot"></div>
                </div>
                <!-- 10th position of words count -->
                <div>
                    <div class="count">97,073</div>
                    <div class="words">words</div>
                    <div class="dot"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- !!!insert data!!! => 5 TOP CONTRIBUTORS IN EVEN POSITIONS ON THE RIGHT SIDE (e.g., 2nd, 4th, 6th, 8th, 10th) -->
    <div class="col-xs-3 col-md-4 right-column">
        <div class="contributor top-contributor">
            <div class="avatar">
            <img src="<?= $dataImages[4] ?>" alt="Avatar du contributeur en deuxième position" />
            </div>
            <div class="details">
                <div class="position">#02</div>
                <div class="name d-none d-md-block"><?= $dataNames[4] ?></div>
                <div class="info d-none d-md-block">
                    <span>(<a href="https://crowdin.com/profile/Guisardo">Guisardo</a>)</span><img class="flag" src="./assets/img/flags/AR.png" />AR
                </div>
            </div>
            <div class="dots">
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>
        <div class="contributor top-contributor">
            <div class="avatar">
            <img src="<?= $dataImages[6] ?>" alt="Avatar du contributeur en quatrième position" />
            </div>
            <div class="details">
                <div class="position">#04</div>
                <div class="name d-none d-md-block"><?= $dataNames[6] ?></div>
                <div class="info d-none d-md-block">
                    <span>(<a href="https://crowdin.com/profile/ggedamed">ggedamed</a>)</span><img class="flag" src="./assets/img/flags/RO.png" />RO
                </div>
            </div>
            <div class="dots">
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>
        <div class="contributor top-contributor">
            <div class="avatar">
            <img src="<?= $dataImages[8] ?>" alt="Avatar du contributeur en sixième position" />
            </div>
            <div class="details">
                <div class="position">#06</div>
                <div class="name d-none d-md-block"><?= $dataNames[8] ?></div>
                <div class="info d-none d-md-block">
                    <span>(<a href="https://crowdin.com/profile/malik.krak">malik.krak</a>)</span><img class="flag" src="./assets/img/flags/SK.png" />SK
                </div>
            </div>
            <div class="dots">
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>
        <div class="contributor top-contributor">
            <div class="avatar">
            <img src="<?= $dataImages[10] ?>" alt="Avatar du contributeur en huitième position" />
            </div>
            <div class="details">
                <div class="position">#08</div>
                <div class="name d-none d-md-block"><?= $dataNames[10] ?></div>
                <div class="info d-none d-md-block">
                    <span>(<a href="https://crowdin.com/profile/jaymz9634">jaymz9634</a>)</span><img class="flag" src="./assets/img/flags/KR.png" />KR
                </div>
            </div>
            <div class="dots">
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>
        <div class="contributor top-contributor">
            <div class="avatar">
            <img src="<?= $dataImages[12] ?>" alt="Avatar du contributeur en dixième position" />
            </div>
            <div class="details">
                <div class="position">#10</div>
                <div class="name d-none d-md-block"><?= $dataNames[12] ?></div>
                <div class="info d-none d-md-block">
                    <span>(<a href="https://crowdin.com/profile/dzuman">dzuman</a>)</span><img class="flag" src="./assets/img/flags/VN.png" />VN
                </div>
            </div>
            <div class="dots">
                <div class="dot"></div>
                <div class="dot"></div>
            </div>
        </div>
    </div>
</div>
<!-- TOGGLE SEE MORE / SEE LESS -->
<div class="col-md-8 see-more text-center" id="top-contributors">
    <span id="more-top-contributors" class="more">See more</span>
    <span id="less-top-contributors" class="less d-none">See less</span>
</div>
<!-- !!!insert data!!! => REST OF TRANSLATORS -->
<div id="rest-of-translators" class="col-md-10 d-none">
    <div class="row justify-content-center">
        <div id="all-translators">
            <div class="container">
                <div class="row">
                    <!-- !!!insert dynamic content!!!  PIONNER => 4 per row -->
                    <div class="step pioneer">
                        <div class="col-md-10 title pioneer">
                            Pioneer (&gt; 20K)
                        </div>
                        <div class="col-md-2 contributor simple-contributor offset-md-1">
                            <div class="avatar">
                                <img src="https://www.gravatar.com/avatar/9aba0ffd28f6c74abd88b8d97317bd5d?s=150&amp;d=https%3A%2F%2Fcrowdin.com%2Fimages%2Fuser-picture.png" />
                            </div>
                            <div class="details">
                                <div class="fixed-height">
                                    <div class="name">Vu Van Tuan</div>
                                    <div class="username">tuanvv90</div>
                                </div>
                                <div class="info">VN - 19,569 words</div>
                                <div class="position">#79</div>
                            </div>
                        </div>
                        <div class="col-md-2 contributor simple-contributor">
                            <div class="avatar">
                                <img src="https://www.gravatar.com/avatar/9aba0ffd28f6c74abd88b8d97317bd5d?s=150&amp;d=https%3A%2F%2Fcrowdin.com%2Fimages%2Fuser-picture.png" />
                            </div>
                            <div class="details">
                                <div class="fixed-height">
                                    <div class="name">Vu Van Tuan</div>
                                    <div class="username">tuanvv90</div>
                                </div>
                                <div class="info">VN - 19,569 words</div>
                                <div class="position">#80</div>
                            </div>
                        </div>
                        <div class="col-md-2 contributor simple-contributor">
                            <div class="avatar">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjUwIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iNTAiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSI1MCIKICAgdGlmZjpJbWFnZUxlbmd0aD0iNTAiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LzEiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LzEiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjMtMTIt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" />
                            </div>
                            <div class="details">
                                <div class="fixed-height">
                                    <div class="name">Michael Dekker</div>
                                    <div class="username">mdekker</div>
                                </div>
                                <div class="info">NL - 19,239 words</div>
                                <div class="position">#81</div>
                            </div>
                        </div>
                        <div class="col-md-2 contributor simple-contributor">
                            <div class="avatar">
                                <img src="https://crowdin-static.downloads.crowdin.com/avatar/13689077/large/36362ca89d5ac8c21098543e8a57f298.jpg" />
                            </div>
                            <div class="details">
                                <div class="fixed-height">
                                    <div class="name">prestashop_9331</div>
                                    <div class="username">prestashop_9331</div>
                                </div>
                                <div class="info">AE - 16,843 words</div>
                                <div class="position">#82</div>
                            </div>
                        </div>
                    </div>
                    <!-- !!!insert dynamic content!!!  EXPLORER => 4 per row-->
                    <div class="step explorer">
                        <div class="col-md-10 title explorer">
                            Explorer (&gt;8.5K)
                        </div>
                        <div class="col-md-2 contributor simple-contributor offset-md-1">
                            <div class="avatar">
                                <img src="https://www.gravatar.com/avatar/9aba0ffd28f6c74abd88b8d97317bd5d?s=150&amp;d=https%3A%2F%2Fcrowdin.com%2Fimages%2Fuser-picture.png" />
                            </div>
                            <div class="details">
                                <div class="fixed-height">
                                    <div class="name">Vu Van Tuan</div>
                                    <div class="username">tuanvv90</div>
                                </div>
                                <div class="info">VN - 19,569 words</div>
                                <div class="position">#79</div>
                            </div>
                        </div>
                        <div class="col-md-2 contributor simple-contributor">
                            <div class="avatar">
                                <img src="https://www.gravatar.com/avatar/9aba0ffd28f6c74abd88b8d97317bd5d?s=150&amp;d=https%3A%2F%2Fcrowdin.com%2Fimages%2Fuser-picture.png" />
                            </div>
                            <div class="details">
                                <div class="fixed-height">
                                    <div class="name">Vu Van Tuan</div>
                                    <div class="username">tuanvv90</div>
                                </div>
                                <div class="info">VN - 19,569 words</div>
                                <div class="position">#80</div>
                            </div>
                        </div>
                        <div class="col-md-2 contributor simple-contributor">
                            <div class="avatar">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjUwIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iNTAiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSI1MCIKICAgdGlmZjpJbWFnZUxlbmd0aD0iNTAiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LzEiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LzEiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjMtMTItMjFUMTY6MTI6MDErMDE6MDAiCiAgIHhtcDpNZXRhZGF0YURhdGU9IjIwMjMtMTItMjFUMTY6MTI6MDErMDE6MDAiPgogICA8eG1wTU06SGlzdG9yeT4KICAgIDxyZGY6U2VxPgogICAgIDxyZGY6bGkKICAgICAgc3RFdnQ6YWN0aW9uPSJwcm9kdWNlZCIKICAgICAgc3RFdnQ6c29mdHdhcmVBZ2VudD0iQWZmaW5pdHkgRGVzaWduZXIgMS4xMC42IgogICAgICBzdEV2dDp3aGVuPSIyMDIzLTEyLTIxVDE2OjEyOjAxKzAxOjAwIi8+CiAgICA8L3JkZjpTZXE+CiAgIDwveG1wTU06SGlzdG9yeT4KICA8L3JkZjpEZXNjcmlwdGlvbj4KIDwvcmRmOlJERj4KPC94OnhtcG1ldGE+Cjw/eHBhY2tldCBlbmQ9InIiPz6oLUJTAAABgWlDQ1BzUkdCIElFQzYxOTY2LTIuMQAAKJF1kd8rg1EYxz82IjYUysUulsaVaajFjTJp1JJmyq+b7d0vtR9v77ul5Va5VZS48euCv4Bb5VopIiW3XBM3rNfz2mpL9pye83zO95zn6ZzngCWUUtJ6vQfSmZwW9PucC4tLzsYXbHTRigN7WNHV8dnZADXt8546M966zVq1z/1rLdGYrkBdk/CYomo54SnhwFpONXlHuFNJhqPCZ8L9mlxQ+M7UIyV+NTlR4m+TtVBwAiztws5EFUeqWElqaWF5Oa50Kq+U72O+xBbLzM9J7BF3oBPEjw8n00wygZdBRmX24maIAVlRI9/zmz9DVnIVmVUKaKySIEmOflHzUj0mMS56TEaKgtn/v33V48NDpeo2HzQ8G8Z7LzRuQ3HLML6ODKN4DNYnuMxU8rOHMPIh+lZFcx1A2wacX1W0yC5cbEL3oxrWwr+SVdwSj8PbKdgXoeMGmpdLPSvvc/IAoXX5qmvY24c+Od+28gM8B2fSnkXeLwAAAAlwSFlzAAAOxAAADsQBlSsOGwAAB2hJREFUaIHNmnmQFNUdxz+/191z7LJhXUhKwgJqEUAwFwFlS4xlpcSwFrshFoWpMgaKxMihlVSRYyFUDkoBy4h4QmJKCKEUwciha4hIgHAop4AxypllFyILhD1mZ3qme/rljz2YXWZ2ZpZZ1k9VV828fv37fb/d73W/fq+F3FEIlAIjlWkOCATzBotSA2ORyHUAvmDwkva803YkfNxz3WrgAFAJ1OVQQ5cpBmYGehXsUoahgaw2ZRg60KvXLmBmS6xrzgBRxopshXe2iYgWZSznGhkqFJFFls+fMwMdN8vn1yKyiOam2i2UWYFAuLsMXGGoOVdZLg2IUmrOtTKQuImIVkpVAHK1JoKGab3WEyYSN8O0VgPBLpswLWtPT5toM9OsJaWZVJdMTNNa7brOpI47LH+AOyZOQikjs9ORQCQc4nz1aRouXqD+wnkiocasjjd9vjVuLDaZZnPtBSc7QCk1x/O8x5LtKyjqwzP/PIjl82UlohXP8wg31FN/oZYP/rGZ9S8+Tbgxc0Mt2hZ0LE9mpAxYnyrQ1RrpSLixgTWLF7Jz3VrCjQ1p64sIWusyYGO78g71Cq1A4Kxj2ynbYq6NAGjt8dF7O1k0ZTKe56Wt7wsE7Zgd6UfC8EYlVhCRis5MdBciihEldzB31ToKivqkrR+zIwER+WViWaKRAabl+3muRWrPo7a6ioNb3mH/5k1c/PQsWl/RVwEYOupWHpjzu4zimpbvFyQMZ8zWH0qp+U4sepWyL1P10YdseXUlR3Zu43x1VZt4UYpBN4/gngd/xNiJkxBp37pvL7+PIzu3suONNZ3Gd2JRlFLzPc+bCpf7SLGIVKc6U4lk0kf+tXsHi6dPwW4KdRqr4s9rGVEy9oryUx8eZt7EcWm1tHT8AUBNa9Mqz8REJsRdl2dmTUNrjWk1m/3CwBsYPmYsN375q21lohR1tZ8mjTHo5hHc9JWvp82ltUYpVQ4tTStYUPBAJIt7eWeIEpRpEm2ox/L7mbVkGSO/dQ8+fwCAuvO1HN6+haP792C1lHVEGQblDz/K4hlT0+YLFnzu+031dc8LUKgM45IXj2ckNJOmtXj6FPZv/hsA/rw8+g8eyrgHp3F72X1tfUJ7Hq7jYPn9SWNEw2FmlNxCNBzuVI9hmMTj7nUKKM3URKZ8+wcPkd+7sE3QycMHWTp7FhX33sXuN98g7rqIUilNABiWRUFhUdpc8bgLMF4BI3Mj/zLDbivhN2sqGTT8lnblNcc+ZunsR/hjxU9Jd/JEBF8w40faSGWY1sCuyU2O9jzsphD9bryJX6/eyKwly/jaXXdjmBbQfAbfe2sdH2x7N2c5DdMaqAJ5eYNzFhHY9vqr/OTOUdTVnsMXCDKmtJzZf1jJ4xs206dff0QE13FY/8LTncbRWhONdN4/Wgn2KhiilGnekAP9baxZvBA73MTbLy9r9wTv/6Wh/P7d3Uz48SMAVH/y707jxB2HxosXM8yqi1U0HM7pS37fLxYTd13eeukFlsycxrmqUzRe+h/RSISYHW1rYq7jdBrn0PYtxKJ2Rjljtl1kpq+WHaXTHubZRx8CYN87lRzavoWi6/uR37sQJxrlvyePATB6XGnKGNrzeP3ZJ7PKa/rz8upidvNsYC4YdXcpt46fwL6/V+LF4zhRm3NVp9rV6d3389z/s7kpY5w4fJAzRz/OOKcvGLyk4q77n66KToZhmkx/8jl++PhTFF3f74r9t5WW8du1lfQtTn2zrPzT0qxyaq1Pm9Fw+DiQfmCTBZbPzze/O5mSe7/DicMHuXCmGhHFwGHDKR4y7IoRb4Igtq19hb2b3swqnx0KHTPjrnM6F+KTYfn9DBs9BkaPyaj+meNH+ctj81K+r6Qi7jqnFc2z4j3Oro1/Zf73yrGbmrpy+AETqFSGkXbI0B1orQk31PPKE/PZ+tqqLsUwTIu461SaQJ0/GNwdCYVKciszNa4T45N9e3i/cgNHdmzlfE3XW3cgP//9pvq6ehMgEgqtAnJmxA43sWnFS60j02Y8Tf2FWs6ePM6JQweI2Zk97NIRaWxYCZff2deLyHO5ekuMhptY9/xTONHczQEkQ0TwPG89XJ5FqRGRFd2atRsQkeVADSRMB3me9yvLl/pF57OG5fPjed681v+J81o1rhN7ogc0dQnXiS2i5WpAh5lGrfUCKxCIXHNVWWIFAhGt9cLEMtWhTp1j2/enGkJ8FhARHNueTIdl7Y5GADaISOqhaQ8jInPoMBMPyY3ged6CliW3zxSmZa32PG9hsn1JjQA67jpTTMva2426ssK0rL2u40wlyWoVJExiJyHiOs6dyjBe9uLxya2FdlMTK+fP7XTpLWpHiLtuyv3ZYpjm6hYTV3UjEhGpoIcWQVvWQXJ695lgGEbkWhloyTUhlwYSKQQWiUh3XgENdOsnHIkUt4zNcm1iOT30lVAxMMMwjD1duUoiog3D2AvM4CoN5LITFQLjReQblmUOysvLH6JEBoQjkd4iQn5+fr3WujoUCh2NxWJVWuv9wNvk6MOz/wM32eEBROIeDwAAAABJRU5ErkJggg==" />
                            </div>
                            <div class="details">
                                <div class="fixed-height">
                                    <div class="name">Michael Dekker</div>
                                    <div class="username">mdekker</div>
                                </div>
                                <div class="info">NL - 19,239 words</div>
                                <div class="position">#81</div>
                            </div>
                        </div>
                        <div class="col-md-2 contributor simple-contributor">
                            <div class="avatar">
                                <img src="https://crowdin-static.downloads.crowdin.com/avatar/13689077/large/36362ca89d5ac8c21098543e8a57f298.jpg" />
                            </div>
                            <div class="details">
                                <div class="fixed-height">
                                    <div class="name">prestashop_9331</div>
                                    <div class="username">prestashop_9331</div>
                                </div>
                                <div class="info">AE - 16,843 words</div>
                                <div class="position">#82</div>
                            </div>
                        </div>
                    </div>
                    <!-- !!!insert dynamic content!!!  ADVENTURER  => 4 per row-->
                    <div class="step adventurer">
                        <div class="col-md-10 title adventurer">
                            Adventurer (&gt;5K)
                        </div>
                        <div class="col-md-2 contributor simple-contributor offset-md-1">
                            <div class="avatar">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjUwIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iNTAiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSI1MCIKICAgdGlmZjpJbWFnZUxlbmd0aD0iNTAiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LzEiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LzEiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjMtMTIt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" />
                            </div>
                            <div class="details">
                                <div class="fixed-height">
                                    <div class="name">Bogdan Paul Vasile</div>
                                    <div class="username">bogdanpv</div>
                                </div>
                                <div class="info">RO - 8,467 words</div>
                                <div class="position">#145</div>
                            </div>
                        </div>
                        <div class="col-md-2 contributor simple-contributor">
                            <div class="avatar">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjUwIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iNTAiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSI1MCIKICAgdGlmZjpJbWFnZUxlbmd0aD0iNTAiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LzEiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LzEiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjMtMTIt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" />
                            </div>
                            <div class="details">
                                <div class="fixed-height">
                                    <div class="name">starnova13</div>
                                    <div class="username">starnova13</div>
                                </div>
                                <div class="info">NO - 8,460 words</div>
                                <div class="position">#146</div>
                            </div>
                        </div>
                        <div class="col-md-2 contributor simple-contributor">
                            <div class="avatar">
                                <img src="https://www.gravatar.com/avatar/35537dc2c007e36b18845f2be0920a26?s=260&amp;d=https%3A%2F%2Fcrowdin.com%2Fimages%2Fuser-picture.png" />
                            </div>
                            <div class="details">
                                <div class="fixed-height">
                                    <div class="name">Nikolaos Papapanagiotou</div>
                                    <div class="username">nikolaosp</div>
                                </div>
                                <div class="info">GR - 8,416 words</div>
                                <div class="position">#147</div>
                            </div>
                        </div>
                        <div class="col-md-2 contributor simple-contributor">
                            <div class="avatar">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjUwIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iNTAiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSI1MCIKICAgdGlmZjpJbWFnZUxlbmd0aD0iNTAiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LzEiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LzEiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjMtMTIt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" />
                            </div>
                            <div class="details">
                                <div class="fixed-height">
                                    <div class="name">Sretko Devič</div>
                                    <div class="username">Chico</div>
                                </div>
                                <div class="info">SI - 8,363 words</div>
                                <div class="position">#148</div>
                            </div>
                        </div>
                    </div>
                    <!-- !!!insert dynamic content!!!  BACKPACKER => 4 per row -->
                    <div class="step backpacker">
                        <div class="col-md-10 title backpacker">
                            Backpacker (&gt;2.5K)
                        </div>
                        <div class="col-md-2 contributor simple-contributor offset-md-1">
                            <div class="avatar">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjUwIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iNTAiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSI1MCIKICAgdGlmZjpJbWFnZUxlbmd0aD0iNTAiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LzEiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LzEiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjMtMTIt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" />
                            </div>
                            <div class="details">
                                <div class="fixed-height">
                                    <div class="name">Wilfred Suárez</div>
                                    <div class="username">skychrome</div>
                                </div>
                                <div class="info">PE - 4,965 words</div>
                                <div class="position">#189</div>
                            </div>
                        </div>
                        <div class="col-md-2 contributor simple-contributor">
                            <div class="avatar">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjUwIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iNTAiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSI1MCIKICAgdGlmZjpJbWFnZUxlbmd0aD0iNTAiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LzEiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LzEiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjMtMTIt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" />
                            </div>
                            <div class="details">
                                <div class="fixed-height">
                                    <div class="name">Wilfred Suárez</div>
                                    <div class="username">skychrome</div>
                                </div>
                                <div class="info">PE - 4,965 words</div>
                                <div class="position">#190</div>
                            </div>
                        </div>
                        <div class="col-md-2 contributor simple-contributor">
                            <div class="avatar">
                                <img src="https://crowdin-static.downloads.crowdin.com/avatar/13821015/large/b5691f8b24a31c718185dcb0ff625349.jpeg" />
                            </div>
                            <div class="details">
                                <div class="fixed-height">
                                    <div class="name">Oaes Kuruni</div>
                                    <div class="username">oaes</div>
                                </div>
                                <div class="info">BD - 4,962 words</div>
                                <div class="position">#191</div>
                            </div>
                        </div>
                        <div class="col-md-2 contributor simple-contributor">
                            <div class="avatar">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAEs2lUWHRYTUw6Y29tLmFkb2JlLnhtcAAAAAAAPD94cGFja2V0IGJlZ2luPSLvu78iIGlkPSJXNU0wTXBDZWhpSHpyZVN6TlRjemtjOWQiPz4KPHg6eG1wbWV0YSB4bWxuczp4PSJhZG9iZTpuczptZXRhLyIgeDp4bXB0az0iWE1QIENvcmUgNS41LjAiPgogPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4KICA8cmRmOkRlc2NyaXB0aW9uIHJkZjphYm91dD0iIgogICAgeG1sbnM6ZXhpZj0iaHR0cDovL25zLmFkb2JlLmNvbS9leGlmLzEuMC8iCiAgICB4bWxuczp0aWZmPSJodHRwOi8vbnMuYWRvYmUuY29tL3RpZmYvMS4wLyIKICAgIHhtbG5zOnBob3Rvc2hvcD0iaHR0cDovL25zLmFkb2JlLmNvbS9waG90b3Nob3AvMS4wLyIKICAgIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIKICAgIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIgogICAgeG1sbnM6c3RFdnQ9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZUV2ZW50IyIKICAgZXhpZjpQaXhlbFhEaW1lbnNpb249IjUwIgogICBleGlmOlBpeGVsWURpbWVuc2lvbj0iNTAiCiAgIGV4aWY6Q29sb3JTcGFjZT0iMSIKICAgdGlmZjpJbWFnZVdpZHRoPSI1MCIKICAgdGlmZjpJbWFnZUxlbmd0aD0iNTAiCiAgIHRpZmY6UmVzb2x1dGlvblVuaXQ9IjIiCiAgIHRpZmY6WFJlc29sdXRpb249Ijk2LzEiCiAgIHRpZmY6WVJlc29sdXRpb249Ijk2LzEiCiAgIHBob3Rvc2hvcDpDb2xvck1vZGU9IjMiCiAgIHBob3Rvc2hvcDpJQ0NQcm9maWxlPSJzUkdCIElFQzYxOTY2LTIuMSIKICAgeG1wOk1vZGlmeURhdGU9IjIwMjMtMTIt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" />
                            </div>
                            <div class="details">
                                <div class="fixed-height">
                                    <div class="name">warface</div>
                                    <div class="username">warface</div>
                                </div>
                                <div class="info">IR - 4,914 words</div>
                                <div class="position">#192</div>
                            </div>
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
    <!-- !!!insert dynamic content!!! FOR 10 FIRST TRANSLATIONS LANGUAGES-->
    <div class="col-md-8">
        <div class="row">
            <div class="col-md-5 translation-progress">
                <div class="position">#01</div>
                <div class="flag-line">
                    <img src="/public/assets/img/flags/CAT.png" class="flag" /><span class="name">Catalan</span><span class="percent">99%</span>
                </div>
                <div class="progress">
                    <div class="value"></div>
                </div>
            </div>
            <div class="col-md-5 translation-progress">
                <div class="position">#02</div>
                <div class="flag-line">
                    <img src="/public/assets/img/flags/CN.png" class="flag" /><span class="name">Chinese
                        Simplified</span><span class="percent">99%</span>
                </div>
                <div class="progress">
                    <div class="value" style="width: 99%"></div>
                </div>
            </div>
            <div class="col-md-5 translation-progress">
                <div class="position">#03</div>
                <div class="flag-line">
                    <img src="/public/assets/img/flags/TW.png" class="flag" /><span class="name">Chinese
                        Traditional</span><span class="percent">99%</span>
                </div>
                <div class="progress">
                    <div class="value" style="width: 99%"></div>
                </div>
            </div>
            <div class="col-md-5 translation-progress">
                <div class="position">#04</div>
                <div class="flag-line">
                    <img src="/public/assets/img/flags/CZ.png" class="flag" /><span class="name">Czech</span><span class="percent">99%</span>
                </div>
                <div class="progress">
                    <div class="value" style="width: 99%"></div>
                </div>
            </div>
            <div class="col-md-5 translation-progress">
                <div class="position">#05</div>
                <div class="flag-line">
                    <img src="/public/assets/img/flags/NL.png" class="flag" /><span class="name">Dutch</span><span class="percent">99%</span>
                </div>
                <div class="progress">
                    <div class="value" ></div>
                </div>
            </div>
            <div class="col-md-5 translation-progress">
                <div class="position">#06</div>
                <div class="flag-line">
                    <img src="/public/assets/img/flags/US.png" class="flag" /><span class="name">English</span><span class="percent">99%</span>
                </div>
                <div class="progress">
                    <div class="value" ></div>
                </div>
            </div>
            <div class="col-md-5 translation-progress">
                <div class="position">#07</div>
                <div class="flag-line">
                    <img src="/public/assets/img/flags/FR.png" class="flag" /><span class="name">French</span><span class="percent">99%</span>
                </div>
                <div class="progress">
                    <div class="value" ></div>
                </div>
            </div>
            <div class="col-md-5 translation-progress">
                <div class="position">#08</div>
                <div class="flag-line">
                    <img src="/public/assets/img/flags/GR.png" class="flag" /><span class="name">Greek</span><span class="percent">99%</span>
                </div>
                <div class="progress">
                    <div class="value" ></div>
                </div>
            </div>
            <div class="col-md-5 translation-progress">
                <div class="position">#09</div>
                <div class="flag-line">
                    <img src="/public/assets/img/flags/HU.png" class="flag" /><span class="name">Hungarian</span><span class="percent">99%</span>
                </div>
                <div class="progress">
                    <div class="value" ></div>
                </div>
            </div>
            <div class="col-md-5 translation-progress">
                <div class="position">#10</div>
                <div class="flag-line">
                    <img src="/public/assets/img/flags/IT.png" class="flag" /><span class="name">Italian</span><span class="percent">99%</span>
                </div>
                <div class="progress">
                    <div class="value"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- TOGGLE SEE MORE / SEE LESS -->
    <div class="col-md-8 see-more text-center" id="translations">
        <span id="more-translations" class="more">See more</span><span id="less-translations" class="less d-none">See
            less</span>
    </div>
    <!-- !!!insert dynamic content!!! FOR 10 SECOND TRANSLATIONS LANGUAGES -->
    <div class="col-md-8 d-none" id="rest-of-translations">
        <div class="row justify-content-center align-items-center">

            <div class="col-md-5 translation-progress">
                <div class="position">#11</div>
                <div class="flag-line">
                    <img src="/public/assets/img/flags/KR.png" class="flag" /><span class="name">Korean</span><span class="percent">99%</span>
                </div>
                <div class="progress">
                    <div class="value" style="width: 99%"></div>
                </div>
            </div>
            <div class="col-md-5 translation-progress">
                <div class="position">#12</div>
                <div class="flag-line">
                    <img src="/public/assets/img/flags/LT.png" class="flag" /><span class="name">Lithuanian</span><span class="percent">99%</span>
                </div>
                <div class="progress">
                    <div class="value" style="width: 99%"></div>
                </div>
            </div>
            <div class="col-md-5 translation-progress">
                <div class="position">#13</div>
                <div class="flag-line">
                    <img src="/public/assets/img/flags/IR.png" class="flag" /><span class="name">Persian</span><span class="percent">99%</span>
                </div>
                <div class="progress">
                    <div class="value" style="width: 99%"></div>
                </div>
            </div>
            <div class="col-md-5 translation-progress">
                <div class="position">#14</div>
                <div class="flag-line">
                    <img src="/public/assets/img/flags/PL.png" class="flag" /><span class="name">Polish</span><span class="percent">99%</span>
                </div>
                <div class="progress">
                    <div class="value" style="width: 99%"></div>
                </div>
            </div>
            <div class="col-md-5 translation-progress">
                <div class="position">#15</div>
                <div class="flag-line">
                    <img src="/public/assets/img/flags/PT.png" class="flag" /><span class="name">Portuguese</span><span class="percent">99%</span>
                </div>
                <div class="progress">
                    <div class="value" style="width: 99%"></div>
                </div>
            </div>
            <div class="col-md-5 translation-progress">
                <div class="position">#16</div>
                <div class="flag-line">
                    <img src="/public/assets/img/flags/BR.png" class="flag" /><span class="name">Portuguese,
                        BR</span><span class="percent">99%</span>
                </div>
                <div class="progress">
                    <div class="value" style="width: 99%"></div>
                </div>
            </div>
            <div class="col-md-5 translation-progress">
                <div class="position">#17</div>
                <div class="flag-line">
                    <img src="/public/assets/img/flags/RO.png" class="flag" /><span class="name">Romanian</span><span class="percent">99%</span>
                </div>
                <div class="progress">
                    <div class="value" style="width: 99%"></div>
                </div>
            </div>
            <div class="col-md-5 translation-progress">
                <div class="position">#18</div>
                <div class="flag-line">
                    <img src="/public/assets/img/flags/SK.png" class="flag" /><span class="name">Slovak</span><span class="percent">99%</span>
                </div>
                <div class="progress">
                    <div class="value" style="width: 99%"></div>
                </div>
            </div>
            <div class="col-md-5 translation-progress">
                <div class="position">#19</div>
                <div class="flag-line">
                    <img src="/public/assets/img/flags/ES.png" class="flag" /><span class="name">Spanish</span><span class="percent">99%</span>
                </div>
                <div class="progress">
                    <div class="value" style="width: 99%"></div>
                </div>
            </div>
            <div class="col-md-5 translation-progress">
                <div class="position">#20</div>
                <div class="flag-line">
                    <img src="/public/assets/img/flags/UA.png" class="flag" /><span class="name">Ukrainian</span><span class="percent">99%</span>
                </div>
                <div class="progress">
                    <div class="value" style="width: 99%"></div>
                </div>
            </div>
        </div>
        <!-- !!!insert dynamic content!!! FOR THE REST OF LANGUAGES 4 per row -->
        <div class="row">
            <div class="text-md-center col-xs-2 small-flag offset-md-1">
                <img src="/public/assets/img/flags/DK.png" class="flag" />
                <div class="name">Danish</div>
                <div class="percent">98%</div>
            </div>
            <div class="text-md-center col-xs-2 small-flag">
                <img src="/public/assets/img/flags/EE.png" class="flag" />
                <div class="name">Estonian</div>
                <div class="percent">98%</div>
            </div>
            <div class="text-md-center col-xs-2 small-flag">
                <img src="/public/assets/img/flags/FI.png" class="flag" />
                <div class="name">Finnish</div>
                <div class="percent">98%</div>
            </div>
            <div class="text-md-center col-xs-2 small-flag">
                <img src="/public/assets/img/flags/DE.png" class="flag" />
                <div class="name">German</div>
                <div class="percent">98%</div>
            </div>
        </div>
    </div>
    <!-- FULLY TRANSLATED LANGUAGE -->
    <div class="col-md-10">
        <h2 class="text-center py-5">
            Fully translated language:
        </h2>
    </div>
    <!-- !!!insert dynamic content!!! FOR FULLY TRANSLATED LANGUAGE 4 PER ROW -->
    <div class="row">
        <div class="text-md-center col-md-2 full-flag offset-md-1"><img src="/public/assets/img/flags/CAT.png" class="flag">
            <div class="name">Catalan</div>
            <div class="progress">
                <div class="value"></div>
            </div>
            <div class="percent">100%</div>
        </div>
        <div class="text-md-center col-md-2 full-flag"><img src="/public/assets/img/flags/CZ.png" class="flag">
            <div class="name">Czech</div>
            <div class="progress">
                <div class="value"></div>
            </div>
            <div class="percent">100%</div>
        </div>
        <div class="text-md-center col-md-2 full-flag"><img src="/public/assets/img/flags/NL.png" class="flag">
            <div class="name">Dutch</div>
            <div class="progress">
                <div class="value"></div>
            </div>
            <div class="percent">100%</div>
        </div>
        <div class="text-md-center col-md-2 full-flag"><img src="/public/assets/img/flags/US.png" class="flag">
            <div class="name">English</div>
            <div class="progress">
                <div class="value"></div>
            </div>
            <div class="percent">100%</div>
        </div>
        <div class="text-md-center col-md-2 full-flag offset-md-1"><img src="/public/assets/img/flags/FR.png" class="flag">
            <div class="name">French</div>
            <div class="progress">
                <div class="value"></div>
            </div>
            <div class="percent">100%</div>
        </div>
        <div class="text-md-center col-md-2 full-flag"><img src="/public/assets/img/flags/HU.png" class="flag">
            <div class="name">Hungarian</div>
            <div class="progress">
                <div class="value"></div>
            </div>
            <div class="percent">100%</div>
        </div>
        <div class="text-md-center col-md-2 full-flag"><img src="/public/assets/img/flags/IR.png" class="flag">
            <div class="name">Persian</div>
            <div class="progress">
                <div class="value"></div>
            </div>
            <div class="percent">100%</div>
        </div>
        <div class="text-md-center col-md-2 full-flag"><img src="/public/assets/img/flags/SK.png" class="flag">
            <div class="name">Slovak</div>
            <div class="progress">
                <div class="value"></div>
            </div>
            <div class="percent">100%</div>
        </div>
        <div class="text-md-center col-md-2 full-flag offset-md-1"><img src="/public/assets/img/flags/ES.png" class="flag">
            <div class="name">Spanish</div>
            <div class="progress">
                <div class="value"></div>
            </div>
            <div class="percent">100%</div>
        </div>
        <div class="text-md-center col-md-2 full-flag"><img src="/public/assets/img/flags/UA.png" class="flag">
            <div class="name">Ukrainian</div>
            <div class="progress">
                <div class="value"></div>
            </div>
            <div class="percent">100%</div>
        </div>
    </div>
</div>