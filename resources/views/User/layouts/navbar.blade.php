<nav class="nav-bar">
    <div class="container">
        <div class="nav-layout">
            <a href="{{ route('dashboard') }}" class="brand-name"> Courses </a>

            <div class="nav-menu panel-responsive-item">
                <div class="nav-header">
                    <a href="profile.html" class="avatar">
                        <img src="{{ asset('assets/Site/img/person.jpg') }}" alt="avatar" loading="lazy" />
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
                        <a href="{{ route('dashboard') }}" class="active">Home</a>
                    </li>

                    <li>
                        <a href="{{ route('All-Courses') }}">Courses</a>
                    </li>

{{--                    <li>--}}
{{--                        <a href="profile.html">Profile</a>--}}
{{--                    </li>--}}

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

                <div class="nav-contact">
                    <h1>call us</h1>

                    <ul class="call-detail">
                        <li>
                            <a href="+20 10 250 77437">+20 10 250 77437</a>
                        </li>
                        <li>
                            <p>329 Queensberry Street, North</p>
                        </li>
                        <li>
                            <p>Msnsoura , Egypt</p>
                        </li>
                        <li>
                            <a href="mailto:exxxx@gmail.com" class="email">
                                exxxx@gmail.com
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="nav-detils">
                <!-- LogOut -->
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <a href="#" class="logout-btn" onclick="event.preventDefault();this.closest('form').submit();">

                </form>
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