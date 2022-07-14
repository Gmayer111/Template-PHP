<?php
$title = 'Accueil';
?>
<div class="d-flex flex-column">
    <h2 class="h5 text-center mb-5 border bg-danger text-white p-2">Ajouter une tâche</h2>
    <form method="post" action="/" class="mb-4 d-flex justify-content-around align-items-center">
        <div>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

    <div class="list-group d-flex justify-content-center bg-primary">
        <a href="#" class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
        <img src="https://github.com/twbs.png" alt="twbs" width="32" height="32" class="rounded-circle flex-shrink-0">
        <div class="d-flex gap-2 w-100 justify-content-between">
            <div>
            <h6 class="mb-0">List group item heading</h6>
            <p class="mb-0 opacity-75">Some placeholder content in a paragraph.</p>
            </div>
            <small class="opacity-50 text-nowrap">now</small>
        </div>
        </a>
    </div>      
</div>

