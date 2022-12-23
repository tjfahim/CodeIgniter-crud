<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
            <div class="d-flex justify-content-between mt-4">
            <div class="">                <h4 class="">Edit Data</h4>
</div>
                <div class="">
                    <a href="<?php echo base_url().'index.php/Studentcontroller/index' ?>" class="btn btn-primary">View</a>
                </div>

            </div>
             <form method="post" name="createStudent" action="<?php echo base_url().'index.php/Studentcontroller/edit/'.$student['id']?>">
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="<?php echo set_value('name',$student['name']) ?>" class="form-control mb-2">
                        <div class="text-danger"><?php ?></div>
                    </div>
                    <div class="form-group">
                        <label>Father Name</label>
                        <input type="text" name="father_name" value="<?php echo set_value('father_name',$student['father_name'])?>" class="form-control mb-2">
                         <div class="text-danger"><?php echo form_error('father_name')?></div>

                    </div>
                    <div class="form-group">
                        <label>Mother Name</label>
                        <input type="text" name="mother_name" value="<?php echo set_value('mother_name',$student['mother_name'])?>" class="form-control mb-2">
                         <div class="text-danger"><?php echo form_error('mother_name')?></div>

                    </div>
                    <div class="form-group">
                        <label>Father Phone</label>
                        <input type="number" name="father_phone" value="<?php echo set_value('father_phone',$student['father_phone'])?>" class="form-control mb-2">
                         <div class="text-danger"><?php echo form_error('father_phone')?></div>

                    </div>
                    <div class="form-group">
                        <label>Blood Group</label>
                        <input type="text" name="blood_group" value="<?php echo set_value('blood_group',$student['blood_group'])?>" class="form-control mb-2">
                         <div class="text-danger"><?php echo form_error('blood_group')?></div>

                    </div>
                    
                    <div class="form-group">
                        <label>Birth Date</label>
                        <input type="text" name="birth_date" value="<?php echo set_value('birth_date',$student['birth_date'])?>" class="form-control mb-2">
                         <div class="text-danger"><?php echo form_error('birth_date')?></div>

                    </div>
                    <div class="form-group">
                        <label>Zilla</label>
                        <input type="text" name="zilla" value="<?php echo set_value('zilla',$student['zilla'])?>" class="form-control mb-2">
                         <div class="text-danger"><?php echo form_error('zilla')?></div>

                    </div>
                    <div class="form-group">
                        <label>Present Address</label>
                        <input type="text" name="present_address" value="<?php echo set_value('present_address',$student['present_address'])?>" class="form-control mb-2">
                         <div class="text-danger"><?php echo form_error('present_address')?></div>

                    </div>
                    <div class="form-group">
                        <label>HSC College Name</label>
                        <input type="text" name="hsc_clg_name" value="<?php echo set_value('hsc_clg_name',$student['hsc_clg_name'])?>" class="form-control mb-2">
                         <div class="text-danger"><?php echo form_error('hsc_clg_name')?></div>

                    </div>
                    <div class="form-group">
                        <label>Photo</label>
                        <input type="file" name="photo" value="" class="mt-2" required>
                    </div>
                    <div class="form-group">
                        <label>Birth Certificate</label>
                        <input type="file" name="birth_certificate" value="" class="mt-2" required>
                    </div>
                    <div class="form-group">
                    <div class="d-flex justify-content mt-4 mb-3">

                    <button class="btn btn-primary">Update</button>
                        <div class="">
                    <a href="<?php echo base_url().'index.php/Studentcontroller/index' ?>" class="btn btn-secondary ml-3" style="margin-left: 15px;">Cancel</a>
                </div>
                </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>