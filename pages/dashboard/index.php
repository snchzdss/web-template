<?php
include '../../api/common/sessions.php';
include '../../api/common/consts.php';
include '../../api/common/login_check.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>DASHBOARD | WEB TEMPLATE</title>
    <?php
    include '../../api/common/imports.php';
    import_assets($system);
    ?>
</head>

<style>
    body {
        font-family: "Poppins", sans-serif;
        font-weight: 400;
        font-style: normal;
        background-color: #f4f6f9;
    }

    @font-face {
        font-family: 'Poppins';
        src: url('../../plugins/fonts/Poppins-Regular.ttf') format('truetype');
        font-weight: 400;
        font-style: normal;
    }
</style>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <?php
        include '../../pages/reusable/navbar.php';
        ?>

        <!-- Main Content -->
        <?php
        include 'main.php';
        ?>

        <!-- Footer -->
        <?php
        include '../../pages/reusable/footer.php';
        ?>


    </div>


    <script>
        document.querySelectorAll('a[href="../../api/common/logout.php"]').forEach(el => {
            el.addEventListener('click', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You will be logged out.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    confirmButtonText: 'Yes, logout',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "../../api/common/logout.php";
                    }
                });
            });
        });
    </script>


</body>

</html>