@extends('User.layouts.master')
@section('title')
    @foreach($courses as $course)
    {{$course->title}}
    @endforeach
@endsection
@section('content')
    <main>
        @foreach($courses as $course)
            <section class="courses-section section-style">
                <div class="container">
                    <div class="courses-hero">

                        <div class="courses-hero-bg">

                            @if ($course->image != null)
                                <img src="{{ asset('Images/'.$course->image) }}" alt="chemistry" loading="lazy" />
                            @else
                                <img src="{{ asset('assets/Site/img/chemistry.jpg') }}" alt="chemistry" loading="lazy" />
                            @endif
                            <div class="courses-hero-overlay"></div>
                        </div>

                        <div class="courses-hero-content">
                            <h1 class="courses-hero-title">{{$course->title}}</h1>
                            <p class="courses-hero-desc">{{$course->description}}</p>
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
                            <div class="course-info-item">
                                @if(isset($select))

                                    <button class="btn btn-outline-success"><i class="fa fa-check"></i>Selected</button>
                                @else
                                    <form action="{{ route('selection') }}" method="post">
                                        @csrf
                                        <input class="form-control" type="hidden" name="title" value="{{$course->title}}">
                                        <input class="form-control" type="hidden" name="lessons" value="{{$course->lessons}}">
                                        <input class="form-control" type="hidden" name="day" value="{{$course->day}}">
                                        <input class="form-control" type="hidden" name="level" value="{{$course->level}}">
                                        <input class="form-control" type="hidden" name="doctor" value="{{$course->doctor}}">
                                        <input class="form-control" type="hidden" name="auth" value="{{ auth()->user()->id}}">
                                        <input class="form-control" type="hidden" name="image" value="{{$course->image}}">
                                        <input class="form-control" type="hidden" name="course_id" value="{{$course->id}}">
                                        <button class="btn btn-outline-primary" name="courseName" value="{{$course->id}}"><i class="fa fa-edit "></i> Select</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="courses-section section-style">
                <div class="container">
                    <h1 class="section-title">Files ({{$course->lessons}})</h1>

                    <div class="lessons-layout">
                        @foreach($lessons as $lesson)
                            @if ($course->id == $lesson->course_id)
                                <a
                                        href="{{ route('admin.openFile', $lesson->docs) }}"
{{--                                        target="_blank"--}}
                                        class="lessons-item"
                                >
                                    <div class="lessons-item-bg">
                                        @if ($course->image != null)
                                            <img src="{{ asset('Images/'.$course->image) }}" alt="chemistry" loading="lazy" />
                                        @else
                                            <img src="{{ asset('assets/Site/img/chemistry.jpg') }}" alt="chemistry" loading="lazy" />
                                        @endif

                                        <div class="lessons-item-overlay"></div>
                                    </div>

                                    <div class="lessons-item-content">
                                        <p class="lessons-num">Files {{ $loop->iteration }}</p>

                                        <h2 class="lessons-title">{{ $lesson->title }}</h2>
                                    </div>
                                </a>
                            @endif
                        @endforeach


                    </div>
                </div>
            </section>

        @endforeach
    </main>

@endsection