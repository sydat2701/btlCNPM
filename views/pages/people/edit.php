
<?php require APPROOT . '/views/inc/header.php'; ?>
<div class="row">

  <form method="POST" action="<?php echo URLROOT; ?>/people/edit/<?php echo $data->id?>">
    <div class="form-group">
        <label>Name</label>
        <input class="form-control" type="text" name="name" value="<?php echo $data->name?>">
      </div>

      <div class="form-group">
        <label>Nick name</label>
        <input class="form-control" type="text" name="nickname" value="<?php echo $data->nickname?>" >
      </div>

      <div class="form-group">
        <label>Birthday</label>
        <input class="form-control" type="text" name="birth_day" value="<?php echo $data->birth_day?>">
      </div>

      <div class="form-group">
        <label>Native place</label>
        <input class="form-control" type="text" name="native_place" value="<?php echo $data->native_place?>">
      </div>

      <div class="form-group">
        <label>Gender</label>
        <input class="form-control" type="text" name="sex" value="<?php echo $data->sex?>" >
      </div>

      <div class="form-group">
        <label>Ethnic</label>
        <input class="form-control" type="text" name="ethnic" value="<?php echo $data->ethnic?>" >
      </div>


      <div class="form-group">
        <label>ID card</label>
        <input class="form-control" type="text" name="id_card_no" value="<?php echo $data->id_card_no?>">
      </div>

     <div class="form-group">
        <label>Job</label>
        <input class="form-control" type="text" name="job" value="<?php echo $data->job?>">
      </div>

      <div class="form-group">
        <label>Job place</label>
        <input class="form-control" type="text" name="household_id" value="<?php echo $data->household_id?>">
      </div>

      <div class="form-group">
        <label>Householder relationship</label>
        <input class="form-control" type="text" name="householder_relationship" value="<?php echo $data->householder_relationship?>">
      </div>
    <button type="submit" class="btn btn-primary">Save change</button>
  </form>

</div>


<?php require APPROOT . '/views/inc/footer.php'; ?>