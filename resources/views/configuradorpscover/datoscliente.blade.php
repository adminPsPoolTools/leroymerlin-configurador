<div id="cliente0">

    <div class="dibujo pscover-media relative bg-lime-50">
        <div id="dibucliente"><img src="../../../config/img/usuario.png"></div>
        <h2>Datos personales</h2><br>
        Estos son los campos obligatorios:

        <div id="comprobacion" class="comprobacion desktop">
            <div class="comproba" id="comp-nombre"><img src="../../../config/img/checkok.png" align="absmiddle">
                <div class="txt">Nombre</div>
            </div>
        </div>

    </div>

    <div class="formtemp pscover-form flex flex-col">
        <h2>Rellene los datos del cliente</h2>

        <form name="formcliente" id="formcliente" method="post">

            <div class="w50"><input type="text" id="nombre" name="nombre" placeholder="Nombre"></div>

            <div class="w50"><input type="email" id="email" name="email" placeholder="Email"></div>

            <div class="w50"><input type="text" id="telefono" name="telefonofijo" placeholder="Tel&eacute;fono"></div>

            <div class="w50"><input type="text" id="direccion" name="direccion" placeholder="Direcci&oacute;n"></div>
            <div class="w50"><input type="text" id="poblacion" name="poblacion" placeholder="Poblaci&oacute;n"></div>
            <div class="w50"><input type="text" id="provincia" name="provincia" placeholder="Provincia"></div>
            <div class="w50"><input type="text" id="cp" name="cp" placeholder="C&oacute;digo postal"></div>
            <div class="w50"><input type="text" id="pais" name="pais" placeholder="Pa&iacute;s"></div>

        </form>

        <form name="formprint" id="formprint" method="post">
            <input type="hidden" name="TIPO" id="tipoprint" value="3">
            <input type="hidden" name="PRESUPUESTO" id="presu">
            <input type="hidden" name="DATOSPRINT" id="datosprint">
            <input type="hidden" id="codpresupuesto" name="codpresupuesto" placeholder="Presupuesto">
        </form>

        <button class="boton-s" id="imprimir">Imprimir</button>

        <div class="salto"></div>

        <div id="comprobacion-mobile" class="comprobacion mobile">
            <div class="comproba" id="comp-nombre"><img src="../../../config/img/checkok.png" align="absmiddle">
                <div class="txt">Nombre</div>
            </div>
        </div>

        <div class="mb-20 salto desktop" style="height: 100px;"></div>
        <div class="botones pscover-actions flex items-center gap-3">
            <div class="divsiguiente"><button id="inicio" class="btnsiguiente">Volver al inicio</button></div>
            <div class="divanterior"><button id="btnclienteA" class="btnanterior"><img
                        src="../../../config/img/flecha-a.png" align="absmiddle"> Atr&aacute;s</button></div>
        </div>

    </div>

</div>
