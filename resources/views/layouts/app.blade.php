<!DOCTYPE html>
<html lang="en" class="">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield("title", "Jaime Pérez Peñaloza | Full-Stack Developer & Web Specialist")</title>
        <meta name="description" content="I'm Jaime Pérez Peñaloza, a Full-Stack Developer passionate about creating efficient, user-focused web applications. I bring over 10 years of experience building custom digital solutions using Laravel, PHP, MySQL, Tailwind CSS and more." />
        <meta name="keywords" content="Jaime Pérez Peñaloza, full stack developer, web developer Chile, Laravel developer, PHP developer, MySQL, Tailwind CSS, UX UI, software engineer, frontend, backend, custom web solutions" />
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="Jaime Pérez Peñaloza" />
        <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png">
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
          tailwind.config = {
            darkMode: 'class', // 👈 Esto activa modo oscuro manual por clase
            theme: {
              extend: {},
            }
          }
        </script>
        <script src="https://kit.fontawesome.com/5c2133a18f.js" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    
        <style>
            @keyframes typewriter {
                0% {
                    width: 0;
                }
                60% {
                    width: 100%;
                }
                80% {
                    width: 100%; /* Mantiene visible */
                }
                100% {
                    width: 0;
                }
            }
            
            @keyframes blink {
                50% {
                    border-color: transparent;
                }
            }
        
            .typewriter-wrapper {
                overflow: hidden;
                white-space: nowrap;
                border-right: 2px solid white;
                width: fit-content;
                animation: typewriter 5s steps(30, end) infinite,
                blink 0.7s step-end infinite;
            }
            
            .typewriter {
                display: inline-block;
                overflow: hidden;
                white-space: nowrap;
            }
            
            @keyframes blink-caret {
                50% { border-color: transparent }
            }
            html {
                scroll-behavior: smooth;
            }
            .navbar-scrolled {
                background-color: #202937 !important;
                transition: background-color 0.3s ease;
            }
            
            .active-link {
                color: #ea580c !important;
                font-weight: 600;
            }
            .card-hover {
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card-hover:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 25px rgba(0,0,0,0.1);
}
        </style>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const toggleBtn = document.querySelector("[data-collapse-toggle]");
                const menu = document.getElementById(toggleBtn.getAttribute("data-collapse-toggle"));

                toggleBtn.addEventListener("click", () => {
                    menu.classList.toggle("hidden");
                });
            });

            function handleNavbarScroll() {
                const navbar = document.getElementById('navbar');
                const navLinks = document.querySelectorAll('.nav-link');
                const isMobile = window.innerWidth < 768; 

                if (window.scrollY > 50) {
                    navbar.classList.remove('bg-transparent', 'text-white');
                    navbar.classList.add('bg-white', 'text-gray-900', 'shadow-md');

                    navLinks.forEach(link => {
                        link.classList.remove('text-white');
                        link.classList.add('text-gray-800');
                    });

                } else {
                    navbar.classList.remove('bg-white', 'text-gray-900', 'shadow-md');
                    navbar.classList.add('bg-transparent', 'text-white');

                    navLinks.forEach(link => {
                        if (!isMobile) {
                            link.classList.remove('text-orange-600');
                            link.classList.add('text-white');
                        } else {
                            link.classList.remove('text-white');
                            link.classList.add('text-gray-900');
                        }
                    });
                }
            }

            window.addEventListener('scroll', handleNavbarScroll);
            window.addEventListener('resize', handleNavbarScroll); 
            document.addEventListener('DOMContentLoaded', handleNavbarScroll); 
        </script>

        
    </head>
    <body class="bg-white text-gray-900 dark:bg-gray-900 dark:text-white">

        <a href="#top" class="fixed bottom-6 right-6 bg-orange-500 text-white p-3 rounded-full shadow-lg hover:bg-orange-600 transition duration-300 z-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7" />
            </svg>
        </a>
        <header id="home" fixed>
            <nav id="navbar" class="fixed top-0 left-0 w-full z-50 transition-all duration-500 bg-transparent text-white">
                <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
                    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                        <img id="site-logo" src="{{ asset("img/logo-white.png")}}" class="h-5" alt=" Logo" />
                    </a>
                    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                        </svg>
                    </button>
                    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                        <ul class="font-medium text-gray-900 md:text-white flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-white md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700 transition-colors duration-300">
                      
                            <li>
                                <a href="#home" class="nav-link active-link block py-2 px-3 transition-colors duration-300 hover:text-orange-400" aria-current="page">Home</a>
                            </li>
                            <li>
                                <a href="#about" class="nav-link block py-2 px-3 transition-colors duration-300 hover:text-orange-400">About</a>
                            </li>
                            <li>
                                <a href="#resume" class="nav-link block py-2 px-3 transition-colors duration-300 hover:text-orange-400">Resume</a>
                            </li>
                            <li>
                                <a href="#whatido" class="nav-link block py-2 px-3 transition-colors duration-300 hover:text-orange-400">What I Do?</a>
                            </li>
                            <li>
                                <a href="#portfolio" class="nav-link block py-2 px-3 transition-colors duration-300 hover:text-orange-400">Portfolio</a>
                            </li>
                            <li>
                                <a href="#contact" class="nav-link block py-2 px-3 transition-colors duration-300 hover:text-orange-400">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>     
        </header>
    
        @yield ("content")
    
    
        <footer class="bg-white rounded-lg shadow-sm m-4 dark:bg-gray-800">
            <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© {{ date('Y') }} <a href="{{ route("home") }}" class="hover:underline">jaimeperezpenaloza.dev</a>. All Rights Reserved.</span>
                <ul class="hidden md:flex font-medium flex-row space-x-6 text-gray-500">
                    <li>
                        <a href="#home" class="block py-2 px-3 text-white bg-orange-700 rounded-sm md:bg-transparent md:text-orange-700 md:p-0 dark:text-white md:dark:text-orange-500" aria-current="page">Home</a>
                    </li>
                    <li>
                        <a href="#about" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-700 md:p-0 dark:text-white md:dark:hover:text-orange-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">About</a>
                    </li>
                    <li>
                        <a href="#resume" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-700 md:p-0 dark:text-white md:dark:hover:text-orange-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Resume</a>
                    </li>
                    <li>
                        <a href="#whatido" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-700 md:p-0 dark:text-white md:dark:hover:text-orange-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">What I Do?</a>
                    </li>
                    <li>
                        <a href="#portfolio" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-700 md:p-0 dark:text-white md:dark:hover:text-orange-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Portfolio</a>
                    </li>
                    <li>
                        <a href="#contact" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-orange-700 md:p-0 dark:text-white md:dark:hover:text-orange-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                    </li>
                </ul>
            </div>
        </footer>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
        <script>
            const header = document.querySelector("header");
            const navLinks = document.querySelectorAll(".nav-link");
            const sections = document.querySelectorAll("section");
            const logo = document.getElementById("site-logo");
            
            window.addEventListener("scroll", () => {
                // Scroll navbar
                if (window.scrollY > 80) {
                    header.classList.add("navbar-scrolled");
                    logo.src = "{{ asset("img/logo-color.png")}}"; 
                } else {
                    header.classList.remove("navbar-scrolled");
                    logo.src = "{{ asset("img/logo-white.png")}}"; 
                }
                
                let current = "";
                sections.forEach((section) => {
                    const sectionTop = section.offsetTop - 120;
                    const sectionHeight = section.clientHeight;
                    if (pageYOffset >= sectionTop && pageYOffset < sectionTop + sectionHeight) {
                    current = section.getAttribute("id");
                    }
                });
                
                navLinks.forEach((link) => {
                    link.classList.remove("active-link");
                    if (link.getAttribute("href") === `#${current}`) {
                    link.classList.add("active-link");
                    }
                });
            });
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const toggleDark = document.getElementById("dark-toggle");
                const html = document.documentElement;

                // Verifica la preferencia guardada o el sistema
                if (localStorage.getItem("theme") === "dark" || 
                (!localStorage.getItem("theme") && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
                    html.classList.add("dark");
                } else {
                    html.classList.remove("dark");
                }

                toggleDark.addEventListener("click", function () {
                    if (html.classList.contains("dark")) {
                        html.classList.remove("dark");
                        localStorage.setItem("theme", "light");
                    } else {
                        html.classList.add("dark");
                        localStorage.setItem("theme", "dark");
                    }
                });
            });
        </script>
    </body>
</html>