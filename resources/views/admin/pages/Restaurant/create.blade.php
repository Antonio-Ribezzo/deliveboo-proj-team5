@extends('layouts.app')

@section('content')
<h1 class=" mt-3  "></h1>
     <div class=" container ">
          <div class="row">
               <form class="p-0" action="{{ route('admin.restaurant.store') }}" method="POST" enctype="multipart/form-data">
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
                    <label class="form-label">indirizzo</label>
                    <input type="text" class="form-control" name="address" >
               </div>

               <div class="form-group">
                    <label class="form-label">partita iva</label>
                    <input type="text" class="form-control" name="p_iva">
               </div>

               <div class="form-group">
                    <label class="form-label">Categoria</label>
                    <div class="d-flex flex-column">
                        @foreach($types as $type)
                            <label>
                                <input class="" type="checkbox" name="category_id[]" value="{{ $type->id }}"> {{ $type->name }}
                            </label>
                        @endforeach
                    </div>
                </div>
              
               <button type="submit" class="btn btn-primary mt-3">Crea</button>

               </form>
          </div>
     </div>

@endsection
