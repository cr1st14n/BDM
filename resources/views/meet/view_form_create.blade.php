<div class="br-section-wrapper">
    <form id="form_1" onsubmit="event.preventDefault(); create($(this).serialize())">

        <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">Registro de datos MEET</h6>
        <div class="row">
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="form-control-label">Sigla OACI: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="text" maxlength="4" name="m_1"
                        id="m_1" required>
                </div>
            </div><!-- col -->
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="form-control-label">FECHA: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="date" name="m_2" id="m_2" required>
                </div>
            </div><!-- col -->
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="form-control-label">HORA.: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="time" name="m_3" id="m_3">
                </div>
            </div><!-- col -->
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="form-control-label">dd : <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" maxlength="3" type="number" name="m_4"
                        id="m_4">
                </div>
            </div><!-- col -->
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="form-control-label">ff: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" maxlength="2" type="number" name="m_5"
                        id="m_5" required>
                </div>
            </div><!-- col -->
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="form-control-label">fmfm.: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" maxlength="2" type="number" name="m_6"
                        id="m_6">
                </div>
            </div><!-- col -->
            <div class="col-lg-2">
                <div class="form-group">
                    <label class="form-control-label">viento variable: <span class="tx-danger">*</span></label>
                    <div class="input-group">
                        <input type="number" maxlength="3" name="m_7_1" id="m_7_1"
                            class="form-control form-control-sm" aria-label="Amount (to the nearest dollar)">
                        <span class="input-group-addon tx-size-sm lh-2">V</span>
                        <input type="number" maxlength="3" name="m_7_2" id="m_7_2"
                            class="form-control form-control-sm" aria-label="Amount (to the nearest dollar)">
                    </div>
                </div>
            </div><!-- col -->
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="form-control-label">VVVV: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="number" maxlength="4" name="m_8"
                        id="m_8">
                </div>
            </div><!-- col -->
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="form-control-label">DV: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="text" maxlength="3" name="m_9"
                        id="m_9">
                </div>
            </div><!-- col -->
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="form-control-label">VV: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" maxlength="2" type="number" name="m_10"
                        id="m_10">
                </div>
            </div><!-- col -->
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="form-control-label">WW: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" maxlength="2" type="number" name="m_11"
                        id="m_11">
                </div>
            </div><!-- col -->
        </div><!-- row -->
        <div class="row">
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="form-control-label">WWW: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="number" maxlength="2" name="m_12"
                        id="m_12" required>
                </div>
            </div><!-- col -->
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="form-control-label">NS-1: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" maxlength="1" type="number" name="m_13"
                        id="m_13" required>
                </div>
            </div><!-- col -->
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="form-control-label">HHH-1: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="number" maxlength="3" name="m_14"
                        id="m_14">
                </div>
            </div><!-- col -->
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="form-control-label"> CB/TCU-1: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" maxlength="3" type="text" name="m_15"
                        id="m_15">
                </div>
            </div><!-- col -->
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="form-control-label">NS-2: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" maxlength="1" type="number" name="m_16"
                        id="m_16" required>
                </div>
            </div><!-- col -->
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="form-control-label">HHH-2: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="number" maxlength="3" name="m_17"
                        id="m_17">
                </div>
            </div><!-- col -->
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="form-control-label"> CB/TCU-2: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" maxlength="3" type="text" name="m_18"
                        id="m_18">
                </div>
            </div><!-- col -->
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="form-control-label">NS-3: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" maxlength="1" type="number" name="m_19"
                        id="m_19" required>
                </div>
            </div><!-- col -->
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="form-control-label">HHH-3: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="number" maxlength="3" name="m_20"
                        id="m_20">
                </div>
            </div><!-- col -->
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="form-control-label"> CB/TCU-3: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" maxlength="3" type="text" name="m_21" id="m_21">
                </div>
            </div><!-- col -->
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="form-control-label">NS-4: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" maxlength="1" type="number" name="m_22" id="m_22" required>
                </div>
            </div><!-- col -->
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="form-control-label">HHH-4: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="number" maxlength="3" name="m_23" id="m_23">
                </div>
            </div><!-- col -->
        </div><!-- row -->
        <div class="row">
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="form-control-label">TT: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="number" maxlength="3" max="99" name="m_24" id="m_24">
                </div>
            </div><!-- col -->
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="form-control-label">TD: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="number" maxlength="3" name="m_25" id="m_25">
                </div>
            </div><!-- col -->
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="form-control-label">QFE: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="number" max="100" name="m_26" id="m_26">
                </div>
            </div><!-- col -->
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="form-control-label">QNH: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="number" max="9999" name="m_27" id="m_27">
                </div>
            </div><!-- col -->
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="form-control-label">Pulg/Hg: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="number" max="99" name="m_28" id="m_28" >
                </div>
            </div><!-- col -->
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="form-control-label">P/Cord: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="number" max="9999" name="m_29" id="m_29">
                </div>
            </div><!-- col -->
            <div class="col-lg-1">
                <div class="form-group">
                    <label class="form-control-label">UUU: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="number" max="99" name="m_30" id="m_30">
                </div>
            </div><!-- col -->
            <div class="col-lg-6">
                <div class="form-group">
                    <label class="form-control-label">Notas: <span class="tx-danger">*</span></label>
                    <input class="form-control form-control-sm" type="text" maxlength="100" name="m_31" id="m_31">
                </div>
            </div><!-- col -->
        </div>

        <button type="submit" class="btn btn-block btn-success">Registrar</button>

    </form>
</div><!-- row -->
