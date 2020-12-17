
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Blank Page</h1>


<div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Basic Card Example</h6>
                                </div>
                                <div class="card-body">
                                <?php
                                        if ($isi){
                                            $this->load->view($isi);
                                        }
                                        ?>

                                    <div id='map' style='width: 100%; height: 300px;'></div>
                                    <script>
                                    mapboxgl.accessToken = 'pk.eyJ1Ijoic2hpa3NoaW5lbGYiLCJhIjoiY2p5Y3lxb202MG12djNkazQxNnUwbjM3NCJ9.h7Seoet9AWgLJ7K95GTeew';
                                    var map = new mapboxgl.Map({
                                        container: 'map',
                                        style: 'mapbox://styles/mapbox/streets-v11'
                                    });
                                    </script>

                                </div>
                            </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->



