<?php $result = $conn->query($get_all_featured_items);

if (isset($_GET['no-header'])) {
} else {
    include('full-cover-header.php');
}

?>

<div class="cover">
    <div class="wrapper">
                <div class="work spacing">
    
                    <h2>Fremhævet arbejde</h2>
                    <div class="heading-description">
                        <p>Her ser du udvalgte projekter, som jeg er mest tilfreds med.
                        <p><a href="?p=work">Se hele min portfolio &#8594;</a></p>
                    </div>
    
                    <div class="grid">
                        <?php while ($row = $result->fetch_assoc()) { ?>
                            <a href="?p=case&id=<?php echo ($row['case_id']); ?>" class="card-link">
                                <div class="card work">
                                    <div class="img" style="background: url('img/<?php echo ($row['case_id']); ?>.png');
                                            background-position: top center;
                                            background-repeat: no-repeat;
                                            background-size: cover;"></div>
                                    <div class="caption">
                                        <h3><?php echo ($row['case_title']); ?></h3>
                                        <p><?php echo ($row['case_caption']); ?></p>
                                        <span>Læs mere &#8594;</span>
                                    </div><!-- caption -->
                                </div><!-- card -->
                            </a><!-- link wrap -->
    
                        <?php } ?>
                    </div>
    
                </div>
    
            <div class="scroll-arrow">
    
                <a href="#to-container">
                    <div class="icon cover-icon">
                        <div class="triangle"></div>
                    </div>
                </a>
    
            </div>
    </div>
</div>

<div class="cover">
    <div class="wrapper">
    <div class="skills spacing">
        <h2>Mine færdigheder</h2>
        <div class="heading-description">
            <p>Her er de teknologier jeg er nået længst med.</p>
        </div>
        <div class="grid">
            <div class="card">
                <div class="icon css"></div><!-- skal laves mindre filstørrelse -->
                <h3>HTML & CSS</h3>
                <p>Jeg har arbejdet med statisk web i min fritid i mange år, det sidder derfor allerede på rygraden.</p>
            </div>
            <div class="card">
                <div class="icon js"></div><!-- skal laves mindre filstørrelse -->
                <h3>JavaScript</h3>
                <p>Her kan jeg det fundamentale, og har for eksempel lavet et fire på stribe spil.</p>
            </div>
            <div class="card">
                <div class="icon php"></div><!-- skal laves mindre filstørrelse -->
                <h3>PHP & MySQL</h3>
                <p>Jeg kan forbinde til databaser. Behandle data i php. Og så kan jeg oprette simple tabeller.</p>
            </div>
        </div>
        <p class="more">Derudover har jeg blandt andet, kendskab til Swift, Sass, Wordpress, Git, Photoshop med mere.</p>
    </div>
    <!--
        <div class="action">
            <nav>
                <ul>
                    <a href="files/Marcus-CV-2021.pdf">
                        <li>Hent CV</li>
                    </a>
                    <a href="mailto:hello@marcusklausen.dk" class="filled">
                        <li>Send mig en email</li>
                    </a>
                </ul>
            </nav>
        </div>-->

</div>
</div>

</div>