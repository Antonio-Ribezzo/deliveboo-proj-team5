@extends('layouts.app')

@section('content')
<h1 class=" mt-3  "></h1>
     <div class=" container ">
          <div class="row">
               <form class="p-0" action="{{ route('admin.items.update', $item) }}" method="POST" enctype="multipart/form-data">
               @csrf
                @method('PUT')

               {{-- <div class="mb-3">
                 <label for="image" class="form-label">Choose file</label>
                 <input type="file" class="form-control" name="image" id="image" aria-describedby="fileHelpId" onchange="handleFileSelect(event)">
                 <input type="hidden" name="cover_image" id="cover_image" value="">
               </div> --}}
               
               <div class="form-group">
                    <label class="form-label">Nome </label>
                    <input type="text" class="form-control" name="name" value="{{ old('name') ?? $item->name }}">
               </div>

               <div class="form-group">
                    <label class="form-label">ingredient</label>
                    <input type="text" class="form-control" name="ingredients" value="{{ old('ingredients') ?? $item->ingredients }}">
               </div>

               <div class="form-group">
                    <label class="form-label">price</label>
                    <input type="text" class="form-control" name="price" value="{{ old('price') ?? $item->price }}">
               </div>

               <div class="form-check">
                    <input class="form-check-input" type="radio" name="available" id="flexRadio" value="true" {{ ($item->available == true)? "checked" : "" }}>
                    <label class="form-check-label" for="available">
                         Disponibile
                    </label>
               </div>

               <div class="form-check">
                    <input class="form-check-input" type="radio" name="available" id="flexRadioChecked" value="false" {{ ($item->available == false)? "checked" : "" }}>
                    <label class="form-check-label" for="available">
                         Non disponibile
                    </label>
               </div>
              
               <button type="submit" class="btn btn-primary my-3">Modifica</button>

               </form>

          </div>
          
          <a class="rounded-circle bg-primary p-2 text-white text-decoration-none" href="{{ route('admin.items.index')}}">&larr;</a>
     </div>

@endsection
