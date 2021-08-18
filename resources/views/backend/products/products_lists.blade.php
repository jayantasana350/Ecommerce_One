@extends('backend.master')
@section('category')
 show-sub active
@endsection

@section('subcat')
active
@endsection
@section('content')
<div class="br-pagebody">
    <div class="br-section-wrapper">

        <div class="container hidden">
            <ul  class="nav nav-pills">
                        <li class="active"><a href="" data-target="#category" class="btn btn-info mr-1" data-toggle="tab">All Products</a></li>
                        <li><a href="" data-target="#trushed" class="btn btn-info mr-1" data-toggle="tab">Trushed</a></li>
                    </ul>

                    <div class="tab-content hidden">
                        <div class="tab-pane active" id="category">
                          <a href="{{ route('AddProducts') }}" style="display:inline; float: right; " class="btn btn-outline-info mb-1 mr-1">Add a New Product</a>
                          {{--========================= Categoy Lists Start Here =========================--}}

                          <table class="table table-bordered table-colored table-info">
                            <thead>
                              <tr>
                                <th class="wd-10p text-center">SL</th>
                                <th class="wd-35p text-center">Image</th>
                                <th class="wd-35p text-center">SKU</th>
                                <th class="wd-35p text-center">Title</th>
                                <th class="wd-20p text-center">Price</th>
                                <th class="wd-20p text-center">Quantity</th>
                                <th class="wd-20p text-center">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="wd-10p text -center">Status</td>
                                    <td class="wd-35p text-center">Image</td>
                                    <td class="wd-35p text-center">SKU</td>
                                    <td class="wd-35p text-center">Title</td>
                                    <td class="wd-35p text-center">Price</td>
                                    <td class="wd-20p text-center">Quantity</td>
                                    <td class="wd-20p text-center d-flex">
                                        <a href="" class="btn btn-info mr-1">Edit</a>
                                        <a href="" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                          </table>
                          {{--========================= Categoy List Ends Here =========================--}}
                        </div>
                        <div class="tab-pane" id="trushed">
                            {{--========================= Categoy Lists Start Here =========================--}}
                            <h5 class="text-center mt-5">Category Trushed</h5><hr>
                            <table class="table table-bordered table-colored table-info">
                            <thead>
                                <tr>
                                    <th class="wd-10p text-center">SL</th>
                                    <th class="wd-35p text-center">Image</th>
                                    <th class="wd-35p text-center">SKU</th>
                                    <th class="wd-35p text-center">Title</th>
                                    <th class="wd-20p text-center">Price</th>
                                    <th class="wd-20p text-center">Quantity</th>
                                    <th class="wd-20p text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="wd-10p text -center">Status</td>
                                    <td class="wd-35p text-center">Image</td>
                                    <td class="wd-35p text-center">SKU</td>
                                    <td class="wd-35p text-center">Title</td>
                                    <td class="wd-35p text-center">Price</td>
                                    <td class="wd-20p text-center">Quantity</td>
                                    <td class="wd-20p text-center d-flex">
                                        <a href="" class="btn btn-info mr-1">Edit</a>
                                        <a href="" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                            </table>
                            {{--========================= Categoy List Ends Here =========================--}}
                        </div>
                    </div>
              </div>




    </div><!-- br-section-wrapper -->
  </div><!-- br-pagebody -->

@endsection
@section('tabs_js')
<script>

    $(function() {
          var lastTab = localStorage.getItem('lastTab');
          $('.container, .tab-content').removeClass('hidden');
          if (lastTab) {
              $('[data-target="' + lastTab + '"]').tab('show');
          }
          $('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
              localStorage.setItem('lastTab', $(this).data('target'));
          });
      });
</script>
@endsection
@section('footer_js')
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        @if(session('CategoryStore'))
        Toast.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Category Added Successfully',
                showConfirmButton: false,
                timer: 1000
            })
        @endif
        @if(session('CategoryUpdate'))
        Toast.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Category Update Successfully',
                showConfirmButton: false,
                timer: 1000
            })
        @endif
    </script>


@endsection
