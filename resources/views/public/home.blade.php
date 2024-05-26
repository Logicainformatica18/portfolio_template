@extends('layouts.main')
@section('content')
    <!-- about me section start -->
    <div>
        <div class="lg:rounded-2xl bg-white dark:bg-[#111111]">
            <div class="pt-12 md:py-12 px-2 sm:px-5 md:px-10 lg:px-14">
                <!-- about page title -->
                <h2 class="after-effect after:left-52">Sobre mi</h2>
                <!-- personal info for mobile devices start -->
                <div class="lg:hidden">
                    <div
                        class="w-full mb-6 lg:mb-0 mx-auto relative bg-white text-center dark:bg-[#111111] px-6 rounded-[20px] mt-[180px] md:mt-[220px] lg:mt-0">
                        <!-- profile image  -->
                        <img src="{{ asset('images/LOGO.jpg') }}"
                            class="w-[240px] absolute left-[50%] transform -translate-x-[50%] h-[240px] drop-shadow-xl mx-auto rounded-[20px] -mt-[140px]"
                            alt="about" />
                        <div class="pt-[100px] pb-8">
                            <h2 class="mt-6 mb-1 text-[26px] font-semibold dark:text-white"> Cardenas Anthony
                            </h2>
                            <h3
                                class="mb-4 text-[#7B7B7B] inline-block dark:bg-[#1D1D1D] px-5 py-1.5 rounded-lg dark:text-[#A6A6A6]">
                                Software Developer </h3>

                            <div class="flex justify-center space-x-3">
                                <!-- linkedin icon and link -->
                                <a href="https://www.linkedin.com/in/anthony-cardenas-aquino-01a645141/" target="_blank"
                                    rel="noopener noreferrer">
                                    <span class="socialbtn text-[#0072b1]">
                                        <i class="fa-brands fa-linkedin-in"></i>
                                    </span>
                                </a>
                                <a href="https://www.youtube.com/channel/UC13FlAy_27IpJfowhoo73Gg" target="_blank"
                                    rel="noopener noreferrer">
                                    <span class="socialbtn text-[#0072b1]">
                                        <i class="fa-brands fa-youtube"></i>
                                    </span>
                                </a>
                                <a href="https://github.com/Logicainformatica18" target="_blank" rel="noopener noreferrer">
                                    <span class="socialbtn text-[#0072b1]">
                                        <i class="fa-brands fa-github"></i>
                                    </span>
                                </a>
                                <!-- facebook icon and link -->
                                <a href="https://www.facebook.com/Logicainformatica2020" target="_blank"
                                    rel="noopener noreferrer">
                                    <span class="socialbtn text-[#1773EA]">
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </span>
                                </a>
                            </div>

                            <!-- personal info start -->
                            <div class="p-7 rounded-2xl mt-7 bg-[#F3F6F6] dark:bg-[#1D1D1D]">
                                <div class="flex border-b border-[#E3E3E3] dark:border-[#3D3A3A] pb-2.5">
                                    <span class="socialbtn bg-white dark:bg-black text-[#E93B81] shadow-md">
                                        <i class="fa-solid fa-mobile-screen-button"></i>
                                    </span>
                                    <div class="text-left ml-2.5">
                                        <p class="text-xs text-[#44566C] dark:text-[#A6A6A6]"> Teléfono </p>
                                        <p class="dark:text-white"> <a href="https://api.whatsapp.com/send?phone=+51986547813&text=Deseo%20alg%C3%BAn%20servicio"
                                            target="_blank"
                                            >+51 986 547 813</a></p>
                                    </div>
                                </div>


                                <div class="flex border-b border-[#E3E3E3] dark:border-[#3D3A3A] py-2.5">
                                    <span class="socialbtn bg-white dark:bg-black text-[#FD7590] shadow-md">
                                        <i class="fa-solid fa-location-dot"></i>
                                    </span>
                                    <div class="text-left ml-2.5">
                                        <p class="text-xs text-[#44566C] dark:text-[#A6A6A6]"> Dirección </p>
                                        <p class="dark:text-white">Lima, Perú</p>
                                    </div>
                                </div>

                                <div class="flex border-b border-[#E3E3E3] dark:border-[#3D3A3A] py-2.5">
                                    <span class="socialbtn bg-white dark:bg-black text-[#6AB5B9] shadow-md">
                                        <i class="fa-solid fa-envelope-open-text"></i>
                                    </span>
                                    <div class="text-left ml-2.5">
                                        <p class="text-xs text-[#44566C] dark:text-[#A6A6A6]"> Email </p>
                                        <p class="dark:text-white">logicainformatica18@gmail.com</p>
                                    </div>
                                </div>
                                {{-- <div class="flex py-2.5">
                                    <span class="socialbtn bg-white dark:bg-black text-[#C17CEB] shadow-md">
                                        <i class="fa-solid fa-calendar-days"></i>
                                    </span>
                                    <div class="text-left ml-2.5">
                                        <p class="text-xs text-[#44566C] dark:text-[#A6A6A6]"> Año de nacimiento </p>
                                        <p class="dark:text-white">24 Sept, 1987</p>
                                    </div>
                                </div> --}}
                            </div>
                            <!-- personal info end -->

                            <!-- dowanload button -->
                            {{-- <button class="dowanload-btn">
                                <img class="mr-3" src="{{ asset('images/icons/dowanload.png') }}" alt="icon" />
                                Descargar
                                CV
                            </button> --}}
                        </div>
                    </div>
                </div>
                <!-- personal info for mobile devices end -->

                <div class="lg:grid grid-cols-12 md:gap-10 pt-4 md:pt-[30px] items-center hidden">
                    <div class="col-span-12 space-y-2.5">
                        <div class="lg:mr-16">
                            <p class="text-[#44566c] dark:text-color-910 leading-7"> Soy instructor de programación desde
                                hace 7 años.
                                Me motiva compartir mis conocimientos y experiencias en el mundo del Desarrollo de Software.
                            </p>
                            <p class="text-[#44566c] leading-7 mt-2.5 dark:text-color-910">
                                Soy especialista en Bases de datos y
                                mantengo activo mi canal de youtube <a
                                    href="https://www.youtube.com/channel/UC13FlAy_27IpJfowhoo73Gg" target="_blank">Anthony
                                    code</a>
                                para documentar tecnologías que me van interesando.
                            </p>
                        </div>
                        <div></div>
                    </div>
                </div>

            </div>

            <!-- what i do section start -->
            <div class="pb-12 px-2 sm:px-5 md:px-10 lg:px-14">
                <h3 class="text-[35px] dark:text-white font-bold font-robotoSlab pb-5"> ¿Qué hago? </h3>
                <div class="grid gap-8 grid-cols-1 md:grid-cols-2 xl:grid-cols-2">
                    <div class="about-box bg-[#fcf4ff] dark:bg-transparent">
                        <img class="w-10 h-10 object-contain block" src="{{ asset('images/icons/classroom.png') }}"
                            alt="icon" />
                        <div class="space-y-2">
                            <h3 class="dark:text-white text-[22px] font-semibold"> Talleres </h3>
                            <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> Realizo webinars sobre tecnología para
                                publicidad de programas, cursos. </p>
                        </div>
                    </div>

                    <div class="about-box bg-[#fefaf0] dark:bg-transparent">
                        <img class="w-10 h-10 object-contain block" src="{{ asset('images/icons/icon5.svg') }}"
                            alt="icon" />
                        <div class="space-y-2">
                            <h3 class="dark:text-white text-[22px] font-semibold"> Desarrollo Web </h3>
                            <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> Realizo Aplicaciones Web LMS para
                                empresas del sector educativo. </p>
                        </div>
                    </div>

                    <div class="about-box bg-[#fcf4ff] dark:bg-transparent">
                        <img class="w-10 h-10 object-contain block" src="{{ asset('images/icons/diploma.png') }}"
                            alt="icon" />
                        <div class="space-y-2">
                            <h3 class="dark:text-white text-[22px] font-semibold"> Diplomados</h3>
                            <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]">Realizo diplomados de especializaciones
                                en Desarrollo Laravel, SQL Server, Git & Github, Ms Excel.
                            </p>
                        </div>
                    </div>

                    {{-- <div class="about-box bg-[#fff4f4] dark:bg-transparent">
                        <img class="w-10 h-10 object-contain block" src="{{asset('images/icons/icon3.svg')}}"
                            alt="icon" />
                        <div class="space-y-2">
                            <h3 class="dark:text-white text-[22px] font-semibold"> Edición de video </h3>
                            <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> Al igual que con la fotografía, he descubierto este mundo
                                totalmente nuevo para mi. Ha sido una sorpresa todo lo que se puede realizar. </p>
                        </div>
                    </div> --}}

                    <div class="about-box bg-[#fff0f8] dark:bg-transparent">
                        <img class="w-10 h-10 object-contain block" src="{{ asset('images/icons/ayuda.png') }}"
                            alt="icon" />
                        <div class="space-y-2">
                            <h3 class="dark:text-white text-[22px] font-semibold"> Mentoría </h3>
                            <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> Realizo mentorías desde 1 sol para
                                preguntas relacionadas a Computación e Informática, Ingeniería de Software.</p>
                        </div>
                    </div>

                    {{-- <div class="about-box bg-[#f3faff] dark:bg-transparent">
                        <img class="w-10 h-10 object-contain block" src="{{asset('images/icons/icon5.svg')}}"
                            alt="icon" />
                        <div class="space-y-2">
                            <h3 class="dark:text-white text-[22px] font-semibold"> Desarrollo Web </h3>
                            <p class="leading-8 text-gray-lite dark:text-[#A6A6A6]"> Si hoy en día no tienes presencia en internet,
                                no te encontraran. Ponte en contacto conmigo para crear tu presencia online. </p>
                        </div>
                    </div> --}}
                </div>
            </div>

            <!-- what i do section start -->
            <div class="px-2 sm:px-5 md:px-10 lg:px-14">
                <div class="bg-[#F8FBFB] dark:bg-[#0D0D0D] max-w-full h-auto py-10 rounded-xl">
                    <h3 class="text-center dark:text-white text-6xl mb-3 font-semibold"> Clientes </h3>
                    <!-- slider and slider items -->
                    <div class="slickOne text-center px-2 pt-8">
                        <div>
                            <img class="overflow-hidden brand-img" src="{{ asset('images/icons/sise.svg') }}"
                                alt="brand icon" />
                        </div>
                        <div>
                            <img class="overflow-hidden brand-img" src="{{ asset('images/icons/sdc.png') }}"
                                alt="brand icon" />
                        </div>
                        <div>
                            <img class="overflow-hidden brand-img" src="{{ asset('images/icons/cesca.png') }}"
                                alt="brand icon" />
                        </div>


                        <div>
                            <img class="overflow-hidden brand-img" src="{{ asset('images/icons/eiger.png') }}"
                                alt="brand icon" />
                        </div>
                        <div>
                            <img class="overflow-hidden brand-img" src="{{ asset('images/icons/cicec.png') }}"
                                alt="brand icon" />
                        </div>

                    </div>
                    <!-- slider and slider items end -->
                </div>
            </div>

            <!-- footer start -->
            <footer class="overflow-hidden rounded-b-2xl" style="background: transparent">
                <p class="text-center py-6 text-gray-lite dark:text-color-910"> © 2024 Creditos del Template :
                    by <a class="hover:text-[#FA5252] duration-300 transition" href="#" target="_blank"
                        rel="noopener noreferrer"> El Rincón de Isma</a>. </p>
            </footer>
            <!-- footer section end -->
        </div>
    </div>
    <!-- about me section start -->
@endsection
