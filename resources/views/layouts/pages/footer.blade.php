<footer class="footer">
          <div class="footer_bg">
            <div class="footer_container container grid">
                <div>
                    <h1 class="footer_title">{{$about->name}}</h1>
                    <span class="footer_subtitle">{{$about->tagline}}</span>
                    <p class="footer_subtitle">
                        {{$about->description}}
                    </p>
                </div>
                <ul class="footer_links">
                    <li>
                        <a href="#services" class="footer_link">Services</a>
                    </li>
                    <li>
                        <a href="#portfolio" class="footer_link">Portfolio</a>
                    </li>
                    <li>
                        <a href="#contact" class="footer_link">Cantact Me</a>
                    </li>
                </ul>
                <div class="footer_socails">
                        @foreach ($mediasHome as $media)
                            <a href="{{$media->link}}" target="_blank" class="footer_social">
                                <i class="uil uil-{{$media->icon}}"></i>
                            </a>
                        @endforeach
                </div>
            </div>
            <p class="footer_copy">&#169; {{$about->name}}. All right reserved</p>
          </div>
        </footer>