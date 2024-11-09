<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cropperjs@1.5.12/dist/cropper.min.css">
    <script src="https://cdn.jsdelivr.net/npm/cropperjs@1.5.12/dist/cropper.min.js"></script>
    <style>
    /* Custom styling */
    body {
        margin: 0;
        padding: 0;
    }

    .sidebar {
        height: 100vh;
        background-color: #2C3E50;
        position: fixed;
        left: 0;
        top: 0;

        width: 250px;
        padding-top: 20px;
    }

    .sidebar a {
        color: white;
        padding: 15px 25px;
        text-decoration: none;
        display: block;
        font-size: 18px;
        border-bottom: 1px solid #495057;
    }

    .sidebar a:hover {
        background-color: #495057;
    }

    .content {
        margin-left: 250px;
        margin-top: 20px;

    }

    .topbar {
        position: fixed;
        top: 0;
        left: 250px;
        width: calc(100% - 250px);
        background-color: #3498DB;
        color: white;
        padding: 10px 20px;
        text-align: right;
        z-index: 1000;

    }

    .footer {
        background-color: #BDC3C7;
        color: white;
        text-align: center;
        padding: 5px;
        position: fixed;
        margin-top: 20px;
        width: 100%;
        bottom: 0;
    }

    .social-icons {
        display: flex;
        justify-content: flex-end;
        gap: 5px;
    }

    .social-icon {
        display: inline-block;
        background-color: white;
        border-radius: 50%;
        padding: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .social-icon img {
        width: 15px;
        height: 15px;
        display: block;/
    }


    .footer .center-text {
        text-align: center;
        font-weight: bold;
    }

    .footer .left-text {
        text-align: left;
        font-style: italic;
    }

    .footer .right-text {
        text-align: right;
    }
    </style>
</head>

<body>

    <!-- Sidebar Start -->
    <div class="sidebar">
        <h3 class="text-center text-white">Dashboard</h3>
        <hr style="background-color: white; height: 1px; border: none;">

        <a href="<?php echo base_url('AdminC');?>">Home</a>
        <a href="<?php echo base_url('ProjectC');?>">Manage Projects</a>
        <a href="<?php echo base_url('ClientC');?>">Manage Clients</a>
        <!-- <a href="#">View Contact Responses</a> -->
        <a href="<?php echo base_url('SubscribeC');?>">View Subscribers</a>
    </div>
    <!-- Sidebar End -->

    <!-- Main Content Start -->
    <div class="content">
        <div class="topbar">
            <a class="btn btn-danger btn-sm ml-3" href="<?php echo base_url('LoginC/logout');?>">Logout</a>
        </div>
        <br>