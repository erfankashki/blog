@extends('dashboard.layout')
@section('content')

<div class="row">
  <div class="col-8 ml-3 ">
    <h2>category</h2>
    <div class="card">
      <div class="card-header bg-primary">create catgory</div>
      <div class="card-body">
        <table class="table">
            <thead>
              <tr>
                <th>id</th>
                <th>title</th>
                <th>Prent category</th>
                <th>created at</th>
                <th>updated at</th>
                <th>action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($category as $cat)
                    
                
              <tr>
                <th scope="row">{{ $cat->id }}</th>
                <td>{{ $cat->title }}</td>
                <td>{!!$cat->parent ? "<span class='badge badge-primary'>".$cat->parent->title."</span>" : "-"!!}</td>
                <td>{{ $cat->created_at }}</td>
                <td>{{ $cat->updated_at }}</td>

                <td>
                    <!-- Example single danger button -->
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Action
                        </button>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ route('admin.category.edit',$cat->id) }}">edit</a>
                        <form method="post" action="{{route('admin.category.destroy',$cat->id)}}">
                          @csrf
                            <input type="hidden" value="DELETE" name="_method">
                            <button class="btn btn-link">delete</button>
                        </form>
                        </div>
                    </div>
                </td>
              </tr>
              @endforeach
            </tbody>
        </table>
      </div> 
    </div>
  </div>  
</div>

@endsection
