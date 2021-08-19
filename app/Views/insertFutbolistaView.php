<?= $header ?> <!-- Header -->
    <div class="container mt-5 border p-4 rounded-1">
        <h1> Insert Footballer </h1>    
        <form class="row g-3 needs-validation" novalidate method="post" action="<?= site_url('/save') ?>">
            <div class="col-md-6">
                <label for="nameFootballer" class="form-label">Name</label>
                <input type="text" class="form-control" id="nameFootballer" placeholder="Cristiano Ronaldo" required name="nameFootballer">
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            <div class="col-md-6">
                <label for="ageFootballer" class="form-label">Age</label>
                <input type="text" class="form-control" id="ageFootballer" placeholder="36" required name="ageFootballer">
                <div class="valid-feedback">
                Looks good!
                </div>
            </div>
            <div class="col-md-6">
                <label for="heightFootballer" class="form-label">Height (centimetres)</label>
                <input type="text" class="form-control" id="heightFootballer" placeholder="187" required name="heightFootballer">
                <div class="invalid-feedback">
                    Please provide a valid height.
                </div>
            </div>
            <div class="col-md-6">
                <label for="skillfulLeg" class="form-label">Skillful Leg</label>
                <select class="form-select" id="skillfulLeg" required name="skillfulLeg">
                    <option selected disabled value="">Choose...</option>
                    <option value="left">Left</option>
                    <option value="right">Right</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid skillful leg.
                </div>
            </div>
            <div class="col-md-6">
                <label for="nationality" class="form-label">Nationality</label>
                <input type="text" class="form-control" id="nationality" placeholder="Portuguese" required name="nationality">
                <div class="invalid-feedback">
                    Please provide a valid nationality.
                </div>
            </div>
            <div class="col-md-6">
                <label for="position" class="form-label">Position</label>
                <select class="form-select" id="position" required name="position">
                    <option selected disabled value="">Choose...</option>
                    <option value="goalkeeper">Goalkeeper</option>
                    <option value="defense">Defense</option>
                    <option value="midfielder">Midfielder</option>
                    <option value="forward">Forward</option>
                </select>
                <div class="invalid-feedback">
                    Please select a valid position.
                </div>
            </div>
            <div class="col-md-6">
                <label for="club" class="form-label">ID Club</label>
                <input type="text" class="form-control" id="club" placeholder="1" required name="club">
                <div class="invalid-feedback">
                    Please provide a valid ID club.
                </div>
            </div>
            <div class="col-md-6">
                <label for="nationalTeam" class="form-label">National Team</label>
                <input type="text" class="form-control" id="nationalTeam" placeholder="1" required name="nationalTeam">
                <div class="invalid-feedback">
                    Please provide a valid national team.
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>
    </div>
    
<?= $footer ?> <!-- Footer -->