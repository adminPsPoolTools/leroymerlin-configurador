<div id="piscina">
    <div class="dibujo pscover-media relative bg-lime-50">
        <div id="dibupiscina"></div>
    </div>

    <div class="formtemp pscover-form flex flex-col">
        <h2>Datos de la piscina</h2>
        <p class="text-sm text-slate-600 m-0">Para piscinas rectangulares</p>

        <div class="ps-piscina-layout grid grid-cols-1 md:grid-cols-2 gap-3 mt-2">
            <div class="ps-input-col rounded-lg border border-slate-200 bg-white p-3">
                <div class="ps-field-row">
                    <div class="wxh">Ancho (cm)<br><span class="peque">(600 cm Max)</span></div>
                    <div class="dato"><input type="number" name="piscina_w" id="piscina_w" value="400" max="600"><span
                            id="errorPisW" class="ocultar errorcampo">El ancho sobrepasa el
                            límite</span></div>
                </div>

                <div class="ps-field-row">
                    <div class="wxh">Largo (cm)<br><span class="peque">(1500 cm Max)</span></div>
                    <div class="dato"><input type="number" name="piscina_h" id="piscina_h" value="800" max="15000"><span
                            id="errorPisH" class="ocultar errorcampo">El largo sobrepasa el
                            límite</span></div>
                </div>
            </div>
        </div>

        <div class="botones pscover-actions flex items-center gap-3">
            <div class="divsiguiente"><button id="btnpiscinaS" class="btnsiguiente">Siguiente <img
                        src="../../../config/img/flecha-s.png" align="absmiddle"></button></div>
        </div>
    </div>
</div>
