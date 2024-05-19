<?php

declare(strict_types=1);

namespace School\Controllers;

use School\App\Response;

class AppointmentController
{
    public function index(): string
    {
        return Response::render('appointment.php');
    }

    public function create(): string
    {
        $color1 = $_POST['color_1'];
        $color2 = $_POST['color_2'];
        $color3 = $_POST['color_3'];
        $color4 = $_POST['color_4'];

        $phonenumber = $_POST['phone_number'];
        $email = $_POST['email'];
        $date = $_POST['appointment_date'];
        $nailbiting = $_POST['nail_biting'];
        $massage = $_POST['massage'];
        $nailrepair = $_POST['nail_repair'];

    }
}

