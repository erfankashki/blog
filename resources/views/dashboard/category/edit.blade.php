@extends('dashboard.layout')
@section('content')
{{-- @php
dd($category)
@endphp --}}

<div class="row">
  <div class="col-8 ml-3 ">
    <h2>category</h2>
    <div class="card">
      <div class="card-header bg-primary">create catgory</div>
      <div class="card-body">

        <form method="POST" action="{{ route('admin.category.update',$category->id) }}">
            <input type="hidden" name="_method" value="PUT">
          @csrf
          <div class="form-group">
            <label>category title</label>
            <input type="text" name="title" class="form-control" placeholder="enter title category...."><br>

          <select name="parent_id" class="form-control">
            <option value="">null</option>
              @foreach ($category as $cat)
                <option value="{{ $cat->id }}">{{ $cat->title }}</option>
              @endforeach
          </select><br>
            <button class="btn btn-primary btn-block">click</button>
          </div>



        </form>
      
      </div> 
    </div>
  </div>  
</div>
@endsection
