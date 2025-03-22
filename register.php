<?php include_once "header.php"; ?>


    <div class="w-50 mx-auto" style="padding-top: 100px;">
        <h1 class="mb-3">Please sign up</h1>

        <form>

            <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="form2Example3" class="form-control" />
                <label class="form-label" for="form2Example3">Name</label>
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="form2Example3" class="form-control" />
                <label class="form-label" for="form2Example4">Surname</label>
            </div>

            <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="form2Example3" class="form-control" />
                <label class="form-label" for="form2Example5">Username</label>
            </div>

            <!-- Email input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="email" id="form2Example1" class="form-control" />
                <label class="form-label" for="form2Example1">Email adress</label>
            </div>

            <!-- Password input -->
            <div data-mdb-input-init class="form-outline mb-4">
                <input type="password" id="form2Example4" class="form-control" />
                <label class="form-label" for="form2Example2">Password</label>
            </div>


            <!-- <div data-mdb-input-init class="form-outline mb-4">
                <input type="text" id="form2Example5" class="form-control" />
                <label class="form-label" for="form2Example2">Username</label>
            </div> -->

            <!-- Submit button -->
            <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4">Sign up</button>

            <!-- Register buttons -->
            <div class="text-center">
                <p>Have an account? <a href="#!">Sign in</a></p>
            </div>
        </form>

    </div>

    <?php include_once "footer.php"; ?>