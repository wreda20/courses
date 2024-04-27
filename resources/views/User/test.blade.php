<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />

    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>
    <link  href="{{ asset('assets/Site/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/Site/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/Site/css/styles.css') }}" rel="stylesheet" />
    <title>Course</title>
</head>
<body>

<nav class="nav-bar">
    <div class="container">
        <div class="nav-layout">
            <a href="index.html" class="brand-name"> Courses </a>

            <div class="nav-menu panel-responsive-item">
                <div class="nav-header">
                    <a href="profile.html" class="avatar">
                        <img src="assets/img/person.jpg" alt="avatar" loading="lazy" />
                    </a>

                    <a
                            href="#"
                            class="nav-toggler mobile-menu close panel-responsive-btn panel-responsive-close"
                            data-target="nav-menu "
                    >
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
                                class="lucide lucide-x"
                        >
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                    </a>
                </div>

                <ul class="nav-links">
                    <li>
                        <a href="index.html" class="active">Home</a>
                    </li>

                    <li>
                        <a href="index.html">Courses</a>
                    </li>

                    <li>
                        <a href="profile.html">Profile</a>
                    </li>

                    <li class="logout-menu">
                        <a href="login.html">
                            <span>Logout</span>

                            <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 512 512"
                                    fill="currentColor"
                            >
                                <path
                                        d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"
                                />
                            </svg>
                        </a>
                    </li>
                </ul>


            </div>

            <div class="nav-detils">
                <!-- <a to="/profile" class="avatar">
                  <img src="assets/img/person.jpg" alt="avatar" loading="lazy" />
                </a> -->

                <!-- LogOut -->

                <a href="login.html" class="logout-btn">
                    <span>Logout</span>

                    <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 512 512"
                            fill="currentColor"
                    >
                        <path
                                d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z"
                        />
                    </svg>
                </a>
            </div>

            <a
                    href="#"
                    class="nav-toggler mobile-menu panel-responsive-btn panel-responsive-open"
                    data-target="nav-menu"
            >
                <svg
                        height="384pt"
                        viewBox="0 -53 384 384"
                        width="384pt"
                        xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                            d="m368 154.667969h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"
                    ></path>
                    <path
                            d="m368 32h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"
                    ></path>
                    <path
                            d="m368 277.332031h-352c-8.832031 0-16-7.167969-16-16s7.167969-16 16-16h352c8.832031 0 16 7.167969 16 16s-7.167969 16-16 16zm0 0"
                    ></path>
                </svg>
            </a>
        </div>
    </div>
</nav>

