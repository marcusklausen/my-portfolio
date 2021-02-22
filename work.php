<?php $result = $conn->query($get_all_portfolio_items);?>
            
<div id="to-container"></div>
<div class="scroll-spacing-helper"></div>
<div class="container box-shado" id="container">
<div class="wrapper">
    <main>

        <div class="work spacing">

            <h3>Min portfolio</h3>
            <div class="heading-description">
                <p>Her finder du alle mine projekter i kronologisk rækkefølge.</p>
                <p><a href="?p=home&no-header">&#8592; Tilbage til forsiden</a></p>
            </div>
            <div class="grid">

                <?php while($row = $result->fetch_assoc()) { ?>

                <a href="?p=case&id=<?php echo($row['case_id']);?>" class="card-link">
                    <div class="card work">
                        <div class="img" style="background: url('img/thumb_<?php echo($row['case_id']);?>.png');
                                        background-position: top center;
                                        background-repeat: no-repeat;
                                        background-size: cover;"></div>
                        <div class="caption">
                            <h4><?php echo($row['case_title']);?></h4>
                            <p><?php echo($row['case_caption']);?></p>
                            <span>Læs mere &#8594;</span>
                        </div><!-- caption -->
                    </div><!-- card -->
                </a><!-- link wrap -->
                <?php } ?>

        </div>

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