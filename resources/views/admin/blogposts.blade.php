@extends('admin.layouts.app')

@section('title','blog')
@php
    $page_name = 'Blogs Posts'
@endphp


@section('mainpart')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4 class="card-title">All Blog posts</h4>
            <button class="btn btn-primary" data-toggle="modal" data-target="#postAddModal">Add Blog post</button>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="dataTable">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Title</th>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Thumbnail</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   
                    @foreach ($posts as $sl => $item) 
                    <tr>
                        <td> {{ ++$sl }}</td>
                        <td> {{ $item->title}} </td>
                        <td> {{ $item->category_name }}</td>
                        <td> {{ $item->description}}</td> 
                        <td> 
                            <img width="100px" src="{{asset('blog_post_thumbnails/'.$item->thumbnil)}}" alt="">
                        </td>
                        <td>
                            @if($item->status == 1) 
                                <span class="badge badge-success">active</span>
                             @else  
                                <span class="badge badge-danger">Inactive</span>
                            
                            @endif
                        </td>
                        <td>
                            <div class="d-flex">
                                <button class="btn btn-sm btn-primary mr-2" data-toggle="modal" data-target="{{'#posts'.$item->id.'EditModal'}}"><i class="fas fa-edit"></i></button>
                                <form action="{{route('posts.destroy',$item->id)}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="delete btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                      <!-- edit post Modal-->
                            <div class="modal fade" id="{{'posts'.$item->id.'EditModal'}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="ModalLabel">{{$item->category_name}}</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                            <form action="{{route('posts.update',$item->id)}}" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="_method" value="PUT">
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label for="post_title">Post Title</label>
                                                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$item->title}}">
                                                        @error('title')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="category_id">Post Category</label>
                                                        <select class="form-control"  name="category_id" >
                                                            {{-- <option selected disabled>Select Category</option> --}}
                                                            @foreach ($categories as $items)
                                                                <option value="{{$items->id}}" 
                                                                    @if($items->id == $item->category_id) selected @endif
                                                                    >{{$items->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="description">Post Description</label>
                                                        <textarea type="text" class="form-control @error('description') is-invalid @enderror"  name="description" rows="4">{{$item->description}}</textarea>
                                                        @error('description')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{$message}}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="post_title">Post Thumbnil</label>
                                                        <input type="file" class="form-control " name="thumbnil" > 
                                                        <input type="hidden" name="old_thumb" value="{{$item->thumbnil}}">
                                                    </div>
                                                    <div class="form-check form-switch">
                                                        <input @if ($item->status == 1) checked @endif class="form-check-input" type="checkbox" role="switch" name="status" id="status" value="1">
                                                        <label class="form-check-label" for="status">Status</label>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</a>
                                                    <button class="btn btn-primary" href=" " type="submit">Update post</button>
                                                </div>
                                            </form>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>



      <!-- Add post Modal-->
      <div class="modal fade" id="postAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Blog post</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
              </div>
                <form action="{{route('posts.store')}}" method="POST" enctype="multipart/form-data">  
                    @csrf
                    <div class="modal-body">
                            <div class="form-group">
                                <label for="post_title">Post Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{old('title')}}">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="category_id">Post Category</label>
                                <select class="form-control"  name="category_id" >
                                    <option selected disabled>Select Category</option>
                                    @foreach ($categories as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="description">Post Description</label>
                                <textarea type="text" class="form-control @error('description') is-invalid @enderror"  name="description" rows="4">{{old('description')}}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="post_title">Post Thumbnil</label>
                                <input type="file" class="form-control " name="thumbnil" > 
                            </div>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" name="status" id="status" value="1">
                                <label class="form-check-label" for="status">Status</label>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</a>
                        <button class="btn btn-primary" href="{{}}" type="submit">Add post</button>
                    </div>
                </form> 
          </div>
      </div>
  </div>
@endsection