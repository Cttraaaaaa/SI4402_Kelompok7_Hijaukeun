@extends('main.header')
@section('content')
      <!-- Navbar Start -->
@auth

    <!-- Form Start -->
    <section id="insert">
      <div class="container insert">
        
        <h1 class="titleInsert" align="center">Profile</h1>
        <form enctype="multipart/form-data" action="{{ route('Masyarakat.profile_action') }}" method="POST" class="form-input">
            @csrf
          </div>
          <div class="mb-3">
            <label for="inputNamaPemilik" class="form-label"
              >Nama</label
            >
            <input
              type="text"
              class="form-control"
              value="{{ Auth::user()->nama }}"
              name="name"
              required
            />
          </div>
          <div class="mb-3">
            <label for="inputMerk" class="form-label">Nomor handphone</label>
            <input
              type="text"
              class="form-control"
              value="{{ Auth::user()->no_hp }}"
              name="no_hp"
              required
            />
          </div>
        </form>
      </div>
    </section>

    @endauth
    @endsection
    @guest
    {{ route('logout') }}
    @endguest
    