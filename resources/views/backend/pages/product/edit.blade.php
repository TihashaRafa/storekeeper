@extends('backend.Layouts.admin')
@section('admin_content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div>

                </div>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-8">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title"> Product Edit Form</h3>
                            </div>
                            <form class="form-horizontal" method="POST"
                                action="{{ route('product.update', $products->id) }}">
                                @csrf

                                <div class="card-body">

                                <div class="form-group row">
                                  <label for="product_name" class="col-sm-2 col-form-label">Name</label>
                                  <div class="col-sm-10">
                                      <input type="text" class="form-control" name="product_name" id="product_name"
                                          value="{{ $products->product_name }}">
                                  </div>
                              </div>

                                    <div class="form-group row">
                                      <label for="product_price" class="col-sm-2 col-form-label">Price</label>
                                      <div class="col-sm-10">
                                          <input type="text" class="form-control" name="product_price" id="product_price"
                                              value="{{ $products->product_price }}">
                                      </div>
                                  </div>


                                  <div class="form-group row">
                                    <label for="product_quantity" class="col-sm-2 col-form-label">Quantity</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="product_quantity" id="product_quantity"
                                            value="{{ $products->product_quantity }}">
                                    </div>  
                              </div>

                              <div class="form-group row">
                                <label for="product_date" class="col-sm-2 col-form-label">Date</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="product_date" id="product_date"
                                        value="{{ $products->product_date }}">
                                </div>  
                          </div>

                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-info">Update</button>
                                    <button type="submit" class="btn btn-default float-right">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
