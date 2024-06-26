<?php
    include_once('partials/header.php');
?>


            <!-- Blank Start -->
            <div class="container-fluid pt-4 px-4">
                <!-- Title Page Start -->
                <div class="col-sm-12 col-xl">
                    <div class="bg-light rounded h-100 p-4">
                        <h1 class="display-4">Ajout Participants</h1>
                    </div>
                </div>
                <!-- Title Page End -->
                <!-- Form Page Start -->
                <div class="container-fluid pt-4 px-4">
                    <div class="bg-light rounded-top p-4">
                        <div id="result"></div>
                        <form action="index.php?page=client&action=add" method="post">
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="nom" class="form-label">Entrez Nom(s)</label>
                                    <input type="text" class="form-control" name="nom" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="prenom" class="form-label">Entrez Prénom(s)</label>
                                    <input type="text" class="form-control" name="prenom" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="adresse" class="form-label">Entrez Adresse</label>
                                    <input type="text" class="form-control" name="adresse" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="ville" class="form-label">Entrez Ville</label>
                                    <input type="text" class="form-control" name="ville" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="telephone" class="form-label">Entrez Téléphone</label>
                                    <input type="tel" class="form-control" name="telephone" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <button type="submit" class="btn btn-primary col-2">Enregistrer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Form Page End -->

                <!-- Table Start -->
                <div class="container-fluid pt-4 px-4">
                    <div class="bg-light rounded h-100 p-4">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Nom(s)</th>
                                        <th scope="col">Prénom(s)</th>
                                        <th scope="col">Adresse</th>
                                        <th scope="col">Ville</th>
                                        <th scope="col">Téléphone</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($entities as $participant){ ?>
                                    <tr>
                                        <td><?=$participant['id']?></td>
                                        <td><?=$participant['nom']?></td>
                                        <td><?=$participant['prenom']?></td>
                                        <td><?=$participant['adresse']?></td>
                                        <td><?=$participant['ville']?></td>
                                        <td><?=$participant['telephone']?></td>
                                        <td>
                                            <a class="btn btn-sm btn-primary" href="index.php?page=participant&action=update&id=<?=$participant['id']?>">Update</a>
                                            <a class="btn btn-sm btn-secondary" href="index.php?page=participant&action=delete&id=<?=$participant['id']?>">Delete</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Table End -->
            </div>
            <!-- Blank End -->


<?php
    include_once('partials/footer.php');
?>