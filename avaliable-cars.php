<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Agency</title>
    <!-- ============================================Bootstrap Link============================================ -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- ============================================Bootstrap Link END============================================ -->

    <!-- ============================================Fa-Fa icon Link============================================ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- ============================================External CSS Link============================================ -->
    <link rel="stylesheet" href="style.css">
</head>

<body id="avaliable">
    <!-- Header Link -->
    <?php include 'header.php'; ?>

    <section>
        <div class="container">
            <h2 style="font-weight: 800; text-shadow: 1px 1px 3px aqua, 1px 1px 3px black, 1px 1px 4px white; " class="text-center"><span>Available Cars to Rent</span></h2>
            <h3 style="font-weight:bold; visibility: hidden;">Available Cars</h3>
            <br>
            <table class="table">
                <tr>
                    <th>Vehicle Modal</th>
                    <th>Vehicle Number</th>
                    <th>Seating Capacity</th>
                    <th>Rent par Day</th>
                    <th>Action</th>
                </tr>

                <tr>
                    <td>Toyota Camry</td>
                    <td>ABC123</td>
                    <td>5</td>
                    <td>50</td>
                    <td><button type="button" class="btn btn-primary" onclick="function_name(' Toyota Camry');">Rent
                            Car</button></td>
                </tr>

                <tr>
                    <td>Ford Mustang</td>
                    <td>XYZ789</td>
                    <td>4</td>
                    <td>30</td>
                    <td><button type="button" class="btn btn-primary" onclick="function_name(' Ford Mustang');">Rent
                            Car</button></td>
                </tr>

                <tr>
                    <td>Toyota Supra</td>
                    <td>MVP789</td>
                    <td>2</td>
                    <td>40</td>
                    <td><button type="button" class="btn btn-primary" onclick="function_name(' Toyota Supra');">Rent
                            Car</button></td>
                </tr>

                <tr>
                    <td>BMW X5</td>
                    <td>GHI012</td>
                    <td>5</td>
                    <td>80</td>
                    <td><button type="button" class="btn btn-primary" onclick="function_name(' BMW X5');">Rent
                            Car</button></td>
                </tr>

                <tr>
                    <td>Subaru Outback</td>
                    <td>EFG456</td>
                    <td>5</td>
                    <td>$58</td>
                    <td><button type="button" class="btn btn-primary" onclick="function_name(' Subaru Outback');">Rent
                            Car</button></td>
                </tr>

                <tr>
                    <td>Nissan Altima</td>
                    <td>BCD123</td>
                    <td>5</td>
                    <td>$48</td>
                    <td><button type="button" class="btn btn-primary" onclick="function_name(' Nissan Altima');">Rent
                            Car</button></td>
                </tr>

                <tr>
                    <td>Kia Optima</td>
                    <td>YZA890</td>
                    <td>5</td>
                    <td>$52</td>
                    <td><button type="button" class="btn btn-primary" onclick="function_name(' Kia Optima');">Rent
                            Car</button></td>
                </tr>

                <tr>
                    <td>Hyundai Sonata</td>
                    <td>VWX567</td>
                    <td>5</td>
                    <td>$55</td>
                    <td><button type="button" class="btn btn-primary" onclick="function_name(' Hyundai Sonata');">Rent
                            Car</button></td>
                </tr>

                <tr>
                    <td>Volvo XC90</td>
                    <td>STU234</td>
                    <td>7</td>
                    <td>$85</td>
                    <td><button type="button" class="btn btn-primary" onclick="function_name(' Volvo XC90');">Rent
                            Car</button></td>
                </tr>

            </table>
        </div>
    </section>




    <!-- Footer Link -->
    <?php include 'footer.php'; ?>

    <script src="script.js"></script>
</body>

</html>