@extends('layouts.app')

@section('content')
    <div class="main">
        <div class="main-view">
            <div class="container-fluid bd-gutter bd-layout">
                @include('layouts.admin.side_nav_bar')

                <main class=" order-1 w-100">
                    <div class="main-content">
                        <div class="section-page-title main-page-title mb-0">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <h1 class="page-title">Ingredients categories</h1>
                                </div>
                            </div>
                        </div>

                        <!-- start edit dish card section -->
                        <section class="custom-section">
                            <div class="card editdish-card ingredients-card">
                                <div class="card-header border-0 bg-white border-bottom-0">
                                    <div class="row">
                                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                            <nav class="page-breadcrumb" aria-label="breadcrumb">
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Menu</a>
                                                    </li>
                                                    <li class="breadcrumb-item"><a
                                                            href="{{ route('ingredients.index')}}">ingredients</a></li>
                                                    <li class="breadcrumb-item active" aria-current="page">ingredients
                                                        categories
                                                    </li>
                                                </ol>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body py-0">
                                    <form method="POST" name="ingCategoryForm" id="ingCategoryForm">
                                        @csrf
                                        <div class="row">
                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="ingredientsnameenglish" class="form-label">Ingredients
                                                        categories
                                                        <span class="text-custom-muted">(English)</span></label>
                                                    <input type="text" class="form-control" name="name_en"
                                                           id="name_en"/>
                                                </div>
                                            </div>
                                            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="ingredientsnamedutch" class="form-label">Ingredients
                                                        categories
                                                        <span class="text-custom-muted">(Dutch)</span></label>
                                                    <input type="text" class="form-control" name="name_nl"
                                                           id="name_nl"/>
                                                </div>
                                            </div>
                                            <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                                                <div class="form-group">
                                                    <label for="discountpercentage" class="form-label"></label>
                                                    <button type="submit" class="btn btn-custom-yellow btn-default d-block w-130px mt-3 save-ing-cat-div">
                                                        <span class="align-middle">Add</span>
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </form>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="add-edit-dish-table custom-table ingredients-table">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th scope="col" class="text-center">Ingredients categories <span
                                                        class="text-custom-muted font-regularcustom">(English)</span>
                                                </th>
                                                <th scope="col" class="text-center">Ingredients categories <span
                                                        class="text-custom-muted font-regularcustom">(Dutch)</span>
                                                </th>
                                                <th scope="col" class="text-center">Action</th>
                                            </tr>
                                            </thead>
                                            <tbody id="ingredientCategoryTbody">
                                            @foreach ($ingredientCategory as $category)
                                            <tr id="ing-tr{{ $category->id }}">
                                                <td class="text-center"><input type="text"
                                                                               class="form-control text-center w-10r m-auto"
                                                                               data-id="{{ $category->id }}"
                                                                               value="{{ $category->name_en }}"
                                                                               id="name_en{{ $category->id }}"
                                                                               readonly/>
                                                </td>
                                                <td class="text-center"><input type="text"
                                                                               class="form-control text-center w-10r m-auto"
                                                                               value="{{ $category->name_nl }}"
                                                                               id="name_nl{{ $category->id }}"
                                                                               readonly/>
                                                </td>
                                                <td class="text-center">
                                                    <div class="">
                                                        <a class="btn btn-custom-yellow btn-icon edit-cat-icon"
                                                           id="edit-btn{{ $category->id }}"
                                                           data-id="{{ $category->id }}" tabindex="0">
                                                            <i class="fa-solid fa-pen-to-square"></i>
                                                        </a>
                                                        <a class="btn btn-custom-yellow btn-icon del-cat-icon"
                                                           id="del-btn{{ $category->id }}"
                                                           data-bs-toggle="modal" data-id="{{ $category->id }}"
                                                           data-bs-target="#deleteAlertModal">
                                                            <i class="fa-regular fa-trash-can"></i>
                                                        </a>
                                                        <a class="btn btn-custom-yellow btn-default save-edit-btn d-block"
                                                           id="save-edit-btn{{ $category->id }}"
                                                           style="width: 50%;margin-left: 25%; display: none!important;"
                                                           data-id="{{ $category->id }}">
                                                            <span class="align-middle">Save</span>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- end edit dish card section -->
                    </div>
                </main>
            </div>
        </div>
        <!-- start footer -->
        @include('layouts.admin.footer_design')
        <!-- end footer -->
    </div>
    <!-- start delete category Modal -->
    <div class="modal fade custom-modal" id="deleteAlertModal" tabindex="-1"
         aria-labelledby="dleteAlertModal" aria-hidden="true">
        <div class="modal-dialog custom-w-441px modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <input type="hidden" value="" id="catId">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="alert-text-1 mb-40px">Are you sure you want to
                                delete this Category?</h4>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="button"
                                class="btn btn-outline-secondary fw-400 text-uppercase font-sebibold w-160px"
                                data-bs-dismiss="modal">Cancel
                        </button>
                        <button type="button" id="delete-category-btn"
                                class="btn btn-custom-yellow fw-400 text-uppercase font-sebibold w-160px">Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end delete category Modal -->
@endsection
@section('script')
    <script type="text/javascript" src="{{ asset('js/ingredient-category.js')}}"></script>
@endsection
