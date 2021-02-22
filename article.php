<?php $result = $conn->query($get_single_portfolio_item);?>

<div id="to-container"></div>
<div class="scroll-spacing-helper"></div>
<div class="container box-shado" id="container">
<div class="wrapper">
    <main>

        <div class="article spacing">




        <?php while($row = $result->fetch_assoc()) { ?>

            <h1><?php echo($row['case_title']);?></h1>

        
            <div class="heading-description">
                <p>Læs mere om projektet nedenfor.</p>
                <p><a href="?p=work">&#8592; Tilbage til min portfolio</a></p>
            </div>


            <div class="grid col-2">
                <img src="img/<?php echo($row['case_id']);?>.png" class="full-size" alt="">
                <div>
                    <h2><?php echo($row['case_subtitle']);?></h2>
                    <?php echo($row['case_text']);?>
                    <p><a href="<?php echo($row['case_url_livesite']);?>">Gå til live site &#8594;</a></p>

                <p><a href="<?php echo($row['case_url_github']);?>">Se kildekoden på github &#8594;</a></p>
                </div>
            </div>


            <?php } ?>

        </div>


        <div class="action spacing">
            <nav>
                <ul>
                    <a href="index.php" class="nav-btn-white-outlined">
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