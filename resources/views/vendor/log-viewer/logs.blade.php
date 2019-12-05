
@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Bitacora de Eventos
@endsection

@section('css_adicional')
@include('log-viewer::_template.style')
@endsection
@section('main-content')
<!-- Default box -->
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Bitacora de Eventos</h3>
    </div>
    <div class="box-body">
        <div class="table-responsive">
            <table class="table table-condensed table-hover table-stats">
                <thead>
                    <tr>
                        @foreach($headers as $key => $header)
                        <th class="{{ $key == 'date' ? 'text-left' : 'text-center' }}">
                            @if ($key == 'date')
                                <span class="label label-info">{{ $header }}</span>
                            @else
                                <span class="level level-{{ $key }}">
                                    {!! log_styler()->icon($key) . ' ' . $header !!}
                                </span>
                            @endif
                        </th>
                        @endforeach
                        <th class="text-right">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($rows->count() > 0)
                        @foreach($rows as $date => $row)
                        <tr>
                            @foreach($row as $key => $value)
                                <td class="{{ $key == 'date' ? 'text-left' : 'text-center' }}">
                                    @if ($key == 'date')
                                        <span class="label label-primary">{{ $value }}</span>
                                    @elseif ($value == 0)
                                        <span class="level level-empty">{{ $value }}</span>
                                    @else
                                        <a href="{{ route('log-viewer::logs.filter', [$date, $key]) }}">
                                            <span class="level level-{{ $key }}">{{ $value }}</span>
                                        </a>
                                    @endif
                                </td>
                            @endforeach
                            <td class="text-right">
                                <a href="{{ route('log-viewer::logs.show', [$date]) }}" class="btn btn-xs btn-info">
                                    <i class="fa fa-search"></i>
                                </a>
                                <a href="{{ route('log-viewer::logs.download', [$date]) }}" class="btn btn-xs btn-success">
                                    <i class="fa fa-download"></i>
                                </a>
                                
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="11" class="text-center">
                                <span class="label label-default">{{ trans('log-viewer::general.empty-logs') }}</span>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection


