@extends('layouts.admin')

@section('content')
 


<div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$count}}</h3>

                <p>all users</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="{{ route('clientuser') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
       

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
               <h3>{{$client}}</h3>

                <p>all orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="{{ route('order2') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
       
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>ALL setings</h3>

                <p>   <a href="{{ url('/settings') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>  </p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="{{ url('/settings') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
       
                <div class="card">

                <div class="card-body">
     <div class="box">

        <div class="col-md-6">
             <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Bar Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body" style="">
              <div class="chart">
                <h1>{{ $chart1->options['chart_title'] }}</h1>
                    {!! $chart1->renderHtml() 
                    !!}
              </div>
            
            </div>
   

                    

    

                </div>

            </div>
                    <div class="col-md-6">
             <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Bar Chart</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <div class="box-body" style="">
              <div class="chart">
                <h1>{{ $chart2->options['chart_title'] }}</h1>
                    {!! $chart2->renderHtml() 
                    !!}
              </div>
            
            </div>
   

                    

    

                </div>

            </div>
          </div> 
 </div>
                 
</div>
@endsection
                  @section('js')             
 
{!! $chart1->renderChartJsLibrary() !!}

{!! $chart1->renderJs() !!}
{!! $chart2->renderJs() !!}
{!! $chart3->renderJs() !!}
@endsection

