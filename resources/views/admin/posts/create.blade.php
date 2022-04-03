@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{ route('admin.posts.store') }}" method="POST">
        @csrf
        <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
          <label for="image">Immagine</label>
          <input type="text" class="form-control" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
          <textarea class="form-control" id="description" name="description" rows="5"></textarea>
        </div>
        <select class="form-control" id="category" name="category_id">
          <option value="">Nessuna Categoria</option>
          @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->label}}</option>
          @endforeach
        </select>
        <div class="text-right mt-3">
            <button type="submit" class="btn btn-success">Aggiungi</button>
        </div>
       
      </form>
</div>
@endsection