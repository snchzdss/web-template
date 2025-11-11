<?php
include '../../api/common/consts.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    include '../../api/common/imports.php';
    import_assets($system);
    ?>
    <title>LOGIN | WEB TEMPLATE</title>

    <style>
        @font-face {
            font-family: 'Poppins';
            src: url('../../plugins/fonts/Poppins-Regular.ttf') format('truetype');
            font-weight: 400;
            font-style: normal;
        }

        body {
            height: 100vh;
            font-family: 'Poppins', sans-serif;
            font-weight: 400;
            background: linear-gradient(135deg, #e0eafc, #cfdef3);
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }


        .system-name {
            font-weight: 700;
            font-size: 1.8rem;
            margin-bottom: 0.5rem;
        }

        .card {
            overflow: hidden;
            border: 0 !important;
            border-radius: 20px !important;
            box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
            max-width: 900px;
            width: 100%;
        }

        .img-left {
            width: 45%;
            background: linear-gradient(135deg, #00296b, #0084ffff);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }

        .card-body {
            padding: 2rem;
        }

        .title {
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 0.3rem;
            text-align: center;
        }

        .sub-title {
            font-size: 0.9rem;
            color: #555;
            text-align: center;
            margin-bottom: 2rem;
        }

        .form-input {
            position: relative;
            margin-bottom: 1.2rem;
        }

        .form-input input {
            width: 100%;
            height: 45px;
            padding-left: 40px;
            border: 1px solid #ccc;
            border-radius: 12px;
            outline: none;
            transition: all 0.3s;
        }

        .form-input input:focus {
            border-color: #00296b;
            box-shadow: 0 0 10px rgba(0, 41, 107, 0.2);
        }

        .form-input span {
            position: absolute;
            top: 50%;
            left: 12px;
            transform: translateY(-50%);
            color: #00296b;
            font-size: 1.1rem;
        }

        .form-input input::placeholder {
            color: #aaa;
        }

        .form-box button[type="submit"],
        .dashboard-btn {
            width: 100%;
            padding: 12px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 0.95rem;
            border: none;
            cursor: pointer;
            transition: all 0.3s;
        }

        .form-box button[type="submit"] {
            background: linear-gradient(90deg, #00296b, #0084ff);
            color: #fff;
            margin-bottom: 0.8rem;
        }

        .form-box button[type="submit"]:hover {
            transform: scale(1.03);
            box-shadow: 0 8px 20px rgba(0, 41, 107, 0.3);
        }

        .dashboard-btn {
            background: #f5f5f5;
            color: #00296b;
            border: 2px solid transparent;
        }

        .dashboard-btn:hover {
            background: #ffffff;
            border-color: #00296b;
            box-shadow: 0 8px 20px rgba(0, 41, 107, 0.2);
            transform: scale(1.03);
        }
    </style>
</head>

<body>
    <div class="container d-flex align-items-center justify-content-center min-vh-100">
        <div class="row w-100 justify-content-center">
            <div class="col-lg-10 col-xl-9">
                <div class="card flex-row mx-auto px-0">
                    <div class="img-left d-none d-md-flex flex-column align-items-center justify-content-center text-white p-4">
                        <img src="<?php echo $system . '../static/img/template.png'; ?>" alt="Logo" class="mb-3" style="max-width: 200px;">
                        <h3 class="system-name">WEB TEMPLATE</h3>
                        <p class="text-center">Health and Safety First!</p>
                    </div>

                    <div class="card-body">
                        <h4 class="title text-center mt-4">Login into account</h4>
                        <p class="text-center sub-title">Kindly enter your username and password to continue.</p>
                        <form id="loginForm" class="form-box px-3">

                            <div class="form-input">
                                <span><i class="fa fa-user"></i></span>
                                <input type="text" name="username" placeholder="Username" required autofocus>
                            </div>

                            <div class="form-input position-relative">
                                <span><i class="fa fa-key"></i></span>
                                <input type="password" id="password" name="password" placeholder="Password" required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-block text-uppercase login-btn">Login</button>
                            </div>

                            <div class="mb-3">
                                <button type="" class="btn btn-block text-uppercase dashboard-btn">Viewer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $("#loginForm").on("submit", function(e) {
            e.preventDefault();

            $.ajax({
                url: "<?php echo $system; ?>/api/common/login.php",
                type: "POST",
                data: $(this).serialize(),
                dataType: "json",
                success: function(res) {
                    console.log(res);
                    if (res.status == "success") {
                        if (res.role == "admin") {
                            window.location.href = "<?php echo $system; ?>/pages/dashboard/index.php";
                        } else if (res.role == "user") {
                            window.location.href = "<?php echo $system; ?>pages/dashboard/index.php";
                        } else {
                            window.location.href = "<?php echo $system; ?>#";
                        }
                    } else {
                        Swal.fire({
                            icon: "error",
                            title: res.message
                        });
                    }
                },
                error: function(xhr) {
                    Swal.fire({
                        icon: "error",
                        title: "Login failed",
                        text: xhr.responseJSON?.message || "Something went wrong"
                    });
                }
            });
        });
    </script>
</body>

</html>