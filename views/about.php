<?php 

require __DIR__ . '/header.php';
require __DIR__ . '/db.php'; 

$statement = $pdo->prepare("SELECT * FROM about");
$statement->execute();
$about = $statement->fetchAll(PDO::FETCH_ASSOC);

$statement = $pdo->prepare("SELECT value FROM contact WHERE name=?");
$statement->execute(array('facebook'));
$fb = $statement->fetchColumn();

$statement = $pdo->prepare("SELECT value FROM contact WHERE name=?");
$statement->execute(array('twitter'));
$tw = $statement->fetchColumn();

$statement = $pdo->prepare("SELECT value FROM contact WHERE name=?");
$statement->execute(array('instgram'));
$ig = $statement->fetchColumn();

$statement = $pdo->prepare("SELECT value FROM contact WHERE name=?");
$statement->execute(array('phone'));
$phone = $statement->fetchColumn();

$statement = $pdo->prepare("SELECT value FROM contact WHERE name=?");
$statement->execute(array('address'));
$address = $statement->fetchColumn();

$statement = $pdo->prepare("SELECT value FROM contact WHERE name=?");
$statement->execute(array('email'));
$email = $statement->fetchColumn();
?>
<section class="about section">
    <div class="container">
        <div class="row mt-40">
            <div class="col-md-6">
                <img class="img-responsive" src="path_to_team_member_image.jpg" alt="Team Member Image">
            </div>
            <div class="col-md-6">
                <h2>About Our Team</h2>
                <!-- <p><?= htmlspecialchars($about[0]['about']) ?></p> -->
                
                <!-- Team Member 1 -->
                <div class="team-member">
                    <img src="path_to_team_member1_image.jpg" alt="Team Member 1">
                    <h3>Founder</h3>
                </div>
                
                <!-- Team Member 2 -->
                <div class="team-member">
                    <img src="path_to_team_member2_image.jpg" alt="Team Member 2">
                    <h3>Developer</h3>
                </div>
                
                <!-- Team Member 3 -->
                <div class="team-member">
                    <img src="path_to_team_member3_image.jpg" alt="Team Member 3">
                    <h3>Assistant</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<?php require __DIR__ . '/footer.php'; ?>