<?php
    include_once('partials/header.php');
?>


            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <!-- Title Page Start -->
                <div class="col-sm-12 col-xl">
                    <div class="bg-light rounded h-100 p-4">
                        <h1 class="display-4">Update Service identified by id</h1>
                    </div>
                </div>
                <!-- Title Page End -->
                <div class="container-fluid pt-4 px-4">
                    <div class="bg-light rounded-top p-4">
                        <div class="row">
                            <div class="col-6">
                                <!-- Form Start -->
                                <form action="" method="post">
                                    <div class="row">
                                        <input type="hidden" value="" name="serv_id">
                                        <div class="col-md-9 mb-3">
                                            <label for="serv_title">Libellé Service</label>
                                            <input type="text" class="form-control" id="serv_title" required>
                                        </div>
                                        <div class="col-md-end-6 mb-3">
                                            <button type="submit" class="btn btn-primary col-2">Mettre à Jour</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- Form End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Blank End -->


<?php
    include_once('partials/footer.php');
?>