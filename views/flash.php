<?php $Session = Yii::$app -> session; ?>

<?php if($Session -> hasFlash('success')): ?>
<div class="<?php echo $this -> context -> classes['success'] ?>" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <?php echo $Session -> getFlash('success'); ?>
</div>
<?php elseif($Session -> hasFlash('wrong')): ?>
<div class="<?php echo $this -> context -> classes['wrong'] ?>" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <?php echo $Session -> getFlash('wrong'); ?>
</div>
<?php endif;