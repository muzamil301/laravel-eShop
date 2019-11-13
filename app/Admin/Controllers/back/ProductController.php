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
        $grid->brandName('Brand Name');
        $grid->decription('Decription');
        $grid->price('Price');

//        $grid->size('Size');

//        $grid->subCategoryId('SubCategoryId');
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

        $form->select('categoryId')->options(Category::all()->pluck('title', 'id'))->rules('required');
        $form->select('subCategoryId')->options(SubCategory::all()->pluck('title', 'id'))->rules('required');

        $form->image('imgUrl', 'Upload Image')->move('uploads/images');
        $form->number('quantity', 'Quantity')->default(1);
        $form->switch('status', 'Status')->default(1);

        $form->saving(function ($form) {
        });


        return $form;
    }
}
