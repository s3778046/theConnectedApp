<?php   include("./inc/header.php");  ?>
<main>   
    <section class="registration">
        <div class="registration-wrapper">
            <div class="tab">
                <button class="tablinks active" onclick="openTab(event, 'users')">user registration</button>
                <button class="tablinks" onclick="openTab(event, 'services')">service provider registration</button>
            </div>

            <div id="users" class="tabcontent user">
                <div class="container">
                    <h2>User Registration Form</h2>
                    <?php include("inc/userRegistration.php"); ?>
                </div>
            </div>

            <div id="services" class="tabcontent">
                <div class="container">
                    <h2>Service Provider Registration Form</h2>
                    <?php include("inc/servicesRegistration.php"); ?>
                </div>
            </div>
        </div>
</section>
</main>
<?php   include("./inc/footer.php");  ?>