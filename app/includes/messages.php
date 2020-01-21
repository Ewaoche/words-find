

<?php if(isset($_SESSION['message'])):?>
<div class="msg <?php echo $_SESSION['type']?>">
  <li><?php echo $_SESSION['message']?></li>
  <button  onclick="closeMessage()">close</button>
  <?php
  unset($_SESSION['message']);
  unset($_SESSION['type']);
  ?>
</div>
<?php endif;?>

<script>
function closeMessage(){
  window.location.reload();
}
</script>