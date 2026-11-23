<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PEC: PROYECTO ESCUELA COMUNIDAD CBTA35</title>

    <!-- Fuentes Google Fonts: Outfit / Plus Jakarta Sans (Limpia, humanista y futurista) + Space Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS vía CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Configuración de Paleta Frutiger Aero: Beige Nacarado, Verde Esmeralda Brillante y Aqua -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        display: ['Outfit', 'sans-serif'],
                        sans: ['Plus Jakarta Sans', 'sans-serif'],
                        mono: ['Space Mono', 'monospace'],
                    },
                    colors: {
                        pearl: {
                            50: '#FDFCF9',
                            100: '#F9F6EE', // Beige crema nacarado base
                            200: '#F2EDE1', // Beige cálido luminoso
                            300: '#E6DEC8', // Acento arena suave
                        },
                        emerald: {
                            100: '#D5F5E3',
                            300: '#76D7C4', // Verde agua cristalino
                            400: '#2EB872', // Verde hoja Frutiger brillante
                            600: '#1E8449', // Verde esmeralda intenso
                            800: '#1F422B', // Verde bosque profundo (texto legible)
                            950: '#0E2416',
                        },
                        aqua: {
                            200: '#D6EAF8',
                            400: '#5DADE2', // Azul cielo limpio Aero
                            500: '#3498DB',
                        }
                    },
                    boxShadow: {
                        'aero': '0 12px 32px -4px rgba(31, 66, 43, 0.14), inset 0 1.5px 1px rgba(255, 255, 255, 0.9)',
                        'aero-glow': '0 10px 28px -2px rgba(46, 184, 114, 0.32), inset 0 2px 2px rgba(255, 255, 255, 0.95)',
                        'aqua-btn': '0 6px 18px rgba(46, 184, 114, 0.4), inset 0 2px 3px rgba(255, 255, 255, 0.85), inset 0 -3px 6px rgba(14, 36, 22, 0.25)',
                    }
                }
            }
        }
    </script>

    <style>
        /* Fondo Frutiger Aero Nítido: Cielo luminoso, pradera esmeralda suave y beige nacarado (SIN filtros de ruido) */
        body {
            background-color: #F9F6EE;
            background-image: 
                radial-gradient(circle at 12% 8%, rgba(93, 173, 226, 0.22) 0%, transparent 42%),
                radial-gradient(circle at 88% 14%, rgba(46, 184, 114, 0.22) 0%, transparent 45%),
                radial-gradient(circle at 50% 55%, rgba(163, 228, 215, 0.18) 0%, transparent 55%),
                linear-gradient(180deg, #F4F9F9 0%, #F9F6EE 38%, #F2EDE1 100%);
            background-attachment: fixed;
        }

        /* Vidrio Frutiger Aero (Glassmorphism Cristalino) */
        .aero-glass {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.84) 0%, rgba(249, 246, 238, 0.68) 100%);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1.5px solid rgba(255, 255, 255, 0.92);
        }

        .aero-glass-green {
            background: linear-gradient(145deg, rgba(226, 247, 236, 0.85) 0%, rgba(242, 237, 225, 0.75) 100%);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1.5px solid rgba(255, 255, 255, 0.92);
        }

        /* Botón estilo Gel / Aqua de mediados de los 2000s con reflejo especular superior */
        .aqua-gel-btn {
            position: relative;
            overflow: hidden;
            background: linear-gradient(180deg, #52D68A 0%, #2EB872 50%, #1E8449 51%, #27AE60 100%);
            border: 1.5px solid #1E8449;
            box-shadow: 0 6px 18px rgba(46, 184, 114, 0.35), inset 0 1.5px 1px rgba(255, 255, 255, 0.85);
            transition: all 0.22s ease;
        }
        .aqua-gel-btn::before {
            content: '';
            position: absolute;
            top: 2px;
            left: 4%;
            width: 92%;
            height: 46%;
            border-radius: 9999px;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.78) 0%, rgba(255, 255, 255, 0.12) 100%);
            pointer-events: none;
        }
        .aqua-gel-btn:hover {
            transform: translateY(-2px);
            filter: brightness(1.06);
            box-shadow: 0 10px 24px rgba(46, 184, 114, 0.48), inset 0 2px 2px rgba(255, 255, 255, 0.95);
        }

        .aqua-gel-blue {
            position: relative;
            overflow: hidden;
            background: linear-gradient(180deg, #85C1E9 0%, #5DADE2 50%, #2E86C1 51%, #3498DB 100%);
            border: 1.5px solid #2874A6;
            box-shadow: 0 6px 18px rgba(93, 173, 226, 0.35), inset 0 1.5px 1px rgba(255, 255, 255, 0.85);
            transition: all 0.22s ease;
        }
        .aqua-gel-blue::before {
            content: '';
            position: absolute;
            top: 2px;
            left: 4%;
            width: 92%;
            height: 46%;
            border-radius: 9999px;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.78) 0%, rgba(255, 255, 255, 0.12) 100%);
            pointer-events: none;
        }
        .aqua-gel-blue:hover {
            transform: translateY(-2px);
            filter: brightness(1.06);
        }

        /* Barra de encabezado estilo ventana Aero */
        .aero-titlebar {
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.92) 0%, rgba(214, 234, 248, 0.55) 49%, rgba(163, 228, 215, 0.45) 50%, rgba(255, 255, 255, 0.75) 100%);
            border-bottom: 1px solid rgba(255, 255, 255, 0.9);
        }

        /* Barra de progreso líquida brillante */
        .liquid-progress {
            background: linear-gradient(180deg, #7DCEA0 0%, #2EB872 50%, #1E8449 51%, #2ECC71 100%);
            box-shadow: inset 0 1px 1px rgba(255,255,255,0.8);
        }

        /* Orbes y Burbujas Flotantes Translúcidas */
        .aero-orb {
            border-radius: 9999px;
            background: radial-gradient(circle at 30% 30%, rgba(255, 255, 255, 0.92) 0%, rgba(163, 228, 215, 0.42) 38%, rgba(93, 173, 226, 0.25) 70%, rgba(255, 255, 255, 0.65) 100%);
            box-shadow: inset -6px -6px 16px rgba(46, 184, 114, 0.22), inset 6px 6px 16px rgba(255, 255, 255, 0.95), 0 8px 24px rgba(93, 173, 226, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.85);
        }

        @keyframes floatSlow {
            0%, 100% { transform: translateY(0px) scale(1); }
            50% { transform: translateY(-10px) scale(1.03); }
        }
        .animate-float {
            animation: floatSlow 6s ease-in-out infinite;
        }
        .animate-float-delayed {
            animation: floatSlow 7.5s ease-in-out 2s infinite;
        }

        /* Cinta continua suave */
        @keyframes marquee {
            0% { transform: translateX(0%); }
            100% { transform: translateX(-50%); }
        }
        .animate-marquee {
            display: flex;
            width: max-content;
            animation: marquee 34s linear infinite;
        }
        .animate-marquee:hover {
            animation-play-state: paused;
        }
    </style>
</head>
<body class="text-emerald-800 font-sans antialiased pb-32 relative overflow-x-hidden selection:bg-emerald-400 selection:text-white">

    <!-- ORBES Y BURBUJAS FLOTANTES TRANSLÚCIDAS FRUTIGER AERO (NITIDEZ TOTAL) -->
    <div class="fixed top-24 -left-10 w-44 h-44 aero-orb animate-float pointer-events-none z-0 opacity-75"></div>
    <div class="fixed top-1/3 -right-12 w-56 h-56 aero-orb animate-float-delayed pointer-events-none z-0 opacity-70"></div>
    <div class="fixed bottom-28 left-10 w-24 h-24 aero-orb animate-float pointer-events-none z-0 opacity-80"></div>

    <!-- CINTA SUPERIOR CRISTALINA DE MONITOREO CLIMÁTICO -->
    <div class="relative z-30 bg-gradient-to-r from-emerald-800 via-emerald-600 to-aqua-500 text-white py-2 overflow-hidden font-mono text-xs tracking-wider uppercase shadow-md border-b border-white/40">
        <div class="animate-marquee flex items-center gap-8">
            <span class="flex items-center gap-2"><span class="w-2.5 h-2.5 rounded-full bg-emerald-300 shadow-[0_0_8px_#76D7C4]"></span> MONITOR HÍDRICO MÉXICO: 68% DEL TERRITORIO CON ESTRÉS DE SEQUÍA</span>
            <span>✦</span>
            <span class="text-pearl-100 font-bold">CBTA 35 ECO-FUTURO: META +2,500 ÁRBOLES NATIVOS EN PARCELAS Y CUENCAS</span>
            <span>✦</span>
            <span class="text-aqua-200">CO₂ ATMOSFÉRICO GLOBAL: 424.6 PPM — CADA PEQUEÑA ACCIÓN DIARIA TRANSFORMA EL PLANETA</span>
            <span>✦</span>
            <span>APP COMPLEMENTARIA "RAÍCES VIVAS" V.2.4 SINCRONIZADA</span>
            <span>✦</span>
            <!-- Duplicado fluido -->
            <span class="flex items-center gap-2"><span class="w-2.5 h-2.5 rounded-full bg-emerald-300 shadow-[0_0_8px_#76D7C4]"></span> MONITOR HÍDRICO MÉXICO: 68% DEL TERRITORIO CON ESTRÉS DE SEQUÍA</span>
            <span>✦</span>
            <span class="text-pearl-100 font-bold">CBTA 35 ECO-FUTURO: META +2,500 ÁRBOLES NATIVOS EN PARCELAS Y CUENCAS</span>
            <span>✦</span>
            <span class="text-aqua-200">CO₂ ATMOSFÉRICO GLOBAL: 424.6 PPM — CADA PEQUEÑA ACCIÓN DIARIA TRANSFORMA EL PLANETA</span>
            <span>✦</span>
            <span>APP COMPLEMENTARIA "RAÍCES VIVAS" V.2.4 SINCRONIZADA</span>
            <span>✦</span>
        </div>
    </div>

    <!-- ENCABEZADO GLOSSY TIPO BARRA AERO -->
    <header class="sticky top-0 z-40 aero-glass shadow-aero border-b border-white/90">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 flex flex-wrap items-center justify-between gap-4">
            <div class="flex items-center gap-3.5">
                <!-- Esfera Orbe Logotipo -->
                <div class="w-12 h-12 rounded-2xl bg-gradient-to-br from-emerald-300 via-emerald-400 to-aqua-500 p-0.5 shadow-aero-glow flex items-center justify-center relative">
                    <div class="w-full h-full rounded-[14px] bg-gradient-to-b from-white/50 to-transparent flex items-center justify-center text-white">
                        <svg class="w-7 h-7 drop-shadow" fill="none" stroke="currentColor" stroke-width="2.3" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18" />
                        </svg>
                    </div>
                </div>
                <div>
                    <div class="flex items-center gap-2">
                        <span class="font-display font-black text-2xl tracking-tight bg-gradient-to-r from-emerald-800 via-emerald-600 to-aqua-500 bg-clip-text text-transparent">
                            PEC
                        </span>
                        <span class="px-2.5 py-0.5 text-[11px] font-mono font-bold uppercase bg-gradient-to-b from-white to-emerald-100 text-emerald-800 border border-emerald-300 rounded-full shadow-sm">
                            CBTA 35
                        </span>
                    </div>
                    <p class="font-sans text-xs font-semibold text-emerald-800/75">
                        Aplicacion Web + App • Reforestación
                    </p>
                </div>
            </div>

            <!-- Widget de Puntos Verdes del Usuario -->
            <div class="flex items-center gap-3">
                <div class="bg-gradient-to-b from-white/95 to-pearl-200/90 border border-white rounded-full px-4 py-1.5 shadow-aero flex items-center gap-2">
                    <span class="w-3 h-3 rounded-full bg-gradient-to-tr from-emerald-400 to-emerald-300 shadow-[0_0_8px_#2EB872]"></span>
                    <span class="font-mono text-xs font-bold text-emerald-800">ECO-PUNTOS:</span>
                    <span id="user-green-points" class="font-display text-base font-black text-emerald-600">120 PTS</span>
                </div>
                <a href="#app-showcase" class="hidden sm:inline-flex items-center gap-2 px-5 py-2.5 rounded-full aqua-gel-blue text-white font-bold text-xs uppercase tracking-wider">
                    <span>Sincronizar App</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5A2.25 2.25 0 0018 20.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3" /></svg>
                </a>
            </div>
        </div>
    </header>

    <main class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-8 space-y-24">

        <!-- ===================================================================== -->
        <!-- SECCIÓN 1: INICIO (ESTÉTICA FRUTIGER AERO MAXIMALISTA + FIRMAS MX)    -->
        <!-- ===================================================================== -->
        <section id="inicio" class="scroll-mt-28 space-y-12">
            <!-- Hero Principal Cristalino -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-stretch">
                <!-- Panel Izquierdo (7 cols) -->
                <div class="lg:col-span-7 aero-glass rounded-[2rem] shadow-aero overflow-hidden flex flex-col justify-between relative">
                    <!-- Barra superior estilo ventana Aero -->
                    <div class="aero-titlebar px-6 py-3 flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-emerald-400 border border-white shadow-sm"></span>
                            <span class="w-3 h-3 rounded-full bg-aqua-400 border border-white shadow-sm"></span>
                            <span class="w-3 h-3 rounded-full bg-pearl-300 border border-white shadow-sm"></span>
                            <span class="ml-2 font-mono text-[11px] font-bold text-emerald-800/80">CBTA35_VERDE.EXE</span>
                        </div>
                        <span class="px-2.5 py-0.5 rounded-full bg-white/80 text-emerald-700 font-mono text-[10px] font-bold border border-emerald-300">
                            ESTUDIANTES POR UN FUTURO LIMPIO 
                        </span>
                    </div>

                    <div class="p-6 sm:p-10 space-y-6 relative">
                        <!-- Destello solar suave Frutiger Aero -->
                        <div class="absolute -right-10 -top-10 w-64 h-64 rounded-full bg-gradient-to-br from-aqua-400/20 via-emerald-300/25 to-transparent blur-2xl pointer-events-none"></div>

                        <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-gradient-to-r from-emerald-100 to-aqua-200/70 border border-white shadow-sm">
                            <span class="text-sm"></span>
                            <span class="font-sans text-xs font-bold text-emerald-800">Reforestación Inteligente en el CBTA 35 & Activismo Escolar</span>
                        </div>

                        <h1 class="font-display font-black text-4xl sm:text-5xl lg:text-[52px] text-emerald-800 leading-[1.08] tracking-tight">
                            Un mañana más <span class="bg-gradient-to-r from-emerald-600 via-emerald-400 to-aqua-500 bg-clip-text text-transparent">verde, limpio y cristalino</span> empieza hoy.
                        </h1>

                        <p class="text-base sm:text-lg text-emerald-800/90 font-medium leading-relaxed">
                            Combinamos la reforestación directa en el <strong>CBTA 35</strong> con nuestra aplicación móvil de recordatorios diarios, campañas ciudadanas para recuperar zonas verdes en México y un detector transparente contra marcas que dañan tu salud o experimentan con animales.
                        </p>

                        <!-- Carteles de Campañas Publicitarias Maximalistas (Estilo Widgets Glossy) -->
                        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 pt-2">
                            <div class="rounded-2xl p-4 bg-gradient-to-b from-white/95 to-emerald-100/80 border border-white shadow-aero hover:-translate-y-1 transition-transform">
                                <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-emerald-300 to-emerald-600 text-white flex items-center justify-center font-bold shadow-sm mb-2.5">🌳</div>
                                <span class="font-mono text-[10px] font-bold text-emerald-600 uppercase">Campaña #01</span>
                                <h3 class="font-display font-bold text-base text-emerald-800 leading-snug mt-0.5">Adopta un Árbol Nativo CBTA 35</h3>
                                <p class="text-xs text-emerald-800/75 mt-1">Seguimiento de riego desde tu app.</p>
                            </div>

                            <div class="rounded-2xl p-4 bg-gradient-to-b from-white/95 to-aqua-200/70 border border-white shadow-aero hover:-translate-y-1 transition-transform">
                                <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-aqua-400 to-aqua-500 text-white flex items-center justify-center font-bold shadow-sm mb-2.5">💧</div>
                                <span class="font-mono text-[10px] font-bold text-aqua-500 uppercase">Campaña #02</span>
                                <h3 class="font-display font-bold text-base text-emerald-800 leading-snug mt-0.5">Cero Crueldad & Salud Pura</h3>
                                <p class="text-xs text-emerald-800/75 mt-1">Escanea productos antes de comprar.</p>
                            </div>

                            <div class="rounded-2xl p-4 bg-gradient-to-b from-white/95 to-pearl-200/90 border border-white shadow-aero hover:-translate-y-1 transition-transform">
                                <div class="w-9 h-9 rounded-xl bg-gradient-to-br from-emerald-400 to-teal-500 text-white flex items-center justify-center font-bold shadow-sm mb-2.5">🇲🇽</div>
                                <span class="font-mono text-[10px] font-bold text-emerald-700 uppercase">Campaña #03</span>
                                <h3 class="font-display font-bold text-base text-emerald-800 leading-snug mt-0.5">100 Mil Firmas Verdes MX</h3>
                                <p class="text-xs text-emerald-800/75 mt-1">Rescate de pulmones urbanos.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Panel Derecho: App Complementaria Estilo Dispositivo Cristalino (5 cols) -->
                <div id="app-showcase" class="lg:col-span-5 aero-glass-green rounded-[2rem] shadow-aero-glow overflow-hidden flex flex-col justify-between relative">
                    <div class="aero-titlebar px-6 py-3 flex items-center justify-between">
                        <span class="font-mono text-[11px] font-bold text-emerald-800">APP COMPLEMENTARIA • IOS & ANDROID</span>
                        <span class="w-2.5 h-2.5 rounded-full bg-emerald-400 shadow-[0_0_8px_#2EB872]"></span>
                    </div>

                    <div class="p-6 sm:p-8 flex flex-col justify-between flex-1 space-y-6">
                        <div>
                            <h2 class="font-display font-black text-2xl sm:text-3xl text-emerald-800 leading-tight">
                                Lleva el ecosistema <span class="text-emerald-600">Raíces Vivas</span> en tu bolsillo
                            </h2>
                            <p class="text-sm text-emerald-800/80 mt-2">
                                Recibe notificaciones oportunas para reducir residuos y usa la cámara de tu teléfono para detectar marcas nocivas al instante.
                            </p>
                        </div>

                        <!-- Mockup de Smartphone estilo Frutiger Aero Glossy -->
                        <div class="mx-auto w-full max-w-xs rounded-[2.2rem] p-3 bg-gradient-to-b from-white/95 via-aqua-200/50 to-emerald-100/80 border-2 border-white shadow-aero-glow">
                            <div class="rounded-[1.7rem] bg-gradient-to-b from-aqua-200/40 via-white/90 to-pearl-100 p-4 border border-emerald-300/50 space-y-3">
                                <div class="flex items-center justify-between text-[10px] font-mono font-bold text-emerald-800">
                                    <span>09:41 AM • ECO-SYNC</span>
                                    <span class="px-2 py-0.5 rounded-full bg-emerald-400 text-white shadow-sm">ACTIVA</span>
                                </div>

                                <div class="p-3 rounded-2xl bg-gradient-to-r from-white to-emerald-100/80 border border-white shadow-sm">
                                    <p class="font-mono text-[10px] font-bold text-emerald-600">⏰ RECORDATORIO DIARIO</p>
                                    <p class="font-bold text-xs text-emerald-800 mt-0.5">Usa tu termo metálico en el CBTA 35 (Ahorras 2 botellas PET)</p>
                                </div>

                                <div class="p-3 rounded-2xl bg-gradient-to-r from-white to-aqua-200/60 border border-white shadow-sm">
                                    <p class="font-mono text-[10px] font-bold text-aqua-500">🔍 DETECTOR ÉTICO</p>
                                    <p class="font-bold text-xs text-emerald-800 mt-0.5">Refresco Ultraprocesado: <span class="text-red-600">Alto Riesgo Salud + Huella Hídrica</span></p>
                                </div>
                            </div>
                        </div>

                        <a href="#contenido" class="w-full text-center py-3.5 px-6 rounded-full aqua-gel-btn text-white font-display font-bold text-sm uppercase tracking-wider">
                            Explorar Herramientas Interactivas ↓
                        </a>
                    </div>
                </div>
            </div>

            <!-- MÓDULO DE CAMPAÑAS DE FIRMAS PARA RECUPERAR ZONAS VERDES EN MÉXICO -->
            <div class="aero-glass rounded-[2rem] shadow-aero overflow-hidden">
                <div class="aero-titlebar px-6 sm:px-10 py-4 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                    <div class="flex items-center gap-2.5">
                        <span class="text-lg">🌿</span>
                        <span class="font-display font-extrabold text-sm sm:text-base text-emerald-800 uppercase tracking-wide">
                            Campañas Nacionales de Firmas • Recuperemos las Zonas Verdes de México
                        </span>
                    </div>
                    <div class="bg-white/90 px-4 py-1 rounded-full border border-emerald-300 font-mono text-xs font-bold text-emerald-800 shadow-sm">
                        FIRMAS COLECTIVAS: <span id="total-signatures-counter" class="text-emerald-600 font-black">48,920</span>
                    </div>
                </div>

                <div class="p-6 sm:p-10 space-y-8">
                    <p class="text-emerald-800/90 max-w-3xl text-sm sm:text-base font-medium">
                        Tu firma respalda iniciativas ciudadanas y estudiantiles para frenar la tala urbana, restaurar cuerpos de agua y expandir los corredores ecológicos del <strong>CBTA 35</strong> y todo el país.
                    </p>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Petición 1 -->
                        <article class="rounded-3xl p-6 bg-gradient-to-b from-white/95 to-pearl-200/85 border border-white shadow-aero flex flex-col justify-between">
                            <div class="space-y-3">
                                <div class="flex justify-between items-center font-mono text-[11px]">
                                    <span class="px-3 py-1 rounded-full bg-emerald-100 text-emerald-800 font-bold">EDOMEX / CDMX</span>
                                    <span class="text-emerald-600 font-bold">● PRIORIDAD ALTA</span>
                                </div>
                                <h3 class="font-display font-extrabold text-xl text-emerald-800">
                                    Corredor Biológico CBTA 35 y Sierra de Guadalupe
                                </h3>
                                <p class="text-sm text-emerald-800/80 leading-relaxed">
                                    Presupuesto participativo para sistemas de captación pluvial y reforestación de 15 hectáreas periurbanas con especies nativas.
                                </p>
                            </div>

                            <div class="mt-6 pt-4 border-t border-emerald-800/10 space-y-3">
                                <div>
                                    <div class="flex justify-between font-mono text-xs font-bold mb-1.5 text-emerald-800">
                                        <span><span id="sig-count-1">18,450</span> firmas</span>
                                        <span>Meta: 20,000</span>
                                    </div>
                                    <div class="w-full h-4 bg-pearl-200 rounded-full p-0.5 border border-white shadow-inner overflow-hidden">
                                        <div id="sig-bar-1" class="h-full rounded-full liquid-progress transition-all duration-500" style="width: 92%"></div>
                                    </div>
                                </div>
                                <button onclick="signPetition(1, 'Corredor Biológico CBTA 35')" id="sig-btn-1"
                                    class="w-full py-3 px-4 rounded-full aqua-gel-btn text-white font-bold text-xs uppercase tracking-wider cursor-pointer">
                                    ✍ Firmar Petición (+25 PTS)
                                </button>
                            </div>
                        </article>

                        <!-- Petición 2 -->
                        <article class="rounded-3xl p-6 bg-gradient-to-b from-white/95 to-pearl-200/85 border border-white shadow-aero flex flex-col justify-between">
                            <div class="space-y-3">
                                <div class="flex justify-between items-center font-mono text-[11px]">
                                    <span class="px-3 py-1 rounded-full bg-aqua-200 text-emerald-800 font-bold">XOCHIMILCO / VALLE MX</span>
                                    <span class="text-aqua-500 font-bold">● ACTIVA</span>
                                </div>
                                <h3 class="font-display font-extrabold text-xl text-emerald-800">
                                    Rescate de Humedales y Chinampas Nativas
                                </h3>
                                <p class="text-sm text-emerald-800/80 leading-relaxed">
                                    Saneamiento de canales lacustres, freno a descargas urbanas irregulares y plantación masiva de ahuejotes endémicos.
                                </p>
                            </div>

                            <div class="mt-6 pt-4 border-t border-emerald-800/10 space-y-3">
                                <div>
                                    <div class="flex justify-between font-mono text-xs font-bold mb-1.5 text-emerald-800">
                                        <span><span id="sig-count-2">16,280</span> firmas</span>
                                        <span>Meta: 25,000</span>
                                    </div>
                                    <div class="w-full h-4 bg-pearl-200 rounded-full p-0.5 border border-white shadow-inner overflow-hidden">
                                        <div id="sig-bar-2" class="h-full rounded-full liquid-progress transition-all duration-500" style="width: 65%"></div>
                                    </div>
                                </div>
                                <button onclick="signPetition(2, 'Rescate de Humedales y Chinampas')" id="sig-btn-2"
                                    class="w-full py-3 px-4 rounded-full aqua-gel-btn text-white font-bold text-xs uppercase tracking-wider cursor-pointer">
                                    ✍ Firmar Petición (+25 PTS)
                                </button>
                            </div>
                        </article>

                        <!-- Petición 3 -->
                        <article class="rounded-3xl p-6 bg-gradient-to-b from-white/95 to-pearl-200/85 border border-white shadow-aero flex flex-col justify-between">
                            <div class="space-y-3">
                                <div class="flex justify-between items-center font-mono text-[11px]">
                                    <span class="px-3 py-1 rounded-full bg-emerald-100 text-emerald-800 font-bold">SELVA MAYA / SURESTE</span>
                                    <span class="text-emerald-600 font-bold">● NACIONAL</span>
                                </div>
                                <h3 class="font-display font-extrabold text-xl text-emerald-800">
                                    Veda Total a Deforestación por Monocultivos
                                </h3>
                                <p class="text-sm text-emerald-800/80 leading-relaxed">
                                    Trazabilidad satelital obligatoria para detener la pérdida de selvas mexicanas por palma no sustentable y ganadería extensiva.
                                </p>
                            </div>

                            <div class="mt-6 pt-4 border-t border-emerald-800/10 space-y-3">
                                <div>
                                    <div class="flex justify-between font-mono text-xs font-bold mb-1.5 text-emerald-800">
                                        <span><span id="sig-count-3">14,190</span> firmas</span>
                                        <span>Meta: 20,000</span>
                                    </div>
                                    <div class="w-full h-4 bg-pearl-200 rounded-full p-0.5 border border-white shadow-inner overflow-hidden">
                                        <div id="sig-bar-3" class="h-full rounded-full liquid-progress transition-all duration-500" style="width: 71%"></div>
                                    </div>
                                </div>
                                <button onclick="signPetition(3, 'Veda Total a Deforestación')" id="sig-btn-3"
                                    class="w-full py-3 px-4 rounded-full aqua-gel-btn text-white font-bold text-xs uppercase tracking-wider cursor-pointer">
                                    ✍ Firmar Petición (+25 PTS)
                                </button>
                            </div>
                        </article>
                    </div>

                    <!-- Toast de confirmación cristalino -->
                    <div id="petition-toast" class="hidden rounded-2xl bg-gradient-to-r from-emerald-600 to-aqua-500 text-white border border-white p-4 font-sans text-xs sm:text-sm font-semibold shadow-aero-glow flex items-center justify-between gap-4">
                        <span id="petition-toast-text"></span>
                        <button onclick="document.getElementById('petition-toast').classList.add('hidden')" class="px-3 py-1 bg-white text-emerald-800 rounded-full font-bold text-xs">Cerrar</button>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================================================================== -->
        <!-- SECCIÓN 2: ACERCA DE (CONTEXTO PROFUNDO Y FUENTES DE INVESTIGACIÓN)   -->
        <!-- ===================================================================== -->
        <section id="acerca-de" class="scroll-mt-28 space-y-10">
            <div class="aero-glass-green rounded-[2rem] shadow-aero overflow-hidden">
                <div class="aero-titlebar px-6 sm:px-10 py-3.5 flex items-center justify-between">
                    <span class="font-mono text-xs font-bold text-emerald-800">ACERCA_DE_LA_PROPUESTA // ARQUITECTURA Y CONTEXTO</span>
                    <span class="px-3 py-0.5 rounded-full bg-white text-emerald-700 font-mono text-[10px] font-bold">CBTA 35</span>
                </div>

                <div class="p-6 sm:p-12 space-y-8">
                    <div class="max-w-4xl space-y-4">
                        <span class="inline-block px-4 py-1 rounded-full bg-white/90 text-emerald-700 font-mono text-xs font-bold border border-emerald-300 shadow-sm">
                            MÁS ALLÁ DE LA SUPERFICIE
                        </span>
                        <h2 class="font-display font-black text-3xl sm:text-5xl text-emerald-800 leading-tight">
                            Una propuesta directa por fuera, un <span class="text-emerald-600">ecosistema científico y ético</span> por dentro.
                        </h2>
                        <p class="text-base sm:text-lg text-emerald-800/90 leading-relaxed font-medium">
                            Aunque esta propuesta pueda parecer breve en su presentación inicial, encierra un contexto profundo: <strong>conectar la ciencia ambiental con las decisiones diarias de cada estudiante y ciudadano</strong>. Desarrollada desde el <strong>CBTA 35</strong>, esta plataforma web trabaja en sincronía con una aplicación móvil para convertir la reforestación, el ahorro de recursos y el rechazo a marcas nocivas en un estilo de vida medible y optimista.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="rounded-3xl p-6 bg-white/85 border border-white shadow-aero">
                            <div class="w-11 h-11 rounded-2xl bg-gradient-to-br from-emerald-300 to-emerald-600 text-white flex items-center justify-center text-xl shadow-sm mb-3">🌱</div>
                            <span class="font-mono text-[11px] font-bold text-emerald-600">EJES DE ACCIÓN • 01</span>
                            <h3 class="font-display font-bold text-xl text-emerald-800 mt-1">Reforestación con Ciencia</h3>
                            <p class="text-sm text-emerald-800/80 mt-2 leading-relaxed">
                                Selección de especies nativas (mezquite, huizache, fresno) adaptadas al suelo y balance hídrico del CBTA 35.
                            </p>
                        </div>

                        <div class="rounded-3xl p-6 bg-white/85 border border-white shadow-aero">
                            <div class="w-11 h-11 rounded-2xl bg-gradient-to-br from-aqua-400 to-aqua-500 text-white flex items-center justify-center text-xl shadow-sm mb-3">📲</div>
                            <span class="font-mono text-[11px] font-bold text-aqua-500">EJES DE ACCIÓN • 02</span>
                            <h3 class="font-display font-bold text-xl text-emerald-800 mt-1">Recordatorios Inteligentes</h3>
                            <p class="text-sm text-emerald-800/80 mt-2 leading-relaxed">
                                Alertas diarias en tu celular para evitar plásticos de un solo uso, ahorrar energía y reducir tu huella de carbono.
                            </p>
                        </div>

                        <div class="rounded-3xl p-6 bg-white/85 border border-white shadow-aero">
                            <div class="w-11 h-11 rounded-2xl bg-gradient-to-br from-teal-400 to-emerald-600 text-white flex items-center justify-center text-xl shadow-sm mb-3">🛡️</div>
                            <span class="font-mono text-[11px] font-bold text-emerald-700">EJES DE ACCIÓN • 03</span>
                            <h3 class="font-display font-bold text-xl text-emerald-800 mt-1">Consumo Ético y Salud</h3>
                            <p class="text-sm text-emerald-800/80 mt-2 leading-relaxed">
                                Transparencia radical frente a marcas que practican crueldad animal o comercializan ultraprocesados dañinos.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FUENTES DE INVESTIGACIÓN QUE RESPALDAN EL PROYECTO -->
            <div class="aero-glass rounded-[2rem] p-6 sm:p-10 shadow-aero space-y-6">
                <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-emerald-800/15 pb-5">
                    <div>
                        <span class="font-mono text-xs font-bold uppercase text-emerald-600">Bibliografía & Evidencia Documentada</span>
                        <h3 class="font-display font-black text-2xl sm:text-3xl text-emerald-800">Fuentes de Investigación del Proyecto</h3>
                    </div>
                    <span class="px-4 py-1.5 rounded-full bg-emerald-100 text-emerald-800 font-mono text-xs font-bold border border-white shadow-sm">
                        4 PILARES CIENTÍFICOS
                    </span>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
                    <div class="rounded-2xl p-5 bg-gradient-to-b from-white/95 to-pearl-200/80 border border-white shadow-sm space-y-2">
                        <span class="px-2.5 py-0.5 rounded-full bg-emerald-600 text-white font-mono text-[10px] font-bold">MÉXICO • CONAFOR</span>
                        <h4 class="font-display font-bold text-lg text-emerald-800">Comisión Nacional Forestal</h4>
                        <p class="text-xs text-emerald-800/80 leading-relaxed">
                            Manuales técnicos de reforestación con especies endémicas, supervivencia en zonas semiáridas y restauración de suelos.
                        </p>
                    </div>

                    <div class="rounded-2xl p-5 bg-gradient-to-b from-white/95 to-pearl-200/80 border border-white shadow-sm space-y-2">
                        <span class="px-2.5 py-0.5 rounded-full bg-aqua-500 text-white font-mono text-[10px] font-bold">UNAM • ECOLOGÍA</span>
                        <h4 class="font-display font-bold text-lg text-emerald-800">Instituto de Ecología UNAM</h4>
                        <p class="text-xs text-emerald-800/80 leading-relaxed">
                            Investigaciones sobre islas de calor urbanas, conservación de polinizadores nativos y servicios ecosistémicos.
                        </p>
                    </div>

                    <div class="rounded-2xl p-5 bg-gradient-to-b from-white/95 to-pearl-200/80 border border-white shadow-sm space-y-2">
                        <span class="px-2.5 py-0.5 rounded-full bg-emerald-700 text-white font-mono text-[10px] font-bold">SALUD • INSP / OMS</span>
                        <h4 class="font-display font-bold text-lg text-emerald-800">Salud Pública y Toxicología</h4>
                        <p class="text-xs text-emerald-800/80 leading-relaxed">
                            Evidencia clínica sobre aditivos en ultraprocesados, disruptores endocrinos y microplásticos en envases comerciales.
                        </p>
                    </div>

                    <div class="rounded-2xl p-5 bg-gradient-to-b from-white/95 to-pearl-200/80 border border-white shadow-sm space-y-2">
                        <span class="px-2.5 py-0.5 rounded-full bg-teal-600 text-white font-mono text-[10px] font-bold">BIOÉTICA • CRUELTY FREE</span>
                        <h4 class="font-display font-bold text-lg text-emerald-800">Cruelty Free International</h4>
                        <p class="text-xs text-emerald-800/80 leading-relaxed">
                            Auditoría global de marcas cosméticas y de higiene que financian pruebas en animales frente a métodos éticos in vitro.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ===================================================================== -->
        <!-- SECCIÓN 3: CONTENIDO (RECORDATORIOS, DETECTOR DE MARCAS Y REVISTAS)   -->
        <!-- ===================================================================== -->
        <section id="contenido" class="scroll-mt-28 space-y-12">
            <div class="text-center max-w-3xl mx-auto space-y-3">
                <span class="inline-block px-4 py-1.5 rounded-full bg-white/90 text-emerald-700 font-mono text-xs font-bold uppercase tracking-widest border border-emerald-300 shadow-sm">
                    Widgets Interactivos • Web + App
                </span>
                <h2 class="font-display font-black text-3xl sm:text-5xl text-emerald-800">
                    Acciones Diarias y Ciencia para Conocedores
                </h2>
                <p class="text-emerald-800/80 text-sm sm:text-base font-medium">
                    Organiza tus recordatorios para contaminar menos, analiza marcas que afectan tu salud o usan animales y lee revistas científicas especializadas.
                </p>
            </div>

            <!-- GRID: A) RECORDATORIOS DIARIOS + B) DETECTOR DE MARCAS -->
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

                <!-- A) SISTEMA DE RECORDATORIOS DIARIOS (6 cols) -->
                <div class="lg:col-span-6 aero-glass rounded-[2rem] shadow-aero overflow-hidden flex flex-col justify-between">
                    <div class="aero-titlebar px-6 py-3.5 flex items-center justify-between">
                        <span class="font-mono text-xs font-bold text-emerald-800">⏰ RECORDATORIOS_DIARIOS.APP</span>
                        <button onclick="triggerSimulatedNotification()" class="px-3 py-1 rounded-full aqua-gel-blue text-white font-mono text-[11px] font-bold cursor-pointer">
                            🔔 Probar Notificación
                        </button>
                    </div>

                    <div class="p-6 sm:p-8 flex-1 flex flex-col justify-between space-y-6">
                        <div>
                            <h3 class="font-display font-black text-2xl sm:text-3xl text-emerald-800">
                                Misiones Diarias Anti-Contaminación
                            </h3>
                            <p class="text-sm text-emerald-800/80 mt-1">
                                Marca tus tareas ecológicas completadas hoy o programa nuevos recordatorios sincronizados con tu teléfono.
                            </p>

                            <!-- Alerta simulada Aero -->
                            <div id="reminder-alert-box" class="hidden mt-4 p-4 rounded-2xl bg-gradient-to-r from-emerald-500 to-aqua-500 text-white border border-white font-sans text-xs font-bold shadow-aero-glow flex items-center gap-3">
                                <span class="text-xl">💧</span>
                                <span id="reminder-alert-msg"></span>
                            </div>

                            <ul id="reminders-list" class="mt-5 space-y-3">
                                <!-- Renderizado dinámico -->
                            </ul>
                        </div>

                        <!-- Agregar recordatorio -->
                        <form id="add-reminder-form" class="pt-4 border-t border-emerald-800/15 flex flex-col sm:flex-row gap-2.5">
                            @csrf
                            <input type="time" id="new-reminder-time" value="14:30" required
                                class="px-3.5 py-2.5 rounded-full bg-white/90 border border-emerald-300 font-mono text-xs font-bold text-emerald-800 focus:outline-none shadow-inner">
                            <input type="text" id="new-reminder-text" placeholder="Ej. Llevar bolsa de tela al supermercado..." required
                                class="flex-1 px-4 py-2.5 rounded-full bg-white/90 border border-emerald-300 text-sm text-emerald-800 placeholder-emerald-800/50 focus:outline-none shadow-inner">
                            <button type="submit"
                                class="px-5 py-2.5 rounded-full aqua-gel-btn text-white font-bold text-xs uppercase tracking-wider cursor-pointer shrink-0">
                                + Agregar
                            </button>
                        </form>
                    </div>
                </div>

                <!-- B) DETECTOR ÉTICO Y DE SALUD DE MARCAS (6 cols) -->
                <div class="lg:col-span-6 aero-glass-green rounded-[2rem] shadow-aero overflow-hidden flex flex-col justify-between">
                    <div class="aero-titlebar px-6 py-3.5 flex items-center justify-between">
                        <span class="font-mono text-xs font-bold text-emerald-800">🔍 DETECTOR_MARCAS_ÉTICO.SYS</span>
                        <span class="px-2.5 py-0.5 rounded-full bg-emerald-100 text-emerald-800 font-mono text-[10px] font-bold">SALUD + BIOÉTICA</span>
                    </div>

                    <div class="p-6 sm:p-8 space-y-5">
                        <div>
                            <h3 class="font-display font-black text-2xl sm:text-3xl text-emerald-800">
                                Escáner de Crueldad Animal y Salud
                            </h3>
                            <p class="text-sm text-emerald-800/80 mt-1">
                                Analiza productos cotidianos para detectar experimentación en animales, deforestación o ingredientes nocivos para tu cuerpo.
                            </p>
                        </div>

                        <div class="space-y-3">
                            <div class="flex gap-2">
                                <input type="text" id="brand-search-input" placeholder="Busca un producto (ej. refresco, shampoo, botanas...)"
                                    class="flex-1 px-4 py-3 rounded-full bg-white/95 border border-emerald-300 text-sm font-medium text-emerald-800 focus:outline-none shadow-inner">
                                <button onclick="searchBrand()"
                                    class="px-6 py-3 rounded-full aqua-gel-blue text-white font-bold text-xs uppercase tracking-wider cursor-pointer">
                                    Escanear
                                </button>
                            </div>

                            <div class="flex flex-wrap gap-2">
                                <button onclick="quickBrand('Refresco de Cola Ultraprocesado')" class="px-3 py-1 rounded-full bg-white/90 hover:bg-emerald-400 hover:text-white border border-emerald-300 font-mono text-[11px] font-bold transition-colors cursor-pointer shadow-sm">
                                    Refresco Cola
                                </button>
                                <button onclick="quickBrand('Shampoo Comercial Testeo Animal')" class="px-3 py-1 rounded-full bg-white/90 hover:bg-emerald-400 hover:text-white border border-emerald-300 font-mono text-[11px] font-bold transition-colors cursor-pointer shadow-sm">
                                    Shampoo Industrial
                                </button>
                                <button onclick="quickBrand('Botanas con Aceite de Palma y Colorantes')" class="px-3 py-1 rounded-full bg-white/90 hover:bg-emerald-400 hover:text-white border border-emerald-300 font-mono text-[11px] font-bold transition-colors cursor-pointer shadow-sm">
                                    Botanas / Frituras
                                </button>
                                <button onclick="quickBrand('Cosméticos Tradicionales con Derivados')" class="px-3 py-1 rounded-full bg-white/90 hover:bg-emerald-400 hover:text-white border border-emerald-300 font-mono text-[11px] font-bold transition-colors cursor-pointer shadow-sm">
                                    Cosméticos
                                </button>
                            </div>
                        </div>

                        <!-- Resultado del Escáner -->
                        <div class="rounded-3xl p-5 bg-white/90 border border-white shadow-aero space-y-3">
                            <div class="flex items-start justify-between gap-2">
                                <div>
                                    <span id="brand-badge" class="px-3 py-0.5 rounded-full bg-red-500/15 text-red-700 border border-red-300 font-mono text-[10px] font-bold uppercase">
                                        ALERTA DOBLE: SALUD + AGUA
                                    </span>
                                    <h4 id="brand-title" class="font-display font-extrabold text-xl text-emerald-800 mt-1">
                                        Refresco de Cola Ultraprocesado
                                    </h4>
                                </div>
                                <span id="brand-score" class="px-3 py-1 rounded-full bg-red-600 text-white font-mono text-xs font-bold shadow-sm">
                                    RIESGO 9/10
                                </span>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs">
                                <div class="p-3.5 rounded-2xl bg-red-50 border border-red-200">
                                    <strong class="block font-mono text-red-700 mb-1">⚠ IMPACTO EN TU SALUD:</strong>
                                    <span id="brand-health" class="text-emerald-950">Jarabe de maíz de alta fructosa, ácido fosfórico (descalcificación) y colorante caramelo IV.</span>
                                </div>
                                <div class="p-3.5 rounded-2xl bg-amber-50 border border-amber-200">
                                    <strong class="block font-mono text-amber-800 mb-1">🐾 IMPACTO ANIMAL / ECO:</strong>
                                    <span id="brand-animal" class="text-emerald-950">Sobreexplotación de mantos acuíferos locales y contaminación masiva por envases PET.</span>
                                </div>
                            </div>

                            <div class="p-3.5 rounded-2xl bg-gradient-to-r from-emerald-100 to-aqua-200/60 border border-emerald-300 text-xs">
                                <strong class="font-mono text-emerald-800">✅ ALTERNATIVA SALUDABLE Y ÉTICA:</strong>
                                <span id="brand-alt" class="text-emerald-950 font-medium">Agua fresca de frutas de temporada o infusiones herbales en termo reutilizable.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- C) OBSERVATORIO CLIMÁTICO Y REVISTAS CIENTÍFICAS "SOLO PARA CONOCEDORES" -->
            <div class="aero-glass rounded-[2rem] shadow-aero overflow-hidden">
                <div class="aero-titlebar px-6 sm:px-10 py-4 flex flex-wrap items-center justify-between gap-3">
                    <div class="flex items-center gap-2">
                        <span class="text-lg">🔬</span>
                        <span class="font-display font-extrabold text-sm sm:text-base text-emerald-800 uppercase">
                            Observatorio Climático & Revistas Científicas (Solo para Conocedores)
                        </span>
                    </div>
                    <span class="px-3.5 py-1 rounded-full bg-gradient-to-r from-aqua-500 to-emerald-500 text-white font-mono text-xs font-bold shadow-sm">
                        ANOMALÍA TÉRMICA: +1.48°C
                    </span>
                </div>

                <div class="p-6 sm:p-10 space-y-8">
                    <p class="text-emerald-800/90 text-sm sm:text-base max-w-3xl font-medium">
                        Estar informados sobre la física del clima y la biología de nuestro entorno convierte cada pequeña acción cotidiana en una convicción inquebrantable.
                    </p>

                    <!-- 3 Tarjetas de Condiciones del Planeta -->
                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">
                        <div class="rounded-2xl p-5 bg-gradient-to-br from-white/95 to-aqua-200/50 border border-white shadow-sm">
                            <span class="font-mono text-xs font-bold text-aqua-500 block mb-1">CLIMA Y TEMPERATURA • MX</span>
                            <p class="text-sm text-emerald-800 leading-relaxed">
                                Las ondas de calor elevan un 22% la evaporación del suelo agrícola. La sombra arbórea en planteles reduce hasta <strong>4°C</strong> la sensación térmica local.
                            </p>
                        </div>
                        <div class="rounded-2xl p-5 bg-gradient-to-br from-white/95 to-emerald-100/60 border border-white shadow-sm">
                            <span class="font-mono text-xs font-bold text-emerald-600 block mb-1">CICLO HIDROLÓGICO</span>
                            <p class="text-sm text-emerald-800 leading-relaxed">
                                Un árbol adulto nativo (mezquite o encino) permite infiltrar hasta <strong>3,500 litros</strong> de agua pluvial al año hacia nuestros acuíferos.
                            </p>
                        </div>
                        <div class="rounded-2xl p-5 bg-gradient-to-br from-white/95 to-pearl-200/80 border border-white shadow-sm">
                            <span class="font-mono text-xs font-bold text-teal-600 block mb-1">POLINIZADORES Y FLORA</span>
                            <p class="text-sm text-emerald-800 leading-relaxed">
                                El <strong>75%</strong> de los cultivos alimentarios dependen de polinizadores silvestres protegidos por jardines nativos libres de pesticidas.
                            </p>
                        </div>
                    </div>

                    <!-- Estantería de Revistas Científicas -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Revista 1 -->
                        <article class="rounded-3xl p-6 bg-white/90 border border-white shadow-aero flex flex-col justify-between">
                            <div>
                                <div class="flex justify-between items-center font-mono text-[11px] text-emerald-600 mb-2">
                                    <span>VOL. 14 • REVISIÓN POR PARES</span>
                                    <span class="px-2 py-0.5 rounded-full bg-emerald-100 font-bold">AGROECOLOGÍA</span>
                                </div>
                                <h4 class="font-display font-extrabold text-xl text-emerald-800">
                                    Revista Mexicana de Biodiversidad & Agroecología
                                </h4>
                                <p class="text-xs text-emerald-800/80 mt-2 leading-relaxed">
                                    <em>Paper destacado:</em> "Captura de carbono y fijación de nitrógeno mediante leguminosas nativas en parcelas educativas del centro de México".
                                </p>
                            </div>
                            <button onclick="openArticleModal(0)"
                                class="mt-5 w-full py-2.5 px-4 rounded-full aqua-gel-btn text-white font-bold text-xs uppercase tracking-wider cursor-pointer">
                                📖 Leer Extracto Técnico
                            </button>
                        </article>

                        <!-- Revista 2 -->
                        <article class="rounded-3xl p-6 bg-white/90 border border-white shadow-aero flex flex-col justify-between">
                            <div>
                                <div class="flex justify-between items-center font-mono text-[11px] text-aqua-500 mb-2">
                                    <span>DOSSIER ATMOSFÉRICO • 2026</span>
                                    <span class="px-2 py-0.5 rounded-full bg-aqua-200/70 text-emerald-800 font-bold">CLIMATOLOGÍA</span>
                                </div>
                                <h4 class="font-display font-extrabold text-xl text-emerald-800">
                                    Cuadernos de Ciencias de la Atmósfera y El Clima
                                </h4>
                                <p class="text-xs text-emerald-800/80 mt-2 leading-relaxed">
                                    <em>Paper destacado:</em> "Mitigación de islas de calor periurbanas mediante corredores biológicos escolares y evapotranspiración controlada".
                                </p>
                            </div>
                            <button onclick="openArticleModal(1)"
                                class="mt-5 w-full py-2.5 px-4 rounded-full aqua-gel-btn text-white font-bold text-xs uppercase tracking-wider cursor-pointer">
                                📖 Leer Extracto Técnico
                            </button>
                        </article>

                        <!-- Revista 3 -->
                        <article class="rounded-3xl p-6 bg-white/90 border border-white shadow-aero flex flex-col justify-between">
                            <div>
                                <div class="flex justify-between items-center font-mono text-[11px] text-teal-600 mb-2">
                                    <span>BIOÉTICA & TOXICOLOGÍA</span>
                                    <span class="px-2 py-0.5 rounded-full bg-emerald-100 text-emerald-800 font-bold">SALUD</span>
                                </div>
                                <h4 class="font-display font-extrabold text-xl text-emerald-800">
                                    Gaceta de Salud Ambiental y Consumo Ético
                                </h4>
                                <p class="text-xs text-emerald-800/80 mt-2 leading-relaxed">
                                    <em>Paper destacado:</em> "Disruptores endocrinos en productos de uso diario y validación de ensayos in vitro libres de crueldad animal".
                                </p>
                            </div>
                            <button onclick="openArticleModal(2)"
                                class="mt-5 w-full py-2.5 px-4 rounded-full aqua-gel-btn text-white font-bold text-xs uppercase tracking-wider cursor-pointer">
                                📖 Leer Extracto Técnico
                            </button>
                        </article>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- PIE DE PÁGINA LIMPIO -->
    <footer class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-16 pt-6 border-t border-emerald-800/15 text-center sm:text-left flex flex-col sm:flex-row justify-between items-center gap-4 text-xs font-medium text-emerald-800/80">
        <p>&copy; {{ date('Y') }} RAÍCES VIVAS • CBTA No. 35. Ecosistema Web + App Ambiental.</p>
        <p>Diseño Frutiger Aero Eco-Futurista • Por un México más verde.</p>
    </footer>

    <!-- ===================================================================== -->
    <!-- BARRA DE NAVEGACIÓN INFERIOR FIJA ESTILO DOCK AERO (3 CATEGORÍAS)     -->
    <!-- ("Inicio", "Acerca de", "Contenido")                                  -->
    <!-- ===================================================================== -->
    <nav aria-label="Navegación principal inferior" class="fixed bottom-4 inset-x-0 z-50 px-4 pointer-events-none">
        <div class="max-w-lg mx-auto aero-glass rounded-full p-2 shadow-aero-glow pointer-events-auto flex items-center justify-around gap-2 border-2 border-white">
            
            <!-- 1. Inicio -->
            <a href="#inicio" data-nav="inicio"
                class="nav-pill flex-1 flex items-center justify-center gap-2 py-3 px-4 rounded-full font-display font-bold text-xs sm:text-sm transition-all aqua-gel-btn text-white">
                <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="2.4" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                </svg>
                <span>Inicio</span>
            </a>

            <!-- 2. Acerca de -->
            <a href="#acerca-de" data-nav="acerca-de"
                class="nav-pill flex-1 flex items-center justify-center gap-2 py-3 px-4 rounded-full font-display font-bold text-xs sm:text-sm transition-all text-emerald-800 hover:bg-white/70">
                <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="2.4" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                </svg>
                <span>Acerca de</span>
            </a>

            <!-- 3. Contenido -->
            <a href="#contenido" data-nav="contenido"
                class="nav-pill flex-1 flex items-center justify-center gap-2 py-3 px-4 rounded-full font-display font-bold text-xs sm:text-sm transition-all text-emerald-800 hover:bg-white/70">
                <svg class="w-4 h-4 shrink-0" fill="none" stroke="currentColor" stroke-width="2.4" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                </svg>
                <span>Contenido</span>
            </a>

        </div>
    </nav>

    <!-- MODAL DE LECTURA CIENTÍFICA ESTILO VENTANA AERO -->
    <div id="scientific-modal" class="hidden fixed inset-0 z-50 bg-emerald-950/50 backdrop-blur-md flex items-center justify-center p-4">
        <div class="aero-glass rounded-[2rem] max-w-2xl w-full overflow-hidden shadow-aero-glow border-2 border-white">
            <div class="aero-titlebar px-6 py-3.5 flex items-center justify-between">
                <span id="modal-journal-tag" class="font-mono text-xs font-bold text-emerald-800">REVISTA CIENTÍFICA</span>
                <button onclick="closeArticleModal()" class="px-3 py-1 rounded-full bg-red-500 hover:bg-red-600 text-white font-mono text-xs font-bold shadow-sm cursor-pointer">
                    ✕ Cerrar
                </button>
            </div>
            <div class="p-6 sm:p-8 space-y-5 max-h-[80vh] overflow-y-auto">
                <h3 id="modal-journal-title" class="font-display font-black text-2xl text-emerald-800"></h3>
                <div id="modal-journal-body" class="text-sm sm:text-base text-emerald-900 space-y-4 leading-relaxed"></div>
                <div class="pt-4 border-t border-emerald-800/15 flex justify-between items-center">
                    <span class="font-mono text-xs font-bold text-emerald-600">LECTURA COMPLETADA: +15 ECO-PUNTOS</span>
                    <button onclick="closeArticleModal()" class="px-5 py-2 rounded-full aqua-gel-btn text-white font-bold text-xs uppercase cursor-pointer">
                        Aplicar en mi día
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- LÓGICA INTERACTIVA -->
    <script>
        let greenPoints = 120;
        let totalSignatures = 48920;
        const signedPetitions = new Set();

        const petitionData = {
            1: { count: 18450, goal: 20000 },
            2: { count: 16280, goal: 25000 },
            3: { count: 14190, goal: 20000 }
        };

        function updatePoints(pts) {
            greenPoints += pts;
            const el = document.getElementById('user-green-points');
            if (el) el.textContent = `${greenPoints} PTS`;
        }

        // 1. Campañas de Firmas
        function signPetition(id, title) {
            if (signedPetitions.has(id)) return;
            signedPetitions.add(id);

            petitionData[id].count += 1;
            totalSignatures += 1;

            document.getElementById(`sig-count-${id}`).textContent = petitionData[id].count.toLocaleString('es-MX');
            document.getElementById('total-signatures-counter').textContent = totalSignatures.toLocaleString('es-MX');

            const pct = Math.min(100, Math.round((petitionData[id].count / petitionData[id].goal) * 100));
            document.getElementById(`sig-bar-${id}`).style.width = `${pct}%`;

            const btn = document.getElementById(`sig-btn-${id}`);
            btn.textContent = '✔ ¡Firma Registrada!';
            btn.classList.remove('aqua-gel-btn');
            btn.classList.add('aqua-gel-blue');

            updatePoints(25);

            const toast = document.getElementById('petition-toast');
            document.getElementById('petition-toast-text').textContent = `¡Gracias! Tu firma por "${title}" se ha sumado al pliego nacional y sincronizado con la App Raíces Vivas (+25 PTS).`;
            toast.classList.remove('hidden');
        }

        // 2. Recordatorios Diarios
        let dailyReminders = [
            { id: 1, time: '07:30', text: 'Salir con termo metálico y topper reutilizable al CBTA 35', done: true },
            { id: 2, time: '11:00', text: 'Evitar bebidas en PET y envases desechables en el receso', done: false },
            { id: 3, time: '16:00', text: 'Separar residuos orgánicos para composta de parcela', done: false },
            { id: 4, time: '21:00', text: 'Desconectar cargadores y aparatos en espera', done: false }
        ];

        function renderReminders() {
            const list = document.getElementById('reminders-list');
            if (!list) return;
            list.innerHTML = '';

            dailyReminders.forEach(item => {
                const li = document.createElement('li');
                li.className = `p-3.5 rounded-2xl border border-white flex items-center justify-between gap-3 transition-all shadow-sm ${item.done ? 'bg-emerald-100/75 opacity-80' : 'bg-white/90'}`;
                li.innerHTML = `
                    <label class="flex items-center gap-3 cursor-pointer flex-1">
                        <input type="checkbox" ${item.done ? 'checked' : ''} onchange="toggleReminder(${item.id})"
                            class="w-5 h-5 accent-emerald-600 rounded-full cursor-pointer">
                        <div>
                            <span class="font-mono text-xs font-bold px-2.5 py-0.5 rounded-full bg-aqua-200/70 text-emerald-800 mr-1.5">${item.time}</span>
                            <span class="text-sm font-semibold ${item.done ? 'line-through text-emerald-600' : 'text-emerald-800'}">${item.text}</span>
                        </div>
                    </label>
                    <span class="font-mono text-[10px] font-bold px-2.5 py-0.5 rounded-full ${item.done ? 'bg-emerald-400 text-white' : 'bg-pearl-200 text-emerald-800'}">
                        ${item.done ? 'LISTO' : 'ACTIVO'}
                    </span>
                `;
                list.appendChild(li);
            });
        }

        function toggleReminder(id) {
            const target = dailyReminders.find(r => r.id === id);
            if (target) {
                target.done = !target.done;
                if (target.done) updatePoints(15);
                renderReminders();
            }
        }

        function triggerSimulatedNotification() {
            const pending = dailyReminders.find(r => !r.done) || dailyReminders[0];
            const box = document.getElementById('reminder-alert-box');
            const msg = document.getElementById('reminder-alert-msg');
            msg.textContent = `App Raíces Vivas (${pending.time} hrs): ¡No olvides "${pending.text}"!`;
            box.classList.remove('hidden');
        }

        document.getElementById('add-reminder-form')?.addEventListener('submit', function(e) {
            e.preventDefault();
            const timeVal = document.getElementById('new-reminder-time').value;
            const textVal = document.getElementById('new-reminder-text').value.trim();
            if (!textVal) return;

            dailyReminders.push({
                id: Date.now(),
                time: timeVal || '12:00',
                text: textVal,
                done: false
            });
            document.getElementById('new-reminder-text').value = '';
            renderReminders();
        });

        // 3. Detector de Marcas
        const brandDatabase = [
            {
                keys: ['refresco', 'cola', 'soda', 'jugo'],
                title: 'Refresco de Cola Ultraprocesado',
                badge: 'ALERTA DOBLE: SALUD + AGUA',
                score: 'RIESGO 9/10',
                health: 'Jarabe de maíz de alta fructosa, ácido fosfórico (descalcificación ósea) y colorante caramelo IV.',
                animal: 'Sobreexplotación de acuíferos locales y contaminación masiva por botellas PET.',
                alt: 'Agua fresca de frutas de temporada o infusiones herbales del huerto escolar en termo reutilizable.'
            },
            {
                keys: ['shampoo', 'jabon', 'crema', 'desodorante'],
                title: 'Shampoo Industrial con Sulfatos y Testeo',
                badge: 'CRUELDAD ANIMAL + TÓXICOS',
                score: 'RIESGO 8/10',
                health: 'Lauril sulfato de sodio, parabenos y fragancias sintéticas irritantes.',
                animal: 'Casa matriz realiza pruebas toxicológicas en conejos y roedores para exportación.',
                alt: 'Shampoo sólido artesanal mexicano certificado Cruelty-Free con romero y sábila.'
            },
            {
                keys: ['botana', 'frituras', 'galletas', 'papas', 'pastelito'],
                title: 'Botanas Ultraprocesadas y Aceite de Palma',
                badge: 'DEFORESTACIÓN + DAÑO METABÓLICO',
                score: 'RIESGO 9/10',
                health: 'Exceso de sodio, grasas trans y colorantes artificiales (Rojo 40 / Tartrazina).',
                animal: 'Uso de aceite de palma vinculado a la pérdida de hábitats de fauna silvestre.',
                alt: 'Semillas de calabaza tostadas, amaranto mexicano o fruta deshidratada.'
            },
            {
                keys: ['cosmetico', 'maquillaje', 'labial', 'rimel'],
                title: 'Cosméticos Convencionales No Certificados',
                badge: 'TESTEO ANIMAL DETECTADO',
                score: 'RIESGO 8/10',
                health: 'Presencia de ftalatos y derivados petroquímicos absorbidos por vía dérmica.',
                animal: 'Pruebas de irritación ocular en animales de laboratorio.',
                alt: 'Cosmética botánica mexicana libre de crueldad (sello Leaping Bunny / PETA Cruelty-Free).'
            }
        ];

        function displayBrand(item) {
            document.getElementById('brand-badge').textContent = item.badge;
            document.getElementById('brand-title').textContent = item.title;
            document.getElementById('brand-score').textContent = item.score;
            document.getElementById('brand-health').textContent = item.health;
            document.getElementById('brand-animal').textContent = item.animal;
            document.getElementById('brand-alt').textContent = item.alt;
        }

        function quickBrand(query) {
            document.getElementById('brand-search-input').value = query;
            searchBrand();
        }

        function searchBrand() {
            const q = document.getElementById('brand-search-input').value.toLowerCase().trim();
            if (!q) return;

            const found = brandDatabase.find(b => b.keys.some(k => q.includes(k)) || b.title.toLowerCase().includes(q));
            if (found) {
                displayBrand(found);
            } else {
                displayBrand({
                    title: `Análisis de Producto: "${q}"`,
                    badge: 'REVISIÓN PREVENTIVA • APP',
                    score: 'REVISAR ETIQUETA',
                    health: 'Verifica si posee sellos de exceso de azúcares/sodio o conservadores sintéticos.',
                    animal: 'Busca el logotipo oficial "Cruelty-Free" y evita envases plásticos de un solo uso.',
                    alt: 'Prioriza productores locales, mercados agroecológicos y productos a granel.'
                });
            }
        }

        // 4. Revistas Científicas
        const scientificArticles = [
            {
                tag: 'REVISTA MEXICANA DE BIODIVERSIDAD • VOL. 14',
                title: 'Captura de Carbono y Restauración Edáfica en Parcelas del CBTA 35',
                paragraphs: [
                    'Los ecosistemas semiáridos y templados del centro de México presentan una alta resiliencia cuando se reforestan con especies leguminosas nativas como Prosopis laevigata (mezquite) y Vachellia farnesiana (huizache).',
                    'A diferencia de especies exóticas que demandan riego excesivo, las especies nativas establecen simbiosis con bacterias fijadoras de nitrógeno, regenerando la fertilidad del suelo en menos de 36 meses.',
                    'Acción concreta: Cada estudiante que cuida un árbol nativo contribuye a fijar cerca de 22 kg de CO₂ anuales.'
                ]
            },
            {
                tag: 'CUADERNOS DE CIENCIAS DE LA ATMÓSFERA • 2026',
                title: 'Islas de Calor Periurbanas y Alteración del Ciclo Hidrológico Local',
                paragraphs: [
                    'La sustitución de cobertura vegetal por concreto eleva la radiación infrarroja reemitida, generando domos térmicos que inhiben la condensación de humedad local.',
                    'Integrar corredores verdes escolares restaura la evapotranspiración natural, enfriando el entorno inmediato entre 2.5°C y 4.2°C durante los meses más cálidos.',
                    'Acción concreta: Proteger zonas arboladas y ahorrar electricidad reduce directamente la carga térmica de tu comunidad.'
                ]
            },
            {
                tag: 'GACETA DE SALUD AMBIENTAL Y BIOÉTICA',
                title: 'Disruptores Endocrinos y Alternativas Libres de Crueldad Animal',
                paragraphs: [
                    'Diversos compuestos en envases plásticos calentados, bebidas ultraprocesadas y cosméticos industriales alteran el equilibrio hormonal y metabólico humano.',
                    'La toxicología moderna demuestra que los ensayos in vitro con tejidos reconstruidos son hasta un 85% más precisos que las pruebas en animales, haciendo innecesaria la crueldad animal.',
                    'Acción concreta: Escanea tus productos antes de comprar y elige cosmética botánica ética y alimentos frescos.'
                ]
            }
        ];

        function openArticleModal(idx) {
            const art = scientificArticles[idx];
            document.getElementById('modal-journal-tag').textContent = art.tag;
            document.getElementById('modal-journal-title').textContent = art.title;
            document.getElementById('modal-journal-body').innerHTML = art.paragraphs.map(p => `<p>${p}</p>`).join('');
            document.getElementById('scientific-modal').classList.remove('hidden');
            updatePoints(15);
        }

        function closeArticleModal() {
            document.getElementById('scientific-modal').classList.add('hidden');
        }

        // 5. Navegación activa de la barra inferior ("Inicio", "Acerca de", "Contenido")
        document.addEventListener('DOMContentLoaded', () => {
            renderReminders();

            const navPills = document.querySelectorAll('.nav-pill');
            const sections = ['inicio', 'acerca-de', 'contenido'].map(id => document.getElementById(id));

            function setActiveNav(id) {
                navPills.forEach(pill => {
                    if (pill.dataset.nav === id) {
                        pill.classList.add('aqua-gel-btn', 'text-white');
                        pill.classList.remove('text-emerald-800', 'hover:bg-white/70');
                    } else {
                        pill.classList.remove('aqua-gel-btn', 'text-white');
                        pill.classList.add('text-emerald-800', 'hover:bg-white/70');
                    }
                });
            }

            window.addEventListener('scroll', () => {
                let current = 'inicio';
                sections.forEach(sec => {
                    if (sec && window.scrollY >= sec.offsetTop - 220) {
                        current = sec.id;
                    }
                });
                setActiveNav(current);
            });
        });
    </script>
</body>
</html>