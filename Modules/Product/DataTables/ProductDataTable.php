<?php

namespace Modules\Product\DataTables;

use Modules\Product\Entities\Product;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class ProductDataTable extends DataTable
{

    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)->with('category')
            ->addColumn('action', function ($data) {
                return view('product::products.partials.actions', compact('data'));
            })
            ->addColumn('product_image', function ($data) {
                $url = $data->getFirstMediaUrl('images', 'thumb');
                return '<img src="'.$url.'" border="0" width="50" class="img-thumbnail" align="center"/>';
            })
            ->addColumn('product_price', function ($data) {
                return format_currency($data->product_price);
            })
            ->addColumn('product_quantity', function ($data) {
                return $data->product_quantity . ' ' . $data->product_unit;
            })
            ->rawColumns(['product_image']);
    }

    public function query(Product $model)
    {
        return $model->newQuery()->with('category');
    }

    public function html()
    {
        return $this->builder()
                    ->setTableId('product-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom("<'row'<'col-md-3'l><'col-md-5 mb-2'B><'col-md-4'f>> .
                                'tr' .
                                <'row'<'col-md-5'i><'col-md-7 mt-2'p>>")
                    ->orderBy(7)
                    ->buttons(
                        Button::make('excel')
                            ->text('<i class="bi bi-file-earmark-excel-fill"></i> Excel'),
                        Button::make('print')
                            ->text('<i class="bi bi-printer-fill"></i> In'),
                        Button::make('reset')
                            ->text('<i class="bi bi-x-circle"></i>X??a ??i???u ki???n l???c'),
                        Button::make('reload')
                            ->text('<i class="bi bi-arrow-repeat"></i> T???i l???i')
                    );
    }

    protected function getColumns()
    {
        return [
            Column::computed('product_image')
                ->title('H??nh ???nh')
                ->className('text-center align-middle'),

            Column::make('product_name')
                ->title('T??n SP')
                ->className('text-center align-middle'),

            Column::make('product_code')
                ->title('M?? SP')
                ->className('text-center align-middle'),

                Column::make('category.category_name')
                ->title('Lo???i SP')
                ->className('text-center align-middle'),


            Column::computed('product_price')
                ->title('Gi??')
                ->className('text-center align-middle'),

            Column::computed('product_quantity')
                ->title('S??? l?????ng')
                ->className('text-center align-middle'),

            
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->className('text-center align-middle'),

            Column::make('created_at')
                ->visible(false)
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Product_' . date('YmdHis');
    }
}
