<?php

namespace App\Admin\Controllers;

use App\Product;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use DB;
use App\Category;
use App\SubCategory;

class ProductController extends Controller
{
    use HasResourceActions;

    /**
     * Index interface.
     *
     * @param Content $content
     * @return Content
     */
    public function index(Content $content)
    {
        return $content
            ->header('Index')
            ->description('description')
            ->body($this->grid());
    }

    /**
     * Show interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function show($id, Content $content)
    {
        return $content
            ->header('Detail')
            ->description('description')
            ->body($this->detail($id));
    }

    /**
     * Edit interface.
     *
     * @param mixed $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form($id)->edit($id));
    }

    /**
     * Create interface.
     *
     * @param Content $content
     * @return Content
     */
    public function create(Content $content)
    {
        return $content
            ->header('Create')
            ->description('description')
            ->body($this->form());
    }

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Product);

        $grid->id('Id');
        $grid->title('Title');
        $grid->brandName('BrandName');
        $grid->decription('Decription');
        $grid->price('Price');
        $grid->discountPrice('DiscountPrice');
        $grid->variation('variation');
        $grid->size('Size');
        $grid->color('Color');
        $grid->categoryId('CategoryId');
        $grid->subCategoryId('SubCategoryId');
        $grid->imgUrl('ImgUrl');
        $grid->quantity('Quantity');
        $grid->status('Status');
        $grid->created_at('Created at');
        $grid->updated_at('Updated at');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Product::findOrFail($id));

        $show->id('Id');
        $show->title('Title');
        $show->brandName('BrandName');
        $show->decription('Decription');
        $show->price('Price');
        $show->discountPrice('DiscountPrice');
        $show->variation('variation');
        $show->size('Size');
        $show->color('Color');
        $show->categoryId('CategoryId');
        $show->subCategoryId('SubCategoryId');
        $show->imgUrl('ImgUrl');
        $show->quantity('Quantity');
        $show->status('Status');
        $show->created_at('Created at');
        $show->updated_at('Updated at');

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */


    protected function form($id = null)
    {
        $form = new Form(new Product);

        $form->text('title', 'Title')->rules('required|min:3')->placeholder('enter title');
        $form->text('brandName', 'BrandName')->placeholder('enter brand name');
        $form->ckeditor('decription', 'Decription');
        $form->number('price', 'Price');
        $form->number('discountPrice', 'DiscountPrice');

        $form->text('variation', 'Variation');
        // $form->text('size', 'Size');
        $size = '';
        if ($id) {
            $p = DB::table('products')->where('id', $id)->first();
            $size = explode(',', $p->size);
        }
//        $form->multipleSelect('custom_size', 'Choose Size')->options(['large' => 'Large', 'medium' => 'Medium', 'small' => 'Small', 'xs' => 'Xs'])->default($size);
        $form->multipleSelect('custom_size', 'Choose Size')->options(Product::getSizes())->default($size);
//        $form->multipleSelect('color', 'Choose Color')->options(['Red'=> 'red', 'Green' => 'green']);
//        $form->select('categoryId', 'CategoryId');
        $form->select('categoryId')->options(Category::all()->pluck('title', 'id'))->rules('required');

//        $subcategories = SubCategory::findAll();
        $form->select('subCategoryId')->options(SubCategory::all()->pluck('title', 'id'))->rules('required');

        $form->image('imgUrl', 'Upload Image')->move('uploads/images');
        $form->number('quantity', 'Quantity')->default(1);
        $form->switch('status', 'Status')->default(1);

        $form->ignore(['custom_size']);
        $form->hidden('size', 'Choose Size');
        $form->saving(function ($form) {
// var_dump($form->images);die;
        // if($request->hasFile('image'))
        // {
        //     foreach($request->file('image') as $image)
        //     {
        //         $destinationPath = 'content_images/';
        //         $filename = $image->getClientOriginalName();
        //         $image->move($destinationPath, $filename);
        //         $fullPath = $destinationPath . $filename;
        //         $allImages .= $allImages == null ? $fullPath : ';' . $fullPath;
        //     }

        //     $content->image = $allImages;

        // }

            $sizes = array_values($_POST['custom_size']);
            $sizes = rtrim(implode(',', $sizes), ',');
            $form->size = "$sizes";
            echo $sizes;
        });


        return $form;
    }
}
