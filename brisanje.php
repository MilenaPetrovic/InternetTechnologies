<?php
include 'konekcija.php';

$poruka = '';
if (isset($_POST["brisanje"])) {

    include("klase/vlasnikKlasa.php");

    $v = new Vlasnik();

    if ($v->brisanje()) {
    } else {
    }
}

?>

<!-- Modal -->
<div class="modal fade" id="modalBrisanje" tabindex="-1" role="dialog" aria-labelledby="modalBrisanje" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Registracija</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <input type="text" class="form-control" name="username" id="username" placeholder="Username" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" />
                            </div>
                        </div>
                    </div>                                       
                    <div class="form-group ">
                        <button type="submit" name="brisanje" id="button" class="btn btn-primary btn-lg btn-block" style="background-color: #493dd3; opacity: 0.8;">Obrisi korisnika</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>