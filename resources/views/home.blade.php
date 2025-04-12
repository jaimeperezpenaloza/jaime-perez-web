@extends("layouts.app")
@section("title")
    Home - Jaime Pérez Peñaloza
@endsection
@section("content")
    <section class="relative bg-orange-100 dark:bg-gray-900 py-52" style="background-image: url('{{ asset("img/home.png")}}'); background-size: cover; background-position: center;">
        <div class="absolute inset-0 bg-gray-800 dark:bg-gray-900 opacity-60"></div>
        <div class="relative z-10 max-w-4xl mx-auto text-center px-6">
            <div class="typewriter text-orange-600 dark:text-orange-400 text-center">
                <div class="typewriter-wrapper">
                    <h1 class="text-5xl font-extrabold mb-4">Hi, I’m Jaime Pérez P.</h1>
                </div>
                <h3 class="text-2xl font-medium mb-6">Developer Full-Stack</h3>
            </div>
            <p class="text-lg leading-relaxed mb-8 text-white">
                With over a decade of experience, I specialize in building smart, scalable web applications. I love transforming complex ideas into clean, functional code—and I always bring a sharp eye for detail, design, and user experience.
            </p>
            <div class="flex justify-center gap-4">
                <a href="https://www.linkedin.com/in/jaimeperezpenaloza/" target="_blank" class="bg-white text-orange-600 dark:text-orange-400 px-6 py-2 rounded-md font-semibold transition-all duration-300 transform hover:scale-110 hover:shadow-lg ">
                    <i class="fa-brands fa-linkedin"></i> View my LinkedIn
                </a>
                <a href="#contact" class="bg-gray-900 text-white px-6 py-2 rounded-md font-semibold transition-all duration-300 transform hover:scale-110 hover:shadow-lg hover:bg-gray-700">
                    <i class="fa-solid fa-message"></i> Contact
                </a>
            </div>
        </div>
    </section>

    <section id="about" class="max-w-screen-xl mx-auto px-6 py-12 bg-white dark:bg-gray-900 dark:text-white" id="about">
        <div class="text-center mb-10">
            <span data-aos="zoom-in" class="text-sm font-semibold px-3 py-1 bg-orange-600 text-white rounded">About me</span>
            <h2 data-aos="zoom-in" class="text-3xl md:text-4xl font-bold text-gray-900 mt-4">Know Me More</h2>
        </div>
        <div class="md:flex md:justify-between md:items-start text-left">
            <div class="md:w-4/4">
                <h3 data-aos="zoom-in" class="text-xl font-semibold text-gray-800 dark:text-gray-200 mb-3">Hi, I’m Jaime</h3>
                <p data-aos="zoom-in" class="text-gray-600 dark:text-gray-300 leading-relaxed text-justify">
                    I’m a Full Stack Developer passionate about building purposeful digital experiences that are both technically robust and visually intuitive. With over a decade of experience, I’ve come to value simplicity, clarity, and usability in everything I create. My work blends structured backend logic with carefully crafted user interfaces that serve real-world needs—always with the end user in mind.
                    While I’ve worked extensively with technologies like PHP, Laravel, MySQL, and modern front-end tools, what truly drives me is the challenge of turning complexity into accessible solutions. I enjoy digging deep into problems, mapping out processes, and delivering tools that make workflows smoother and more efficient.
                    <br><br>
                    Photography has been a creative outlet that complements my technical work. It’s sharpened my sense of proportion, balance, and detail—skills I bring to UI design and front-end development. My knowledge of Adobe Photoshop and image editing allows me to refine visual elements and ensure consistency across projects.
                    <br><br>
                    Beyond code, I’m curious, collaborative, and always open to learning—from new frameworks to new ways of thinking. I see technology not just as a tool, but as a craft—one that improves lives when approached with care and creativity.
                </p>
            </div>
        </div>
    </section>

    <section id="resume" class="bg-gray-800 text-white px-6 py-12  ">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-10">
                <span data-aos="zoom-in" class="text-sm font-semibold px-3 py-1 bg-orange-600 text-white rounded">Resume</span>
                <h2 data-aos="zoom-in" class="text-3xl md:text-4xl font-bold text-white mt-4">A summary of My Resume</h2>
            </div>
            <div class="grid md:grid-cols-2 gap-10 relative">
                <!-- Divider Line -->
                <div class="hidden md:block absolute top-0 bottom-0 left-1/2 w-px bg-gray-700"></div>
    
                <!-- Education -->
                <div data-aos="fade-right" data-aos-delay="100">
                    <h3 class="text-xl font-bold mb-8">My Education</h3>
                    <div class="mb-10 relative">
                        <span class="absolute left-[-10px] top-2 w-1 h-full bg-orange-500"></span>
                        <h4 class="font-semibold text-lg">Master in Business Engineering with Information Technology</h4>
                        <p class="text-sm text-gray-300 mb-2">University of Chile, Santiago - Chile / 2022 - 2025</p>
                        <p class="text-gray-400 text-sm">This program strengthened my ability to connect business strategy with digital transformation. I worked on process redesign and project management, focusing on improving IT services within complex organizations. I also completed courses on Change Management, Neural Networks, and Advanced Analytics, which gave me deeper insight into data-driven decision-making and emerging technologies.</p>
                    </div>
                    <div class="mb-10 relative">
                        <span class="absolute left-[-10px] top-2 w-1 h-full bg-orange-500"></span>
                        <h4 class="font-semibold text-lg">Diploma Management in Information Technologies</h4>
                        <p class="text-sm text-gray-300 mb-2">University of Chile, Santiago - Chile / 2019</p>
                        <p class="text-gray-400 text-sm">Focused on managing and evaluating tech projects, with emphasis on IT, communications, and automation. Acquired tools for planning, innovation, budgeting, and quality control within organizations.</p>
                    </div>
                    <div class="mb-10 relative">
                        <span class="absolute left-[-10px] top-2 w-1 h-full bg-orange-500"></span>
                        <h4 class="font-semibold text-lg">Diploma Preparation, Evaluation and Management of Projects</h4>
                        <p class="text-sm text-gray-300 mb-2">University of Chile, Santiago - Chile / 2018</p>
                        <p class="text-gray-400 text-sm">Acquired tools to develop and evaluate business plans, with a focus on investment projects. Applied methodologies across all PEP phases, covering market, technical, legal, and financial aspects.</p>
                    </div>
                    <div class="relative">
                        <span class="absolute left-[-10px] top-2 w-1 h-full bg-orange-500"></span>
                        <h4 class="font-semibold text-lg">Engineering (E) in Computer Science</h4>
                        <p class="text-sm text-gray-300 mb-2">University of Santo Tomás, Iquique - Chile / 2009 - 2014</p>
                        <p class="text-gray-400 text-sm">Solid foundation in software development, databases, and IT systems. Trained to design and implement technological solutions tailored to organizational needs.                    </p>
                    </div>
                </div>
    
                <!-- Experience -->
                <div data-aos="fade-left" data-aos-delay="100">
                    <h3 class="text-xl text-right font-bold mb-8">My Experience</h3>
                    <div class="mb-10 relative">
                        <span class="absolute right-[-10px] top-2 w-1 h-full bg-orange-500"></span>
                        <h4 class="font-semibold text-lg text-right">Software Development Engineer (Full Stack Developer PHP)</h4>
                        <p class="text-sm text-gray-300 mb-2 text-right">University of Chile, Santiago - Chile / 2022 - 2025</p>
                        <p class="text-gray-400 text-sm text-right">Worked at the Faculty of Philosophy and Humanities developing Laravel-based web applications. Focused on backend and frontend features using PHP, MySQL, JavaScript, and Bootstrap, supporting key institutional processes with agile collaboration.

                        </p>
                    </div>

                    <div class="mb-10 relative">
                        <span class="absolute right-[-10px] top-2 w-1 h-full bg-orange-500"></span>
                        <h4 class="font-semibold text-lg text-right">Head of Information Technology Department</h4>
                        <p class="text-sm text-gray-300 mb-2 text-right">University of Chile, Santiago - Chile / 2017 - 2022</p>
                        <p class="text-gray-400 text-sm text-right">Led IT operations at the Faculty of Social Sciences, coordinating teams across development, support, and infrastructure. Oversaw system development using PHP and MySQL, and managed efforts to maintain networks, servers, and digital services.

                        </p>
                    </div>

                    <div class="mb-10 relative">
                        <span class="absolute right-[-10px] top-2 w-1 h-full bg-orange-500"></span>
                        <h4 class="font-semibold text-lg text-right">Software Development Engineer (Full Stack Developer)</h4>
                        <p class="text-sm text-gray-300 mb-2 text-right">University of Chile, Santiago - Chile / 2014 - 2017</p>
                        <p class="text-gray-400 text-sm text-right">Built and maintained internal systems at the Faculty of Social Sciences. Developed user-friendly web interfaces and optimized backend performance using PHP, MySQL, CSS, and JavaScript.

                        </p>
                    </div>
            
                    <div class="relative">
                        <span class="absolute right-[-10px] top-2 w-1 h-full bg-orange-500"></span>
                        <h4 class="font-semibold text-lg text-right">Analyst Developer</h4>
                        <p class="text-sm text-gray-300 mb-2 text-right">University Arturo Prat, Iquique - Chile / 2013 - 2014</p>
                        <p class="text-gray-400 text-sm text-right">I was in charge of analyzing and developing academic and administrative systems using technologies like PHP, JavaScript, SQL, and Oracle.
                            I worked on both front-end and back-end, creating RESTful APIs and improving accessibility and user experience within agile teams.</p>
                    </div>
                </div>
            </div>
            <div class="text-center mb-10 pt-20">
                <a data-aos="zoom-in" href="https://www.linkedin.com/in/jaimeperezpenaloza/"  target="_blank" class="bg-orange-600 text-white px-8 py-4 rounded-md font-semibold transition-all duration-300 transform hover:scale-110 hover:shadow-lg hover:bg-orange-700"><i class="fa-brands fa-linkedin"></i> View my LinkedIn</a>
            </div>
        </div>
    </section>
  
  
    <section>
        <div class="overflow-hidden py-10 pt-25 bg-white" data-aos="zoom-in">
            <div class="flex animate-marquee space-x-16 pb-12">
                <div class="flex space-x-16 min-w-max">
                    <img src="{{ asset("img/logos/html.png")}}" class="h-8" alt="HTML5" />
                    <img src="{{ asset("img/logos/php.png")}}" class="h-8" alt="PHP" />
                    <img src="{{ asset("img/logos/tailwind.png")}}" class="h-6" alt="Tailwind CSS" />
                    <img src="{{ asset("img/logos/photoshop.png")}}" class="h-8" alt="Adobe Photoshop" />
                    <img src="{{ asset("img/logos/laravel.png")}}" class="h-8" alt="Laravel" />
                    <img src="{{ asset("img/logos/bootstrap.png")}}" class="h-7" alt="Bootstrap CSS" />
                    <img src="{{ asset("img/logos/css.png")}}" class="h-8" alt="CSS" />
                    <img src="{{ asset("img/logos/react.png")}}" class="h-8" alt="React" />
                    <img src="{{ asset("img/logos/mysql.png")}}" class="h-6" alt="MySQL" />
                    <img src="{{ asset("img/logos/git.png")}}" class="h-8" alt="Git" /> 
                    <img src="{{ asset("img/logos/javascript.png")}}" class="h-8" alt="Javascript" />
                    <img src="{{ asset("img/logos/xd.png")}}" class="h-8" alt="Adobe XD" />
                    <img src="{{ asset("img/logos/wordpress.png")}}" class="h-8" alt="Wordpress" />
                    <img src="{{ asset("img/logos/aws.png")}}" class="h-8" alt="AWS" />
                    
                </div>
                <div class="flex space-x-16 min-w-max">
                    <img src="{{ asset("img/logos/html.png")}}" class="h-8" alt="HTML5" />
                    <img src="{{ asset("img/logos/php.png")}}" class="h-8" alt="PHP" />
                    <img src="{{ asset("img/logos/tailwind.png")}}" class="h-6" alt="Tailwind CSS" />
                    <img src="{{ asset("img/logos/photoshop.png")}}" class="h-8" alt="Adobe Photoshop" />
                    <img src="{{ asset("img/logos/laravel.png")}}" class="h-8" alt="Laravel" />
                    <img src="{{ asset("img/logos/bootstrap.png")}}" class="h-7" alt="Bootstrap CSS" />
                    <img src="{{ asset("img/logos/css.png")}}" class="h-8" alt="CSS" />
                    <img src="{{ asset("img/logos/react.png")}}" class="h-8" alt="React" />
                    <img src="{{ asset("img/logos/mysql.png")}}" class="h-6" alt="MySQL" />
                    <img src="{{ asset("img/logos/git.png")}}" class="h-8" alt="Git" />
                    <img src="{{ asset("img/logos/javascript.png")}}" class="h-8" alt="Javascript" />
                    <img src="{{ asset("img/logos/xd.png")}}" class="h-8" alt="Adobe XD" />
                    <img src="{{ asset("img/logos/wordpress.png")}}" class="h-8" alt="Wordpress" />
                    <img src="{{ asset("img/logos/aws.png")}}" class="h-8" alt="AWS" />
                </div>
            </div>
        </div>    
    </section>


    <section id="whatido" class=" py-10 pb-30">
        <div class="max-w-7xl mx-auto items-center">
            <div class="text-center">
                <span data-aos="zoom-in" class="text-sm font-semibold px-3 py-1 bg-orange-600 text-white rounded">What I Do?</span>
                <h2 data-aos="zoom-in" class="text-3xl md:text-4xl font-bold text-gray-900 mt-4">How I can help your next project</h2>
            </div>
        </div>
        <div class="max-w-7xl mx-auto pt-20	 text-center">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-12">
                <div class="flex flex-col items-center">
                    <div data-aos="zoom-in" class="bg-gray-800 dark:bg-gray-900 text-orange-600 dark:text-orange-400 w-20 h-20 flex items-center justify-center rounded-full text-xl">
                        <i class="fas fa-laptop-code  text-white text-4xl"></i>

                    </div>
                    <h3 data-aos="zoom-out" class="text-xl font-bold text-gray-900 mb-2">Full-Stack Development</h3>
                    <p  data-aos="zoom-out" class="text-gray-600 dark:text-gray-300 text-sm">
                        Building complete web applications from front to back using modern technologies like Laravel, PHP, MySQL, JavaScript, and more.
                    </p>
                </div>
        
                <div class="flex flex-col items-center">
                    <div  data-aos="zoom-in" class="bg-gray-800 dark:bg-gray-900 text-orange-600 dark:text-orange-400 w-20 h-20 flex items-center justify-center rounded-full text-xl">
                        <i class="fas fa-pencil-ruler text-white text-4xl  text-white text-4xl"></i>
                    </div>
                    <h3 data-aos="zoom-out" class="text-xl font-bold text-gray-900 mb-2">UI/UX Design</h3>
                    <p  data-aos="zoom-out" class="text-gray-600 dark:text-gray-300 text-sm">
                    Creating clean, modern, and user-friendly interfaces with a focus on usability, accessibility, and seamless interaction.
                    </p>
                </div>
        
                <div class="flex flex-col items-center">
                    <div  data-aos="zoom-in" class="bg-gray-800 dark:bg-gray-900 text-orange-600 dark:text-orange-400 w-20 h-20 flex items-center justify-center rounded-full text-xl">
                        <i class="fab fa-wordpress  text-white text-4xl"></i>
                    </div>
                    <h3 data-aos="zoom-out" class="text-xl font-bold text-gray-900 mb-2">WordPress Customization</h3>
                    <p  data-aos="zoom-out" class="text-gray-600 dark:text-gray-300 text-sm">
                        Designing and customizing WordPress websites tailored to your needs — from themes to advanced features and integrations.
                    </p>
                </div>
        
                <div class="flex flex-col items-center">
                    <div  data-aos="zoom-in" class="bg-gray-800 dark:bg-gray-900 text-orange-600 dark:text-orange-400 w-20 h-20 flex items-center justify-center rounded-full text-xl">
                        <i class="fas fa-brain  text-white text-4xl"></i>
                    </div>
                    <h3 data-aos="zoom-out"class="text-xl font-bold text-gray-900 mb-2">Product Thinking</h3>
                    <p  data-aos="zoom-out" class="text-gray-600 dark:text-gray-300 text-sm">
                        Transforming ideas into functional digital products, always thinking from the user’s and business’s perspective to deliver real value.
                    </p>
                </div>
        
                <div class="flex flex-col items-center">
                    <div  data-aos="zoom-in" class="bg-gray-800 dark:bg-gray-900 text-orange-600 dark:text-orange-400 w-20 h-20 flex items-center justify-center rounded-full text-xl">
                        <i class="fas fa-object-group  text-white text-4xl"></i>
                    </div>
                    <h3 data-aos="zoom-out"class="text-xl font-bold text-gray-900 mb-2">Prototyping & Wireframing</h3>
                    <p  data-aos="zoom-out" class="text-gray-600 dark:text-gray-300 text-sm">
                        Designing interactive prototypes and wireframes using tools like Figma, Adobe XD, or Sketch to validate concepts before development.
                    </p>
                </div>
        
                <div class="flex flex-col items-center">
                    <div  data-aos="zoom-in" class="bg-gray-800 dark:bg-gray-900 text-orange-600 dark:text-orange-400 w-20 h-20 flex items-center justify-center rounded-full text-xl">
                        <i class="fas fa-paint-brush  text-white text-4xl"></i>
                    </div>
                    <h3 data-aos="zoom-out"class="text-xl font-bold text-gray-900 mb-2">Digital Craftsmanship</h3>
                    <p  data-aos="zoom-out" class="text-gray-600 dark:text-gray-300 text-sm">
                        Visual editing and creative work using tools like Photoshop, Illustrator, and Premiere. A keen eye for detail and a passion for polished results.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section data-aos="fade-down" class="relative bg-orange-500 text-white py-20 px-6 text-center overflow-hidden">
        <div class="absolute top-6 left-4 text-white/20 text-xs md:text-sm font-mono leading-snug text-left">
            &lt;div&gt;<br />
            &nbsp;&nbsp;&lt;h1&gt;Hi, I'm Jaime&lt;/h1&gt;<br />
            &nbsp;&nbsp;&lt;p&gt;Full-stack developer&lt;/p&gt;<br />
            &lt;/div&gt;
        </div>
    
        <div class="absolute bottom-6 right-6 text-white/20 text-xs md:text-sm font-mono leading-snug text-right">
            function build() {<br />
            &nbsp;&nbsp;return "Hello world!";<br />
            }
        </div>
    
        <div class="absolute bottom-20 left-1/4 text-white/10 text-xs md:text-sm font-mono leading-snug hidden md:block">
            console.log("Let’s build it together");
        </div>
    
        <div class="absolute top-16 right-1/4 text-white/10 text-xs md:text-sm font-mono leading-snug hidden md:block">
            &lt;section class="jumbotron"&gt;<br />
            &nbsp;&nbsp;&lt;code&gt;magic&lt;/code&gt;<br />
            &lt;/section&gt;
        </div>
    
        <h2 class="text-4xl md:text-5xl font-extrabold leading-tight relative z-10">
            Let’s build something meaningful together
        </h2>
        <p class="mt-4 text-lg md:text-xl text-white/90 relative z-10">
            Turning ideas into real, valuable digital experiences.
        </p>
    
        <div class="mt-8 relative z-10">
            <a href="#contact" class="bg-white text-orange-500 font-semibold px-8 py-4  rounded-md hover:bg-orange-100 dark:bg-gray-900 transition">
                Let’s work together
            </a>
        </div>
    </section>

    <section id="portfolio" class="bg-gray-50 py-20">
        <div class="max-w-7xl mx-auto items-center">
            <div class="text-center">
                <span data-aos="zoom-in" class="text-sm font-semibold px-3 py-1 bg-orange-600 text-white rounded">Portfolio</span>
                <h2 data-aos="zoom-in" class="text-3xl md:text-4xl font-bold text-gray-900 mt-4">Some of my most recent projects</h2>
            </div>
        </div>
        <div class="w-full max-w-7xl mx-auto px-4 py-12">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($projects as $project)
                    <div data-aos="zoom-out" class="card-hover w-full mx-auto bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:bg-gray-900 dark:border-gray-700">
                        <img class="w-full h-48 object-cover rounded-t-lg" src="{{ asset('img/project/' . $project->cover_image) }}" alt="{{ $project->title }}" />
                        <div class="p-5">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $project->title }}
                            </h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                {{ Str::limit($project->description, 150) }}
                            </p>
                            <div class="flex flex-wrap gap-2">
                                @foreach(explode(',', $project->technologies) as $tech)
                                    <span class="inline-block bg-orange-100 dark:bg-gray-900 text-orange-800 text-xs font-semibold px-3 py-1 rounded-full">
                                        {{ trim($tech) }}
                                    </span>
                                @endforeach
                            </div>
                            <div class="mt-8 flex gap-4">
                                <button data-modal-target="modal-{{ $project->id }}" data-modal-toggle="modal-{{ $project->id }}" class="bg-orange-600 text-white px-6 py-2 rounded-md font-semibold hover:bg-orange-500 transition" type="button">
                                    <i class="fa-solid fa-folder"></i> View project
                                </button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="contact" class="bg-gray-800 dark:bg-gray-900 py-20 px-6 md:px-16 text-white" >
        <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-10 items-start">
            <div>
                <h2 class="text-3xl md:text-4xl font-extrabold mb-4">Let's get in touch</h2>
                <p class="mb-6 text-lg">
                    I enjoy discussing new projects and design challenges. Please share as much info as possible so we can get the most out of our first catch-up.
                </p>
                <div class="mb-4">
                    <h3 class="font-bold text-lg">Living In:</h3>
                    <p>Toronto, Canada</p>
                </div>
                <div class="flex space-x-4 text-2xl mt-6">
                    <a href="https://www.linkedin.com/in/jaimeperezpenaloza/" target="_blank" class="hover:text-gray-700"><i class="fab fa-linkedin"></i></a>
                    <a href="https://github.com/jaimeperezpenaloza" class="hover:text-gray-700"  target="_blank" ><i class="fab fa-github"></i></a>
                </div>
            </div>
            <div>
                <form action="{{ route('contact') }}#contact" method="POST" class="space-y-6">
                    @csrf
                    <div>
                        <label class="block text-sm font-semibold mb-1">What is Your Name:</label>
                        <input name="name" type="text" value="{{ old('name') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500"  />
                        @error('name')
                            <p class="bg-white text-orange-800 text-sm font-medium mt-1 px-3 py-1 rounded shadow-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">Your Email Address:</label>
                        <input name="email" type="email" value="{{ old('email') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500"  />
                        @error('email')
                            <p class="bg-white text-orange-800 text-sm font-medium mt-1 px-3 py-1 rounded shadow-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-1">How can I help you?</label>
                        <textarea name="message" rows="4"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500" >{{ old('message') }}</textarea>
                        @error('message')
                            <p class="bg-white text-orange-800 text-sm font-medium mt-1 px-3 py-1 rounded shadow-sm">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                    <button type="submit"
                        class="mt-4 bg-gray-900 text-white px-6 py-3 rounded-md hover:bg-gray-800 dark:bg-gray-900 transition">
                        Send →
                    </button>
                </form>
            </div>
        </div>
    </section>
  
    @foreach($projects as $project)
        <div id="modal-{{ $project->id }}" tabindex="-1" aria-hidden="true" class="hidden fixed top-0 left-0 right-0 z-50 w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full bg-orange-900/60 backdrop-blur-sm">
            <div class="relative w-full max-w-5xl mx-auto mt-20">
                <div class="relative bg-white rounded-lg shadow-lg p-6 md:flex md:gap-6">
                    <!-- Botón cerrar -->
                    <button type="button" class="absolute bg-orange-600 top-4 right-4 text-white hover:text-white hover:bg-orange-200 rounded-full w-8 h-8 flex items-center justify-center" data-modal-hide="modal-{{ $project->id }}">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                    <!-- Galería -->
                    <div class="md:w-1/2">
                        <div id="gallery-{{ $project->id }}" class="relative w-full overflow-hidden rounded-lg bg-white" data-carousel="slide">
                            <div class="relative w-full rounded-lg min-h-[750px]">
                                @foreach(explode(',', $project->gallery_images) as $index => $image)
                                    <div class="{{ $index === 0 ? 'block' : 'hidden' }}" data-carousel-item>
                                        <img src="{{ asset('img/project/' . trim($image)) }}" class="w-full h-auto mx-auto" alt="Project image {{ $index + 1 }}" />
                                    </div>
                                @endforeach
                            </div>

                            <!-- Botones -->
                            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group" data-carousel-prev>
                                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-orange-600/30 hover:bg-orange-600/60">
                                    <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                                    </svg>
                                </span>
                            </button>
                            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group" data-carousel-next>
                                <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-orange-600/30 hover:bg-orange-600/60">
                                    <svg class="w-4 h-4 text-white" fill="none" viewBox="0 0 6 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </div>

                    <!-- Info -->
                    <div class="md:w-1/2 mt-6 md:mt-0 space-y-4 text-left">
                        <h3 class="text-2xl font-bold text-gray-800 dark:text-gray-200">{{ $project->title }}</h3>
                        <div class="border-b pb-2">
                            <h4 class="font-semibold text-gray-700">Project Info:</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-300">{{ $project->description }}</p>
                        </div>
                        <div class="border-b pb-2">
                            <h4 class="font-semibold text-gray-700">Client:</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-300">{{ $project->client }}</p>
                        </div>
                        <div class="border-b pb-2">
                            <h4 class="font-semibold text-gray-700">Industry:</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-300">{{ $project->industry }}</p>
                        </div>
                        <div class="border-b pb-2">
                            <h4 class="font-semibold text-gray-700">Technologies:</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-300">{{ $project->technologies }}</p>
                        </div>
                        <div class="border-b pb-2">
                            <h4 class="font-semibold text-gray-700">Date:</h4>
                            <p class="text-sm text-gray-600 dark:text-gray-300">{{ $project->date }}</p>
                        </div>
                        <div>
                            <h4 class="font-semibold text-gray-700">URL:</h4>
                            <a href="{{ $project->url }}" target="_blank" class="text-orange-600 dark:text-orange-400 underline hover:text-orange-800">{{ $project->url }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    @if (session('success'))
        <div id="success-modal" tabindex="-1" aria-hidden="true"
            class="fixed inset-0 z-50 flex items-center justify-center bg-orange-900/60 backdrop-blur-sm">
            <div class="relative bg-white rounded-lg shadow-lg p-6 max-w-md w-full mx-4">
                <!-- Botón cerrar -->
                <button type="button"
                        class="absolute top-4 right-4 text-gray-400 hover:text-gray-900 hover:bg-gray-200 rounded-full w-8 h-8 flex items-center justify-center"
                        onclick="document.getElementById('success-modal').classList.add('hidden')">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>

                <!-- Contenido -->
                <div class="text-center">
                    <h3 class="text-xl font-bold text-gray-800 dark:text-gray-200 mb-2">Message Sent!</h3>
                    <p class="text-gray-600 dark:text-gray-300">{{ session('success') }}</p>
                    <button onclick="document.getElementById('success-modal').classList.add('hidden')"
                            class="mt-6 bg-orange-600 text-white px-5 py-2 rounded-md hover:bg-orange-500 transition">
                        Got it
                    </button>
                </div>
            </div>
        </div>
    @endif
@endsection