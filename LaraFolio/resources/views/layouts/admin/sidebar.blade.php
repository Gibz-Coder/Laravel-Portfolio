<aside>
    <nav>
        <div class="nav-wrapper">
            <span class="nav__close">
                <i class="fas fa-window-close"></i>
            </span>
            <div class="nav-list">
                <ul>
                    <li>
                        <a class="{{ (request()->is('admin/dashboard')) ? 'nav-active' : '' }}" href="{{ url('/admin/dashboard') }}">
                            <span><i class="fas fa-home"> </i></span>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a class="{{ (request()->is('admin/abouts*') || request()->is('admin/medias*')) ? 'nav-active' : '' }}" href="{{ url('/admin/abouts') }}">
                            <span><i class="fas fa-user"> </i></span>
                            <span>About Me</span>
                        </a>
                    </li>
                    <li>
                        <a class="{{ (request()->is('admin/services*')) ? 'nav-active' : '' }}" href="{{ url('/admin/services') }}">
                            <span><i class="fas fa-handshake"> </i></span>
                            <span>Services</span>
                        </a>
                    </li>
                    <li>
                        <a href="skill.html">
                            <span><i class="fas fa-star"> </i></span>
                            <span>Skills</span>
                        </a>
                    </li>
                    <li>
                        <a href="education.html">
                            <span><i class="fas fa-graduation-cap"> </i></span>
                            <span>Educations</span>
                        </a>
                    </li>
                    <li>
                        <a  href="experience.html">
                            <span><i class="fas fa-toolbox"> </i></span>
                            <span>Experiences</span>
                        </a>
                    </li>
                    <li>
                        <a  href="project.html">
                            <span><i class="fas fa-bars"> </i></span>
                            <span>Projects</span>
                        </a>
                    </li>
                    <li>
                        <a  href="testimonial.html">
                            <span><i class="fas fa-medal"> </i></span>
                            <span>Testimonials</span>
                        </a>
                    </li>
                    <li>
                        <a  href="message.html">
                            <span><i class="fas fa-envelope"> </i></span>
                            <span>Messages</span>
                        </a>
                    </li>
                    <li>
                        <a  href="user.html">
                            <span><i class="fas fa-user"> </i></span>
                            <span>Users</span>
                        </a>
                    </li>
                    
                </ul>
            </div>
            <div class="nav-list">
                <ul>
                    <li>
                        <a href="setting.html">
                            <span><i class="fas fa-cog "> </i></span>
                            <span>Settings</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</aside>