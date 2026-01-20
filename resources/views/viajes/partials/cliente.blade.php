{{-- resources/views/viajes/partials/cliente.blade.php --}}

<div class="col-sm-5">
    <div class="card">
        <div class="card-header card-header-sm">

            <div class="form-row">
                <div class="col-5">
                    Datos del cliente
                </div>
                <div class="col-3">
                    <input class="form-control form-control-sm autocompleteconcli_txt"
                           data-type="id_cli"
                           name="id_cli"
                           id="id_cli_1"
                           value=""
                           type="text">
                </div>
                <div class="col-2">
                    <input id="id_con_cli"
                           type="text"
                           data-type="cliente"
                           class="form-control form-control-sm"
                           placeholder=""
                           name="id_con_cli"
                           value="">
                </div>
                <div class="col-2">
                    <input id="tipoviaje"
                           type="hidden"
                           data-type="cliente"
                           class="form-control form-control-sm"
                           placeholder=""
                           name="tipoviaje"
                           value="10">
                </div>
            </div>

        </div>
        <div class="card-body">

            <div class="form-group row">
                <div class="col-sm-10">
                    <input id="cliente_1"
                           type="text"
                           data-type="cliente"
                           class="form-control form-control-sm autocomplete_txt"
                           placeholder="Nombre del cliente"
                           name="cliente"
                           value=""
                           required>
                </div>
                <div class="document d-flex justify-content-center">
                    <a id="linkcli" tabindex="-1" href="#"><img src='{{ asset('img/cliente.png') }}'/></a>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-5 mb-0">
                    <input id="name_con_cli"
                           type="text"
                           data-type="cliente"
                           class="form-control form-control-sm autocompleteconcli_txt"
                           placeholder="Nombre contacto"
                           name="name_con_cli"
                           value=""
                           autofocus>
                </div>
                <div class="col-md-5">
                    <input id="tel_con_cli"
                           type="text"
                           class="form-control form-control-sm"
                           placeholder="Teléfono contacto"
                           name="tel_con_cli"
                           value=""
                           autofocus>
                </div>
            </div>

            <div class="form-group row">

                <div class="col-md-10">
                    <input id="mail_con_cli"
                           type="email"
                           class="form-control form-control-sm"
                           placeholder="Mail contacto"
                           name="mail_con_cli"
                           value=""
                           autofocus>
                </div>
                <div class="form-check">
                    <input class="form-check-input" tabindex="-1" type="checkbox" value="" id="edit_con_cli" name="edit_con_cli">
                    <label class="form-check-label" for="defaultCheck1">
                        Editar
                    </label>
                </div>
            </div>

            <div class="form-group row">

                <div class="col-md-10">
                    <input id="ref_fact_cli"
                           type="text"
                           class="form-control form-control-sm"
                           placeholder="Referencía facturación"
                           name="ref_fact_cli"
                           value=""
                           autofocus
                           required>
                </div>
                <div class="document d-flex justify-content-center">
                    <a id="linksearchrefcli" tabindex="-1" href="#"><img src='{{ asset('img/search.png') }}'/></a>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-9">
                    <input id="oc_cli"
                           type="file"
                           class="form-control form-control-sm"
                           placeholder="Orden de carga"
                           name="oc_cli"
                           value=""
                           autofocus>
                </div>
                <div class="document d-flex justify-content-center">
                    Orden cliente
                </div>
            </div>

        </div>
    </div>
</div>
