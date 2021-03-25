
<?php require_once('connect.php');?>

<?php $result = $conn->query($get_single_portfolio_item);?>

<div class="container box-shadox" id="container">
<div class="wrapper">
    <main>

        <div class="article spacing">




        <?php while($row = $result->fetch_assoc()) { ?>

            <h1><?php echo($row['case_title']);?></h1>

        
            <div class="heading-description">
                <p><a href="?p=work">&#8592; Tilbage til min portfolio</a></p>
            </div>


            <div class="grid col-2">
                <div>
                    <h2><?php echo($row['case_subtitle']);?></h2>
                    <div class="work-description">
                        <?php echo($row['case_text']);?>
                    </div>

                    <div class="links">
                    <p><a href="<?php echo($row['case_url_livesite']);?>">Gå til live site &#8594;</a></p>
                    <p><a href="<?php echo($row['case_url_github']);?>">Se kildekoden på github &#8594;</a></p>
                </div>
                </div>
                <img src="img/<?php echo($row['case_id']);?>.png" class="full-size" alt="">
            
            </div>


            

        </div>


        <div class="action">
            <nav>
                <ul>
                <a href="files/Marcus-CV-2021.pdf" class="nav-btn-white-outlined">
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

<?php } ?>