<?php
function cuerpo ($part2){
    $cuerpo ='
    <br><br>
    <div class="container-md">
        <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input class="form-control" type="file" id="formFile">
        </div>
        <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Multiple files input example</label>
            <input class="form-control" type="file" id="formFileMultiple" multiple>
        </div>
        <div class="mb-3">
            <label for="formFileDisabled" class="form-label">Disabled file input example</label>
            <input class="form-control" type="file" id="formFileDisabled" disabled>
        </div>
        <div class="mb-3">
            <label for="formFileSm" class="form-label">Small file input example</label>
            <input class="form-control form-control-sm" id="formFileSm" type="file">
        </div>
        <div>
            <label for="formFileLg" class="form-label">Large file input example</label>
            <input class="form-control form-control-lg" id="formFileLg" type="file">
        </div>
    </div>
    <br><br>
    <div class="container-md">
        <div class="card">
            <img src="..." class="card-img-top" alt="...">

            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card´s content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

        <div class="card" aria-hidden="true">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title placeholder-glow">
                <span class="placeholder col-6"></span>
                </h5>
                <p class="card-text placeholder-glow">
                <span class="placeholder col-7"></span>
                <span class="placeholder col-4"></span>
                <span class="placeholder col-4"></span>
                <span class="placeholder col-6"></span>
                <span class="placeholder col-8"></span>
                </p>
                <a href="#" tabindex="-1" class="btn btn-primary disabled placeholder col-6"></a>
            </div>
        </div>
    </div>
    ';
    print $cuerpo;
}
?>




