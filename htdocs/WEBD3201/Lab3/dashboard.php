<?php
$title = "Dashboard";
$file = "dashboard.php";
$description = "Lab #1 is captured in this page and demonstrates several skills using PHP, including: database set-up, user login functionality, and...";
$date = "October 2, 2020";

include "./includes/header.php";

// Redirect to sign-in page if a session has not been authorized
if (!$_SESSION) {
    $output .= "Sorry, you must be logged in to access that page.";
    setMessage($output, "success");
    redirect("sign-in.php");
}

?>
<h1 class="h2">Dashboard</h1>
<div class="container d-flex justify-content-center w-100">
    <h5 class="text-success w-50-lg px-5 py-2"><?php echo $message; ?></h5>
</div>

<div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">
        <button class="btn btn-sm btn-outline-secondary">Share</button>
        <button class="btn btn-sm btn-outline-secondary">Export</button>
    </div>
    <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        This week
    </button>
</div>
</div>

<h2>Section title</h2>
<p class="lead">Please see the sidebar to your left for a list of options you have access to.</p>

<?php
include "./includes/footer.php";
?>