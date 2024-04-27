@extends('User.layouts.master')
@section('title')
    Courses
@endsection
@section('content')
    <main>
        <section class="courses-section section-style">
            <div class="container">
                <h1 class="section-title">All Courses</h1>
                <div class="courses-layout">
                    <div class="courses-contint">
                        @foreach ($courses as $course)
                            <div class="course-card">
                                <div class="course-card-img">
                                        <a href="#" class="overlay"></a>
                                        @if ($course->image != null)
                                        <img src="{{ asset('Images/'.$course->image) }}" alt="chemistry" loading="lazy" />
                                        @else
                                            <img src="{{ asset('assets/Site/img/chemistry.jpg') }}" alt="chemistry" loading="lazy" />
                                        @endif
                                    </div>
                                <div class="course-card-body">
                                    <h2 class="course-title">
                                        <a href="{{ route('PageCourses', [$course->id]) }}">{{$course->title}}</a>
                                    </h2>
                                    <div class="course-info">

                                        <div class="course-info-item">
                                            <span class="course-info-item-icon">
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    width="24"
                                                    height="24"
                                                    viewBox="0 0 24 24"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                    class="lucide lucide-file-text">
                                              <path
                                                      d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"
                                              />
                                              <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                                              <path d="M10 9H8" />
                                              <path d="M16 13H8" />
                                              <path d="M16 17H8" />
                                            </svg>
                                            </span>
                                            <span class="course-info-item-text">{{$course->lessons}} Files</span>
                                        </div>


                                        <div class="course-info-item">
                                            <span class="course-info-item-icon">
                                                <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="24"
                                                        height="24"
                                                        viewBox="0 0 24 24"
                                                        fill="none"
                                                        stroke="currentColor"
                                                        stroke-width="2"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="lucide lucide-bar-chart-3"
                                                >
                                                    <path d="M3 3v18h18" />
                                                    <path d="M18 17V9" />
                                                    <path d="M13 17V5" />
                                                    <path d="M8 17v-3" />
                                                </svg>
                                            </span>
                                            <span class="course-info-item-text"> {{$course->level}} levels </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </section>


        <section class="courses-section section-style">
            <div class="container">
                <h1 class="section-title">Selected Courses</h1>
                <div class="courses-layout">
                    <div class="courses-contint">
                            @foreach($userCoures as $userCoures)
                                @if($userCoures->auth == auth()->user()->id)
                                    <div class="course-card">
                                        <div class="course-card-img">
                                            <a href="#" class="overlay"></a>

                                                @if ($userCoures->image != null)
                                                    <img src="{{ asset('Images/'.$userCoures->image) }}" alt="chemistry" loading="lazy" />
                                                @else
                                                    <img src="{{ asset('assets/Site/img/chemistry.jpg') }}" alt="chemistry" loading="lazy" />
                                                @endif

                                        </div>

                                        <div class="course-card-body">
                                            <h2 class="course-title">{{$userCoures->title}}</h2>
                                            <div class="course-info">

                                                <div class="course-info-item">
                                                    <span class="course-info-item-icon">
                                                        <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="24"
                                                                height="24"
                                                                viewBox="0 0 24 24"
                                                                fill="none"
                                                                stroke="currentColor"
                                                                stroke-width="2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                                class="lucide lucide-file-text"
                                                        >
                                                            <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"/>
                                                            <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                                                            <path d="M10 9H8" />
                                                            <path d="M16 13H8" />
                                                            <path d="M16 17H8" />
                                                        </svg>
                                                    </span>
                                                    <span class="course-info-item-text">{{$userCoures->lessons}} Files</span>
                                                </div>
                                                <div class="course-info-item">
                                                    <span class="course-info-item-icon">
                                                        <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                width="24"
                                                                height="24"
                                                                viewBox="0 0 24 24"
                                                                fill="none"
                                                                stroke="currentColor"
                                                                stroke-width="2"
                                                                stroke-linecap="round"
                                                                stroke-linejoin="round"
                                                                class="lucide lucide-bar-chart-3"
                                                        >
                                                            <path d="M3 3v18h18" />
                                                            <path d="M18 17V9" />
                                                            <path d="M13 17V5" />
                                                            <path d="M8 17v-3" />
                                                        </svg>
                                                    </span>
                                                    <span class="course-info-item-text"> {{$userCoures->level}} levels </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
