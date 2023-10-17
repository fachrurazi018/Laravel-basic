@extends('app')
@section('content')
    @auth
    <div class="nav-container">
        <div class="navbar">
            <a href="{{ route('home')}}">Dashboard</a>
            <a href="{{ route('produk') }}">Produk</a>
            <a href="#">Pemesanan</a>
            <div class="dropdown">
                <button class="dropbtn">Profil</button>
                <div class="dropdown-content">
                    <a href="{{route('password')}}">Ubah Password</a>
                    <a href="{{route('logout')}}">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <div class="table-container">
        {{-- berisi tag h1 untuk menampilkan kalimat edit data produk --}}
      <h1>Edit Data Produk</h1>
      <div class="row">
        {{-- berisi form yang sama dengan tambah data, namun diberikan action yang mengarahkan
            ke route updatedata dengan mengambil variabel id dengan methode POST dan enctype multipart/form-data --}}
        <form action="/updatedata/{{ $data->id }}" method="POST" enctype="multipart/form-data">
          @csrf
          <label for="nama">Nama Produk:</label>
          <input type="text" id="nama" name="nama" value="{{ $data->nama }}"required>
          <br><br>
  
          <label for="jenis">Jenis Produk:</label>
          <select id="jenis" name="jenis" value="{{ $data->jenis }}"required>
              <option value="Jaket">Jaket</option>
              <option value="Kemeja">Kemeja</option>
              <option value="Celana">Celana</option>
          </select>
          <br><br>
  
          <label for="harga">Harga Produk:</label>
          <input type="number" id="harga" name="harga" value="{{ $data->harga }}" required>
          <br><br>
  
          <input type="submit" value="Submit">
      </form>
      </div>
    </div>
    @endauth

    @guest
    <div class="home-container-2">
        <h1>Welcome, <br>Iwear Store</h1>
        <nav>
            <a href="{{route('login')}}" class="login">Login</a>
            <a href="{{route('register')}}" class="register">Register</a>
        </nav>
    </div>
    @endguest
@endsection
