@extends('pages.home')
@section('content')
  @if (@session('success'))
    <div class="alert alert-success">
      Data berhasil disimpan
    </div>
  @endif
  
    <form action="{{route('film.store')}}" method="post" enctype="multipart/form-data" class="row g-1 needs-validation pt-4 pb-5" novalidate>
      @csrf  
      <div class="mb-3 form-group">
        <label for="genre" id="genre_id" name="genre_id" class="form-label">Genre</label>
        <select class="form-select" name="genre_id" id="genre_id" aria-label="Default select example" value="{{ old('genre_id') }}" required>
            <option selected>Select a genre</option>
            @foreach ($genres as $genre)
              <option value="{{$genre->id}}">{{$genre->name}}</option>
            @endforeach
          </select>
          @error('genre')
              <div class="alert alert-danger">
                {{$message}}
              </div>
          @enderror
      </div>

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Title of Film" value="{{old('title')}}" required>
            @error('title')
              <div class="alert alert-danger">
                {{$message}}
              </div>
          @enderror
          </div>

        <div class="row mb-3">
          <div class="col-md-6">
            <label for="photo" class="form-label">Upload Photo for Film</label>
            <input class="form-control" type="file" id="photo" name="photo" required>
            @error('photo')
              <div class="alert alert-danger">
                {{$message}}
              </div>
          @enderror
          </div>
          <div class="col-md-6">
            <label for="publish_date" class="form-label">Publish Date</label>
            <input type="date" class="form-control" id="publish_date" name="publish_date" value="{{old('publish_date')}}" required>
            @error('publish_date')
              <div class="alert alert-danger">
                {{$message}}
              </div>
          @enderror
          </div>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="Description of film" required>{{old('description')}}</textarea>
            @error('description')
              <div class="alert alert-danger">
                {{$message}}
              </div>
          @enderror
          </div>
        <input class="btn btn-custom" type="submit" value="Submit new film">
    </form>
@endsection