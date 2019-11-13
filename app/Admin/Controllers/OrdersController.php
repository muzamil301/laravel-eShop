<?php

namespace App\Admin\Controllers;

use App\orderDet;
use App\Http\Controllers\Controller;
use App\Product;
use Encore\Admin\Controllers\HasResourceActions;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Layout\Content;
use Encore\Admin\Show;

class OrdersController extends Controller
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
        $grid = new Grid(new orderDet);

        $grid->id('Id');

//      $grid->productId('ProductId');
        $grid->model()->where('status', '=' , 1);
        $grid->productId('Product title')->display(function ($productId) {
            return Product::find($productId)?Product::find($productId)->title:'';
        });
        $grid->categoryId('CategoryId');
//        $grid->subCategoryId('SubCategoryId');
        $grid->orderId('OrderId');
//        $grid->size('Size');
//        $grid->color('Color');
        $grid->quantity('Quantity');
        $grid->paidPrice('Paid Price');
        $grid->order_progress('Order Progress');
        $grid->payment_type('payment Type');
        $grid->status('Status');
        $grid->created_at('Created at');
        //$grid->updated_at('Updated at');

        $grid->disableCreateButton();


        $grid->actions(function ($actions) {
            $actions->disableDelete();
           //$actions->disableEdit();
        });

        $grid->tools(function ($tools) {
            $tools->batch(function ($batch) {
                $batch->disableDelete();
            });
        });

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
        $show = new Show(orderDet::findOrFail($id));

        $show->id('Id');
        $show->productId('ProductId');
        $show->categoryId('CategoryId');
        $show->subCategoryId('SubCategoryId');
        $show->orderId('OrderId');
//        $show->size('Size');
//        $show->color('Color');
        $show->quantity('Quantity');
        $show->paidPrice('PaidPrice');
        $show->order_progress('Order Progress');
        $show->payment_type('payment Type');
        $show->status('Status');
        $show->created_at('Created at');
//        $show->updated_at('Updated at');

        $show->disableDelete();

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new orderDet);

        $form->number('productId', 'ProductId');
        $form->number('categoryId', 'CategoryId');
        $form->number('subCategoryId', 'SubCategoryId');
        $form->number('orderId', 'OrderId');
        $form->number('color', 'Color');
        $form->number('quantity', 'Quantity');
        $form->number('paidPrice', 'PaidPrice');
        $form->text('Order Progress')->placeholder('in progress, paid, on the way, delivered, Cancelled');
        $form->payment_type('payment Type');
        $form->number('status', 'Status')->default(1);
        return $form;
    }
}
