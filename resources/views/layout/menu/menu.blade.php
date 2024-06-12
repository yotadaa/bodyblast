<div id="daftar-menu" class="navbar-nav mr-auto py-0">
    <a id="index" href="/" class="nav-item nav-link">Home</a>
    @if (auth()->check())
        <a id="class" href="/class" class="nav-item nav-link"> Class</a>
        <a id="about" href="/about" class="nav-item nav-link">About</a>
        <a id="testimonial" href="/testimonial" class="nav-item nav-link">Testimonial</a>
        <a id="team" href="/team" class="nav-item nav-link">Trainers</a>
        <a id="contact" href="/contact" class="nav-item nav-link">Contact</a>
    @endif
    <!-- <a id="index" href="index.php" class="nav-link nav-link">Member</a> -->
</div>
