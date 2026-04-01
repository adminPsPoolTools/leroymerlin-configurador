@extends('layouts.app')

@section('content')

<main class="seccion">

    <x-header-herramientas class="py-5 titulo"
        background="background-image: url({{ asset('storage/img/home/home.jpg')}})" title="Configurador de Cubiertas LEROY"
        description="Configura y calcula tu cubierta." :user="$user" logo="{{ asset('img/brand/leroy_merlin.jpg') }}"
        logoAlt="Leroy Merlin" />

    <link rel="stylesheet" type="text/css" href="{{ asset('config/lib/css/configurador.css') }}" />
    <script src="{{ asset('config/lib/js/jquery.min.js') }}"></script>
    <script src="{{ asset('config/lib/js/scriptPS.JS') }}"></script>
    <script type="text/javascript" src="{{ asset('config/lib/html2pdf-master/dist/html2pdf.bundle.min.js') }}"></script>

    <div class="container max-w-screen-lg mx-auto mb-4 w-12/12 contenido">
        <div class="px-4 caja">

            <div id="errormail" class="enespera" style="z-index: 1002;">
                <div class="error"><img src="img/checkko.png" align="absmiddle"><br>
                    <div id="errortxt"></div>
                </div>
            </div>
            <div id="correcto" class="enespera" style="z-index: 1002;">
                <div class="correcto"><img src="img/checkok.png" align="absmiddle"><br>La información ha sido enviada
                </div>
            </div>

            <form name="formdatos" id="formdatos" method="post">
                <input type="hidden" name="MODELO" id="tipoCubierta">
                <input type="hidden" name="SUBTIPO" id="deltaltea"> <!-- Submodelo -->
                <input type="hidden" name="PROFUNDIDAD_TAPA" id="profundidadTapa"> <!-- Submodelo -->
                <input type="hidden" name="PROFUNDIDAD_PIS" id="profundidadPis"> <!-- Submodelo -->
                <input type="hidden" name="CONVIGA" id="conViga"> <!-- viga [true/false] -->
                <input type="hidden" name="CONTAPA" id="conTapa"> <!-- tapa [true/false] -->
                <input type="hidden" name="ANCHOPISCINA" id="anchoPiscina"> <!-- Ancho de la piscina -->
                <input type="hidden" name="LARGOPISCINA" id="largoPiscina"> <!-- Altura de la piscina -->
                <input type="hidden" name="ANCHOESCALERA" id="anchoEscalera"> <!-- Ancho de la escalera -->
                <input type="hidden" name="LARGOESCALERA" id="largoEscalera"> <!-- Altura de la escalera -->
                <input type="hidden" name="TIPOESCALERA" id="posicionEscalera"> <!-- Posición de la escalera [F|D] -->
                <input type="hidden" name="posescalera" id="posescalera">
                <input type="hidden" name="SENTIDOESCALERA" id="sentidoEscalera"> <!-- Sentido de la escalera [s|n] -->
                <input type="hidden" name="ESCALERAROMANA" id="escaleraromana"> <!-- Escalera romana -->
                <input type="hidden" name="TIPOLAMINA" id="tipoLamina"> <!-- Material lámina -->
                <input type="hidden" name="COLORLAMINA" id="colorLamina"> <!-- Color lámina -->
                <input type="hidden" name="TIPOINSTALACION" id="tipoInsta"> <!-- Tipo de instalacion -->
                <input type="hidden" name="PROVINCIA" id="provinciaPrecio"> <!-- Provincia -->
                <input type="hidden" name="IMPORTEINSTALACION" id="instaprecio"> <!-- Precio de instalación -->
                <input type="hidden" name="DATOSCLIENTEFINAL" id="datoscliente"> <!-- Precio de instalación -->
                <input type="hidden" name="DESCRIPCION" id="descripcion"> <!-- Precio de instalación -->
                <input type="hidden" name="TIPO_TAPA" id="tipoTapa"> <!-- Tipo de tapa -->
                <input type="hidden" name="TIPO_PISCINA" id="tipoPiscina"> <!-- Tipo de tapa -->
                <input type="hidden" name="TIPO" id="TIPO"> <!-- tipo para enviar datos: [1|2] -->
                <input type="hidden" name="user" id="user" value="{{ $user }}">
            </form>

            <div class="salto" style="height: 30px;"></div>

            <section id="pscover-stepper" class="pscover-stepper" aria-label="Progreso del configurador">
                <div class="pscover-stepper-head">
                    <span id="pscover-step-text">Paso 1</span>
                </div>
                <div class="pscover-stepper-track-wrap">
                    <div class="pscover-stepper-track"></div>
                    <div id="pscover-stepper-progress" class="pscover-stepper-progress"></div>
                    <div id="pscover-stepper-cursor" class="pscover-stepper-cursor" aria-hidden="true"></div>
                    <ol id="pscover-stepper-list" class="pscover-stepper-list"></ol>
                </div>
            </section>

            <div id="configurador">

                <!---------------------------------------->
                <!--              CUBIERTA              -->
                <!---------------------------------------->

                @include('configuradorpscover.cubierta')

                <!---------------------------------------->
                <!--              PISCINA               -->
                <!---------------------------------------->

                @include('configuradorpscover.piscina')


                <!---------------------------------------->
                <!--              ESCALERA              -->
                <!---------------------------------------->

                @include('configuradorpscover.escalera')

                <!---------------------------------------->
                <!--               LAMINA               -->
                <!---------------------------------------->

                @include('configuradorpscover.laminas')

                <!---------------------------------------->
                <!--            INSTALACIÓN             -->
                <!---------------------------------------->

                @include('configuradorpscover.instalacion')


                <!---------------------------------------->
                <!--            PRECIO PVP              -->
                <!---------------------------------------->

                @include('configuradorpscover.precioPVP')

                <!---------------------------------------->
                <!--            PRECIO PNC              -->
                <!---------------------------------------->

                @include('configuradorpscover.precioPNC')


                <!---------------------------------------->
                <!--           DATOS CLIENTE            -->
                <!---------------------------------------->


                @include('configuradorpscover.datoscliente')

                <!---------------------------------------->
                <!--             IMPRIMIR               -->
                <!---------------------------------------->

                @include('configuradorpscover.imprimir')

                <!---------------------------------------->
                <!--             FINAL                  -->
                <!---------------------------------------->

                @include('configuradorpscover.final')


            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const stepDefs = [{
                    id: 'cubierta',
                    label: 'Cubierta'
                },
                {
                    id: 'piscina',
                    label: 'Piscina'
                },
                {
                    id: 'escalera',
                    label: 'Escalera'
                },
                {
                    id: 'lamina',
                    label: 'Lámina'
                },
                {
                    id: 'instalacion',
                    label: 'Instalación'
                },
                {
                    id: 'preciopvp',
                    label: 'Precio PVP'
                },
                {
                    id: 'cod_cliente',
                    label: 'Código'
                },
                {
                    id: 'precio',
                    label: 'Precio Neto'
                },
                {
                    id: 'precioneto',
                    label: 'Precio Neto'
                },
                {
                    id: 'cliente0',
                    label: 'Cliente'
                },
                {
                    id: 'imprimirdiv',
                    label: 'Imprimir'
                },
                {
                    id: 'final',
                    label: 'Final'
                }
            ];

            const configurador = document.getElementById('configurador');
            const list = document.getElementById('pscover-stepper-list');
            const progress = document.getElementById('pscover-stepper-progress');
            const cursor = document.getElementById('pscover-stepper-cursor');
            const stepText = document.getElementById('pscover-step-text');

            if (!configurador || !list || !progress || !cursor || !stepText) return;

            const steps = stepDefs.filter((step) => document.getElementById(step.id));
            const screens = steps.map((step) => document.getElementById(step.id));
            if (!steps.length) return;

            screens.forEach((screen) => screen.classList.add('ps-step-screen'));

            list.innerHTML = steps.map((step, index) => `
                <li class="pscover-step-item" data-step-index="${index}" data-step-target="${step.id}">
                    <span class="pscover-step-dot">${index + 1}</span>
                    <span class="pscover-step-label">${step.label}</span>
                </li>
            `).join('');

            const items = Array.from(list.querySelectorAll('.pscover-step-item'));
            let currentIndex = 0;

            function getVisibleStepIndex() {
                for (let i = 0; i < screens.length; i++) {
                    const el = screens[i];
                    if (!el) continue;
                    const style = window.getComputedStyle(el);
                    if (style.display !== 'none' && style.visibility !== 'hidden') return i;
                }
                return currentIndex;
            }

            function renderStep(index) {
                currentIndex = Math.max(0, Math.min(index, steps.length - 1));

                const ratio = steps.length > 1 ? currentIndex / (steps.length - 1) : 0;
                stepText.textContent = `Paso ${currentIndex + 1} de ${steps.length}: ${steps[currentIndex].label}`;

                items.forEach((item, i) => {
                    item.classList.toggle('is-active', i === currentIndex);
                    item.classList.toggle('is-complete', i < currentIndex);
                });

                screens.forEach((screen, i) => {
                    screen.classList.toggle('is-visible-step', i === currentIndex);
                });

                const getCenter = (idx) => {
                    const dot = items[idx] && items[idx].querySelector('.pscover-step-dot');
                    if (!dot) return null;
                    const listRect = list.getBoundingClientRect();
                    const dotRect = dot.getBoundingClientRect();
                    return (dotRect.left - listRect.left) + (dotRect.width / 2);
                };

                const firstCenter = getCenter(0);
                const lastCenter = getCenter(items.length - 1);
                const currentCenter = getCenter(currentIndex);

                if (firstCenter !== null && lastCenter !== null && currentCenter !== null) {
                    const trackStart = 12;
                    const clampedCenter = Math.max(trackStart, currentCenter);
                    cursor.style.left = `${clampedCenter - 11}px`;
                    progress.style.width = `${Math.max(0, clampedCenter - trackStart)}px`;
                } else {
                    const percent = ratio * 100;
                    progress.style.width = percent + '%';
                    cursor.style.left = `calc(${percent}% - 11px)`;
                }
            }

            function syncStep() {
                renderStep(getVisibleStepIndex());
            }

            const observer = new MutationObserver(() => {
                window.requestAnimationFrame(syncStep);
            });

            observer.observe(configurador, {
                attributes: true,
                subtree: true,
                attributeFilter: ['style', 'class']
            });

            configurador.addEventListener('click', function(event) {
                if (event.target.closest('button')) {
                    setTimeout(syncStep, 40);
                }
            });

            window.addEventListener('resize', syncStep);
            syncStep();
        });
    </script>
</main>

@endsection

<style>
    body {
        background: linear-gradient(165deg, #f3f5f1 0%, #ffffff 70%);
    }

    .seccion {
        padding: 1.2rem 0.75rem;
    }

    .contenido {
        background: #ffffff;
        border: 1px solid #d9e1cf;
        border-radius: 16px;
        box-shadow: 0 16px 40px rgba(46, 58, 46, 0.1);
        padding: 1.1rem;
        margin-top: 1rem;
    }

    .caja {
        border-radius: 14px;
        border: 1px solid #e3ebd9;
        background: #f7f9f4;
        padding: 1rem;
    }

    .cabhome .header-logo-side {
        width: 56px;
        height: 56px;
        padding: 4px;
        border-radius: 8px;
    }

    #configurador > div {
        margin-bottom: 0;
    }

    @media (max-width: 768px) {
        .contenido {
            padding: 0.8rem;
        }

        .caja {
            padding: 0.75rem;
        }

        .cabhome .header-logo-side {
            width: 44px;
            height: 44px;
            padding: 3px;
        }
    }
</style>


