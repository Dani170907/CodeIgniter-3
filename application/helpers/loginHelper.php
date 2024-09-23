<?php

function is_logged_in() {
    $ci = get_instance();
    // jika tidak di temukan session yang sesuai maka di tolak
    if (!$ci->session->userdata('username')) {
        redirect('login');
    }
}

?>