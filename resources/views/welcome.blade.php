<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        @yield('seo')

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>

            html,body{
                font-family: 'Poppins', sans-serif;
            }

            [x-cloak]{
                display: none;
            }
        </style>

        @livewireStyles
        @stack('css')
    </head>
    <body class="antialiased text-gray-900">
        <header class="max-w-5xl px-8 py-5 mx-auto">
            <div class="flex justify-between">
                <div>
                    <a href="{{ url('/') }}" class="flex items-center gap-1">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-blue-700">
                            <path d="M11.25 5.337c0-.355-.186-.676-.401-.959a1.647 1.647 0 01-.349-1.003c0-1.036 1.007-1.875 2.25-1.875S15 2.34 15 3.375c0 .369-.128.713-.349 1.003-.215.283-.401.604-.401.959 0 .332.278.598.61.578 1.91-.114 3.79-.342 5.632-.676a.75.75 0 01.878.645 49.17 49.17 0 01.376 5.452.657.657 0 01-.66.664c-.354 0-.675-.186-.958-.401a1.647 1.647 0 00-1.003-.349c-1.035 0-1.875 1.007-1.875 2.25s.84 2.25 1.875 2.25c.369 0 .713-.128 1.003-.349.283-.215.604-.401.959-.401.31 0 .557.262.534.571a48.774 48.774 0 01-.595 4.845.75.75 0 01-.61.61c-1.82.317-3.673.533-5.555.642a.58.58 0 01-.611-.581c0-.355.186-.676.401-.959.221-.29.349-.634.349-1.003 0-1.035-1.007-1.875-2.25-1.875s-2.25.84-2.25 1.875c0 .369.128.713.349 1.003.215.283.401.604.401.959a.641.641 0 01-.658.643 49.118 49.118 0 01-4.708-.36.75.75 0 01-.645-.878c.293-1.614.504-3.257.629-4.924A.53.53 0 005.337 15c-.355 0-.676.186-.959.401-.29.221-.634.349-1.003.349-1.036 0-1.875-1.007-1.875-2.25s.84-2.25 1.875-2.25c.369 0 .713.128 1.003.349.283.215.604.401.959.401a.656.656 0 00.659-.663 47.703 47.703 0 00-.31-4.82.75.75 0 01.83-.832c1.343.155 2.703.254 4.077.294a.64.64 0 00.657-.642z" />
                        </svg>
                        <span class="text-2xl font-bold text-blue-700">teacherQ</span>
                    </a>
                </div>
            </div>
        </header>

        <div id="hero" class="max-w-5xl px-8 pt-16 mx-auto">
            <div class="grid grid-cols-2 gap-8">
                <div>
                    <img src="{{ asset('img/autism-boy.jpg') }}" alt="">
                </div>
                <div class="self-center text-center">
                    <h1 class="text-2xl font-bold text-gray-600">Simple Steps, Big Achievements.</h1>

                    <div class="mx-auto mt-10 w-72">
                        <a href="{{ url('register') }}" class="block px-8 py-3 font-bold text-white bg-blue-700 border-b-4 border-blue-900 rounded-md hover:bg-blue-600">Get Started</a>

                        <a href="{{ url('login') }}" class="block px-8 py-3 mt-4 font-bold text-blue-700 bg-white border-2 border-b-4 border-gray-200 border-gray-300 rounded-md hover:bg-gray-100">Log In</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-gray-100">

            <div class="max-w-5xl px-8 py-16 mx-auto ">

                <h1 class="text-3xl font-bold text-blue-800">About TeacherQ</h1>

                <p class="mt-8">
                    TeacherQ, a groundbreaking software tool designed to empower individuals on the autism spectrum by providing tailored educational support. Our mission is to foster self-development through personalized learning experiences, all conveniently consolidated within one collaborative platform.
                </p>

                <p class="mt-8">
                    TeacherQ stands out as a collaborative hub where multiple autism experts can seamlessly contribute to the growth of each individual. We believe in the strength of collective expertise, and our platform allows specialists to update and refine learning materials to suit the unique needs of every student.
                </p>

                <div class="mt-8">
                    <a href="{{ url('register') }}" class="inline-block px-5 py-2 text-sm text-white bg-blue-700 border-b-4 border-blue-900 rounded-md hover:bg-blue-600">Read More</a>
                </div>
            </div>

        </div>

        <section class="px-6 overflow-hidden bg-white isolate lg:px-8">
            <div class="relative max-w-2xl py-24 mx-auto sm:py-32 lg:max-w-4xl">
              <div class="absolute left-1/2 top-0 -z-10 h-[50rem] w-[90rem] -translate-x-1/2 bg-[radial-gradient(50%_100%_at_top,theme(colors.indigo.100),white)] opacity-20 lg:left-36"></div>
              <div class="absolute inset-y-0 right-1/2 -z-10 mr-12 w-[150vw] origin-bottom-left skew-x-[-30deg] bg-white shadow-xl shadow-indigo-600/10 ring-1 ring-indigo-50 sm:mr-20 md:mr-0 lg:right-full lg:-mr-36 lg:origin-center"></div>
              <figure class="grid items-center grid-cols-1 gap-x-6 gap-y-8 lg:gap-x-10">
                <div class="relative col-span-2 lg:col-start-1 lg:row-start-2">
                  <svg viewBox="0 0 162 128" fill="none" aria-hidden="true" class="absolute left-0 h-32 -top-12 -z-10 stroke-gray-900/10">
                    <path id="b56e9dab-6ccb-4d32-ad02-6b4bb5d9bbeb" d="M65.5697 118.507L65.8918 118.89C68.9503 116.314 71.367 113.253 73.1386 109.71C74.9162 106.155 75.8027 102.28 75.8027 98.0919C75.8027 94.237 75.16 90.6155 73.8708 87.2314C72.5851 83.8565 70.8137 80.9533 68.553 78.5292C66.4529 76.1079 63.9476 74.2482 61.0407 72.9536C58.2795 71.4949 55.276 70.767 52.0386 70.767C48.9935 70.767 46.4686 71.1668 44.4872 71.9924L44.4799 71.9955L44.4726 71.9988C42.7101 72.7999 41.1035 73.6831 39.6544 74.6492C38.2407 75.5916 36.8279 76.455 35.4159 77.2394L35.4047 77.2457L35.3938 77.2525C34.2318 77.9787 32.6713 78.3634 30.6736 78.3634C29.0405 78.3634 27.5131 77.2868 26.1274 74.8257C24.7483 72.2185 24.0519 69.2166 24.0519 65.8071C24.0519 60.0311 25.3782 54.4081 28.0373 48.9335C30.703 43.4454 34.3114 38.345 38.8667 33.6325C43.5812 28.761 49.0045 24.5159 55.1389 20.8979C60.1667 18.0071 65.4966 15.6179 71.1291 13.7305C73.8626 12.8145 75.8027 10.2968 75.8027 7.38572C75.8027 3.6497 72.6341 0.62247 68.8814 1.1527C61.1635 2.2432 53.7398 4.41426 46.6119 7.66522C37.5369 11.6459 29.5729 17.0612 22.7236 23.9105C16.0322 30.6019 10.618 38.4859 6.47981 47.558L6.47976 47.558L6.47682 47.5647C2.4901 56.6544 0.5 66.6148 0.5 77.4391C0.5 84.2996 1.61702 90.7679 3.85425 96.8404L3.8558 96.8445C6.08991 102.749 9.12394 108.02 12.959 112.654L12.959 112.654L12.9646 112.661C16.8027 117.138 21.2829 120.739 26.4034 123.459L26.4033 123.459L26.4144 123.465C31.5505 126.033 37.0873 127.316 43.0178 127.316C47.5035 127.316 51.6783 126.595 55.5376 125.148L55.5376 125.148L55.5477 125.144C59.5516 123.542 63.0052 121.456 65.9019 118.881L65.5697 118.507Z" />
                    <use href="#b56e9dab-6ccb-4d32-ad02-6b4bb5d9bbeb" x="86" />
                  </svg>
                  <blockquote class="text-xl font-semibold leading-8 text-gray-900 sm:text-2xl sm:leading-9">
                    <p>I believe there's hope for everything. I hope, with this tool, we can help these kids develop their future.  In fostering a community of support and understanding, we illuminate a path toward a brighter, more inclusive tomorrow.</p>
                  </blockquote>
                </div>
                <div class="w-16 col-end-1 lg:row-span-4 lg:w-72">
                  <img class="rounded-xl bg-indigo-50 lg:rounded-3xl" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=576&h=576&q=80" alt="">
                </div>
                <figcaption class="text-base lg:col-start-1 lg:row-start-3">
                  <div class="font-semibold text-gray-900">Qwerty Qwerty</div>
                  <div class="mt-1 text-gray-500">SPED Teacher, Physical Therapist</div>
                </figcaption>
              </figure>
            </div>
          </section>

        <div class="bg-gray-100">
            <div class="max-w-5xl px-8 py-16 mx-auto">
                <div class="grid grid-cols-4 gap-3">
                    <div class="text-center">
                        <h5 class="text-5xl font-bold text-blue-500">2.6k+</h5>
                        <p class="mt-2">Worksheets</p>
                    </div>
                    <div class="text-center">
                        <h5 class="text-5xl font-bold text-blue-500">13k+</h5>
                        <p class="mt-2">Pre-registers</p>
                    </div>
                    <div class="text-center">
                        <h5 class="text-5xl font-bold text-blue-500">1.1k+</h5>
                        <p class="mt-2">Accounts</p>
                    </div>
                    <div class="text-center">
                        <h5 class="text-5xl font-bold text-blue-500">$50k+</h5>
                        <p class="mt-2">Raised</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-white">
            <div class="max-w-5xl px-8 py-16 mx-auto">
                
                <div class="grid items-center grid-cols-2 gap-16 my-16">
                    <div>
                        <h3 class="text-3xl font-bold text-green-600">group of experts</h3>
                        <p class="mt-4">
                            TeacherQ brings together a diverse group of autism experts, each contributing their specialized knowledge to create a comprehensive and supportive environment. Our platform values the collective wisdom of these professionals, ensuring that the learning experience is enriched by the expertise of many.
                        </p>
                    </div>
                    <div>
                        <img src="{{ asset('img/experts.svg') }}" alt="">
                    </div>
                </div>

                <div class="grid items-center grid-cols-2 gap-16 my-16">

                    <div>
                        <img src="{{ asset('img/playing.svg') }}" alt="">
                    </div>
                    <div>
                        <h3 class="text-3xl font-bold text-green-600">customizable worksheets</h3>
                        <p class="mt-4">
                            Tailoring education to individual needs is at the core of TeacherQ. Our customizable worksheets empower educators and caregivers to adapt learning materials to the unique requirements of each student. This feature ensures that lessons are not only engaging but also specifically designed to maximize the potential of every learner.
                        </p>
                    </div>
                </div>

                <div class="grid items-center grid-cols-2 gap-16 my-16">
                    <div>
                        <h3 class="text-3xl font-bold text-green-600">profiling reports</h3>
                        <p class="mt-4">
                            TeacherQ provides a robust profiling and reporting system, allowing for a detailed and insightful view of each individual's progress. This feature enables educators, parents, and experts to track milestones, identify areas of strength, and address challenges proactively. By offering a comprehensive overview, we empower stakeholders to make informed decisions for the continued growth of the student.
                        </p>
                    </div>
                    <div>
                        <img src="{{ asset('img/profile.svg') }}" alt="">
                    </div>
                </div>

                <div class="grid items-center grid-cols-2 gap-16 my-16">

                    <div>
                        <img src="{{ asset('img/collaborate.svg') }}" alt="">
                    </div>
                    <div>
                        <h3 class="text-3xl font-bold text-green-600">collaborative support</h3>
                        <p class="mt-4">
                            Recognizing the importance of a collaborative approach, TeacherQ facilitates seamless communication and support among educators, parents, and experts. This feature ensures that everyone involved in the student's development can actively contribute, share insights, and collectively work towards the common goal of fostering growth and well-being. TeacherQ's collaborative supports promote a holistic and inclusive educational journey for individuals on the autism spectrum.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-5xl min-h-screen px-8 py-16 mx-auto">

            <h3 class="text-5xl font-bold text-center text-green-700">
                Bridging Potential, Building Success
            </h3>

            <div class="flex justify-center mt-16">
                <a href="{{ url('register') }}" class="inline-block px-16 py-3 font-bold text-white bg-blue-700 border-b-4 border-blue-900 rounded-md hover:bg-blue-600">Get Started</a>
            </div>
        </div>
          
        
        <footer class="text-white bg-gray-900">
            <div class="max-w-5xl px-4 py-16 mx-auto sm:px-6"> 
                <div class="grid gap-8 py-6 lg:gap-0 lg:grid-cols-2">
                    <div class="pr-8">
                        <a href="{{ url('/') }}" class="flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 text-gray-300">
                                <path d="M11.25 5.337c0-.355-.186-.676-.401-.959a1.647 1.647 0 01-.349-1.003c0-1.036 1.007-1.875 2.25-1.875S15 2.34 15 3.375c0 .369-.128.713-.349 1.003-.215.283-.401.604-.401.959 0 .332.278.598.61.578 1.91-.114 3.79-.342 5.632-.676a.75.75 0 01.878.645 49.17 49.17 0 01.376 5.452.657.657 0 01-.66.664c-.354 0-.675-.186-.958-.401a1.647 1.647 0 00-1.003-.349c-1.035 0-1.875 1.007-1.875 2.25s.84 2.25 1.875 2.25c.369 0 .713-.128 1.003-.349.283-.215.604-.401.959-.401.31 0 .557.262.534.571a48.774 48.774 0 01-.595 4.845.75.75 0 01-.61.61c-1.82.317-3.673.533-5.555.642a.58.58 0 01-.611-.581c0-.355.186-.676.401-.959.221-.29.349-.634.349-1.003 0-1.035-1.007-1.875-2.25-1.875s-2.25.84-2.25 1.875c0 .369.128.713.349 1.003.215.283.401.604.401.959a.641.641 0 01-.658.643 49.118 49.118 0 01-4.708-.36.75.75 0 01-.645-.878c.293-1.614.504-3.257.629-4.924A.53.53 0 005.337 15c-.355 0-.676.186-.959.401-.29.221-.634.349-1.003.349-1.036 0-1.875-1.007-1.875-2.25s.84-2.25 1.875-2.25c.369 0 .713.128 1.003.349.283.215.604.401.959.401a.656.656 0 00.659-.663 47.703 47.703 0 00-.31-4.82.75.75 0 01.83-.832c1.343.155 2.703.254 4.077.294a.64.64 0 00.657-.642z" />
                            </svg>
                            <span class="text-2xl font-bold text-gray-300">teacherQ</span>
                        </a>
                        <p class="mt-6">Where Learning Feels Like Fun!</p>
                    </div>
                    <div class="grid grid-cols-3 gap-1 lg:gap-6">
                        <div>
                            <h6 class="font-bold text-light-green">Explore</h6>
        
                            <div class="mt-4 space-y-2">
                                <a href="" class="block text-xs lg:text-base">About Us</a>
                                <a href="" class="block text-xs lg:text-base">FAQ</a>
                                <a href="" class="block text-xs lg:text-base">Contact Us</a>
                            </div>
                        </div>
        
                        <div class="col-span-2 pr-3">
                            <h6 class="font-bold text-light-green">Newsletter</h6>
        
                            <form class="mt-4 space-y-2">
                                <div class="relative">
                                    <input type="email" class="w-full h-10 text-sm text-left placeholder-white bg-transparent border border-white rounded-md" placeholder="Enter your email">
                                    <button type="submit" class="absolute top-[0.05rem] bottom-[0.05rem] px-3 right-[0.02rem] bg-light-green rounded-r-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-900">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                          </svg>
                                          
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        
                <div class="pt-8 mt-8 border-t">
                    <div class="flex justify-between">
                        <div>
                            <p class="text-sm text-gray-400">&copy; {{ date('Y') }} Sikai Inc. All Rights reserved.</p>
                        </div>
                        <div>
                            <a href="https://www.facebook.com/eTanomPH" target="_blank" class="flex items-center gap-2 text-xs lg:text-base">
                                <svg class="w-5 h-5 hover:opacity-80" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" fill="currentColor" focusable="false" aria-hidden="true">
                                    <path d="M23.9981 11.9991C23.9981 5.37216 18.626 0 11.9991 0C5.37216 0 0 5.37216 0 11.9991C0 17.9882 4.38789 22.9522 10.1242 23.8524V15.4676H7.07758V11.9991H10.1242V9.35553C10.1242 6.34826 11.9156 4.68714 14.6564 4.68714C15.9692 4.68714 17.3424 4.92149 17.3424 4.92149V7.87439H15.8294C14.3388 7.87439 13.8739 8.79933 13.8739 9.74824V11.9991H17.2018L16.6698 15.4676H13.8739V23.8524C19.6103 22.9522 23.9981 17.9882 23.9981 11.9991Z"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </footer>

        @livewireScripts
        @stack('js')
    </body>
</html>
