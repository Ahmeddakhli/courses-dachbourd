<?php

namespace App\DataTables;

use App\Models\course;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class courseDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->editColumn('title', function ($row) {
                return '<a href="'.route('courseshow', $row->id).'">'.$row->title.'</a>';
            })
            ->editColumn('created_at', function ($col) {
                return $col->created_at->toDateString();
            })
            ->editColumn('updated_at', function ($col) {
                return $col->updated_at->toDateString();
            })
            ->rawColumns(['action', 'title'])
            ->addColumn('action',  function($row){
                $actionBtn = '
                 <a href="'. route('admin.show.test', $row->id) .'" class="edit btn btn-warning btn-sm">test</a>
                 <a href="'. route('admin.show.lassons', $row->id) .'" class="edit btn btn-info btn-sm">vedios</a>
                <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                return $actionBtn;
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\course $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(course $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('course-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->parameters([
                        'dom'          => 'Bfrtip',
                        'buttons'      => ['export', 'print', 'reset', 'reload'],
                        'initComplete' => "function () {
                            this.api().columns().every(function () {
                                var column = this;
                                var input = document.createElement(\"input\");
                                $(input).appendTo($(column.footer()).empty())
                                .on('change', function () {
                                    column.search($(this).val(), false, false, true).draw();
                                });
                            });
                        }",
                    ])
                    ->orderBy(1)
                    ->responsive(true)
                    ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id') ->title('id'),
            Column::make('title'),
            Column::make('created_at'),
            Column::make('updated_at'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  
        
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'course_' . date('Ymd');
    }
}
