
<?php require APPROOT . '/views/inc/header.php'; ?>
  <div >
    <form method="POST" action="<?php echo URLROOT; ?>/people/add">
 
      <input type="hidden" name="id" value="<?php echo $id ;?>">


      <div class="form-group">
        <label>Name</label>
        <input class="form-control" type="text" name="name" >
      </div>

      <div class="form-group">
        <label>Nick name</label>
        <input class="form-control" type="text" name="nickname"  >
      </div>

      <div class="form-group">
        <label>Birthday</label>
        <input class="form-control" type="text" name="birth_day" >
      </div>

      <div class="form-group">
        <label>Native place</label>
        <input class="form-control" type="text" name="native_place">
      </div>

      <div class="form-group">
        <label>Gender</label>
        <input class="form-control" type="text" name="sex" >
      </div>

      <div class="form-group">
        <label>Ethnic</label>
        <input class="form-control" type="text" name="ethnic"  >
      </div>


      <div class="form-group">
        <label>ID card</label>
        <input class="form-control" type="text" name="id_card_no">
      </div>

     <div class="form-group">
        <label>Job</label>
        <input class="form-control" type="text" name="job">
      </div>

      <div class="form-group">
        <label>Job place</label>
        <input class="form-control" type="text" name="household_id">
      </div>

      <div class="form-group">
        <label>Householder relationship</label>
        <input class="form-control" type="text" name="householder_relationship">
      </div>


      <button type="submit" class="btn btn-primary">Submit</button>


    </form>
  </div>


<?php require APPROOT . '/views/inc/footer.php'; ?>