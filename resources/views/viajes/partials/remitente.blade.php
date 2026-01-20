{{-- resources/views/viajes/partials/remitente.blade.php --}}

<div id="dynamic_fielddircar" class="row justify-content-center">
    <div class="col-md-5">
        <div class="card">
            <div class="card-header">
                <div class="form-row">
                    <div class="boton">Remitente</div>

                    <div class="form-check2">
                        <input class="form-check-input" tabindex="-1" type="checkbox" value="" id="edit_dircar" name="edit_dircar[]">
                        <label class="form-check-label" for="edit_dircar">
                            Editar
                        </label>
                    </div>

                    <div class="col-3">
                        <input id="idcar_1" type="text" tabindex="-1" class="form-control form-control-sm" name="idcar[]" value="">
                    </div>
                </div>
            </div>

            <div class="card-body">

                <div class="form-group row">
                    <div class="col-md-12">
                        <input id="remitente_1" type="text" placeholder="Remitente" data-type="remitente"
                               class="form-control form-control-sm autocompletedircar_txt"
                               name="remitente[]" value="">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <input id="direccioncar_1" placeholder="Dirección remitente" type="text"
                               class="form-control form-control-sm"
                               name="direccioncar[]" value="">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-4">
                        <input id="codigopostalcar_1" placeholder="Código postal" type="text"
                               class="form-control form-control-sm"
                               name="codigopostalcar[]" value="">
                    </div>
                    <div class="col-md-8">
                        <input id="poblacioncar_1" placeholder="Población" type="text" data-type="remitente"
                               class="form-control form-control-sm autocompletedirpo_txt"
                               name="poblacioncar[]" value="" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-8">
                        <input id="provinciacar_1" placeholder="Provincía" type="text"
                               class="form-control form-control-sm"
                               name="provinciacar[]" value="">
                    </div>
                    <div class="col-md-4">
                        <input id="paiscar_1" placeholder="País" type="text"
                               class="form-control form-control-sm"
                               name="paiscar[]" value="">
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
                        <input id="fechacar_1" required type="date"
                               class="form-control form-control-sm"
                               name="fechacar[]" value="">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-8">
                        <input id="horariocar_1" placeholder="Horario de carga" type="text"
                               class="form-control form-control-sm"
                               name="horariocar[]" value="">
                    </div>
                    <div class="col-md-4">
                        <select class="custom-select mr-sm-2 form-control-sm" id="horariolimitecar" name="horariolimitecar[]" value="">
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
                        <input id="contactocar_1" placeholder="Contacto" type="text"
                               class="form-control form-control-sm"
                               name="contactocar[]" value="">
                    </div>
                    <div class="col-md-5">
                        <input id="telefonocar_1" placeholder="Teléfono" type="text"
                               class="form-control form-control-sm"
                               name="telefonocar[]" value="">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-12">
                        <input id="refcarga_" placeholder="Referencía de carga" type="text"
                               class="form-control form-control-sm"
                               name="refcarga[]" value="">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="col-md-10">
        <div class="card-body">

            <div class="form-group row">
                <div class="col-md-2">
                    <select class="custom-select mr-sm-2 form-control-sm" id="tipomer" required name="tipomer" value="">
                        <option value="">Tipo carga</option>
                        <option value="1">Grupaje</option>
                        <option value="2">Completo</option>
                        <option value="3">Mensajería</option>
                        <option value="4">Paquetería</option>
                        <option value="5">Local</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <input id="bultoscar_1" placeholder="Bultos" type="number"
                           class="form-control form-control-sm"
                           name="bultoscar[]" value="">
                </div>

                <div class="col-md-2">
                    <input id="pesocar_1" placeholder="Peso" type="number"
                           class="form-control form-control-sm"
                           name="pesocar[]" value="" required>
                </div>

                <div class="col-md-2">
                    <input id="metroslicar_1" placeholder="Metros" type="number" step="0.01"
                           class="form-control form-control-sm"
                           name="metroslicar[]" value="" required>
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                    <input id="detallemercar_1" placeholder="Detalle de la mercancía" type="text"
                           class="form-control form-control-sm"
                           name="detallemercar[]" value="">
                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-12">
                    <textarea id="observacionescar_1" placeholder="Observaciones"
                              class="form-control form-control-sm"
                              name="observacionescar[]"></textarea>
                </div>
            </div>

        </div>
    </div>
</div>
