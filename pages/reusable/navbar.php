    <style>
        .navbar-custom {
            background-color: #00296b;
        }

        .navbar-custom .navbar-nav .nav-link {
            color: white;
        }

        .navbar-custom .navbar-nav .nav-link:hover {
            color: #fdc500;
        }

        .navbar-brand {
            color: #fdc500;
            padding-left: 0;
            margin-left: 0;
            font-weight: 900;
        }

        .navbar-brand img {
            width: auto;
            height: 40px;
            margin-right: 10px;
        }

        .user-icon {
            color: white;
            font-size: 1.5rem;
        }

        .navbar .container {
            padding-left: 0;
            padding-right: 0;
        }

        .navbar-nav.ml-auto {
            margin-left: auto;
        }
    </style>

    <nav class="navbar navbar-expand-lg navbar-custom">
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="../../static/img/template.png" alt="Logo"> Web Template
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Accounts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Uploads</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>

                <a href="#" class="nav-item nav-link user-icon">
                    <i class="fas fa-user-circle"></i>
                </a>
            </div>
        </div>
    </nav>