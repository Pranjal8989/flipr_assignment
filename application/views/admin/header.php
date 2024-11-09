<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Navbar style */
        .navbar {
            position: fixed;
            width: 100%;
            padding-left: 10px;
            z-index: 2;
            background: #15283c;
            top: 0;
            transition: ease all 0.3s;
            left: 0;
        }

        /* Sidebar styles */
        #sidebar {
            position: fixed;
            top: 100px;
            left: -250px;
            width: 250px;
            height: 100%;
            background-color: #343a40;
            transition: left 0.3s ease;
            z-index: 999;
        }

        #sidebar ul {
            list-style-type: none;
            padding: 0;
        }

        #sidebar ul li a {
            color: white;
            padding: 15px;
            text-decoration: none;
            display: block;
            transition: 0.3s;
        }

        #sidebar ul li a:hover {
            background-color: #575757;
        }

        /* Active sidebar */
        #sidebar.active {
            left: 0;
        }

        /* Sidebar Toggle Button */
        #sidebarToggleBtn {
            font-size: 30px;
            color: white;
            cursor: pointer;
            border: 2px solid white;
            border-radius: 5px;
            padding: 10px;
            transition: 0.3s;
        }

        #sidebarToggleBtn:hover {
            background-color: #575757;
            border-color: #f8f9fa;
        }

        /* Card Wrapper for form */
        .form-wrapper {
            margin-top: 120px;
            margin-left: 0;
            max-width: 100%;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: margin-left 0.3s ease;
        }

        .form-wrapper input,
        .form-wrapper textarea {
            margin-bottom: 15px;
        }

        .form-wrapper img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        @media (max-width: 768px) {
            .form-wrapper {
                margin-left: 0;
                margin-top: 56px;
                max-width: 100%;
            }

            #sidebar {
                position: absolute;
                top: 56px;
            }

            #sidebar.active {
                left: 0;
            }
        }

        /* When sidebar is open, adjust form wrapper width */
        #sidebar.active~.container .form-wrapper {
            margin-left: 250px;
            /* Adjust the form position when the sidebar is open */
        }
    </style>

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul>
                <li class="nav-item">
                    <span id="sidebarToggleBtn" class="nav-link">☰</span>
                </li>
            </ul>
        </div>
    </nav>

    <div id="sidebar" class="active">
        <ul>
            <li><a href="<?= base_url('Client') ?>">Client</a></li>
            <li><a href="<?= base_url('Project_management') ?>">Project Managnment</a></li>
            <li><a href="<?= base_url('Contact') ?>">Contact</a></li>
            <li><a href="#">Logout</a></li>
        </ul>
    </div>