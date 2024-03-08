@extends('backend.dashboard')

@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>

    .select2{
        width: 100%;
        text-align: center;
        outline: 0;
        
    }
    .selection{
        display: block;
        height: 100%;
       
    }
    .select2-selection--single{
        border: none;
        outline: none;
        background: red;
    }

</style>
@endpush
@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
    $(document).ready(function() {
    $('#category').select2();
});
</script>
@endpush


@section('contents')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h4 class="text-light">Add Sub-Category</h4>
                        </div>
                        <div class="card-body">
                            <form action="" method="post">
                                @csrf

                                <select id="category" name="category" class="form-control mb-3">
                                    <option value="" selected disabled>Select Category</option>
                                    <option>Select Category</option>
                                    <option>Select Category</option>
                                </select>


                                <label for="sub_category">sub category</label>
                                <input type="text" class="form-control mb-2" placeholder="sub category" name="sub_category" id="sub_category">

                                
                                <button type="submit" class="btn btn-primary w-100">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header bg-primary">
                            <h4 class="text-light">sub category list</h4>
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <tr>
                                    <td>#</td>
                                    <td>Category</td>
                                    <td>Sub Category</td>
                                    <td>Action</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection