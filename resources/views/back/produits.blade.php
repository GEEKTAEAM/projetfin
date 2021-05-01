@extends('layouts.backHomeLayout')
@section('title')
category pages
@endsection
@section('content')


<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <br><br>
        <br>
          <br>





            <div class="col-lg-12 col-md-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">

                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
<br>
<button class="btn btn-outline-primary btn-sm float-right" >Add Porduits</button>

                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="table-responsive">
                            <table class="table table-bordered mb-4">
                                <thead>
                                    <tr>
                                        <th>nom du produit</th>
                                        <th>Date d'installation</th>
                                        <th>prix</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Shaun</td>
                                        <td>10/08/2018</td>
                                        <td>320</td>
                                        <td class="text-center"><span class="badge badge-success">Approved</span></td>
                                        <td class="text-center">

                                            <div class="dropdown custom-dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                    <a class="dropdown-item" href="#">View</a>
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Shaun</td>
                                        <td>10/08/2018</td>
                                        <td>320</td>
                                        <td class="text-center"><span class="badge badge-success">Approved</span></td>
                                        <td class="text-center">

                                            <div class="dropdown custom-dropdown">
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                                </a>

                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink1">
                                                    <a class="dropdown-item" href="#">View</a>
                                                    <a class="dropdown-item" href="#">Edit</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>

                                        </td>
                                    </tr>


                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>



    </div>
</div>






@endsection
@section('script')

@endsection
