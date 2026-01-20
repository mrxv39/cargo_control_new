{{-- resources/views/viajes/partials/proveedor.blade.php --}}

<div class="col-sm-5">
    <div class="card">
        <div class="card-header">
            <div class="form-row">
                <div class="col-5">
                    Datos proveedor
                </div>
                <div class="col-3">
                    <input class="form-control form-control-sm col-sm"
                           tabindex="-1"
                           name="id_pro"
                           id="id_pro_1"
                           value=""
                           type="text">
                </div>
                <div class="col-2">
                    <input id="id_con_pro"
                           type="text"
                           data-type="cliente"
                           tabindex="-1"
                           class="form-control form-control-sm"
                           placeholder=""
                           name="id_con_pro"
                           value=""
                           autofocus>
                </div>
                <div class="col-2">
                    <input id="id_camion"
                           type="text"
                           data-type="cliente"
                           class="form-control form-control-sm"
                           placeholder=""
                           name="id_camion"
                           value="">
                </div>
            </div>
        </div>
        <div class="card-body">

            <div class="form-group row">
                <div class="col-sm-10">
                    <input id="proveedor_1"
                           type="text"
                           data-type="proveedor"
                           class="form-control form-control-sm autocompletepro_txt"
                           placeholder="Proveedor"
                           name="proveedor"
                           value=""
                           autofocus>
                </div>
                <div class="document d-flex justify-content-center">
                    <a id="linkpro" tabindex="-1" href="#"><img src='{{ asset('img/cliente.png') }}'/></a>
                </div>
            </div>

            <div class="form-group row">

                <div class="col-md-5">
                    <input id="name_con_pro"
                           type="text"
                           data-type="cliente"
                           class="form-control form-control-sm autocompleteconpro_txt"
                           placeholder="Nombre contacto"
                           name="name_con_pro"
                           value=""
                           autofocus>
                </div>

                <div class="col-md-5">
                    <input id="tel_con_pro"
                           type="text"
                           class="form-control form-control-sm"
                           name="tel_con_pro"
                           placeholder="Teléfono conacto"
                           value=""
                           autofocus>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-10">
                    <input id="mail_con_pro"
                           type="email"
                           class="form-control form-control-sm"
                           name="mail_con_pro"
                           placeholder="Mail contacto"
                           value=""
                           autofocus>
                </div>
                <div class="form-check">
                    <input class="form-check-input" tabindex="-1" type="checkbox" value="" id="edit_con_pro" name="edit_con_pro">
                    <label class="form-check-label" for="defaultCheck1">
                        Editar
                    </label>
                </div>
            </div>

            <div class="form-group row">

                <div class="col-md-5">
                    <input id="nombrechofer"
                           type="text"
                           data-type="camion"
                           class="form-control form-control-sm autocompletecamion_txt"
                           placeholder="Nombre Chofer"
                           name="nombrechofer"
                           value=""
                           autofocus>
                </div>
                <div class="col-md-6">
                    <input id="matriculachofer"
                           type="text"
                           class="form-control form-control-sm"
                           placeholder="Matrícula"
                           name="matriculachofer"
                           value=""
                           autofocus>
                </div>

            </div>

            <div class="form-group row">

                <div class="col-md-5">
                    <input id="telefonochofer"
                           type="text"
                           class="form-control form-control-sm"
                           placeholder="Teléfono chofer"
                           name="telefonochofer"
                           value=""
                           autofocus>
                </div>
                <div class="col-md-5">
                    <input id="dnichofer"
                           type="text"
                           class="form-control form-control-sm"
                           placeholder="DNI chofer"
                           name="dnichofer"
                           value=""
                           autofocus>
                </div>
                <div class="document d-flex justify-content-center">
                    <a id="linkpro" tabindex="-1" href="#"><img src='{{ asset('img/truck.png') }}'/></a>
                </div>

            </div>
            <div class="form-group row">
                <div class="col-md-5">
                    <input id="ref_fact_pro"
                           type="text"
                           class="form-control form-control-sm"
                           placeholder="Referencía facturación"
                           name="ref_fact_pro"
                           value=""
                           autofocus>
                </div>
                <div class="col-md-5">
                    <input id="albaran"
                           type="file"
                           class="form-control form-control-sm"
                           placeholder="Orden de carga"
                           name="albaran"
                           value=""
                           autofocus>
                </div>
                <div class="document d-flex justify-content-center">
                    POD
                </div>
            </div>

        </div>
    </div>
</div>
