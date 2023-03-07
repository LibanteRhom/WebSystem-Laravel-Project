@extends('templates.default')

@section('content')
        <!-- Features section-->

        <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                         Libante
                        <span class="text-primary">{{$info['name']}}</span>
                    </h1>
                    <div class="subheading mb-5">
                        {{$info['address']}}
                        <a href="https://mail.google.com/mail/u/0/#inbox">{{$info['email']}}</a>
                    </div>
                    <p class="lead mb-5">{{$info['about']}}</p>
                    <div class="social-icons">
                        <a class="social-icon" href="#!" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="https://github.com/LibanteRhom" target="_blank"><i class="fab fa-github"></i></a>
                        <a class="social-icon" href="#!" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a class="social-icon" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />

            <!-- Experience-->
            <section class="resume-section" id="experience">
                <div class="resume-section-content">
                    <h2 class="mb-5">{{$info['experience']}}</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">{{$info['title_job']}}</h3>
                            <div class="subheading mb-3">{{$info['spec_job']}}</div>
                            <p>{{$info['php_description']}}</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">{{$info['year_date']}}</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">{{$info['title_job2']}}</h3>
                            <div class="subheading mb-3">{{$info['spec_job2']}}</div>
                            <p>{{$info['description2']}}</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">{{$info['year_date2']}}</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">{{$info['title_job3']}}</h3>
                            <div class="subheading mb-3">{{$info['spec_job3']}}</div>
                            <p>{{$info['description3']}}</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">{{$info['year_date3']}}</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">{{$info['title_job4']}}</h3>
                            <div class="subheading mb-3">{{$info['spec_job4']}}</div>
                            <p>{{$info['description4']}}</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">{{$info['year_date4']}}</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />

            <!-- Education-->
            <section class="resume-section" id="education">
                <div class="resume-section-content">
                    <h2 class="mb-5">{{$info['education']}}</h2>
                    <div class="d-flex flex-column flex-md-row justify-content-between mb-5">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">{{$info['college']}}</h3>
                            <div class="subheading mb-3">{{$info['profession']}}</div>
                            <div>{{$info['major']}}</div>
                            <p>{{$info['gpa1']}}</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">{{$info['date1']}}</span></div>
                    </div>
                    <div class="d-flex flex-column flex-md-row justify-content-between">
                        <div class="flex-grow-1">
                            <h3 class="mb-0">{{$info['Hschool_Jnior_Snior_High']}}</h3>
                            <div class="subheading mb-3">{{$info['strand']}}</div>
                            <p>{{$info['gpa2']}}</p>
                        </div>
                        <div class="flex-shrink-0"><span class="text-primary">{{$info['date2']}}</span></div>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">{{$info['skills']}}</h2>
                    <div class="subheading mb-3">{{$info['programming']}}</div>
                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                        <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                        <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                        <li class="list-inline-item"><i class="fab fa-angular"></i></li>
                        <li class="list-inline-item"><i class="fab fa-react"></i></li>
                        <li class="list-inline-item"><i class="fab fa-node-js"></i></li>
                        <li class="list-inline-item"><i class="fab fa-sass"></i></li>
                        <li class="list-inline-item"><i class="fab fa-less"></i></li>
                        <li class="list-inline-item"><i class="fab fa-wordpress"></i></li>
                        <li class="list-inline-item"><i class="fab fa-gulp"></i></li>
                        <li class="list-inline-item"><i class="fab fa-grunt"></i></li>
                        <li class="list-inline-item"><i class="fab fa-npm"></i></li>
                    </ul>
                    <div class="subheading mb-3">{{$info['workflow']}}</div>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            {{$info['mobile']}}
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            {{$info['testing_debugging']}}
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            {{$info['functional_teams']}}
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-check"></i></span>
                            {{$info['development']}}
                        </li>
                    </ul>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Interests-->
            <section class="resume-section" id="interests">
                <div class="resume-section-content">
                    <h2 class="mb-5">{{$info['interests']}}</h2>
                    <p>{{$info['des_inter1']}}</p>
                    <p class="mb-0">{{$info['des_inter2']}}</p>
                </div>
            </section>
            <hr class="m-0" />

            <!-- Awards-->
            <section class="resume-section" id="awards">
                <div class="resume-section-content">
                    <h2 class="mb-5">{{$info['title_Awards']}}</h2>
                    <ul class="fa-ul mb-0">
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            {{$info['award1']}}
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            {{$info['award2']}}
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            1
                            <sup>st</sup>
                            {{$info['award3']}}
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            1
                            <sup>st</sup>
                            {{$info['award4']}}
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            2
                            <sup>nd</sup>
                            {{$info['award5']}}
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            1
                            <sup>st</sup>
                            {{$info['award6']}}
                        </li>
                        <li>
                            <span class="fa-li"><i class="fas fa-trophy text-warning"></i></span>
                            3
                            <sup>rd</sup>
                            {{$info['award7']}}
                        </li>
                    </ul>
                </div>
            </section>
@endsection