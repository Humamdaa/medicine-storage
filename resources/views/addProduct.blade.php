<?php

use Illuminate\Support\Facades\DB;

$companies = DB::table('companies')->get();
$com_count = count($companies);
$categories = DB::table("categories")->get();
$cat_count = count($categories);

?>
<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<?php include('E:\laravel\medicine_storage\resources\views\header.blade.php') ?>

<body>


    <div style="margin: 70px 50px; background:gray;">
        <form action="{{route('medicines.store')}}" method="post" style="padding: 100px 100px;">

            @csrf
            <input type="text" required value="" name="scientific_en" placeholder="Enter scientific_en">
            <br> <br>
            <input type="text" required value="" name="scientific_ar" placeholder="Enter scientific_ar">
            <br> <br>
            <input type="text" required value="" name="trade_en" placeholder="Enter trade_en">
            <br> <br>
            <input type="text" required value="" name="trade_ar" placeholder="Enter trade_er">
            <br> <br>
            <input type="number" required value="" name="quantity" placeholder="Enter quantity">
            <br> <br>
            <input type="number" required value="" name="price" placeholder="Enter price">
            <br> <br>
            <input type="text"  value="" name="endDate" placeholder="Enter endDate">
            <br> <br>
            <input type="text"  value="" name="image" placeholder="Enter image">
            <br> <br>

            <select required name="company_name_en" Size="Number_of_options" class="card z-depth-0 ">
                @foreach($companies as $company)
                <option> {{$company->name_en}}</option>
                @endforeach
            </select>
            <br> <br>
            <select required name="category_name_en" Size="Number_of_options" class="card z-depth-0 ">
                @foreach($categories as $category)
                <option> {{$category->name_en}}</option>
                @endforeach
            </select>
            <br> <br>
            <input type="submit" class="btn btn-primary" value="Submit"></input>


        </form>
    </div>

    <?php include('E:\laravel\medicine_storage\resources\views\footer.php') ?>

</body>

</html>
