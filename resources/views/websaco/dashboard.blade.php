<x-app-layout>
    <section class="border border-black mt-16">
        <div class="px-4 sm:px-6 lg:px-6 py-2 bg-gray-100 border">
            <img class="w-full h-auto" src="{{ asset('img/banner1.png') }}" alt="Logo">
        </div>
    </section>

    <section class="border border-black">
        <div class="bg-gray-100">
                <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                    <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
                        <h2 class="text-2xl font-bold text-gray-900">Conoce más de Nosotros</h2>

                        <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
                            <div class="group relative">
                                <div
                                    class="relative h-80 w-full overflow-hidden rounded-lg bg-blue-600 sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                                    <img src="{{ asset('img/mundo.png') }}"
                                        alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                                        class="h-full w-full object-cover object-center">
                                </div>
                                <h3 class="mt-6 text-sm text-gray-500">
                                    <p class="text-base font-semibold text-gray-900">¿QUIÉNES SOMOS?</p>
                                    <p>
                                        Somos una empresa internacional de tecnología, que brinda soluciones y servicios a
                                        fabricantes, operadores celulares, retail, mayoristas, minoristas y consumidores
                                        finales. Nuestra misión es proveer servicios que permitan a nuestros partners
                                        comercialisar sus productos en condiciones óptimas y garantizar su crecimiento
                                        contínuo y participación en el mercado.
                                    </p>
                                </h3>

                            </div>
                            <div class="group relative">
                                <div
                                    class="relative h-80 w-full overflow-hidden rounded-lg bg-blue-600 sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                                    <img src="{{ asset('img/mano.png') }}"
                                        alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant."
                                        class="h-full w-full object-cover object-center">
                                </div>
                                <h3 class="mt-6 text-sm text-gray-500">
                                    <p class="text-base font-semibold text-gray-900">¿QUÉ HACEMOS?</p>
                                    <p>
                                        Brindamos tecnología de última generación, a través de nuestra plataforma B2B/B2C,
                                        ERP(Flexline)y herramientas de Supply Chain, que nos permiten controlar las
                                        diferentes etapas, desde la importación del producto hasta la entrega al usuario
                                        final. Contamos con aliados clave cuya infraestructura y experiencia, nos permite
                                        gestionar nuestros procesos con los estándares más altos de eficiencia y
                                        satisfacción al cliente.


                                    </p>
                                </h3>
                            </div>
                            <div class="group relative">
                                <div
                                    class="relative h-80 w-full overflow-hidden rounded-lg bg-blue-600 sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
                                    <img src="{{ asset('img/amigos.png') }}"
                                        alt="Collection of four insulated travel bottles on wooden shelf."
                                        class="h-full w-full object-cover object-center">
                                </div>
                                <h3 class="mt-6 text-sm text-gray-500">
                                    <p class="text-base font-semibold text-gray-900">NUESTRA PRESENCIA</p>
                                    <p>
                                        Mantenemos una relación estable con fabricantes y los diferentes canales de
                                        distribución: operadores celulares, retail, open(resellers), marketplaces. Nuestra
                                        experiencia e infraestructura local nos permite gestionar la compra, importación,
                                        almacenamiento, personalisación de productos, procesamiento de ordenes y despacho al
                                        cliente con cobertura nacional.
                                    </p>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <section class="border border-black">
        <div class="bg-white py-24 sm:py-32">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <h2 class="text-center text-xl font-semibold leading-8 text-gray-900">Nuestros Partners</h2>
              <div class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="{{ asset('img/partners/logoreseller.png') }}"  alt="Transistor" width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="{{ asset('img/partners/Infinix.png') }}"  alt="Reform" width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="{{ asset('img/partners/Samsung.png') }}"  alt="Tuple" width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="{{ asset('img/partners/Realme.png') }}"  alt="Tuple" width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="{{ asset('img/partners/Vivo.png') }}"  alt="Tuple" width="158" height="48">
              </div>
            </div>
          </div>
    </section>

    <section class="border border-black">

    </section>
</x-app-layout>
@livewire('websaco.footer.footer-component')
