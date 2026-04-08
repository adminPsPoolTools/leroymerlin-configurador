<div id="escalera">
    <div class="dibujo pscover-media relative bg-lime-50">
        <div id="dibuescalera"><img src="../../../config/img/escalera.png"></div>

        <div id="escaleraD" style="display: none;">
            <img src="../../../config/img/tipos_piscinas/dentro.png">
        </div>

        <div id="escaleraF" style="display: none;">
            <div id="enrollador">
                Elige la posición del <b>enrollador</b>.<br>
                Ten en cuenta que puede estar también al lado opuesto.<br><br>

                <button name="posenrollador1" id="posenrollador1" value="F"><img
                        src="../../../config/img/tipos_piscinas/1-0.png" width="100%"></button>
                <button name="posenrollador2" id="posenrollador2" value="D"><img
                        src="../../../config/img/tipos_piscinas/2-0.png" width="100%"></button>
            </div>

            <div id="posicion1">
                Elige la posición de la <b>escalera</b>.<br>
                Ten en cuenta que es aproximada y puede estar también al lado opuesto.<br><br>
                <button class="posescalera" name="posescalera" id="posescalera15" value="15"><img
                        src="../../../config/img/tipos_piscinas/1-5.png" width="100%"></button>
                <button class="posescalera" name="posescalera" id="posescalera16" value="16"><img
                        src="../../../config/img/tipos_piscinas/1-6.png" width="100%"></button>
                <button class="posescalera" name="posescalera" id="posescalera17" value="17"><img
                        src="../../../config/img/tipos_piscinas/1-7.png" width="100%"></button>
            </div>

            <div id="posicion2">
                Elige la posición de la <b>escalera</b>.<br>
                Ten en cuenta que es aproximada y puede estar también al lado opuesto.<br><br>

                <button class="posescalera" name="posescalera" id="posescalera21" value="21"><img
                        src="../../../config/img/tipos_piscinas/2-1.png" width="100%"></button>
                <button class="posescalera" name="posescalera" id="posescalera22" value="22"><img
                        src="../../../config/img/tipos_piscinas/2-2.png" width="100%"></button>
                <button class="posescalera" name="posescalera" id="posescalera23" value="23"><img
                        src="../../../config/img/tipos_piscinas/2-3.png" width="100%"></button>
            </div>
        </div>
    </div>

    <div class="formtemp">
        <h2>Datos de la escalera</h2>
        <p class="text-sm text-slate-600 m-0">Configura presencia y medidas</p>

        <div class="ps-escalera-layout grid grid-cols-1 md:grid-cols-2 gap-3 mt-2">
            <div class="ps-radio-col rounded-lg border border-lime-200 bg-lime-50/50 p-3">
                <div class="mb-2 border-bottom titulo-modelo">Escalera</div>

                <div class="ps-radio-option flex items-center gap-2">
                    <label class="switch m-0">
                        <input type="radio" class="lugarescalera" name="lugarescalera" id="posescaleraF" value="F">
                        <div class="slider round"></div>
                    </label>
                    <div class="nombrecheck m-0">Sí</div>
                </div>

                <div class="ps-radio-option flex items-center gap-2">
                    <label class="switch m-0">
                        <input type="radio" class="lugarescalera" name="lugarescalera" id="posescaleraD" value="D">
                        <div class="slider round"></div>
                    </label>
                    <div class="nombrecheck m-0">No</div>
                </div>
            </div>

            <div class="ps-input-col rounded-lg border border-slate-200 bg-white p-3">
                <div id="medidasescalera">
                    <div class="ps-field-row">
                        <div class="wxh">Ancho (cm)</div>
                        <div class="dato"><input type="number" name="escalera_w" id="escalera_w" value="100"><span
                                id="errorEscW" class="ocultar errorcampo">Ancho superior a la piscina</span></div>
                    </div>

                    <div class="ps-field-row">
                        <div class="wxh">Largo (cm)</div>
                        <div class="dato"><input type="number" name="escalera_h" id="escalera_h" value="100"></div>
                    </div>

                    <div class="formaescalera mt-2">
                        <div class="ps-radio-option flex items-center gap-2">
                            <label class="switch m-0">
                                <input type="radio" class="escaleraromana" name="escaleraromana" id="escRe" value="RECTA">
                                <div class="slider round"></div>
                            </label>
                            <div class="nombrecheck m-0">Forma recta</div>
                        </div>

                        <div class="ps-radio-option flex items-center gap-2">
                            <label class="switch m-0">
                                <input type="radio" class="escaleraromana" name="escaleraromana" id="escRo" value="ROMANA">
                                <div class="slider round"></div>
                            </label>
                            <div class="nombrecheck m-0">Forma romana</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="botones btnescalera pscover-actions flex items-center gap-3">
            <div class="divsiguiente"><button id="btnescaleraS" class="btnsiguiente">Siguiente <img
                        src="../../../config/img/flecha-s.png" align="absmiddle"></button></div>
            <div class="divanterior"><button id="btnescaleraA" class="btnanterior"><img
                        src="../../../config/img/flecha-a.png" align="absmiddle"> Atrás</button></div>
        </div>
    </div>
</div>
