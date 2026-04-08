<div id="cubierta">
    <div class="dibujo pscover-media relative bg-lime-50">
        <div id="dibucubierta" style="display:flex; align-items:center; justify-content:center; width:100%; height:100%; padding:0;">
            <img src="../../../config/img/cubierta.jpg" width="100%" style="width:100%; height:100%; object-fit:contain; object-position:center;">
        </div>
    </div>

    <div class="formtemp pscover-form flex flex-col" style="padding-left:0; align-items:flex-start; text-align:left; justify-content:flex-start;">
        <h2>Tipo de la cubierta</h2>
        <p class="text-sm text-slate-600 m-0">Selecciona modelo</p>

        <div class="ps-cubierta-layout grid grid-cols-1 gap-2 mt-2" style="display:block; width:100%; margin:0; padding:0;">
            <div class="ps-radio-col" style="margin:0; padding:0; text-align:left;">
                <div class="mb-2 border-bottom titulo-modelo">Tipo</div>
                <button name="tipo" id="tipocubierta2" class="boton-s" value="C">Coronacion</button>

                <div class="salto" style="height: 10px;"></div>


                <div id="altea" class="ocultar">
                    <div class="mb-2 border-bottom titulo-modelo">Modelo</div>

                    <div class="cubierta-opcion" style="display:flex; justify-content:flex-start; align-items:center; gap:10px; margin:0; padding:0;">
                        <label class="switch m-0" style="margin:0;">
                            <input type="radio" class="deltaltea" name="deltaltea" id="terra_solar"
                                value="terra_solar">
                            <div class="slider round"></div>
                        </label>
                        <div class="mr-2 nombrecheck m-0" style="margin:0; text-align:left;">Terra Solar</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="botones pscover-actions flex items-center gap-3" style="margin-top:12px; padding-top:8px;">
            <div class="divsiguiente"><button id="btncubiertaS" class="btnsiguiente" disabled>Siguiente
                    <img src="../../../config/img/flecha-s.png" align="absmiddle"></button></div>
        </div>
    </div>
</div>
