<?php

namespace App\DataTables;

use App\Blank;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class BlankDataTable extends DataTable
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
            ->addColumn('action', 'blank.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Blank $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Blank $model)
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
        // return $this->builder()
        //     ->setTableId('blank-table')
        //     ->columns($this->getColumns())
        //     ->minifiedAjax()
        //     ->dom('Bfrtip')
        //     ->orderBy(1)
        //     ->buttons(
        //         Button::make('create'),
        //         Button::make('export'),
        //         Button::make('print'),
        //         Button::make('reset'),
        //         Button::make('reload')
        //     );
        return $this->builder()
            ->columns($this->getColumns())
            ->parameters([
                'dom'          => 'Bfrtip',
                'buttons'      => [],
            ]);
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
            Column::make('email'),
            Column::make('created_at'),
            Column::make('updated_at'),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(60)
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
        return 'Blank_' . date('YmdHis');
    }
}
