@extends('backend.dashboard')

@push('css')
    <style>
        P.text-sm{
            display: none;
            background-color: red;
        }
    </style>
@endpush
@section('contents')
    <section>
        <div class="container ">
            <div class="row">



                @if (Route::is('category'))
                    <div class="col-4">
                        <div class="card shadow">
                            <div class="card-header bg-primary ">
                                <h4 class="text-light ">Add Category</h4>
                            </div>

                            <div class="card-body">
                            <form action="{{ route('category.insert') }}" method="post">
                                @csrf

                                <label for="category_name">category name</label>
                                <input  type="text" name="category" class="my-2 form-control" placeholder="category name" id="category_name">
                                <button type="submit" class="btn btn-primary w-100" type="submit">Submit</button>
                            </form>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="col-4">
                        <div class="card shadow">
                            <div class="card-header bg-primary ">
                                <h4 class="text-light ">Edit Category</h4>
                            </div>

                            <div class="card-body">
                            <form action="{{ route('category.update', $editCategoryData->id) }}" method="post">
                                @csrf
                                @method('put')

                                <label for="category_name">category name</label>
                                <input value="{{ $editCategoryData->category }}"  type="text" name="category" class="my-2 form-control" placeholder="category name" id="category_name">
                                <button type="submit" class="btn btn-primary w-100" type="submit">Submit</button>
                            </form>
                            </div>
                        </div>
                    </div>
                @endif




                










                <div class="col-8 table-responsive px-3">
                    <div class="card shadow">
                        <table class="table tbale-hover table-striped">
                            <tr>
                                <td class="text-center">Sn.</td>
                                <td>Category Name</td>
                                <td>Action</td>
                            </tr>
                            @forelse ($categorys as $key => $category)
                                <tr>
                                    <td class=" text-center">{{ $categorys->firstItem() + $key }}</td>
                                    <td>{{ $category->category }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ route('category.edit',$category->id) }}" class="btn btn-sm bg-primary text-light">Edit</a>
                                            <a href="{{ route('category.delete', $category->id) }}" class="btn btn-sm bg-danger text-light">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                
                            @endforelse

    
                        </table>

                        {{ $categorys->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection