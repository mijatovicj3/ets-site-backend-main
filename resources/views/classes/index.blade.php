@extends('classes.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('classes.create') }}"> Create New Class</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Year</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($classes as $class)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $classes->name }}</td>
            <td>{{ $classes->year }}</td>
            <td>
                <form action="{{ route('classes.destroy',$class->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('classes.show',$class->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('classes.edit',$class->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $classes->links() !!}
      
@endsection