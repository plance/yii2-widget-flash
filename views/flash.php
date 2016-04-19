<?php $Session = \Yii::$app -> session; ?>

<?php if($Session -> hasFlash('success')): ?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <?php echo $Session -> getFlash('success'); ?>
</div>
<?php elseif($Session -> hasFlash('wrong')): ?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <?php echo $Session -> getFlash('wrong'); ?>
</div>
<?php endif; ?>