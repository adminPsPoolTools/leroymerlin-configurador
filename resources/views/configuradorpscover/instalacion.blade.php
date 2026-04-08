<div id="instalacion">
    <div class="dibujo pscover-media relative bg-lime-50">
        <div id="dibuinstalacion"><img src="../../../config/img/laminas/laminas.jpg" width="100%"></div>
    </div>
    <div class="formtemp pscover-form flex flex-col">

        <h2><img src="../../../config/img/icono-piscina.png"><br>Tipo de instalación</h2>

        <div class="salto" style="height: 30px;"></div>
        {{-- <label class="switch">
            <input type="radio" class="tipoinsta" name="tipoinstac" id="instaExterna" value="E">
            <div class="slider round"></div>
        </label> --}}
        {{-- <div class="nombrecheck">Externa</div> --}}

        <div class="ps-radio-option flex items-center gap-2">
            <label class="switch m-0">
                <input type="radio" class="tipoinsta" name="tipoinstac" id="instaExterna" value="N">
                <div class="slider round"></div>
            </label>
            <div class="nombrecheck m-0">Con instalación</div>
        </div>

        {{-- <div class="ps-radio-option flex items-center gap-2">
            <label class="switch m-0">
                <input type="radio" class="tipoinsta" name="tipoinstac" id="instaPropia" value="P">
                <div class="slider round"></div>
            </label>
            <div class="nombrecheck m-0">Propia</div>
        </div> --}}

        <div class="salto" style="height: 30px;"></div>

        <div id="externa" class="ocultar">
            <div class="salto" style="height: 20px;"></div>
        </div>

        <div id="propia" class="ocultar">
            <div class="salto" style="height: 20px;"></div>
            <div class="ps-field-row">
                <div class="wxh">Precio de instalación</div>
                <div class="dato"><input type="number" name="instaprecio0" id="instaprecio0" value="" class="boton-s"></div>
            </div>
        </div>

        <div class="mb-20 salto"></div>
        <div class="botones pscover-actions flex items-center gap-3">
            <div class="divsiguiente"><button id="btninstalacionS" class="btnsiguiente">Siguiente <img
                        src="../../../config/img/flecha-s.png" align="absmiddle"></button></div>
            <div class="divanterior"><button id="btninstalacionA" class="btnanterior"><img
                        src="../../../config/img/flecha-a.png" align="absmiddle"> Atrás</button></div>
        </div>
    </div>
</div>