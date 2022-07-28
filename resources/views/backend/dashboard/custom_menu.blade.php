@extends('backend.dashboard.main')

@section('content')
<div class="content-wrapper kanban">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <h1>Menu Catatan <b class="text-success">{{ $url, "Custom" }}</b></h1>
            </div>
            {{-- <div class="col-sm-6 d-none d-sm-block">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Kanban Board</li>
              </ol>
            </div> --}}
          </div>
          <div class="row mt-2 d-flex justify-content-center">
                  <!-- cards -->
                  <div class="card-columns">
                    @foreach ($menu as $men)

                    @foreach ($men->notes as $item)
                        
                    
                        
                    
                    <div class="card">
                      
                      <div class="card-body">
                        <h5 class="card-title mt-2 text-success">{{ $item->title }}</h5>
                        <p class="card-text">{!! $item->content !!}</p>
                      </div>
                    </div>
                    @endforeach
                    @endforeach
                    
                  </div>

                  <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                       @if ($menu->links())
                       {{ $menu->links() }}
                       @endif
                       <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1">Previous</a>
                      </li>
                      <li class="page-item"><a class="page-link" href="#">1</a></li>
                      <li class="page-item"><a class="page-link" href="#">2</a></li>
                      <li class="page-item"><a class="page-link" href="#">3</a></li>
                      <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                      </li>
                        
                    </ul>
                  </nav>
  
                  
            </div>
             
          </div>
        </div>
      </section>
  </div>
@endsection