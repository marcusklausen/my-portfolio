<?php

if (isset($_GET['no-header'])) {
} else {
    include('full-cover-header.php');
}

?>

<div id="to-container"></div>
<div class="scroll-spacing-helper"></div>
<div class="container box-shadow">
<div class="wrapper">
    <main>

        <div class="work spacing">

            <h3>Fremhævet arbejde</h3>
            <div class="heading-description">
                <p>Her er mine seneste projekter fra Digital Media uddannelsen.
                <p><a href="?p=work">Se hele min portfolio &#8594;</a></p>
            </div>

            <div class="grid featured">
                <a href="?p=case&title=" class="card-link">
                    <div class="card work">
                        <div class="img" style="background: url('img/thumbs/my-portfolio2.png');
                                        background-position: top center;
                                        background-repeat: no-repeat;
                                        background-size: cover;"></div>
                        <div class="caption">
                            <h4>Min egen portfolio</h4>
                            <p>Min egen portfolio, lavet med html og css. 100% min egen kode.</p>
                            <span>Læs mere &#8594;</span>
                        </div><!-- caption -->
                    </div><!-- card -->
                </a><!-- link wrap -->

                <a href="?p=case&title=" class="card-link">
                    <div class="card work">
                        <div class="img" style="background: url('img/thumbs/springboard3.png');
                                    background-position: top center;
                                    background-repeat: no-repeat;
                                    background-size: cover;"></div>
                        <div class="caption">
                            <h4>Humac Springboard</h4>
                            <p>Blev brugt af værkstedspersonalet og kunne bl.a. udregne personale priser.</p>
                            <span>Læs mere &#8594;</span>
                        </div><!-- caption -->
                    </div><!-- card -->
                </a><!-- link wrap -->

                <a href="?p=case&title=" class="card-link">
                    <div class="card work">
                        <div class="img" style="background: url('img/thumbs/four-in-a-row.png');
                                    background-position: top center;
                                    background-repeat: no-repeat;
                                    background-size: cover;"></div>
                        <div class="caption">
                            <h4>Fire på stribe</h4>
                            <p>På Treehouse's JavaScript track, lavede jeg til sidst et fire på stribe spil, med egen kode.</p>
                            <span>Læs mere &#8594;</span>
                        </div><!-- caption -->
                    </div><!-- card -->
                </a><!-- link wrap -->
            </div><!-- flex / featured -->
        </div>


        <div class="skills spacing">
            <h3>Mine færdigheder</h3>
            <div class="heading-description">
                <p>Her er de teknologier jeg er nået længst med.</p>
            </div>
                <div class="grid">
                <div class="card">
                    <div class="icon css"></div><!-- skal laves mindre filstørrelse -->
                    <h4>HTML & CSS</h4>
                    <p>Jeg har arbejdet med statisk web i min fritid i mange år, det sidder derfor allerede på rygraden.</p>
                </div>
                <div class="card">
                    <div class="icon js"></div><!-- skal laves mindre filstørrelse -->
                    <h4>JavaScript</h4>
                    <p>Her kan jeg det fundamentale, og har for eksempel lavet et fire på stribe spil.</p>
                </div>
                <div class="card">
                    <div class="icon php"></div><!-- skal laves mindre filstørrelse -->
                    <h4>PHP & MySQL</h4>
                    <p>Jeg kan forbinde til databaser. Behandle data i php. Og så kan jeg oprette simple tabeller.</p>
                </div>
            </div>
            <p class="more">Derudover har jeg blandt andet, kendskab til Swift, Sass, Wordpress, Git, Photoshop med mere.</p>
        </div>

        <div class="action spacing">
            <nav>
                <ul class="flex wrap ma-center">
                    <a href="index.php">
                        <li>Hent CV</li>
                    </a>
                    <a href="mailto:hello@marcusklausen.dk" class="filled">
                        <li>Send mig en email</li>
                    </a>
                </ul>
            </nav>
        </div>

    </main>
    </div>
    