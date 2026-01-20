{{-- resources/views/viajes/partials/economicos.blade.php --}}

<div class="row justify-content-center">
    <div class="col-sm-10">
        <div class="card">
            <div class="card-header">
                Datos economicos
            </div>

            <div class="card-body">
                <div class="form-group row">
                    <div class="col-sm-2">
                        <input id="pvp" type="number" step="0.01" data-type="pvp"
                               class="form-control form-control-sm"
                               placeholder="PVP"
                               name="pvp"
                               value=""
                               autofocus
                               onkeyup="calcular();">
                    </div>
                    <div class="col-sm-2">
                        <input id="costeorden" type="number" step="0.01" data-type="costeorden"
                               class="form-control form-control-sm"
                               placeholder="Coste orden"
                               name="costeorden"
                               onkeyup="calcular1();"
                               value=""
                               autofocus>
                    </div>
                    <div class="col-sm-2">
                        <input id="coste" type="number" step="0.01" data-type="coste"
                               class="form-control form-control-sm"
                               placeholder="Coste"
                               name="coste"
                               value=""
                               autofocus
                               onkeyup="calcular2();">
                    </div>
                    <div class="col-sm-2">
                        <input id="margen" type="number" step="0.01" data-type="margen"
                               class="form-control form-control-sm"
                               placeholder="Margen"
                               name="margen"
                               value=""
                               onkeyup="calcular4();"
                               autofocus>
                    </div>

                    <select id="iva" name="iva" class="custom-select custom-select-sm col-sm-1">
                        <option selected value="1">21 %</option>
                        <option value="2">0 %</option>
                        <option value="3">10 %</option>
                    </select>

                    <div class="col-md-2">
                        <select class="custom-select mr-sm-2 form-control-sm" id="facturable" required name="facturable" value="" autofocus>
                            <option selected value="1">Facturable</option>
                            <option value="2">No facturable</option>
                        </select>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-12">
                        <input id="commenteco" type="text" data-type="commenteco"
                               class="form-control form-control-sm"
                               placeholder="Comentarios"
                               name="commenteco"
                               value=""
                               autofocus>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
