<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kristine Longasa - BSCS Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .gradient-bg { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .gradient-banner { background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); }
        .text-gradient { background: linear-gradient(45deg, #fff, #f0f0f0); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
        .hover-lift { transition: transform 0.3s; }
        .hover-lift:hover { transform: translateY(-5px); }
        .animate-float { animation: float 3s ease-in-out infinite; }
        @keyframes float { 0%, 100% { transform: translateY(0px); } 50% { transform: translateY(-10px); } }
        .skill-bar { background: linear-gradient(90deg, #667eea, #764ba2); height: 8px; border-radius: 4px; transition: width 1s ease-in-out; }
    </style>
</head>
<body class="bg-gradient-to-br from-purple-400 via-pink-500 to-red-500 text-gray-800 overflow-x-hidden">
   <!-- Header Section -->
   <header class="fixed top-0 w-full bg-white bg-opacity-90 backdrop-blur-md z-50 shadow-lg">
       <div class="container mx-auto px-4 py-4 flex justify-between items-center">
           <a href="#" class="text-2xl font-bold text-purple-600">Kristine</a>
            <nav class="flex items-center gap-6">
                <ul class="flex space-x-8">
                    <li><a href="#home" class="text-gray-700 hover:text-purple-600 transition-colors">Home</a></li>
                    <li><a href="#about" class="text-gray-700 hover:text-purple-600 transition-colors">About</a></li>
                    <li><a href="#skills" class="text-gray-700 hover:text-purple-600 transition-colors">Skills</a></li>
                    <li><a href="#services" class="text-gray-700 hover:text-purple-600 transition-colors">Services</a></li>
                    <li><a href="#contact" class="text-gray-700 hover:text-purple-600 transition-colors">Contact</a></li>
                </ul>


            </nav>

       </div>
   </header>

   <!-- Banner Section -->
   <section id="home" class="pt-32 pb-20 gradient-banner text-white">
       <div class="container mx-auto px-4">
           <div class="flex flex-col lg:flex-row items-center justify-between">
               <div class="lg:w-1/2 mb-10 lg:mb-0">
                   <h1 class="text-5xl lg:text-6xl font-bold mb-6 text-gradient">Hello, I'm Kristine Longasa!</h1>
                   <p class="text-xl mb-8">3rd Year BSCS Student | Passionate about Programming & Design</p>
                   <div class="flex flex-col sm:flex-row gap-4">
                       <a href="#contact" class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-3 rounded-full font-semibold transition-all hover-lift">Hire Me</a>
                       <a href="#about" class="border-2 border-white text-white hover:bg-white hover:text-purple-600 px-8 py-3 rounded-full font-semibold transition-all">View My Work</a>
                   </div>
                   <div class="mt-8">
                       <p class="text-lg mb-4">Follow me on</p>
                       <div class="flex space-x-4">
                           <a href="#" class="w-10 h-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center hover:bg-opacity-30 transition-all"><i class="fab fa-linkedin-in text-white"></i></a>
                           <a href="#" class="w-10 h-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center hover:bg-opacity-30 transition-all"><i class="fab fa-dribbble text-white"></i></a>
                           <a href="#" class="w-10 h-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center hover:bg-opacity-30 transition-all"><i class="fab fa-facebook-f text-white"></i></a>
                           <a href="#" class="w-10 h-10 bg-white bg-opacity-20 rounded-full flex items-center justify-center hover:bg-opacity-30 transition-all"><i class="fab fa-twitter text-white"></i></a>
                       </div>
                   </div>
               </div>
               <div class="lg:w-1/2 text-center">
                   <img src="/images/me.jpeg" alt="Kristine Longasa" class="w-80 h-80 object-cover rounded-full mx-auto shadow-2xl animate-float">
               </div>
           </div>
       </div>
   </section>

   <!-- About Section -->
   <section id="about" class="py-20 bg-white">
       <div class="container mx-auto px-4">
           <div class="flex flex-col lg:flex-row items-center">
               <div class="lg:w-1/2 mb-10 lg:mb-0">
                   <img src="/images/me2.jpeg" alt="About Kristine" class="w-full max-w-md mx-auto rounded-lg shadow-lg hover-lift">
               </div>
               <div class="lg:w-1/2 lg:pl-12">
                   <h2 class="text-4xl font-bold mb-6 text-gray-800">Aspiring Web Developer & Graphic Designer</h2>
                   <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                       Dreaming big and working hard to achieve my goals in computer science. Combining my passion for creativity and technology, I aim to become a versatile professional in web development and graphic design. Every step brings me closer to building meaningful digital experiences.
                   </p>
                   <div class="grid grid-cols-2 gap-6 mb-8">
                       <div class="text-center">
                           <h3 class="text-3xl font-bold text-purple-600">3+</h3>
                           <p class="text-gray-600">Years in Service Industry</p>
                       </div>
                       <div class="text-center">
                           <h3 class="text-3xl font-bold text-purple-600">40+</h3>
                           <p class="text-gray-600">Graphic Designs Created</p>
                       </div>
                   </div>
                   <a href="#contact" class="bg-gradient-to-r from-purple-500 to-pink-500 text-white px-8 py-3 rounded-full font-semibold hover-lift inline-flex items-center">
                       Say Hi <i class="fas fa-arrow-right ml-2"></i>
                   </a>
               </div>
           </div>
       </div>
   </section>

   {{-- Projects Section --}}
<section id="projects" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center mb-12 text-gray-800">My Projects</h2>

        @if(isset($projects) && $projects->count())
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($projects as $project)
                    <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition-shadow hover-lift overflow-hidden">
                        @php
                            $thumb = $project->thumbnail_url ?? ($project->thumbnail_path ? asset('storage/'.$project->thumbnail_path) : null);
                        @endphp

                        @if($thumb)
                            <img src="{{ $thumb }}" alt="{{ $project->title }}" class="h-48 w-full object-cover">
                        @else
                            <div class="h-48 w-full bg-slate-100 flex items-center justify-center text-slate-400">
                                No image
                            </div>
                        @endif

                        <div class="p-6">
                            <h3 class="text-xl font-semibold mb-2">{{ $project->title }}</h3>
                            @if(!empty($project->description))
                                <p class="text-gray-600 mb-4 line-clamp-3">{{ $project->description }}</p>
                            @endif

                            <div class="flex items-center gap-4 text-purple-600 font-medium">
                                @if(!empty($project->website_url))
                                    <a href="{{ $project->website_url }}" target="_blank" class="hover:text-purple-800 inline-flex items-center">
                                        Live <i class="fas fa-arrow-up-right-from-square ml-2 text-sm"></i>
                                    </a>
                                @endif
                                @if(!empty($project->github_url))
                                    <a href="{{ $project->github_url }}" target="_blank" class="hover:text-purple-800 inline-flex items-center">
                                        Code <i class="fab fa-github ml-2 text-base"></i>
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- Pagination --}}
            <div class="mt-10">
                {{ $projects->links() }}
            </div>
        @else
            <div class="bg-white rounded-lg border border-gray-200 p-8 text-center">
                <p class="text-gray-600">No projects yet. Add some from your dashboard and they’ll show up here.</p>
            </div>
        @endif
    </div>
</section>



   <!-- Skills Section -->
   <section id="skills" class="py-20 bg-gradient-to-r from-purple-50 to-pink-50">
       <div class="container mx-auto px-4">
           <h2 class="text-4xl font-bold text-center mb-12 text-gray-800">My Skills</h2>
           <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
               <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow hover-lift">
                   <div class="flex items-center mb-4">
                       <i class="fas fa-palette text-purple-500 text-3xl mr-4"></i>
                       <h3 class="text-xl font-semibold">UI/UX</h3>
                   </div>
                   <div class="w-full bg-gray-200 rounded-full h-2 mb-2">
                       <div class="skill-bar w-3/5"></div>
                   </div>
                   <p class="text-gray-600">60% Proficiency</p>
               </div>
               <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow hover-lift">
                   <div class="flex items-center mb-4">
                       <i class="fas fa-image text-blue-500 text-3xl mr-4"></i>
                       <h3 class="text-xl font-semibold">Photo Editing</h3>
                   </div>
                   <div class="w-full bg-gray-200 rounded-full h-2 mb-2">
                       <div class="skill-bar w-4/5"></div>
                   </div>
                   <p class="text-gray-600">85% Proficiency</p>
               </div>
               <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow hover-lift">
                   <div class="flex items-center mb-4">
                       <i class="fas fa-cube text-green-500 text-3xl mr-4"></i>
                       <h3 class="text-xl font-semibold">Product Design</h3>
                   </div>
                   <div class="w-full bg-gray-200 rounded-full h-2 mb-2">
                       <div class="skill-bar w-4/5"></div>
                   </div>
                   <p class="text-gray-600">80% Proficiency</p>
               </div>
               <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow hover-lift">
                   <div class="flex items-center mb-4">
                       <i class="fab fa-python text-yellow-500 text-3xl mr-4"></i>
                       <h3 class="text-xl font-semibold">Python</h3>
                   </div>
                   <div class="w-full bg-gray-200 rounded-full h-2 mb-2">
                       <div class="skill-bar w-1/2"></div>
                   </div>
                   <p class="text-gray-600">50% Proficiency</p>
               </div>
               <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow hover-lift">
                   <div class="flex items-center mb-4">
                       <i class="fab fa-laravel text-red-500 text-3xl mr-4"></i>
                       <h3 class="text-xl font-semibold">Laravel</h3>
                   </div>
                   <div class="w-full bg-gray-200 rounded-full h-2 mb-2">
                       <div class="skill-bar w-3/5"></div>
                   </div>
                   <p class="text-gray-600">65% Proficiency</p>
               </div>
           </div>
       </div>
   </section>

      <!-- Services Section -->
   <section id="services" class="py-20 bg-gray-50">
       <div class="container mx-auto px-4">
           <h2 class="text-4xl font-bold text-center mb-12 text-gray-800">My Services</h2>
           <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
               <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow hover-lift text-center">
                   <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                       <i class="fas fa-palette text-purple-600 text-2xl"></i>
                   </div>
                   <h3 class="text-xl font-semibold mb-2">UI/UX</h3>
                   <p class="text-gray-600 mb-4">Designing intuitive and user-friendly interfaces</p>
                   <a href="#" class="text-purple-600 hover:text-purple-800 font-medium">Discuss Now <i class="fas fa-arrow-right ml-1"></i></a>
               </div>
               <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow hover-lift text-center">
                   <div class="w-16 h-16 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-4">
                       <i class="fas fa-cube text-pink-600 text-2xl"></i>
                   </div>
                   <h3 class="text-xl font-semibold mb-2">Product Design</h3>
                   <p class="text-gray-600 mb-4">Creating innovative and functional product designs</p>
                   <a href="#" class="text-purple-600 hover:text-purple-800 font-medium">Discuss Now <i class="fas fa-arrow-right ml-1"></i></a>
               </div>
               <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition-shadow hover-lift text-center">
                   <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                       <i class="fas fa-film text-blue-600 text-2xl"></i>
                   </div>
                   <h3 class="text-xl font-semibold mb-2">Editing and Animation</h3>
                   <p class="text-gray-600 mb-4">Professional video editing and animation services</p>
                   <a href="#" class="text-purple-600 hover:text-purple-800 font-medium">Discuss Now <i class="fas fa-arrow-right ml-1"></i></a>
               </div>
           </div>
       </div>
   </section>
   <!-- Contact Section -->
   <section id="contact" class="py-20 bg-white">
       <div class="container mx-auto px-4">
           <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
               <div>
                   <h2 class="text-4xl font-bold mb-8 text-gray-800">Let's Connect!</h2>
                   <form class="space-y-6">
                       <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                           <input type="text" placeholder="Full Name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
                           <input type="email" placeholder="Email Address" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
                       </div>
                       <input type="text" placeholder="Subject" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500">
                       <textarea placeholder="Your Message" rows="6" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500"></textarea>
                       <button type="submit" class="bg-gradient-to-r from-purple-500 to-pink-500 text-white px-8 py-3 rounded-full font-semibold hover-lift inline-flex items-center">
                           Send Message <i class="fas fa-paper-plane ml-2"></