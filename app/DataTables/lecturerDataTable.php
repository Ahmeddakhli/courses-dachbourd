<?php

namespace App\DataTables;

use App\Models\lecturer;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class lecturerDataTable extends DataTable
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
            
            ->editColumn('name', function ($row) {
                return '<a href="'.route('lecturershow', $row->id).'">'.$row->name.'</a>';
            })
            ->rawColumns(['action', 'name'])
            
            ->addColumn('action',  function($row){
                $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                return $actionBtn;
            });
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\lecturer $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(lecturer $model)
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
                    ->setTableId('lecturer-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->responsive()
                    
                    ->orderBy(1)
                 
                 
                ; 
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id'),
            Column::make('name'),
            Column::make('created_at'),
            Column::make('updated_at'),
             Column::make('email'),
            Column::computed('action')
                  ->exportable(true)
                  ->printable(true)
                  ->width(40)
                  ->addClass('text-center'),
         
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'lecturer_' . date('YmdHis');
    }
}
