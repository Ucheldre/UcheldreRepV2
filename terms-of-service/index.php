<!-- Display all errors -->
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!doctype html>
<html lang="en">
<head>
	<!-- Base tag to allow for debug -->
    <?php include '../includes/baseTag.php'; ?>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Title & Favicon -->
	<title>Cubex Cloud Hosting | Home</title>
	<link rel="icon" href="assets/images/favicon.ico" type="image/webp">

	<!-- Meta Description for SEO -->
	<meta name="description"
		content="Cubex Cloud Hosting offers powerful and reliable cloud-based PocketMine-MP server hosting for Minecraft Bedrock Edition. Start your server in seconds with blazing performance.">
	<meta name="keywords"
		content="Cubex Hosting, Minecraft Bedrock hosting, PocketMine-MP, MCBE servers, affordable Minecraft hosting, Cubex Cloud, game server hosting, MCPE servers">

	<!-- Theme Color -->
	<meta name="theme-color" content="#01b9dd">

	<!-- Open Graph / Facebook -->
	<meta property="og:title" content="Cubex Cloud Hosting" />
	<meta property="og:description"
		content="Powerful and reliable cloud-based PocketMine-MP server hosting for Minecraft Bedrock Edition." />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://cubex.cc/" />
	<meta property="og:image" content="https://cubex.cc/assets/images/icon.webp" />
	<meta property="og:image:alt" content="Cubex Cloud Hosting Logo" />
	<meta property="og:site_name" content="Cubex Cloud Hosting" />
	<meta property="og:locale" content="en_US" />

	<!-- Twitter Card -->
	<meta name="twitter:card" content="summary_large_image" />
	<meta name="twitter:title" content="Cubex Cloud Hosting" />
	<meta name="twitter:description"
		content="PocketMine-MP server hosting done right. Fast, reliable, and affordable Minecraft Bedrock hosting." />
	<meta name="twitter:image" content="https://cubex.cc/assets/images/icon.webp" />
	<meta name="twitter:image:alt" content="Cubex Cloud Hosting Logo" />

	<!-- Apple Touch / Icons -->
	<link rel="apple-touch-icon" sizes="180x180" href="assets/images/icon.webp">
	<link rel="mask-icon" href="assets/images/icon.webp" color="#01b9dd">

	<!-- Fonts & CSS -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
	<!-- Navbar -->
	 <?php include '../includes/navbar.php'; ?>
	<!-- Navbar End -->


	<!-- Header (Hero) -->
	 <?php include '../includes/heroHeader.php'; ?>

	<!-- tos Section -->
	<section id="tos" class="tos">
		<div class="container-fluid container-custom">
            <h1 class="text-center mb-5">Terms of Service</h1>
            
            <div class="tos-content">
                <h2>1. Acceptance of Terms</h2>
                <p>By accessing and using Cubex Cloud Hosting services, you agree to be bound by these Terms of Service. If you do not agree with any part of these terms, you may not use our services.</p>
                
                <h2>2. Service Description</h2>
                <p>Cubex Cloud Hosting provides PocketMine-MP server hosting services for Minecraft Bedrock Edition. We reserve the right to modify, suspend, or discontinue any aspect of our services at any time.</p>
                
                <h2>3. User Responsibilities</h2>
                <p>Users are responsible for:</p>
                <ul>
                    <li>Maintaining the security of their account credentials</li>
                    <li>All activities that occur under their account</li>
                    <li>Ensuring their server content complies with all applicable laws and regulations</li>
                    <li>Creating regular backups of their server data</li>
                </ul>
                
                <h2>4. Prohibited Activities</h2>
                <p>The following activities are strictly prohibited when using our services:</p>
                <ul>
                    <li>Violating any laws or regulations</li>
                    <li>Distributing malicious software</li>
                    <li>Attempting to gain unauthorized access to other servers or networks</li>
                    <li>Excessive resource usage that impacts other users</li>
                    <li>Hosting content that violates copyright or intellectual property rights</li>
                    <li>Using our services to distribute spam or engage in abusive behavior</li>
                </ul>
                
                <h2>5. Payment and Billing</h2>
                <p>All payments for our services are due in advance. We reserve the right to suspend or terminate services for accounts with outstanding balances. Refunds may be issued at our discretion and in accordance with our refund policy.</p>
                
                <h2>6. Service Availability and Performance</h2>
                <p>While we strive to maintain 99.9% uptime, we do not guarantee uninterrupted service. Scheduled maintenance will be announced in advance whenever possible. We are not responsible for performance issues caused by third-party plugins or modifications installed by users.</p>
                
                <h2>7. Data and Backups</h2>
                <p>We perform regular backups of server data; however, users are encouraged to create and maintain their own backups. We cannot guarantee the recovery of data in all circumstances.</p>
                
                <h2>8. Termination of Service</h2>
                <p>We reserve the right to suspend or terminate services for users who violate these Terms of Service. Upon termination, all user data may be deleted permanently.</p>
                
                <h2>9. Limitation of Liability</h2>
                <p>Our liability is limited to the amount paid by the user for our services. We are not responsible for indirect, consequential, or incidental damages arising from the use of our services.</p>
                
                <h2>10. Changes to Terms</h2>
                <p>We reserve the right to modify these Terms of Service at any time. Continued use of our services following any changes constitutes acceptance of the modified terms.</p>
                
                <h2>11. Minecraft EULA Compliance</h2>
                <p>Users must comply with the Minecraft End User License Agreement (EULA). This includes restrictions on monetization and prohibitions against selling in-game advantages that affect gameplay.</p>
                
                <h2>12. Content Ownership</h2>
                <p>Users retain ownership of the content they upload to their servers. By using our services, users grant us the right to host, store, and provide access to their content for the purpose of providing our services.</p>
                
                <h2>13. Governing Law</h2>
                <p>These Terms of Service shall be governed by and construed in accordance with the laws of the jurisdiction in which Cubex Cloud Hosting operates, without regard to its conflict of law provisions.</p>
                
                <div class="mt-5">
                    <p>Last updated: 18th April 2025</p>
                    <p>If you have any questions about these Terms of Service, please contact us through our support channels.</p>
                </div>
            </div>
		</div>
	</section>

	<!-- Footer -->
	 <?php include '../includes/footer.php'; ?>
	<!-- Footer End -->

	<!-- JavaScript Libraries -->
	<script src="https://code.jquery.com/jquery-3.6.1.min.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
		crossorigin="anonymous"></script>

	<!-- Custom JS for Smooth Scrolling Hot Servers and Live Chat -->
	<script src="assets/js/main.js"></script>
	<script src="assets/js/livechat.js"></script>

</body>

</html>