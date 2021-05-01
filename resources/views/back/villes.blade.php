@extends('layouts.backHomeLayout')
@section('title')
vi pages
@endsection
@section('content')



 <!--  BEGIN CONTENT AREA  -->
 <div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="page-header">
            <nav class="breadcrumb-one" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">des villes </a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0);">Multiple Tables</a></li>
                </ol>
            </nav>
        </div>

        <div class="row layout-top-spacing" id="cancel-row">


            <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
                <div class="widget-content widget-content-area br-6">
                    <table class="multi-table table table-hover" style="width:100%">
                         <button class="btn btn-outline-primary btn-sm float-right" >Add Villes</button><br><br><br>
                        <thead>
                            <tr>
                                <th>Nom des villes</th>

                                <th>Nombre de categories</th>
                                <th>Totale des produits</th>

                                <th class="text-center dt-no-sorting">View</th>
                                <th class="text-center">Delete</th>
                                <th class="text-center">Edite</th>
                            </tr>
                        </thead>
                        <tbody>



                            <tr>

                                <td>Junior Javascript Developer</td>

                                <td>43</td>
                                <td>650</td>

                                <td class="text-center"> <button class="btn btn-outline-primary btn-sm">view</button> </td>
                                <td class="text-center"> <button class="btn btn-outline-primary btn-sm">delete</button> </td>
                                <td class="text-center"> <button class="btn btn-outline-primary btn-sm">edite</button> </td>
                            </tr>


                        </tbody>

                    </table>

                </div>
            </div>

        </div>

        </div>





@endsection
@section('script')

@endsection
