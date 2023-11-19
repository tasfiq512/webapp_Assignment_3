<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container mt-5 shadow ">
        <div class="row ">

            <div class="col-md-5 part bg-dark p-5 text-white backgroud-from">
                
                <div class="textlist">
                    <div class="d-flex">
                        <i class="bi bi-geo-alt"></i>
                        <h5 class="ms-1 ">Address</h5>
                    </div>
                    <p>House#25/A,Road#2,Sector#3,Uttara,Dhaka-1230</p>
                </div>

                <div class="textlist">
                    <div class="d-flex">
                        <i class="bi bi-telephone"></i>
                        <h5 class="ms-1">Lets Talk</h5>
                    </div>
                    <p class="text">+88 01757663796</p>
                </div>

                <div class="textlist">
                    <div class="d-flex">
                        <i class="bi bi-envelope"></i>
                        <h5 class="ms-1">General Support </h5>
                    </div>
                    <p class="text">tasfiq990@gmail.com</p>
                </div>
                <div class="textlist">
                    <div class="d-flex">
                        <i class="bi bi-person-workspace"></i>

                        <h5 class="ms-1">Explore</h5>
                    </div>
                    <p class="text">Search open Position ,read about company culture and values,ans explore our charitable initiatives.</p>
                </div>

            </div>

            <div class="col-md-7 p-5 justify-content-center text-white">

                <h2 class="from-title">Send Me A Message</h2>

                <form action="mainform.php" method="post" class="row g-3 contact-form mt-4">
                    <label for="" class="form-label">TELL ME YOUR NAME </label>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="fname" id="fname" placeholder="Enter your Last Name" required>
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" name="lname" id="lname" placeholder="Enter your Last Name" required>
                    </div>
                    <label for="email" class="form-label ">ENTER YOUR EMAIL </label>
                    <div class="col-12">
                        
                        <input type="email" class="form-control" name="email" id="email" placeholder=" example@gmail.com" required>
                    </div>
                    <div class="col-12">
                        <label for="number" class="form-label">ENTER PHONE NUMBER</label>
                        <input type="text" class="form-control" name="phone" id="phone" placeholder=" +880167555000" required>
                    </div>
                    <div class="col-md-12">
                        <label for="message" class="form-label">MESSAGE </label>
                        <textarea  type="text" class="form-control" name="message" id="message" placeholder="Write us a message" required ></textarea>
                    </div>
                    
                    
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </form>

            </div>

        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>