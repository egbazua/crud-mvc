<?= $header ?> <!-- Header -->

    <div class="container mt-5 border p-4 rounded-1">
        <h1> Edit Footballer </h1>    
        <form class="row g-3 needs-validation" novalidate method="post" action="<?= site_url('/update') ?>">

            <input type="hidden" name="idFutbolista" value="<?= $footballer['idFutbolista'] ?>">

            <div class="col-md-6">
                <label for="nameFootballer" class="form-label">Name</label>
                <input type="text" class="form-control" id="nameFootballer" value="<?= $footballer['nombreFutbolista'] ?>"  required name="nameFootballer">
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            <div class="col-md-6">
                <label for="ageFootballer" class="form-label">Age</label>
                <input type="text" class="form-control" id="ageFootballer"  required name="ageFootballer" value="<?= $footballer['edad'] ?>">
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            <div class="col-md-6">
                <label for="heightFootballer" class="form-label">Height (centimetres)</label>
                <input type="text" class="form-control" id="heightFootballer"  required name="heightFootballer" value="<?= $footballer['altura'] ?>">
                <div class="invalid-feedback">
                    Please provide a valid height.
                </div>
            </div>
            <div class="col-md-6">
                <label for="skillfulLeg" class="form-label">Skillful Leg</label>
                <select class="form-select" id="skillfulLeg" required name="skillfulLeg" value="<?= $footballer['pieHabil'] ?>">
                    <option selected disabled value="">Choose...</option>
                    <option value="Left">Left</option>
                    <option value="Right">Right</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid skillful leg.
                </div>
            </div>
            <div class="col-md-6">
                <label for="nationality" class="form-label">Nationality</label>
                <input type="text" class="form-control" id="nationality"  required name="nationality" value="<?= $footballer['nacionalidad'] ?>">
                <div class="invalid-feedback">
                    Please provide a valid nationality.
                </div>
            </div>
            <div class="col-md-6">
                <label for="position" class="form-label">Position</label>
                <select class="form-select" id="position" required name="position" value="<?= $footballer['posicion'] ?>">
                    <option selected disabled value="">Choose...</option>
                    <option value="Goalkeeper">Goalkeeper</option>
                    <option value="Defense">Defense</option>
                    <option value="Midfielder">Midfielder</option>
                    <option value="Forward">Forward</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid position.
                </div>
            </div>
            <div class="col-md-6">
                <label for="club" class="form-label">ID Club</label>
                <input type="text" class="form-control" id="club"  required name="club" value="<?= $footballer['idClub'] ?>">
                <div class="invalid-feedback">
                    Please provide a valid ID club.
                </div>
            </div>
            <div class="col-md-6">
                <label for="nationalTeam" class="form-label">National Team</label>
                <input type="text" class="form-control" id="nationalTeam"  required name="nationalTeam" value="<?= $footballer['idSeleccion'] ?>">
                <div class="invalid-feedback">
                    Please provide a valid national team.
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Save</button>
                <a href="<?= base_url('futbolista'); ?>" type="button" class="btn btn-warning">Go Back</a>
            </div>
        </form>
    </div>
    
<?= $footer ?> <!-- Footer -->