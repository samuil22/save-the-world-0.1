@extends('admin.layouts.app')

@section('title','blog')
@php
    $page_name = 'Blogs Category'
@endphp


@section('mainpart')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4 class="card-title">All Blog Categories</h4>
            <button class="btn btn-primary" data-toggle="modal" data-target="#categoryAddModal">Add Blog Category</button>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="dataTable">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                   @foreach($blog_categories as $sl => $item)
                     
                    <tr>
                        <td>{{ ++$sl }}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td>
                            <div class="d-flex">
                                <button class="btn btn-sm btn-primary mr-2" data-toggle="modal" data-target="{{'#category'.$item->id.'EditModal'}}"><i class="fas fa-edit"></i></button>
                                <form action="{{route('category.destroy',$item->id)}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="delete btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </div>
                        </td>
                    </tr>
                      <!-- edit Category Modal-->
                            <div class="modal fade" id="{{'category'.$item->id.'EditModal'}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="ModalLabel">{{$item->name}}</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                            <form action="{{route('category.update',$item->id)}}" method="POST">
                                                @csrf
                                                <input type="hidden" name="_method" value="PUT">
                                                <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="category_name">Category Name</label>
                                                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$item->name}}">
                                                            @error('name')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{$message}}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="description">Description</label>
                                                            <textarea type="text" class="form-control @error('description') is-invalid @enderror"  name="description" rows="4">{{$item->description}}</textarea>
                                                            @error('description')
                                                                <span class="invalid-feedback" role="alert">
                                                                    <strong>{{$message}}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                    
                                                </div>
                                                <div class="modal-footer">
                                                    <a class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</a>
                                                    <button class="btn btn-primary" href=" " type="submit">Update Category</button>
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



      <!-- Add Category Modal-->
      <div class="modal fade" id="categoryAddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
      aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Add Blog Category</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
              </div>
                <form action="{{route('category.store')}}" method="POST">
                    @csrf
                    <div class="modal-body">
                            <div class="form-group">
                                <label for="category_name">Category Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{old('name')}}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea type="text" class="form-control @error('description') is-invalid @enderror"  name="description" rows="4">{{old('description')}}</textarea>
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                                @enderror
                            </div>
                        
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</a>
                        <button class="btn btn-primary" href="{{}}" type="submit">Add Category</button>
                    </div>
                </form>
          </div>
      </div>
  </div>
@endsection