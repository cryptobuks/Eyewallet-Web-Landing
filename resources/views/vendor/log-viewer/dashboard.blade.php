
@extends('adminlte::layouts.app')

@section('htmlheader_title')
	Bitacora de Eventos
@endsection

@section('css_adicional')
@include('log-viewer::_template.style')
@endsection
@section('main-content')

<div class="container-fluid spark-screen">

    <div class="row">
        <!-- Default box -->
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Dashboard de Eventos</h3>

                
            </div>
            <div class="box-body">
                    <div class="col-md-3">
                        <canvas id="stats-doughnut-chart" height="300"></canvas>
                    </div>
                    <div class="col-md-9">
                        @foreach($percents as $level => $item)
                                <a href="{{route('log-viewer::logs.list')}}">
                                    <div class="col-md-4">
                                        <div class="info-box level level-{{ $level }} {{ $item['count'] === 0 ? 'level-empty' : '' }}">
                                            <span class="info-box-icon">
                                                {!! log_styler()->icon($level) !!}
                                            </span>
            
                                            <div class="info-box-content">
                                                <span class="info-box-text">{{ $item['name'] }}</span>
                                                <span class="info-box-number">
                                                    {{ $item['count'] }} entries - {!! $item['percent'] !!} %
                                                </span>
                                                <div class="progress">
                                                    <div class="progress-bar" style="width: {{ $item['percent'] }}%"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                        @endforeach
                    </div>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>
@endsection

@section('scripts_adicional')
    <script>
        $(function() {
            new Chart($('canvas#stats-doughnut-chart'), {
                type: 'doughnut',
                data: {!! $chartData !!},
                options: {
                    legend: {
                        position: 'bottom'
                    }
                }
            });
        });
    </script>
@endsection
