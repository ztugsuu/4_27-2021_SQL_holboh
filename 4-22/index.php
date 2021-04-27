<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>4/20 PHP tutorial</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php include 'inputs.php' ?>
                <form action="index.php?haanaas=formaaaaphp" method="POST">
                    <hr>
                    <input type="password" name="password">
                    <hr>
                    <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1"> I have a bike</label><br>
                    <input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
                    <label for="vehicle2"> I have a car</label><br>
                    <input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
                    <label for="vehicle3"> I have a boat</label><br>
                    <hr>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sex" id="flexRadioDefault1" value="male">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Male
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sex" id="flexRadioDefault2" value="famale">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Famale
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sex" id="flexRadioDefault2" value="notsex" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Helmeergvi baina
                        </label>
                    </div>
                    <br>
                    <input type="hidden" name="haanaas irj bgaa ve" value="index bvrtgelees">
                    <input type="Submit">

                </form>
            </div>
        </div>
    </div>



</body>

</html>