<?php if ($this->session->has_userdata('success')) { ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <small><i class="menu-icon tf-icons bx bx-check"></i><?= $this->session->flashdata('success'); ?></small>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php } else if ($this->session->has_userdata('warning')) { ?>
    <div class="alert alert-warning alert-dismissible" role="alert">
        <small><i class="menu-icon tf-icons bx bx-error"></i><?= $this->session->flashdata('warning'); ?></small>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php } else if ($this->session->has_userdata('danger')) { ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <small><i class="menu-icon tf-icons bx bx-x"></i><?= $this->session->flashdata('danger'); ?></small>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

<?php } else if ($this->session->has_userdata('edit')) { ?>
    <div class="alert alert-warning alert-dismissible" role="alert">
        <small><i class="menu-icon tf-icons bx bx-edit"></i><?= $this->session->flashdata('edit'); ?></small>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php } else if ($this->session->has_userdata('delete')) { ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <small><i class="menu-icon tf-icons bx bx-trash"></i><?= $this->session->flashdata('delete'); ?></small>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php } else if ($this->session->has_userdata('error')) { ?>
    <div class="alert alert-danger alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <small> <i class="icon fas fa-xmark"></i><?= strip_tags(str_replace('</p>', '', $this->session->flashdata('error'))); ?></small>
    </div>
<?php } ?>