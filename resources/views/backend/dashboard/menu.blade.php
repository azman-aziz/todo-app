<!-- /.navbar -->
@extends('backend.dashboard.main')

@section('content')
    

  {{-- {{ dd($star->title) }} --}}

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper kanban">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Your ToDoList</h1>
          </div>
          {{-- <div class="col-sm-6 d-none d-sm-block">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Kanban Board</li>
            </ol>
          </div> --}}
        </div>
        <div class="row mt-2">
                <!-- TO DO List -->
                <div class="col-md-6">  
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">
                      <i class="ion ion-clipboard mr-1"></i>
                      To Do List
                    </h3>
                    
                    
                        
                    
                    <div class="card-tools">
                      <ul class="pagination pagination-sm">
                        {{ $star->links() }}
                      </ul>
                    </div>
                   
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    
                    
                    <ul class="todo-list" data-widget="todo-list">
                      @foreach ($star as $star_menu)
                      
                      <li>
                        <span class="handle">
                          <i class="fas fa-ellipsis-v"></i>
                          <i class="fas fa-ellipsis-v"></i>
                        </span>
                        <div  class="icheck-primary d-inline ml-2">
                          <input type="checkbox" value="" name="todo2" id="todoCheck{{ $star_menu->id }}" >
                          <label for="todoCheck{{ $star_menu->id }}"></label>
                        </div>
                        <span class="text">{{ $star_menu->title }}</span>
                        {{-- <small class="badge badge-info"><i class="far fa-clock"></i>{{ date('d, M', strtotime($star_menu->set_deadline ))}}</small> --}}
                        <div class="tools">
                          <label for=""><form action="un_star/{{$star_menu->id}}"  method="post" >
                            @method('put')
                            @csrf
                            <button class="badge  badge-success border-0" onclick="return confirm('Yakin Untuk Melepas Bintang?')" type="submit" ><i class="bi bi-star-half"></i></button>
                            </form> </label>
                            
                            <button type="button" class="badge badge-primary border-0" data-toggle="modal" data-target="#edit{{ $star_menu->id }}">
                              <i class="bi bi-pen-fill"></i></button>
                            </label>

                            <label for=""><form action="dashboard/{{$star_menu->id}}"  method="post" >
                              @method('delete')
                              @csrf
                              <button class="badge  badge-danger border-0" onclick="return confirm('Yakin Untuk Menghapus CAtatan?')" type="submit" ><i class="bi bi-trash-fill"></i></i></button>
                              </form> </label>
                       
                          {{-- <a href="" class="badge badge-danger"></a> --}}
                        </div>
                      </li>
                      
                      @endforeach
                    </ul>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer clearfix">
                    {{-- <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button> --}}
                  </div>
                </div>

                
              </div>
              {{-- button untuk nambah --}}
                <div class="col-md-6">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModaltambah">
                    <i class="fas fa-plus"></i>Tambah Catatan</button>
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModalkategori">
                    <i class="fas fa-plus"></i>Tambah Kategori</button>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalmenu">
                    <i class="fas fa-plus"></i>Tambah Menu</button>
                </div>
        </div>
      </div>
    </section>

    <section class="content pb-3">
      <div class="container-fluid h-100">

        @foreach ($category as $cat)  
        <div class="card card-row card-{{ $cat->color }}">
          <div class="card-header">
            <div class="row d-flex justify-content-between">
              <div class="col-md-9">
                <h3 class="card-title">
                  {{ $cat->category_name }}
                </h3>
              </div>
              <div class="col-md-3 mx-auto">
                <button type="button" class="badge badge-primary border-0" data-toggle="modal" data-target="#categ{{ $cat->id }}">
                  <i class="bi bi-pen-fill"></i></button>
                </label>
                {{-- <a href="" class="badge badge-success"><i class="bi bi-pen-fill"></i></a> --}}
                <label for=""><form action="category/{{$cat->id}}"  method="post" >
                  @method('delete')
                  @csrf
                  <button class="badge  badge-danger border-0" onclick="return confirm('Yakin Untuk Menghapus Categori?')" type="submit" ><i class="bi bi-trash-fill"></i></i></button>
                  </form> </label>
                
              </div>
            </div>
            
          </div>
          <div class="card-body">
            @forelse ($cat->notes as $notes)
                
            {{-- {{ dd($notes) }} --}}
            @if ($notes->star == null)
                
            
            <div class="card card-info card-outline">
              <div class="card-header">
                <h5 class="card-title">
                  {{ $notes->title }}</h5>
                <div class="card-tools">
                  {{-- <a href="#" class="btn btn-tool btn-link">#{{ $notes->id }}</a> --}}
                  <div class="btn btn-tool">
                  
                    <label for=""><form action="star/{{$notes->id}}"  method="post" >
                      @method('put')
                      @csrf
                      <button class="badge  badge-primary border-0" onclick="return confirm('Yakin Untuk Memberi Bintang?!')" type="submit" > <i class="bi bi-star-fill"></i></button>
                      </form> </label>
                      <label for="">

                        <button type="button" class="badge badge-primary border-0" data-toggle="modal" data-target="#edit{{ $notes->id }}">
                          <i class="bi bi-pen-fill"></i></button>
                        </label>

                        <label for=""><form action="dashboard/{{$notes->id}}"  method="post" >
                          @method('delete')
                          @csrf
                          <button class="badge  badge-danger border-0" onclick="return confirm('Yakin Untuk Menghapus CAtatan?')" type="submit" ><i class="bi bi-trash-fill"></i></i></button>
                          </form> </label>
                    
                  </div>
                </div>
              </div>
              <div class="card-body">
                <p>

                  {!! Str::words($notes->content, 10) !!}
                </p>
              </div>
            </div>
            @endif
            @empty
            <p class="text-center mt-5 text-secondary">Data Tidak Tersedia</p>
            @endforelse
          </div>
        </div>
        @endforeach

      </div>
    </section>
  </div>

  <!-- Button trigger modal -->


<!-- Modal -->
<form action="{{ route('dashboard.store') }}"  method="POST" enctype="multipart/form-data">
  @csrf
<div class="modal fade" id="exampleModaltambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambahkan Catatan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="form-group">
          <label for="exampleInputEmail1">Judul Catatan</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="judul" placeholder="Tambahkan Judul">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Kategori Catatan</label>
          <select class="form-control" name="kategori" id="exampleFormControlSelect1">
            <option value=NUll>Masukan Kategori</option>
            @foreach ($category as $list_cat)
            <option value="{{ $list_cat->id }}">{{ $list_cat->category_name }}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="exampleFormControlSelect1">Menu Catatan</label>
          {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
          <select class="form-control" name="menu" id="exampleFormControlSelect1">
            <option value=NUll>Masukan Menu</option>
            @foreach ($menu as $men)
            <option value="{{ $men->id }}">{{ $men->name_menu }}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Waktu Kadaluarsa</label>
          <input type="date" class="form-control"  aria-describedby="emailHelp"  name="waktu" placeholder="E">
        </div>

        <div class="form-group">
          <label for="exampleFormControlSelect1">Prioritas Catatan</label>
          {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
          <select class="form-control" name="prioritas" id="exampleFormControlSelect1">
            <option value="Penting">Penting</option>
            <option value="Biasa">Biasa</option>
            <option value="Urgent">Urgent</option>
          </select>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">isi Catatan</label>
          <textarea id="summernote" name="editordata"></textarea>
        </div>
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>

{{-- tambah  kategori --}}
<form action="{{ route('category.store') }}"  method="POST" enctype="multipart/form-data">
  @csrf
<div class="modal fade" id="exampleModalkategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambahkan Kategori</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="form-group">
          <label for="exampleInputEmail1">Nama kategori</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="nama_kategori" placeholder="Tambahkan Judul">
        </div>
        <div class="form-group">
          <label for="exampleFormControlSelect1">Warna Latar</label>
          <select class="form-control" name="warna" id="exampleFormControlSelect1">
            <option value="primary">Pilih Warna Latar</option>
            <option value="primary" class="text-primary"><p >.bg-primary</p></option>
            <option value="secondary" class="text-secondary"><p >.bg-secondary</p></option>
            <option value="success" class="text-success"><p >.bg-success</p></option>
            <option value="danger" class="text-danger"><p >.bg-danger</p></option>
            <option value="warning" class="text-warning"><p >.bg-warning</p></option>
            <option value="info" class="text-info"><p >.bg-info</p></option>
            <option value="light" class="text-light"><p >.bg-light</p></option>
            <option value="dark" class="text-dark"><p >.bg-dark</p></option>
            <option value="white" class="text-white"><p >.bg-white</p></option>
            
          </select>
        </div>

        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
</form>

{{-- modal untuk nambah --}}
<form action="{{ route('menu.store') }}"  method="POST" enctype="multipart/form-data">
  @csrf
<div class="modal fade" id="exampleModalmenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambahkan Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

        <div class="form-group">
          <label for="exampleInputEmail1">Nama Menu</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="nama_menu" placeholder="Tambahkan Judul">
        </div>

        <div class="form-group">
          <label for="exampleFormControlSelect1">Pilih Icon</label>
          <select class="form-control" name="icon" id="exampleFormControlSelect1">
            <option value="bi bi-menu-app"><i class="bi bi-menu-app">menu1</i></option>
            <option value="bi bi-menu-button-fill"><i class="bi bi-menu-button-fill">menu2</i></option>
            <option value="bi bi-menu-button-wide-fill"><i class="bi bi-menu-button-wide-fill">menu3</i></option>
          </select>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>
    </div>
  </div>
</div>
</form>

{{-- modal untuk EDit Nootes --}}
@foreach ($menu_bawah as $me)
    

<form action="dashboard/{{ $me->id }}"  method="POST" enctype="multipart/form-data">
  @method('put')
  @csrf
  <div class="modal fade" id="edit{{ $me->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Catatan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
  
          <div class="form-group">
            <label for="exampleInputEmail1">Judul Catatan</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="judul" placeholder="Tambahkan Judul" value="{{ old('judul', $me->title) }}">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Kategori Catatan</label>
            <select class="form-control" name="kategori" id="exampleFormControlSelect1">
              @if ($me->category_id)
              <option value={{ $me->category_id }}>{{ $me->category_id }}</option>
              @endif
              <option value=NUll>Masukan Kategori</option>
              @foreach ($category as $list_cat)
              <option value="{{ $list_cat->id }}">{{ $list_cat->category_name }}</option>
              @endforeach
            </select>
          </div>
  
          <div class="form-group">
            <label for="exampleFormControlSelect1">Menu Catatan</label>
            {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
            <select class="form-control" name="menu" id="exampleFormControlSelect1">
              @if ($me->menus_id)
              <option value={{ $me->menus_id }}>{{ $me->menus_id }}</option>
              @endif
              <option value=NUll>Masukan Menu</option>
              @foreach ($menu as $men)
              <option value="{{ $men->id }}">{{ $men->name_menu }}</option>
              @endforeach
            </select>
          </div>
  
          <div class="form-group">
            <label for="exampleInputEmail1">Waktu Kadaluarsa</label>
            <input type="date" class="form-control" value="{{ old('waktu', $me->set_deadline) }}" aria-describedby="emailHelp"  name="waktu" placeholder="E">
          </div>
  
          <div class="form-group">
            <label for="exampleFormControlSelect1">Prioritas Catatan</label>
            {{-- <small id="emailHelp" class="form-text text-muted"></small> --}}
            <select class="form-control" name="prioritas" id="exampleFormControlSelect1">
              @if ($me->priority)
              <option value={{ $me->priority }}>{{ $me->priority }}</option>
              @endif
              <option value="Penting">Penting</option>
              <option value="Biasa">Biasa</option>
              <option value="Urgent">Urgent</option>
            </select>
          </div>
  
          <div class="form-group">
            <label for="exampleFormControlTextarea1">isi catatan</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" name="content" rows="3" value="hello" >{!! $me->content !!}</textarea>

           
          </div>
          
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</form>

@endforeach

@foreach($category as $cate)
<form action="category/{{ $cate->id }}"  method="POST" enctype="multipart/form-data">
  @method('put')
  @csrf
  <div class="modal fade" id="categ{{ $cate->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Edit Catatan</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
  
          <div class="form-group">
            <label for="exampleInputEmail1">Nama kategori</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="nama_kategori" placeholder="Tambahkan Judul" value="{{ old('nama_kategori', $cate->category_name) }}">
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1">Warna Latar</label>
            <select class="form-control" name="warna" id="exampleFormControlSelect1">
              @if ($cate->color)
              <option value="{{ $cate->color }}" class="{{ $cate->color }}">{{ $cate->color }}</option>
              @endif
              <option value="primary">Pilih Warna Latar</option>
              <option value="primary" class="text-primary"><p >.bg-primary</p></option>
              <option value="secondary" class="text-secondary"><p >.bg-secondary</p></option>
              <option value="success" class="text-success"><p >.bg-success</p></option>
              <option value="danger" class="text-danger"><p >.bg-danger</p></option>
              <option value="warning" class="text-warning"><p >.bg-warning</p></option>
              <option value="info" class="text-info"><p >.bg-info</p></option>
              <option value="light" class="text-light"><p >.bg-light</p></option>
              <option value="dark" class="text-dark"><p >.bg-dark</p></option>
              <option value="white" class="text-white"><p >.bg-white</p></option>
              
            </select>
          </div>

           
          
          
          
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</form>
@endforeach

  @endsection

  @section('js')
      <script>
        $(document).ready(function() {
  $('#summernote').summernote();
});
      </script>
  @endsection