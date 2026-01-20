{{-- resources/views/viajes/partials/destinatario.blade.php --}}

<div id="dynamic_fielddirdes" class="row justify-content-center">

    <div class="col-md-5">
        <div class="card">
            <div class="card-header">
                <div class="form-row">
                    <div class="boton">Destinatario</div>

                    <div class="form-check2">
                        <input class="form-check-input" type="checkbox" value="" id="edit_dirdes" name="edit_dirdes[]" tabindex="-1">
                        <label class="form-check-label" for="edit_dirdes">
                            Editar
                        </label>
                    </div>

                    <div class="col-3">
                        <input class="form-control form-control-sm" tabindex="-1" data-type="id_cli" name="iddes[]" id="iddes_1" value="" type="text">
                    </div>
                </div>
            </div>

            <div class="card-body">

                <div class="form-group row">
                    <div class="col-md-12">
                        <input id="destinatario_1" type="text" placeholder="Destinatario" data-type="remitente"
                               class="form-control form-control-sm autocompletedirdes_txt"
                               name="destinatario[]" value="">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <input id="direcciondes_1" placeholder="Dirección destinatario" type="text"
                               class="form-control form-control-sm"
                               name="direcciondes[]" value="">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-4">
                        <input id="codigopostaldes_1" placeholder="Código postal" type="text"
                               class="form-control form-control-sm"
                               name="codigopostaldes[]" value="">
                    </div>

                    <div class="col-md-8">
                        <input id="poblaciondes_1" placeholder="Población" type="text" data-type="remitente"
                               class="form-control form-control-sm autocompletedirpodes_txt"
                               name="poblaciondes[]" value="" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-8">
                        <input id="provinciades_1" placeholder="Provincía" type="text"
                               class="form-control form-control-sm"
                               name="provinciades[]" value="">
                    </div>

                    <div class="col-md-4">
                        <input id="paisdes_1" placeholder="País" type="text"
                               class="form-control form-control-sm"
                               name="paisdes[]" value="">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-5">
        <div class="card">
            <div class="card-header">Datos adicionales</div>

            <div class="card-body">

                <div class="form-group row">
                    <div class="col-md-5">
                        <input id="fechades_1" required type="date"
                               class="form-control form-control-sm"
                               name="fechades[]" value="">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-8">
                        <input id="horariodes_1" placeholder="Horario de descarga" type="text"
                               class="form-control form-control-sm"
                               name="horariodes[]" value="">
                    </div>

                    <div class="col-md-4">
                        <select class="custom-select mr-sm-2 form-control-sm" id="horariolimitedes" name="horariolimitedes[]" value="">
                            <option value="">Hora limite</option>
                            <option value="01:00">01:00</option>
                            <option value="02:00">02:00</option>
                            <option value="03:00">03:00</option>
                            <option value="04:00">04:00</option>
                            <option value="05:00">05:00</option>
                            <option value="06:00">06:00</option>
                            <option value="07:00">07:00</option>
                            <option value="08:00">08:00</option>
                            <option value="09:00">09:00</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="13:00">13:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                            <option value="18:00">18:00</option>
                            <option value="19:00">19:00</option>
                            <option value="20:00">20:00</option>
                            <option value="21:00">21:00</option>
                            <option value="22:00">22:00</option>
                            <option value="23:00">23:00</option>
                            <option value="24:00">24:00</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-7">
                        <input id="contactodes_1" placeholder="Contacto" type="text"
                               class="form-control form-control-sm"
                               name="contactodes[]" value="">
                    </div>

                    <div class="col-md-5">
                        <input id="telefonodes_1" placeholder="Teléfono" type="text"
                               class="form-control form-control-sm"
                               name="telefonodes[]" value="">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <input id="refdescarga_" placeholder="Referencía de descarga" type="text"
                               class="form-control form-control-sm"
                               name="refdescarga[]" value="">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-10">
        <div class="card-body">

            <div class="form-group row">
                <div class="col-md-2">
                    <input id="bultosdes_1" placeholder="Bultos" type="number"
                           class="form-control form-control-sm"
                           name="bultosdes[]" value="">
                </div>

                <div class="col-md-2">
                    <input id="pesodes_1" placeholder="Peso" type="number"
                           class="form-control form-control-sm"
                           name="pesodes[]" value="" required>
                </div>

                <div class="col-md-2">
                    <input id="metroslides_1" placeholder="Metros" type="number" step="0.01"
                           class="form-control form-control-sm"
                           name="metroslides[]" value="" required>
                </div>

                <div class="col-md-6">
                    <input id="detallemerdes_1" placeholder="Detalle de la mercancía" type="text"
                           class="form-control form-control-sm"
                           name="detallemerdes[]" value="">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                    <textarea id="observacionesdes_1" placeholder="Observaciones"
                              class="form-control form-control-sm"
                              name="observacionesdes[]"></textarea>
                </div>
            </div>

        </div>
    </div>
</div>
