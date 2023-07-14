@extends('layouts.app')

@section('content')
<h1 class=" mt-3  "></h1>
     <div class=" container ">
          <div class="row">
               <form class="p-0" action="{{ route('admin.items.store') }}" method="POST" enctype="multipart/form-data">
               @csrf

               {{-- <div class="mb-3">
                 <label for="image" class="form-label">Choose file</label>
                 <input type="file" class="form-control" name="image" id="image" aria-describedby="fileHelpId" onchange="handleFileSelect(event)">
                 <input type="hidden" name="cover_image" id="cover_image" value="">
               </div> --}}
               
               <div class="form-group">
                    <label class="form-label">Nome </label>
                    <input type="text" class="form-control" name="name">
               </div>

               <div class="form-group">
                    <label class="form-label">ingredient</label>
                    <input type="text" class="form-control" name="ingredients" >
               </div>

               <div class="form-group">
                    <label class="form-label">price</label>
                    <input type="text" class="form-control" name="price">
               </div>

               {{-- <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="false">
                    <label class="form-check-label" for="flexRadioDefault1">
                      False
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="true" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        True
                    </label>
                </div> --}}

               {{-- <div class="form-group">
                    <label class="form-label">Categoria</label>
                    <select class="form-control" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->nome }}</option>
                        @endforeach
                    </select>
                </div> --}}
              
               <button type="submit" class="btn btn-primary mt-3">Crea</button>

               </form>
          </div>
     </div>

@endsection
