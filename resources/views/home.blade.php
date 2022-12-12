<x-layout>
    <title>{{ $title }}</title>
    <div class="container my-5" id="welcome">
        <div class="row">
            <div class="welcomekiri col-md-4 mb-4">
                <p class="intro" style="text-align: justify;">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse eleifend felis eros, id lacinia
                    dolor hendrerit a. Nullam elementum est auctor purus bibendum pharetra. Phasellus in metus ultrices,
                    condimentum dui ut, feugiat nisl. Nunc nec fringilla tortor. Vivamus sit amet pulvinar ligula.
                </p>
                <a id="buttonL" class="btn btn-primary rounded-pill btn-lg" href="/sewa" role="button">RESERVASI</a>
            </div>
            <div class="image col-md-8">
                <img class="introimg img-fluid d-xs-none" src="images/ball.png" alt="">
            </div>
        </div>


    </div>

    <div class="container p-5 rounded-3" id="daftarLapangan">
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col" id="card-lp-1">
                <div class="card mb-3 p-2" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://images.unsplash.com/photo-1521217078329-f8fc1becab68?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=327&q=80"
                                class="img-fluid rounded-3" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Lapangan 1</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col" id="card-lp-2">
                <div class="card mb-3 p-2" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="https://images.unsplash.com/photo-1521217078329-f8fc1becab68?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=327&q=80"
                                class="img-fluid rounded-3" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">Lapangan 2</h5>
                                <p class="card-text">This is a wider card with supporting text below as a natural
                                    lead-in to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5 justify-content-center" id="contact">
        <div class="h3 text-center" id="headingcontact">Hubungi Kami</div>
        <div class="d-flex align-items-center my-1">
            <div class="flex-shrink-0">
                <img class="icon-contact" src="https://cdn-icons-png.flaticon.com/512/2111/2111774.png" alt="">
            </div>
            <div class="flex-grow-1 ms-3 text-contact">
                0812-3456-7890
            </div>
        </div>
        <div class="d-flex align-items-center my-1">
            <div class="flex-shrink-0">
                <img class="icon-contact" src="https://cdn-icons-png.flaticon.com/512/1384/1384031.png" alt="">
            </div>
            <div class="flex-grow-1 ms-3 text-contact">
                @gorsample
            </div>
        </div>
        <div class="d-flex align-items-center my-1">
            <div class="flex-shrink-0">
                <img class="icon-contact" src="https://cdn-icons-png.flaticon.com/512/2111/2111774.png" alt="">
            </div>
            <div class="flex-grow-1 ms-3 text-contact">
                gorsample@sample.com
            </div>
        </div>
    </div>

</x-layout>
