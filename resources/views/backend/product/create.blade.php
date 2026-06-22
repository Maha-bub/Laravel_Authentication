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
                        <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
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
                        <form class="row g-3">
                            <div class="col-md-6">
                                <label for="input1" class="form-label">Product Name</label>
                                <input type="text" name="name" class="form-control" id="input1"
                                    placeholder="Product Name">
                            </div>
                            <div class="col-md-6">
                                <label for="input3" class="form-label">Category</label>
                                <input type="text" name="category" class="form-control" id="input3"
                                    placeholder="Description">
                            </div>
                            <div class="col-md-12">
                                <label for="input3" class="form-label">Product Description</label>
                                <input type="text" class="form-control" id="input3" placeholder="Description" rows="3">
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
                                        <input class="form-check-input" type="radio" name="stock" value="stock">
                                        <label class="form-check-label" for="Stock">Stock</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="stock" value="OutOfStock">
                                        <label class="form-check-label" for="OutOfStock">Out Of Stock</label>
                                    </div>

                                    <div class="invalid-feedback">Product Status Is Required!</div>
                                </div>
                            </div>
                            
                            
                           
                           
                            <div class="col-md-12">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="input12">
                                    <label class="form-check-label" for="input12">Check me out</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="d-md-flex d-grid align-items-center gap-3">
                                    <button type="button" class="btn btn-primary px-4">Submit</button>
                                    <button type="button" class="btn btn-light px-4">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div><!--end row-->
    </main>
@endsection
