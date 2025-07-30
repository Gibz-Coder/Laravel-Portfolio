<!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="/admin/dashboard" class="nav_logo">
                    @if(isset($about->name))
                        {{ $about->name }}
                    @else
                        Portfolio
                    @endif
                </a>

                <div class="nav_menu" id="nav-menu">
                    <ul class="nav_list">
                        <li class="nav-item">
                            <a href="#home" class="nav_link active_link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav_link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#skills" class="nav_link">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a href="#services" class="nav_link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#portfolio" class="nav_link">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav_link">Contact Me</a>
                        </li>
                    </ul>

                    <div class="nav_close" id="nav-close">
                        <i class="uil uil-times nav_close" id="nav-close"></i>
                    </div>
                </div>

                <div class="nav_btns">
                    <!--===== THEME CHANGE BUTTON =====-->
                    <i class="uil uil-moon change_theme" id="theme-button"></i>

                    <div class="nav_toogle" id="nav-toggle">
                        <i class="uil uil-bars"></i>
                    </div>
                </div>
            </nav>
        </header>