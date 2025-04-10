<head>
    <script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
</head>
@include('admin.layout.header')
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-content pt-0">
            <!--breadcrumb-->
            <div class="row page-breadcrumb d-none d-sm-flex align-items-center mb-2">
                <!-- <div class="breadcrumb-title pe-3">Tables</div> -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="javascript:;" class="heading d-flex align-items-center">
                                    <i class="bx bx-detail pe-2 font-22"></i>Add Blog</a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-body px-5 py-4">
                <form class="row g-3" action="{{route('blog.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="userId" value="{{$userId}}" hidden></input>
                    <!-- Blog Title -->
                    <div class="col-md-5">
                        <label for="input13" class="form-label">Blog Title *</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="col-md-5">
                        <label for="input13" class="form-label">Image *<span class="star"></span> </label>
                        <div class="position-relative input-icon">
                        <input type="file" src="image" name="blogimage" class="form-control" id="blogimage" placeholder="Image" required>
                            <span class="position-absolute top-50 translate-middle-y"></span>
                            
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label for="pos_type" class="form-label">POS Type *<span class="star"></span></label>
                        <div class="position-relative input-icon">
                            <select name="pos_type" id="pos_type" class="form-control" required>
                                <option value="" disabled selected>Select POS</option>
                                <option value="restoji">Restoji POS</option>
                                <option value="majestic">Majestic POS</option>
                            </select>
                            <span class="position-absolute top-50 translate-middle-y"></span>
                        </div>
                    </div>
                    
                    <div class="form-group mt-2">
                        <label>Blog Content *</label>
                        <textarea name="content" class="form-control" rows="4" placeholder=""></textarea>
                        <script>
                            CKEDITOR.replace( 'content' );
                            </script>
                    </div>
                    

            
                    <!-- Submit -->
                    <div class="mt-4">
                        <button type="submit" class="btn btn-primary custom-btn">Add Blog</button>
                    </div>
                </form>
                {{-- </div>
            </div> --}}
  
        </div>
    </div>
        
    </div>
</div>