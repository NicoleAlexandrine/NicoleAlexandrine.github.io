<?php
$currentpage = ''; // Initialize the variable with an empty string

// Get the current page URL
$currentURL = $_SERVER['REQUEST_URI'];

// Check if the current URL matches a specific page and set the value for $currentpage accordingly
if (strpos($currentURL, '/home') == true) {
    $currentpage = 'home';
} elseif (strpos($currentURL, '/about') == true || strpos($currentURL, '/barangays') == true || strpos($currentURL, '/department') == true) {
    $currentpage = 'about';
} elseif (strpos($currentURL, '/officials') == true || strpos($currentURL, '/fulldisc') == true) {
    $currentpage = 'officials';
} elseif (strpos($currentURL, '/careers') == true) {
    $currentpage = 'careers';
} elseif (strpos($currentURL, '/invest') == true) {
    $currentpage = 'invest';
} elseif (strpos($currentURL, '/contact') == true) {
    $currentpage = 'contact';
}

// Rest of your code
?>
<style>
	/*-------------------- the styles are on the stylesheet.css
-------- NAVBAR --------
 --------------------*/
	/* .navbar-brand {
		font-family: 'Yellowtail', sans-serif;
		font-size: 35px;
		padding-right: 10px;
		padding-left: 20px;
		color: #124A2F !important;
	}

	.navi {
		padding-right: 30px !important;
		padding-left: 30px !important;
		font-size: 18px !important;
		color: #124A2F !important;
		font-family: 'Poppins'
	} */

	/* .drop {
		background-color: #124A2F !important;
		transition: none !important;
	}

	.drop a:hover {
		color: #124A2F !important;
		background-color: #fff;
	} */
</style>

<!-- NavBar Start -->
<nav class="stroke navbar navbar-expand-sm navbar-light fixed-top"
	style="background-color: rgba(255, 255, 255, 1); box-shadow: 0 0 5px 0 rgba(0, 0, 0, 0.1); ">
	<div class="container-fluid container-xl d-flex align-items-center justify-content-between">
		<a class="navbar-brand" href="#" style="color: #666666 !important">
			<img src="assets/img/binanlogo.png" alt="" width="45px" height="45px" class="d-inline-block align-text-top">&nbsp;&nbsp;Biñan City
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-center" id="navbarSupportedContent">
			<ul class="navbar-nav ms-auto">
				<li class="nav-item fw-bold"><a class="navi nav-link text-success <?php echo ($currentpage == 'home') ? 'active' : ''; ?>"
						href="<?= base_url('/home') ?>" >HOME</a>
				<li class="nav-item fw-bold dropdown">
					<a class="navi nav-link dropdown-toggle text-success <?php echo ($currentpage == 'about'|| $currentpage == 'barangays'|| $currentpage == 'department') ? 'active' : ''; ?>" href="<?= base_url('/about') ?>" href="#" id="navbarDropdown" role="button"
						data-bs-toggle="dropdown" aria-expanded="false">
						ABOUT
					</a>
					<ul class="dropdown-menu drop" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item text-white" href="<?= base_url('/history') ?>">History</a></li>
						<li><a class="dropdown-item text-white" href="<?= base_url('/about') ?>">Mission & Vision</a></li>
						<li><a class="dropdown-item text-white" href="<?= base_url('/barangays') ?>">Barangays</a></li>
						<li>
							<hr class="dropdown-divider">
						</li>
						<li><a class="dropdown-item text-white" href="<?= base_url('/department') ?>">Departments</a></li>
						<li><a class="dropdown-item text-white" href="<?= base_url('/about') ?>">Maps</a></li>
					</ul>
				</li>
				<li class="nav-item fw-bold dropdown">
					<a class="navi nav-link dropdown-toggle text-success <?php echo ($currentpage == 'officials'|| $currentpage == 'fulldisc') ? 'active' : ''; ?>" href="#" id="navbarDropdown" role="button"
						data-bs-toggle="dropdown" aria-expanded="false">
						TRANSPARENCY
					</a>
					<ul class="dropdown-menu drop" aria-labelledby="navbarDropdown">
						<li><a id="orgchartpdf" class="dropdown-item text-white" href="">Organizational Chart</a></li>
						<li><a class="dropdown-item text-white" href="<?= base_url('/officials') ?>">City Officials</a></li>
						<li><a class="dropdown-item text-white" href="<?= base_url('/fulldisc') ?>">Full Disclosure Policy</a></li>
					</ul>
				</li>
				<li class="nav-item fw-bold"><a class="navi nav-link text-success <?php echo ($currentpage == 'careers') ? 'active' : ''; ?>"
						href="<?= base_url('/careers') ?>">CAREERS</a></li>
				<li class="nav-item fw-bold"><a class="navi nav-link text-success <?php echo ($currentpage == 'invest') ? 'active' : ''; ?>"
						href="<?= base_url('/invest') ?>">INVEST</a></li>
				<li class="nav-item fw-bold"><a class="navi nav-link text-success <?php echo ($currentpage == 'contact') ? 'active' : ''; ?>"
						href="<?= base_url('/contact') ?>">CONTACT</a></li>
			</ul>
		</div>
	</div>
</nav>
<script>
document.getElementById('orgchartpdf').addEventListener('click', function() {
  // Replace 'path/to/your/organizational_chart.pdf' with the actual path to your organizational chart PDF file
  const pdfUrl = '<?= base_url('assets/BCH-Organizational-Chart-as-of-February-15-2023.pdf') ?>';

  // Create an anchor element
  const anchor = document.createElement('a');
  anchor.href = pdfUrl;

  // Add some attributes to the anchor element to make it hidden and trigger the download
  anchor.style.display = 'none';
  anchor.target = '_blank'; // Open the PDF in a new tab

  // Append the anchor element to the document
  document.body.appendChild(anchor);

  // Simulate a click on the anchor element to open the PDF
  anchor.click();

  // Clean up: remove the anchor element from the document
  document.body.removeChild(anchor);
});
</script>
<!-- NavBar End -->