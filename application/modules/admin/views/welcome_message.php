<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/Welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>

 <!--- this fields are added in case of updating providers ---->
 <!-- <?php if (($btn_name == "Update" || $btn_name == "View") && !empty($user->lic_arr)) {
                                                $ulc = 0;  // update license count
                                                $count_for_remove_btn = 0;
                                                foreach ($user->lic_arr as $license) :
                                                    $ulc++;
                                            ?>
                                                    <div class="row" id="first_row<?= $ulc; ?>">
                                                        <div class="form-group col-lg-4 add-error">
                                                            <select class="form-control license_state license_state_each state-drop-down" name="iLicenseStateId<?= $ulc; ?>" <?= $disabled ? 'disabled' : '' ?>>
                                                                <option value="">--Select State--</option>
                                                                <?php foreach ($states as $state) : ?>
  
                                                                    <option value="<?= $state->id ?>" <?php echo $license->iLicenseStateId == $state->id ? 'selected' : ''; ?>><?= $state->name ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </div>
  
                                                        <div class="form-group col-lg-3">
                                                            <input type="text" name="vLicenseNo<?= $ulc; ?>" placeholder="Enter license number" maxlength="35" class="form-control licenseNo" value="<?= $license->vLicenseNo ?>" <?= $disabled ? 'disabled' : '' ?> />
                                                        </div>
  
                                                        <div class="form-group col-lg-3">
                                                            <input type="text" name="dLicenseValidity<?= $ulc; ?>" placeholder="Enter license validity (MM/DD/YYYY)" class="validdate_picker form-control license_validity" id="dLicenseValidity<?= $ulc; ?>" autocomplete="off" value="<?= date("m/d/Y", strtotime($license->dLicenseValidity)) ?>" <?= $disabled ? 'disabled' : '' ?> />
                                                        </div>
  
                                                        <?php if ($count_for_remove_btn != 0) : ?>
                                                            <div class="form-group col-lg-2">
                                                                <button type="button" name="remove" style="display: <?= $btn_name == 'View' ? 'none' : '' ?>;" data-count="<?= $ulc; ?>" data-id="<?= $license->iLicenseId ?>" class="btn btn-danger remove_license" <?= $disabled ? 'disabled' : '' ?> title="Remove">Remove</button>
                                                            </div>
                                                        <?php endif;
                                                        $count_for_remove_btn++; ?>
                                                    </div>
                                                <?php endforeach; ?>
  
                                            <?php } ?> -->