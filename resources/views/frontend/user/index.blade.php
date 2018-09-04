<h1>works</h1>
<p>Prijavljeni ste kao: {{Auth::user()->name}}</p>

{{-- Dugme za logout - smjestiti ga na vrh negdje, kada se sredi userPanel izgled --}}
<li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>