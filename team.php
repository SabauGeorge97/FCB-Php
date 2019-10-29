<?php 
define("TITLE", "TEAM | FCB");

include('includes/header.php'); 
?>

    <div id="team-members" class="cf">
        
        <h1>Our Team</h1>

        <p>The slogan of FC Barcelona football club is the famous <strong><em>Més que un club</strong></em> which is Catalan and means <strong><em>More than a club</em></strong> in English.</p>
        
        <hr>

      <?php foreach ($teamMembers as $member) { ?>
            
            <div class="member">
                <a href="https://www.fcbarcelona.com/en/football/first-team/players">
                    <img src="img/<?php echo $member["img"]; ?>.png" style="max-width:100%;height:auto;" alt="<?php echo $member["name"]; ?>">
                </a>
                <h6><?php echo $member["name"]; ?></h6>
                <p><strong><?php echo $member["position"]; ?><strong></p>
            </div><!-- member -->
        
        <?php } ?>    
    </div> <!-- team members -->

<?php include('includes/footer.php'); ?>