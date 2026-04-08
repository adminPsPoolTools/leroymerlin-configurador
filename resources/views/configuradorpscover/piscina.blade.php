<div id="piscina">
    <div class="dibujo pscover-media relative bg-lime-50">
        <div id="dibupiscina"></div>
    </div>

    <div class="formtemp pscover-form flex flex-col">
        <h2>Datos de la piscina</h2>
        <p class="text-sm text-slate-600 m-0">Para piscinas rectangulares</p>

        <div class="ps-piscina-layout grid grid-cols-1 md:grid-cols-2 gap-3 mt-2">
            <div id="hormigon_fibra" class="ps-radio-col rounded-lg border border-lime-200 bg-lime-50/50 p-3">
                <div class="ps-radio-option flex items-center gap-2">
                    <label class="switch m-0">
                        <input type="radio" name="acabadoPiscina" id="acabadoPiscina1" value="hormigon" checked>
                        <div class="slider round"></div>
                    </label>
                    <div class="nombrecheck m-0">Hormigón</div>
                </div>

                <div class="ps-radio-option flex items-center gap-2">
                    <label class="switch m-0">
                        <input type="radio" name="acabadoPiscina" id="acabadoPiscina2" value="liner">
                        <div class="slider round"></div>
                    </label>
                    <div class="nombrecheck m-0">Liner</div>
                </div>

                <div class="ps-radio-option flex items-center gap-2">
                    <label class="switch m-0">
                        <input type="radio" name="acabadoPiscina" id="acabadoPiscina3" value="fibra">
                        <div class="slider round"></div>
                    </label>
                    <div class="nombrecheck m-0">Fibra</div>
                </div>
            </div>

            <div class="ps-input-col rounded-lg border border-slate-200 bg-white p-3">
                <div class="ps-field-row">
                    <div class="wxh">Ancho (cm)<br><span class="peque">(600 cm Max)</span></div>
                    <div class="dato"><input type="number" name="piscina_w" id="piscina_w" value="400" max="600"><span
                            id="errorPisW" class="ocultar errorcampo">El ancho sobrepasa el
                            límite</span></div>
                </div>

                <div class="ps-field-row">
                    <div class="wxh">Largo (cm)<br><span class="peque">(15000 cm Max)</span></div>
                    <div class="dato"><input type="number" name="piscina_h" id="piscina_h" value="800" max="15000"><span
                            id="errorPisH" class="ocultar errorcampo">El largo sobrepasa el
                            límite</span></div>
                </div>

                <div id="opcion_deltaB" class="ocultar">
                    <div class="ps-field-row">
                        <div class="wxh">Profundidad de la tapa (max. 155 cm)</div>
                        <div class="dato"><input type="number" name="tapa_prof" id="tapa_prof" value="20" max="155"></div>
                    </div>
                </div>

                <div id="opcion_deltaCD" class="ocultar">
                    <div class="ps-field-row">
                        <div class="wxh">Profundidad de la piscina (max. 200 cm)</div>
                        <div class="dato"><input type="number" name="piscina_p" id="piscina_p" value="150" max="200"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="botones pscover-actions flex items-center gap-3">
            <div class="divsiguiente"><button id="btnpiscinaS" class="btnsiguiente">Siguiente <img
                        src="../../../config/img/flecha-s.png" align="absmiddle"></button></div>
            <div class="divanterior"><button id="btnpiscinaA" class="btnanterior"><img
                        src="../../../config/img/flecha-a.png" align="absmiddle"> Atrás</button></div>
        </div>
    </div>
</div>

