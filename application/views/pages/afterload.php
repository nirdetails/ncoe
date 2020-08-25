<?php
  if (!isset($_SESSION["nic"])){
    redirect('/');
  }
?>
<!DOCTYPE html>
<html>
<body onload="myFunction()">

<script>
function myFunction() {
  var txt;
  if (confirm("Results Submitted Successfully! Please download the PDF")) {
    window.location.href = "<?php echo site_url(); ?>/pdfgen/pdf";
    target = "_blank";
  } else {
    window.location.href = "<?php echo site_url(); ?>/";
  }
  document.getElementById("demo").innerHTML = txt;
}
</script>

</body>
</html>