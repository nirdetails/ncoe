<?php
  if (!isset($_SESSION["alindex"])){
    redirect('/');
  }
?>
<div class="text-notice mb-5">
	<h2>Your application has been submitted successfully! Click the below link to download the PDF of your application.</h2>
</div>


<div class="row button-submit">
    <a href="<?php echo site_url(); ?>pages/view/afterload" class="btn btn-info" style="width: 15%; height: 3em; font-size: 20px; " target="_blank">Download PDF</a>
</div>
<br>
<div class="row button-submit">
    <a href="<?php echo site_url(); ?>" class="btn btn-success" style="width: 15%; height: 3em; font-size: 20px; ">Home</a>
</div>