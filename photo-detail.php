<?php require "includes/header.php"; ?>
<?php require "config.php"; ?>

<?php 

if(isset($_GET['id'])){

    $id = $_GET['id'];

    $select = $conn->query("SELECT * FROM images WHERE id='$id'");

    $select->execute();
    $row = $select->fetch(PDO::FETCH_OBJ);
}


?>

<div class="container-fluid tm-container-content tm-mt-60">
    <div class="row mb-4">
        <h2 class="col-12 tm-text-primary"><?php echo $row->title; ?></h2>
    </div>
    <div class="row tm-mb-90">
        <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
            <img src="img/<?php echo $row->img; ?>" alt="Image" class="img-fluid">
        </div>
        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
            <div class="tm-bg-gray tm-video-details">

                <div class="mb-4">
                    <h3 class="tm-text-gray-dark mb-3">Description</h3>
                    <p><?php echo $row->description ?></p>
                </div>

            </div>
        </div>
    </div>


    <div class="row mb-4">
        <h2 class="col-12 tm-text-primary">
            Related Photos
        </h2>
    </div>
    <div class="row mb-3 tm-gallery">
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <img src="img/img-01.jpg" alt="Image" class="img-fluid">
                <figcaption class="d-flex align-items-center justify-content-center">
                    <h2>Hangers</h2>
                    <a href="#">View more</a>
                </figcaption>
            </figure>
            <div class="d-flex justify-content-between tm-text-gray">
                <span class="tm-text-gray-light">16 Oct 2020</span>
                <span>12,460 views</span>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <img src="img/img-02.jpg" alt="Image" class="img-fluid">
                <figcaption class="d-flex align-items-center justify-content-center">
                    <h2>Perfumes</h2>
                    <a href="#">View more</a>
                </figcaption>
            </figure>
            <div class="d-flex justify-content-between tm-text-gray">
                <span class="tm-text-gray-light">12 Oct 2020</span>
                <span>11,402 views</span>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <img src="img/img-03.jpg" alt="Image" class="img-fluid">
                <figcaption class="d-flex align-items-center justify-content-center">
                    <h2>Clocks</h2>
                    <a href="#">View more</a>
                </figcaption>
            </figure>
            <div class="d-flex justify-content-between tm-text-gray">
                <span class="tm-text-gray-light">8 Oct 2020</span>
                <span>9,906 views</span>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <img src="img/img-04.jpg" alt="Image" class="img-fluid">
                <figcaption class="d-flex align-items-center justify-content-center">
                    <h2>Plants</h2>
                    <a href="#">View more</a>
                </figcaption>
            </figure>
            <div class="d-flex justify-content-between tm-text-gray">
                <span class="tm-text-gray-light">6 Oct 2020</span>
                <span>16,100 views</span>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <img src="img/img-05.jpg" alt="Image" class="img-fluid">
                <figcaption class="d-flex align-items-center justify-content-center">
                    <h2>Morning</h2>
                    <a href="#">View more</a>
                </figcaption>
            </figure>
            <div class="d-flex justify-content-between tm-text-gray">
                <span class="tm-text-gray-light">26 Sep 2020</span>
                <span>16,008 views</span>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <img src="img/img-06.jpg" alt="Image" class="img-fluid">
                <figcaption class="d-flex align-items-center justify-content-center">
                    <h2>Pinky</h2>
                    <a href="#">View more</a>
                </figcaption>
            </figure>
            <div class="d-flex justify-content-between tm-text-gray">
                <span class="tm-text-gray-light">22 Sep 2020</span>
                <span>12,860 views</span>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <img src="img/img-07.jpg" alt="Image" class="img-fluid">
                <figcaption class="d-flex align-items-center justify-content-center">
                    <h2>Bus</h2>
                    <a href="#">View more</a>
                </figcaption>
            </figure>
            <div class="d-flex justify-content-between tm-text-gray">
                <span class="tm-text-gray-light">12 Sep 2020</span>
                <span>10,900 views</span>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 col-12 mb-5">
            <figure class="effect-ming tm-video-item">
                <img src="img/img-08.jpg" alt="Image" class="img-fluid">
                <figcaption class="d-flex align-items-center justify-content-center">
                    <h2>New York</h2>
                    <a href="#">View more</a>
                </figcaption>
            </figure>
            <div class="d-flex justify-content-between tm-text-gray">
                <span class="tm-text-gray-light">4 Sep 2020</span>
                <span>11,300 views</span>
            </div>
        </div>
    </div> <!-- row -->
</div> <!-- container-fluid, tm-container-content -->

<?php require "includes/footer.php"; ?>