<?php
include 'konekcija.php';

$poruka = '';
if (isset($_POST["registracija"])) {

    include_once("klase/vlasnikKlasa.php");

    $v = new Vlasnik();

    if ($v->registracija()) {
    } else {
    }
}

?>

<!-- Modal -->
<div class="modal fade" id="modalRegistracija" tabindex="-1" role="dialog" aria-labelledby="modalRegistracija" aria-hidden="true">
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
                    <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <input type="text" class="form-control" name="ime" id="ime" placeholder="Ime" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <input type="text" class="form-control" name="prezime" id="prezime" placeholder="Prezime" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="cols-sm-10">
                            <div class="input-group">
                                <input type="text" class="form-control" name="kontakt" id="kontakt" placeholder="Kontakt" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group ">
                        <button type="submit" name="registracija" id="button" class="btn btn-primary btn-lg btn-block" style="background-color: #493dd3; opacity: 0.8;">Registruj se</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>