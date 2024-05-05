<!-- Footer -->
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5 class="footer-heading">Liens du menu</h5>
                <ul class="list-unstyled nav-links">
                    <li><i class="fas fa-angle-right"></i> <a href="/" class="footer-link">Accueil</a></li>
                    <li><i class="fas fa-angle-right"></i> <a href="{{ route('tarifications') }}"
                            class="footer-link">Tarifications</a></li>
                    {{-- <li><i class="fas fa-angle-right"></i> <a href="faq.html" class="footer-link">FAQ</a></li> --}}
                    <li><i class="fas fa-angle-right"></i> <a href="{{ route('contact') }}"
                            class="footer-link">Contacts</a></li>
                </ul>
            </div>
            {{-- <div class="col-md-3">
                <h5 class="footer-heading">Order Wizard</h5>
                <ul class="list-unstyled nav-links">
                    <li><i class="fas fa-angle-right"></i> <a href="calculator-1.html" class="footer-link">Calculator Demo 1</a></li>
                    <li><i class="fas fa-angle-right"></i> <a href="calculator-2.html" class="footer-link">Calculator Demo 2</a></li>
                    <li><i class="fas fa-angle-right"></i> <a href="calculator-3.html" class="footer-link">Calculator Demo 3</a></li>
                </ul>
            </div> --}}
            <div class="col-md-4">
                <h5 class="footer-heading">Contacts</h5>
                <ul class="list-unstyled contact-links">
                    <li><i class="icon icon-map-marker"></i><a href="#." class="footer-link">Adresse : Brazzaville,
                            Congo</a>
                    </li>
                    <li><i class="icon icon-envelope3"></i><a href="mailto:contact@weegosoft.com"
                            class="footer-link">Email : contact@weegosoft.com</a></li>
                    <li><i class="icon icon-phone2"></i><a href="tel:+242050963237" class="footer-link">Téléphone1 :
                            +242 05 096 32 37</a></li>
                    <li><i class="icon icon-smartphone"></i><a href="tel:+242069897169" class="footer-link">Téléphone2 :
                            +242 06 989 71 69</a></li>
                </ul>
            </div>
            <div class="col-md-2">
                {{-- <h5 class="footer-heading">Suivez-nous</h5>
                <ul class="list-unstyled social-links">
                    <li><a href="#." class="social-link" target="_blank"><i class="icon icon-facebook"></i></a></li>
                    <li><a href="#." class="social-link" target="_blank"><i class="icon icon-twitter"></i></a></li>
                    <li><a href="#." class="social-link" target="_blank"><i class="icon icon-instagram"></i></a></li>
                </ul> --}}
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <a href="http://www.weegosoft.com" target="_blank" rel="noopener noreferrer">
                            <img src="{{ asset('img/logo-weegosoft.jpeg') }}" alt="" style="width: 90px; height: 90px;">
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="http://www.tala.cg" target="_blank" rel="noopener noreferrer">
                            <img src="{{ asset('img/Tala-1.png') }}" alt="" style="width: 90px; height: 90px;">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-8">
                <ul id="subFooterLinks">
                    <li>With <i class="fa fa-heart pulse"></i> by <a href="https://infos.weegosoft.com/" target="_blank">Weegosoft</a> &
                        <a href="https://tala.cg" target="_blank">Tala </a>
                    </li>
                    {{-- <li><a href="pdf/terms.pdf" target="_blank">Terms and conditions</a></li> --}}
                    {{-- <li><a href="faq.html">Faq</a></li> --}}
                </ul>
            </div>
            <div class="col-md-4">
                <div id="copy">© 2024</div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
