@extends('backend.master');
@section('content')
    <main class="page-content">
        <!--breadcrumb-->

        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Forms</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Form Layouts</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Settings</button>
                    <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                        data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                            href="javascript:;">Action</a>
                        <a class="dropdown-item" href="javascript:;">Another action</a>
                        <a class="dropdown-item" href="javascript:;">Something else here</a>
                        <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated
                            link</a>
                    </div>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->


        <div class="row">

            <div class="col-lg-8 m-auto p-8">
                <div class="card">
                    <div class="card-body p-4">
                        <h5 class="mb-4">Vertical Form</h5>
                        <form action="{{ route('product.store') }}" enctype="multipart/form-data" method="post" class="row g-3">
                            @csrf
                            <div class="col-md-6">
                                <label for="input1" class="form-label">Product Name</label>
                                <input type="text" name="name" class="form-control" id="input1"
                                    placeholder="Product Name">
                            </div>
                            <div class="col-6">
                                <label for="AddCategory" class="form-label fw-bold">Category</label>
                                <select class="form-select" name="category" id="AddCategory">
                                    <option value="0">Select One</option>
                                    @foreach ( $items as $item)
                                        <option value="{{ $item->id }}">{{ $item->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-4">
                                <h5 class="mb-3">Product Description</h5>
                                <textarea class="form-control" cols="4" rows="3" name="description"
                                    placeholder="write a description here.."></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="input4" class="form-label">Price</label>
                                <input type="text" name="price" class="form-control" id="input4"
                                    placeholder="Product Price">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="Product_Status"><b>Product Status:</b></label> <br>
                                <div class="mt-2">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="stock" value="1">
                                        <label class="form-check-label" for="stock">Stock</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="stock" value="0">
                                        <label class="form-check-label" for="stock">Out Of Stock</label>
                                    </div>

                                    <div class="invalid-feedback">Product Status Is Required!</div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <h5 class="mb-3">Choose images</h5>
                                <input id="fancy-file-upload" type="file" name="photo"
                                     multiple>
                            </div>
                            <div class="col-md-12">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <input type="submit" class="btn btn-primary px-4" value="Submit">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>


    </main>
@endsection
