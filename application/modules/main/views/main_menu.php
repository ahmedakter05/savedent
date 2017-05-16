<li class="header">Main Menu</li>
<li <?php if(isset($m_patient_management)) { ?>class = "active" <?php } ?>><a href='<?php echo site_url('main/mod/patient_management')?>'><i class="fa fa-circle-o"></i> <span>Patients</span></a></li>
<li <?php if(isset($m_assets_management)) { ?>class = "active" <?php } ?>><a href='<?php echo site_url('main/mod/assets_management')?>'><i class="fa fa-circle-o"></i> <span>Assets</a></span></li>

