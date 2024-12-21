@extends('pages.home')
@section('content')
<div class="py-4">
  <div class="container">
    @foreach ($movies->chunk(4) as $chunk) <!-- Membagi data menjadi kelompok 4 item -->
      <div class="row d-flex justify-content-between"> <!-- Membuka row baru untuk setiap chunk -->
        @foreach ($chunk as $movie)
          <div class="col-md-3 mb-2">  <!-- Membuat 4 kolom per baris di layar besar -->
            <div class="card mb-1" style="width: 15rem;">
              <img src="{{ $movie->photo ? (file_exists(public_path('images/'.$movie->photo)) ? asset('images/'.$movie->photo) : asset('uploads/'.$movie->photo)) : asset('images/default.jpg') }}" class="card-img-top" alt="movie img" style="height: 300px; width:auto;">
              <div class="card-body">
                <h5 class="card-title text-truncate" alt="{{$movie->title}}">{{ $movie->title }}</h5>
                <h6 class="card-text">{{ $movie->genre->name }} {{ $movie->publish_date }}</h6>
                <p class="card-text" id="desc_card">{{ $movie->description }}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        @endforeach
      </div> 
    @endforeach
  </div>

  <!-- Pagination -->
  <nav aria-label="Page navigation example">
    <ul class="pagination justify-content-end">
        <!-- Tombol Previous -->
        @if ($movies->onFirstPage())
            <li class="page-item disabled">
                <a class="page-link">Previous</a>
            </li>
        @else
            <li class="page-item">
                <a class="page-link" href="{{ $movies->previousPageUrl() }}" aria-label="Previous">Previous</a>
            </li>
        @endif

        <!-- Tombol Halaman -->
        @for ($i = 1; $i <= $movies->lastPage(); $i++)
            <li class="page-item {{ $i == $movies->currentPage() ? 'active' : '' }}">
                <a class="page-link" href="{{ $movies->url($i) }}">{{ $i }}</a>
            </li>
        @endfor

        <!-- Tombol Next -->
        @if ($movies->hasMorePages())
            <li class="page-item">
                <a class="page-link" href="{{ $movies->nextPageUrl() }}" aria-label="Next">Next</a>
            </li>
        @else
            <li class="page-item disabled">
                <a class="page-link">Next</a>
            </li>
        @endif
    </ul>
  </nav>

</div>
@endsection
