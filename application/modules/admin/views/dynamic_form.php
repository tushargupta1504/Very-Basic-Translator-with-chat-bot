<?php
// echo base_url('dynamic_form');die;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h1 style="text-align: center;">Dynamic Form</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header prd-head">

                    </div>
                    <div class="card-body">

                        <?php
echo form_open('admin/dynamic_form/save_detail', "enctype='multipart/form-data' id='edit_user'");
?>

                        <button type="button" id="btn_add_license" class="btn btn-primary add-btn-head mt-5"
                            title="Add More" style="float:right; margin-top: 20px; margin-bottom: 20px;">Add
                            More</button>





                        <div class="row">
                            <div class="form-group col-lg-12 mb-2">
                                <div id="dynamic_field">
                                    <div class="row" id="first_row">
                                        <div class="form-group col-lg-4">
                                            <input type="text" name="vFullName1" class="form-control" maxlength="35"
                                                placeholder="Enter name" class="form-control name_list" />
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <input type="email" name="vEmail1" class="form-control" maxlength="35"
                                                placeholder="Enter Email" class="form-control name_list" />
                                        </div>
                                        <div class="form-group col-lg-2">
                                            <input type="text" name="vZipCode1" class="form-control" maxlength="35"
                                                placeholder="Enter Zipcode" class="form-control name_list" />
                                        </div>
                                    </div>


                                    <!-- <input type="hidden" name="update_lic_count" id="update_lic_count"
                                        value="<?=!empty($user->lic_arr) ? count($user->lic_arr) : "1"?>"> -->
                                </div>

                            </div>
                            <input type="hidden" name="license_count" id="license_count" value="1">
                        </div>
                    </div>

                    <div class="row">
                        <div class="card-footer">
                            <button type="submit" id="update_provider_btn" class="btn btn-success"
                                title="Submit">Submit</button>
                        </div>
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>
        </div>
    </div>
    </div>
</body>

</html>



<script>
$(document).ready(function() {
    var i = 1;

    // Add form while clicking on add button
    $('#btn_add_license').click(function() {
        i++;
        $('#dynamic_field').append(
            ' <div class="row js-append lic_rows" id="first_row' + i +
            '" > <div class="form-group col-lg-4"> <input type="text" class=" form-control" name="vFullName' +
            i +
            '" placeholder="Enter name" maxlength="35" class="form-control name_list" aria-required="true" /> </div>                              <div class="form-group col-lg-4"> <input type="email" class="form-control" name="vEmail' +
            i +
            '" placeholder="Enter email" maxlength="35" class="form-control name_list" aria-required="true" /> </div>                              <div class="form-group col-lg-2"> <input type="text" class=" form-control" name="vZipCode' +
            i +
            '" placeholder="Enter zipcode" maxlength="35" class="form-control name_list" aria-required="true" /> </div>  <div class="form-group col-lg-2">  <button type="button" name="remove" id="' +
            i +
            '" class="btn btn-danger btn_remove">Remove</button>  </div>  </div>'
        );

        $('#license_count').val(i);
    });

    // remove license row on clicking remove btn
    $(document).on('click', '.btn_remove', function() {
        var button_id = $(this).attr("id");
        $('#first_row' + button_id + '').remove();
        i--;
        $('#license_count').val(i);
    });
});
</script>