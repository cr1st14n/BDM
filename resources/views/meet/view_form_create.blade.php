<div class="br-section-wrapper">
    <form id="form_1" onsubmit="event.preventDefault(); create($(this).serialize())">

        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Registro de datos MEET</h6>
        <div class="row">
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="form-control-label">FECHA: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="date" name="fecha" id="fecha"
                        onkeyup="marq_1()" required>
                </div>
            </div><!-- col -->
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="form-control-label">HORA.: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="time" name="hora" id="hora"
                        onkeyup="marq_1()">
                </div>
            </div><!-- col -->
        </div><!-- row -->
        <div class="row">
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="form-control-label">Direccion del Viento: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="text" name="dir_vie" id="dir_vie" required>
                </div>
            </div><!-- col -->
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="form-control-label">Velocidad: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="text" name="velocidad" id="velocidad">
                </div>
            </div><!-- col -->
        </div><!-- row -->
        <div class="row">
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="form-control-label">Rafagas: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="text" name="rafaga" id="rafaga" required>
                </div>
            </div><!-- col -->
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="form-control-label">Variacion del Viento: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="text" name="var_vie" id="var_vie" required>
                </div>
            </div><!-- col -->
        </div><!-- row -->
        <div class="row">
            <div class="col-lg">
                <div class="form-group">
                    <label class="form-control-label">Visibilidad: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="text" name="visibilidad" id="visibilidad"
                        required>
                </div>
            </div><!-- col -->

            <div class="col-lg-5">
                <div class="form-group">
                    <label class="form-control-label">Dirección Visibilidad</label>: <span
                        class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="text" name="dir_visi" id="dir_visi" required>
                </div>
            </div><!-- col -->
            <div class="col-lg-5">
                <div class="form-group">
                    <label class="form-control-label">Tiempo Presente Observado</label>: <span
                        class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="text" name="tp_1" id="tp_1" required>
                    <input class="form-control form-control-sm" type="text" name="tp_2" id="tp_2" required>
                    <input class="form-control form-control-sm" type="text" name="tp_3" id="tp_3" required>
                </div>
            </div><!-- col -->

        </div><!-- row -->
        <div class="row">
            <div class="col-lg">
                <div class="form-group">
                    <label class="form-control-label">Nubosidad : <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" placeholder="Primero" type="text" name="nub_1"
                        placeholder="Primera" required>
                    <input class="form-control form-control-sm" placeholder="Segundo" type="text" name="nub_2"
                        placeholder="Segunda" required>
                    <input class="form-control form-control-sm" placeholder="Tercero" type="text" name="nub_3"
                        placeholder="Tercera" required>
                    <input class="form-control form-control-sm" placeholder="Cuarto" type="text" name="nub_4"
                        placeholder="Cuarta" required>
                </div>
            </div><!-- col -->
        </div><!-- row -->
        <div class="row">
            <div class="col-lg">
                <div class="form-group">
                    <label class="form-control-label"> Temperatura: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="number" name="temp" id="temp"
                        required>
                </div>
            </div><!-- col -->
            <div class="col-lg">
                <div class="form-group">
                    <label class="form-control-label">Temperatura Punto de Rocio: <span
                            class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="number" name="temp_pun_roc"
                        id="temp_pun_roc">
                </div>
            </div><!-- col -->
        </div><!-- row -->
        <div class="row">
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="form-control-label">QFE: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="text" name="qfe" id="qfe">

                </div>
            </div><!-- col -->
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="form-control-label">QNH: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="text" name="qnh_1" id="qnh_1">
                    <input class="form-control form-control-sm" type="text" name="qnh_2" id="qnh_2">
                </div>
            </div><!-- col -->

            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">-</label>QNH (plgHg): <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="text" name="qnh_plghg" id="qnh_plghg">
                </div>
            </div><!-- col -->
            <div class="col-lg-12">
                <div class="form-group">
                    <label class="form-control-label">-</label>Humedad Relativa<span
                        class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="text" name="hum_rel" id="hum_rel">
                </div>
            </div><!-- col -->

        </div><!-- row -->
        <hr>
        <div class="row">
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="form-control-label">-</label>P/Cord<span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="text" name="pcord" id="pcord">
                </div>
            </div><!-- col -->
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="form-control-label">-</label>Notas<span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="text" name="notas" id="notas">
                </div>
            </div><!-- col -->
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="form-control-label">-</label>TREND<span class="tx-danger">*</span></label>
                    <select class=" form-control form-control-sm" name=" trend" id="trend">
                        <option value="NOSING">NOSING</option>
                        <option value="TNMPOP">TNMPOP</option>
                        <option value="BMG">BMG</option>
                    </select>
                </div>
            </div><!-- col -->
        </div><!-- row -->
        <button type="submit" class="btn btn-block btn-success">Registrar</button>

    </form>
</div><!-- row -->
