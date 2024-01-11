<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\IngredientCategory;
use Illuminate\Http\Request;
use App\Models\DishFavorites;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Dish;
use App\Models\OrderDetail;
use Validator, Redirect, Response;

class DishController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //return view('user.home');
    }

    public function getFavoriteDishes()
    {
        $dishes = DishFavorites::with('dish')->where('user_id', Auth::user()->id)->get();

        return view('user.favorite', ['dishes' => $dishes]);
    }

    public function unFavorite(Request $request)
    {
        try {
            DishFavorites::where('dish_id', $request->dish_id)->delete();
        } catch (Exception $e) {
            return response::json(['status' => 0, 'message' => 'Something went wrong.']);
        }
    }

    public function favorite(Request $request)
    {
        if (!Auth::user()) {
            return response::json(['status' => 2, 'message' => '']);
        }

        try {
            $request->merge(["user_id" => Auth::user()->id]);

            DishFavorites::create(
                $request->all()
            );
        } catch (Exception $e) {
            return response::json(['status' => 0, 'message' => 'Something went wrong.']);
        }
    }

    public function getCollectedPoints()
    {
        return view('user.points');
    }

    public function getDishDetails(Request $request)
    {
        if (!Auth::user()) {
            return response::json(['status' => 2, 'message' => '']);
        }

        $dish = Dish::find($request->id);

        $options = $dish->option;
        $freeIngredients = $dish->freeIngredients;
        $paidIngredients = IngredientCategory::whereHas('ingredients.paidDishIngredient', function ($query) use ($request) {
            $query->where('dish_id', $request->id);
        })->with('ingredients.paidDishIngredient')->get();
//        $paidIngredients = $dish->paidIngredients;

        $html_options = '<option value="">Please select option</option>';
        foreach ($options as $key => $option) {
            $html_options .= "<option>$option->name</option>";
        }

        $html_free_ingredients = '';
        foreach ($freeIngredients as $key => $ingredient) {
            $ingredient_name = $ingredient->ingredient->name;
            $ingredient_image = $ingredient->ingredient->image;

            $html_free_ingredients .= "<tr>
                                  <td width='10%'>
                                    <img src='$ingredient_image' class='img-fluid me-15px' alt='$ingredient_name' width='50' height='50'>
                                  </td>
                                  <td class='text-left'>$ingredient_name</td>
                                  <td width='5%'>
                                    <div class='form-check'>
                                      <input class='form-check-input from-check-input-yellow' type='checkbox' checked>
                                    </div>
                                  </td>
                                </tr>";
        }

        $html_paid_ingredients = '';
        foreach ($paidIngredients as $key => $category) {
            $show = ($key == 0) ? ' show' : '';
            $collapsed = ($key != 0) ? ' collapsed' : '';
            $html_paid_ingredients .= "<div class='accordion-item'>
                          <h2 class='accordion-header'>
                            <button class='accordion-button $collapsed' type='button' data-bs-toggle='collapse' data-bs-target='#collapse$category->id' aria-expanded='true' aria-controls='collapseOne'> $category->name </button>
                          </h2>
                          <div id='collapse$category->id' class='accordion-collapse collapse $show' data-bs-parent='#accordionExample'>
                            <div class='accordion-body'>
                              <table>
                                <tbody>";

            foreach ($category->ingredients as $ingredient) {

                $ingredient_name = $ingredient->name;
                $ingredient_image = $ingredient->image;
                $ingredient_price = $ingredient->price;

                $html_paid_ingredients .= "<tr>
                                    <td width='10%'>
                                      <img src='$ingredient_image' class='img-fluid me-15px' alt='$ingredient_name' width='50' height='50'>
                                    </td>
                                    <td class='text-left'>$ingredient_name <span class='food-custom-price'>€$ingredient_price</span>
                                    </td>
                                    <td width='7%'>
                                      <div class='foodqty'>
                                        <span class='minus'>
                                          <i class='fas fa-minus align-middle'></i>
                                        </span>
                                        <input type='number' class='count' name='qty' value='1'>
                                        <span class='plus'>
                                          <i class='fas fa-plus align-middle'></i>
                                        </span>
                                      </div>
                                    </td>
                                  </tr>";
            }
            $html_paid_ingredients .= "</tbody>
                              </table>
                            </div>
                          </div>
                        </div>";
        }

        $html = "<div class='modal-content'>
                  <div class='modal-header border-0 d-block'>
                    <button type='button' class='btn-close float-end' data-bs-dismiss='modal' aria-label='Close'></button>
                    <div class='customisable-item-detail mt-3 text-center'>
                      <img src='$dish->image' alt='burger' width='100' height='100' id='dish_image'>
                      <h4>$dish->name</h4>
                      <p> Ketchup, sliced onion, slices cheese(2X), Quarter Pound Bun(2X), tomato ketchup, garlic paste</p>
                      <span class='food-custom-price' id='dish_price'>€$dish->price</span>
                      <div class='row justify-content-center'>
                        <div class='col-xl-5'>
                          <div class='form-group mb-0'>
                            <div class='input-group w-100'>
                              <div class='dropdown w-100  ingredientslist-dp custom-default-dropdown'>
                                <select class='form-control bg-white dropdown-toggle d-flex align-items-center justify-content-between w-100'>
                                  $html_options
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class='modal-body pt-0'>
                    <div class='customisable-table custom-table'>
                      <table class='w-100'>
                        <thead>
                          <tr>
                            <th colspan='3'>Existing Ingredients</th>
                          </tr>
                        </thead>
                        <tbody>
                          $html_free_ingredients
                        </tbody>
                      </table>
                    </div>
                    <div class='customisable-table custom-table mt-4'>
                      <table class='w-100'>
                        <thead>
                          <tr>
                            <th colspan='3'>Add Extra Ingredients</th>
                          </tr>
                        </thead>
                      </table>
                      <div class='accordion accordion-flush customisable-accordion' id='accordionExample'>
                        $html_paid_ingredients
                      </div>
                    </div>
                  </div>
                  <div class='modal-footer border-top-0 d-block'>
                    <div class='row'>
                      <div class='col'>
                        <div class='foodqty'>
                          <span class='minus'>
                            <i class='fas fa-minus align-middle' onclick=updateDishQty('-'," . $dish->qty . "," . $dish->id . ")></i>
                          </span>
                          <input type='number' class='count' name='qty-$dish->id' value=" . $dish->order->qty . ">
                          <span class='plus'>
                            <i class='fas fa-plus align-middle' onclick=updateDishQty('+'," . $dish->qty . "," . $dish->id . ")></i>
                          </span>
                        </div>
                      </div>
                      <div class='col-xx-6 col-xl-7 col-lg-6 col-md-6 col-sm-12 col-12 text-end float-end ms-auto'>
                        <a href='javascript:void(0);' class='btn btn-custom-yellow fw-400 text-uppercase font-sebibold m-0 w-100' onclick=addToCart(" . $dish->id . ")>Add To cart <span>| €30</span>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>";

        return response::json(['status' => 1, 'data' => $html]);
    }
}
