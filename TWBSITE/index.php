<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- link css -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Hello, world!</title>
</head>

<body>
    <!-- nav bar start  -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">TWEBSITE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>



                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- nav bar end  -->
    <!-- add carosule start -->
    <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner ">
            <div class="carousel-item active">
                <img src="images/eight.jpg" class="d-block w-100   " alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/eleven.jpg" class="d-block w-100  " alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/fifth.jpg" class="d-block w-100 " alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- add carosule end -->
    <!-- section  start -->
    <div class="container">
        <div class="row py-md-5">
            <div class="col-12 ">
                <h3 class="text-center">About Us</h3>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-md-6 ">
                <img src="images/six.jpg" class="img-fluid rounded" alt="">
            </div>
            <div class="col-md-6 text-center pt-5 mt-5">
                <h2 class="pb-5">Lorem ipsum dolor sit amet, consectetur </h2>
                <p class="pb-4 ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptates, accusantium, explicabo perspiciatis eos, in optio quasi nostrum odio molestias qui maiores corrupti quidem itaque animi quas voluptatum rem cumque doloremque!</p>
                <a class="btn btn-success" href="about.php" role="button">Know Me</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row py-5">
            <div class="col ">
                <h3 class="text-center">Our services</h3>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card">
                    <img src="images/seven.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lorem ipsum dolor sit amet consectetur.</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut fuga est totam mollitia sint esse accusamus vero nihil doloremque. Nobis!</p>
                        <a href="#" class="btn btn-primary">Explore the natue</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card">
                    <img src="images/nine.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lorem ipsum dolor sit amet consectetur.</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut fuga est totam mollitia sint esse accusamus vero nihil doloremque. Nobis!</p>
                        <a href="#" class="btn btn-primary">Explore the natue</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card">
                    <img src="images/twelve.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lorem ipsum dolor sit amet consectetur.</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut fuga est totam mollitia sint esse accusamus vero nihil doloremque. Nobis!</p>
                        <a href="#" class="btn btn-primary">Explore the natue</a>
                    </div>
                </div>
            </div>


        </div>
        <div class="row py-md-5">
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card">
                    <img src="images//ten.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lorem ipsum dolor sit amet consectetur.</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut fuga est totam mollitia sint esse accusamus vero nihil doloremque. Nobis!</p>
                        <a href="#" class="btn btn-primary">Explore the natue</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card">
                    <img src="images/thirteen.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lorem ipsum dolor sit amet consectetur.</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut fuga est totam mollitia sint esse accusamus vero nihil doloremque. Nobis!</p>
                        <a href="#" class="btn btn-primary">Explore the natue</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card">
                    <img src="images/third.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Lorem ipsum dolor sit amet consectetur.</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut fuga est totam mollitia sint esse accusamus vero nihil doloremque. Nobis!</p>
                        <a href="#" class="btn btn-primary">Explore the natue</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- section  end -->
    <!-- gallery start  -->

    <div class="container">
        <div class="row py-5">
            <div class="col ">
                <h3 class="text-center">Our gallary</h3>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card">
                    <img src="images/seven.jpg" class="card-img-top" alt="...">

                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card">
                    <img src="images/nine.jpg" class="card-img-top" alt="...">

                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card">
                    <img src="images/twelve.jpg" class="card-img-top" alt="...">

                </div>
            </div>


        </div>
        <div class="row py-md-5">
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card">
                    <img src="images//ten.jpg" class="card-img-top" alt="...">

                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card">
                    <img src="images/thirteen.jpg" class="card-img-top" alt="...">

                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card">
                    <img src="images/third.jpg" class="card-img-top" alt="...">

                </div>
            </div>


        </div>
        <div class="row ">
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card">
                    <img src="images/seven.jpg" class="card-img-top" alt="...">

                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card">
                    <img src="images/nine.jpg" class="card-img-top" alt="...">

                </div>
            </div>
            <div class="col-md-4 d-flex justify-content-center">
                <div class="card">
                    <img src="images/twelve.jpg" class="card-img-top" alt="...">

                </div>
            </div>


        </div>
    </div>
    <!-- gallery end -->
    <!-- contact us start -->
    <div class="container ">

        <div class="row py-5">
            <div class="col ">
                <h3 class="text-center">Our contact</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-10 mx-auto pb-5">
                <form action="info.php" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" class="form-control" name="user">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="text" class="form-control" name="email">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">mobile</label>
                        <input type="text" class="form-control" name="mobile">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Example textarea</label>
                        <textarea type="text" class="form-control" name="comment" rows="3"></textarea>
                    </div>
                    <button class="btn bg-success text-white" type="submit">SUBMIT</button>
                </form>
            </div>
        </div>

    </div>




    <!-- contact us end -->


    <!-- footer start  -->
    <div class="container-fluid">
        <div class="row">

            <footer class="text-center text-white bg-success">
                <!-- Grid container -->
                <div class="container pt-4">
                    <!-- Section: Social media -->
                    <section class="mb-4">
                        <!-- Facebook -->
                        <a class="btn btn-link btn-floating btn-lg text-white m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-facebook-f"></i></a>

                        <!-- Twitter -->
                        <a class="btn btn-link btn-floating btn-lg text-white m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-twitter"></i></a>

                        <!-- Google -->
                        <a class="btn btn-link btn-floating btn-lg text-white m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-google"></i></a>

                        <!-- Instagram -->
                        <a class="btn btn-link btn-floating btn-lg text-white m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-instagram"></i></a>

                        <!-- Linkedin -->
                        <a class="btn btn-link btn-floating btn-lg text-white m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-linkedin"></i></a>
                        <!-- Github -->
                        <a class="btn btn-link btn-floating btn-lg text-white m-1" href="#!" role="button" data-mdb-ripple-color="dark"><i class="fab fa-github"></i></a>
                    </section>
                    <!-- Section: Social media -->
                </div>
                <!-- Grid container -->

                <!-- Copyright -->
                <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                    © 2020 Copyright:
                    <a class="text-white" href="#">TWEBSITE.com</a>
                </div>
                <!-- Copyright -->
            </footer>
        </div>


    </div>
    <!-- footer end -->



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>