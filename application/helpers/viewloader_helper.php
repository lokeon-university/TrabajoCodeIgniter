<?php
function generate_view($self, $title, $body, $dbody = null)
{
    $data['title'] = $title;
    $self->load->view('head', $data);
    $self->load->view('navbar');
    $self->load->view($body, $body);
    $self->load->view('footer');
}
