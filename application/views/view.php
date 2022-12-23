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

<?php
         $students=$this->db->get('student_from');
?>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            
            <div class="col-md-12">
            <div class="d-flex justify-content-between mt-4">
            <div class="">                <h4 class="">Student Data</h4>
</div>
                <div class="">
                    <a href="<?php echo base_url().'index.php/Studentcontroller/create' ?>" class="btn btn-primary">Create</a>
                </div>

            </div>

            <!-- <div class="row">
                <div class="col-md-12">
                    <?php
                    //  $success=$this->session->data('success');
                    // if($success!=""){
                        ?>
                    <div class="alert alert-success"><?php 
                    // echo $success?></div>
                    <?php 
                // } ?>
                    <
                    
                </div>
            </div> -->
            
               <div class="row">
                <div class="col-md-12">
                    <table class="table-striped table-sm">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Father Name</th>
                            <th>Mother Name</th>
                            <th>Father Phone</th>
                            <th>Blood Group</th>
                            <th>Birth Date</th>
                            <th>Zilla</th>
                            <th>Present Address</th>
                            <th>HSC College Name</th>
                            <th>Photo</th>
                            <th>Birth Certificate</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                        <?php 
                           

                        if(!empty($students)){foreach($students->result_array() as $data){?>

                            <tr>
                                <td><?php echo $data['id']?></td>
                                <td><?php echo $data['name']?></td>
                                <td><?php echo $data['father_name']?></td>
                                <td><?php echo $data['mother_name']?></td>
                                <td><?php echo $data['father_phone']?></td>
                                <td><?php echo $data['blood_group']?></td>
                                <td><?php echo $data['birth_date']?></td>
                                <td><?php echo $data['zilla']?></td>
                                <td><?php echo $data['present_address']?></td>
                                <td><?php echo $data['hsc_clg_name']?></td>
                                <td><?php echo $data['photo']?></td>
                                <td><?php echo $data['birth_certificate']?></td>
                                <td><a href="<?php echo base_url().'index.php/studentcontroller/edit/'.$data['id']?>" class="btn btn-secondary">Edit</a href=""></td>
                                <td><a href="<?php echo base_url().'index.php/studentcontroller/delete/'.$data['id']?>" class="btn btn-danger">Delete</a href=""></td>
                              
                            </tr>
                            <?php } } else { ?>
                           
                                <tr>
                                    <td colspan="10">no Record</td>
                                </tr>
                                <?php } ?>
                        
                        
                        
                    </table>
                
                </div>
               </div>
            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>