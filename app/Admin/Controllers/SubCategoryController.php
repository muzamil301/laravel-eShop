<?php

namespace App\Admin\Controllers;

use App\SubCategory;
use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;
use DB;
use App\Category;

class SubCategoryController extends Controller
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
     * @param mixed   $id
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
     * @param mixed   $id
     * @param Content $content
     * @return Content
     */
    public function edit($id, Content $content)
    {
        return $content
            ->header('Edit')
            ->description('description')
            ->body($this->form()->edit($id));
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
        $grid = new Grid(new SubCategory);

        $grid->id('Id');
        $grid->title('Title');
        $grid->imgUrl('ImgUrl');
        $grid->categoryId('CategoryId');
        $grid->status('Status');
        $grid->created_at('Created at');
        $grid->updated_at('Updated at');

        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed   $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(SubCategory::findOrFail($id));

        $show->id('Id');
        $show->title('Title');
        $show->imgUrl('ImgUrl');
        $show->categoryId('CategoryId');
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
    protected function form()
    {
        $form = new Form(new SubCategory);

        $form->text('title', 'Title')->rules('required|min:5');
        $form->image('imgUrl', 'Upload Image')->move('uploads/images');;

        // if($id) {
        //     $p = DB::table('sub_category')->where('id', $id)->first();
        //     $size = explode(',', $p->size);
        // }

        $form->select('categoryId')->options(Category::all()->pluck('title', 'id'))->rules('required');

        // $form->ignore(['custom_size']);
        // $form->hidden('size', 'Choose Size');
        // $form->saving(function ($form) {

        //     $sizes = array_values($_POST['custom_size']);
        //     $sizes = rtrim(implode(',',$sizes),',');
        //     $form->size = "$sizes";
        //     echo $sizes;
        // });

        $form->switch('status', 'Status')->default(1);

        return $form;
    }
}