<main>
    <section class="courses-section section-style">
        <div class="container">
            <h1 class="section-title">All Courses</h1>

            <div class="courses-layout">
                <div class="courses-contint">
                    <div class="course-card">
                        <div class="course-card-img">
                            <a href="/" class="overlay"></a>
                            <img
                                    src="{{ asset('assets/Site/img/chemistry.jpg') }}"
                                    alt="chemistry"
                                    loading="lazy"
                            />
                        </div>

                        <div class="course-card-body">
                            <h2 class="course-title">
                                <a href="course.html">
                                    Chemistry course level 2 Lorem ipsum dolor sit amet.
                                </a>
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
                                    <span class="course-info-item-text">1 Lessons</span>
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
                                class="lucide lucide-clock"
                        >
                          <circle cx="12" cy="12" r="10" />
                          <polyline points="12 6 12 12 16 14" />
                        </svg>
                      </span>
                                    <span class="course-info-item-text"> 30 days </span>
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
                                    <span class="course-info-item-text"> 2 levels </span>
                                </div>
                            </div>

                            <div class="course-card-details">
                                <div class="constructor">
                                    <div class="constructor-img">
                                        <img
                                                src="{{ asset('assets/Site/img/person.jpg') }}"
                                                alt="constructor img"
                                                loading="lazy"
                                        />
                                    </div>

                                    <a href="#" class="constructor-name"> Dr. Ali mohamed </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="course-card">
                        <div class="course-card-img">
                            <a href="/" class="overlay"></a>
                            <img
                                    src="{{ asset('assets/Site/img/chemistry.jpg') }}"
                                    alt="chemistry"
                                    loading="lazy"
                            />
                        </div>

                        <div class="course-card-body">
                            <h2 class="course-title">
                                <a href="course.html">
                                    Chemistry course level 2 Lorem ipsum dolor sit amet.
                                </a>
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
                                    <span class="course-info-item-text">1 Lessons</span>
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
                                class="lucide lucide-clock"
                        >
                          <circle cx="12" cy="12" r="10" />
                          <polyline points="12 6 12 12 16 14" />
                        </svg>
                      </span>
                                    <span class="course-info-item-text"> 30 days </span>
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
                                    <span class="course-info-item-text"> 2 levels </span>
                                </div>
                            </div>

                            <div class="course-card-details">
                                <div class="constructor">
                                    <div class="constructor-img">
                                        <img
                                                src="{{ asset('assets/Site/img/person.jpg') }}"
                                                alt="constructor img"
                                                loading="lazy"
                                        />
                                    </div>

                                    <a href="#" class="constructor-name"> Dr. Ali mohamed </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="course-card">
                        <div class="course-card-img">
                            <a href="/" class="overlay"></a>
                            <img
                                    src="{{ asset('assets/Site/img/chemistry.jpg') }}"
                                    alt="chemistry"
                                    loading="lazy"
                            />
                        </div>

                        <div class="course-card-body">
                            <h2 class="course-title">
                                <a href="course.html">
                                    Chemistry course level 2 Lorem ipsum dolor sit amet.
                                </a>
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
                                    <span class="course-info-item-text">1 Lessons</span>
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
                                class="lucide lucide-clock"
                        >
                          <circle cx="12" cy="12" r="10" />
                          <polyline points="12 6 12 12 16 14" />
                        </svg>
                      </span>
                                    <span class="course-info-item-text"> 30 days </span>
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
                                    <span class="course-info-item-text"> 2 levels </span>
                                </div>
                            </div>

                            <div class="course-card-details">
                                <div class="constructor">
                                    <div class="constructor-img">
                                        <img
                                                src="{{ asset('assets/Site/img/person.jpg') }}"
                                                alt="constructor img"
                                                loading="lazy"
                                        />
                                    </div>

                                    <a href="#" class="constructor-name"> Dr. Ali mohamed </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="course-card">
                        <div class="course-card-img">
                            <a href="/" class="overlay"></a>
                            <img
                                    src="{{ asset('assets/Site/img/chemistry.jpg') }}"
                                    alt="chemistry"
                                    loading="lazy"
                            />
                        </div>

                        <div class="course-card-body">
                            <h2 class="course-title">
                                <a href="course.html">
                                    Chemistry course level 2 Lorem ipsum dolor sit amet.
                                </a>
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
                                    <span class="course-info-item-text">1 Lessons</span>
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
                                class="lucide lucide-clock"
                        >
                          <circle cx="12" cy="12" r="10" />
                          <polyline points="12 6 12 12 16 14" />
                        </svg>
                      </span>
                                    <span class="course-info-item-text"> 30 days </span>
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
                                    <span class="course-info-item-text"> 2 levels </span>
                                </div>
                            </div>

                            <div class="course-card-details">
                                <div class="constructor">
                                    <div class="constructor-img">
                                        <img
                                                src="{{ asset('assets/Site/img/person.jpg') }}"
                                                alt="constructor img"
                                                loading="lazy"
                                        />
                                    </div>

                                    <a href="#" class="constructor-name"> Dr. Ali mohamed </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="courses-section section-style">
        <div class="container">
            <h1 class="section-title">Selected Courses</h1>

            <div class="courses-layout">
                <div class="courses-contint">
                    <div class="course-card">
                        <div class="course-card-img">
                            <a href="/" class="overlay"></a>
                            <img
                                    src="{{ asset('assets/Site/img/chemistry.jpg') }}"
                                    alt="chemistry"
                                    loading="lazy"
                            />
                        </div>

                        <div class="course-card-body">
                            <h2 class="course-title">
                                <a href="course.html">
                                    Chemistry course level 2 Lorem ipsum dolor sit amet.
                                </a>
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
                                    <span class="course-info-item-text">1 Lessons</span>
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
                                class="lucide lucide-clock"
                        >
                          <circle cx="12" cy="12" r="10" />
                          <polyline points="12 6 12 12 16 14" />
                        </svg>
                      </span>
                                    <span class="course-info-item-text"> 30 days </span>
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
                                    <span class="course-info-item-text"> 2 levels </span>
                                </div>
                            </div>

                            <div class="course-card-details">
                                <div class="constructor">
                                    <div class="constructor-img">
                                        <img
                                                src="{{ asset('assets/Site/img/person.jpg') }}"
                                                alt="constructor img"
                                                loading="lazy"
                                        />
                                    </div>

                                    <a href="#" class="constructor-name"> Dr. Ali mohamed </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="course-card">
                        <div class="course-card-img">
                            <a href="/" class="overlay"></a>
                            <img
                                    src=" {{ asset('assets/Site/img/chemistry.jpg') }}"
                                    alt="chemistry"
                                    loading="lazy"
                            />
                        </div>

                        <div class="course-card-body">
                            <h2 class="course-title">
                                <a href="course.html">
                                    Chemistry course level 2 Lorem ipsum dolor sit amet.
                                </a>
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
                                    <span class="course-info-item-text">1 Lessons</span>
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
                                class="lucide lucide-clock"
                        >
                          <circle cx="12" cy="12" r="10" />
                          <polyline points="12 6 12 12 16 14" />
                        </svg>
                      </span>
                                    <span class="course-info-item-text"> 30 days </span>
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
                                    <span class="course-info-item-text"> 2 levels </span>
                                </div>
                            </div>

                            <div class="course-card-details">
                                <div class="constructor">
                                    <div class="constructor-img">
                                        <img
                                                src="{{ asset('assets/Site/img/person.jpg') }}"
                                                alt="constructor img"
                                                loading="lazy"
                                        />
                                    </div>

                                    <a href="#" class="constructor-name"> Dr. Ali mohamed </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="course-card">
                        <div class="course-card-img">
                            <a href="/" class="overlay"></a>
                            <img
                                    src="{{ asset('assets/Site/img/chemistry.jpg') }}"
                                    alt="chemistry"
                                    loading="lazy"
                            />
                        </div>

                        <div class="course-card-body">
                            <h2 class="course-title">
                                <a href="course.html">
                                    Chemistry course level 2 Lorem ipsum dolor sit amet.
                                </a>
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
                                    <span class="course-info-item-text">1 Lessons</span>
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
                                class="lucide lucide-clock"
                        >
                          <circle cx="12" cy="12" r="10" />
                          <polyline points="12 6 12 12 16 14" />
                        </svg>
                      </span>
                                    <span class="course-info-item-text"> 30 days </span>
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
                                    <span class="course-info-item-text"> 2 levels </span>
                                </div>
                            </div>

                            <div class="course-card-details">
                                <div class="constructor">
                                    <div class="constructor-img">
                                        <img
                                                src="{{ asset('assets/Site/img/person.jpg') }}"
                                                alt="constructor img"
                                                loading="lazy"
                                        />
                                    </div>

                                    <a href="#" class="constructor-name"> Dr. Ali mohamed </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="course-card">
                        <div class="course-card-img">
                            <a href="/" class="overlay"></a>
                            <img
                                    src="{{ asset('assets/Site/img/chemistry.jpg') }}"
                                    alt="chemistry"
                                    loading="lazy"
                            />
                        </div>

                        <div class="course-card-body">
                            <h2 class="course-title">
                                <a href="course.html">
                                    Chemistry course level 2 Lorem ipsum dolor sit amet.
                                </a>
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
                                    <span class="course-info-item-text">1 Lessons</span>
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
                                class="lucide lucide-clock"
                        >
                          <circle cx="12" cy="12" r="10" />
                          <polyline points="12 6 12 12 16 14" />
                        </svg>
                      </span>
                                    <span class="course-info-item-text"> 30 days </span>
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
                                    <span class="course-info-item-text"> 2 levels </span>
                                </div>
                            </div>

                            <div class="course-card-details">
                                <div class="constructor">
                                    <div class="constructor-img">
                                        <img
                                                src="{{ asset('assets/Site/img/person.jpg') }}"
                                                alt="constructor img"
                                                loading="lazy"
                                        />
                                    </div>

                                    <a href="#" class="constructor-name"> Dr. Ali mohamed </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<div class="side-overlay panel-responsive-btn panel-responsive-close"></div>

<script src="{{ asset('assets/Site/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/Site/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/Site/js/main.js') }}"></script>
</body>
</html>
