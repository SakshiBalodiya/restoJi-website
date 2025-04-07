@include('admin.layout.header')
<div class="page-wrapper">
    <div class="page-content">
        <div class="page-content pt-0">
            <!--breadcrumb-->
            <div class="row page-breadcrumb d-none d-sm-flex align-items-center mb-5">
                <!-- <div class="breadcrumb-title pe-3">Tables</div> -->
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item active" aria-current="page">
                                <a href="javascript:;" class="heading d-flex align-items-center">
                                    <i class="bx bx-detail pe-2 font-22"></i>Blogs</a>
                            </li>
                        </ol>
                    </nav>
                </div>
              
                <div class="col-lg-6 col-md-6 col-sm-12 ms-auto text-end left_align">
                    <button type="button" class="custom-btn" data-bs-toggle="modal" data-bs-target="#addStoreType">
                        <a class="d-flex align-items-center" href="{{url('admin/add-blog') }}">
                            <i class='bx bx-plus-circle pe-2' style="font-size:28px;"></i>
                            Add Blog
                        </a>
                    </button>
                </div>
              
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row d-none d-sm-flex align-items-center mb-3">
						
                        <div class="col-lg-9 col-md-9 col-sm-12 text-end ms-auto mb-2">
                            <div class="position-relative">
                                <form action="" method="GET"class="d-flex align-items-center justify-content-end">
                                    <div class="position-relative" style="margin-right:10px; width:33%;">
                                        <input type="text" class="form-control searchBar ps-5 radius-30" placeholder="Search" name="search" value="{{$search}}">
                                        <span class="position-absolute top-50 translate-middle-y search-icon">
                                            <i class="bx bx-search"></i>
                                        </span>
                                    </div>
                                    <button type="submit" class="btn search px-5">Search</button>
                                </form>
                            </div>
                        </div>
					</div>	
					<div class="table-responsive">
						<table class="table mb-0">
							<thead>
								<tr>
                                    <th class="text-center">S.No.</th>
									<th  class="text-center">Title</th> 
                                    <th class="text-center">Slug</th> 
									<th class="text-center" style="width:225px;">Action</th>

								</tr>
							</thead>
							<tbody>
                                @foreach ($blog as  $index => $blogs )
                                <tr>
                                    <td  class="text-center">{{$index + 1}}</td>
									<td class="text-center" style="vertical-align: middle;">{{$blogs->title}}</td>
                                    <td class="text-center"  style="vertical-align: middle;">{{$blogs->slug}}</td>
									<td class="text-center" style="vertical-align: middle; border-radius: 0 8px 8px 0;">
										<a href="{{url('admin/blog/' . $blogs->id . '/edit')}}" class="edit"  style="font-size:20px;"  data-bs-target="">
										    <i class='fadeIn animated bx bxs-pencil'></i></a>
                                           
                                            <a type="button" class="dlt-btn edit"  style="font-size:20px;" data-delete-id ="{{ $blogs->id }}" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                <i class='fadeIn animated bx bx-trash'></i></a>
                                            
                                      
									</td>
								</tr>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Delete Item</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                          <b>Are you sure you want to delete this?</b>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                          <a type="button"  href="#" id="confirm-delete" class="btn btn-danger">Ok</a>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const exampleModal = document.getElementById('exampleModal');
        exampleModal.addEventListener('show.bs.modal', function (event) {
            const button = event.relatedTarget;
            const blogId = button.getAttribute('data-delete-id');
            const confirmDeleteLink = document.getElementById('confirm-delete');
     
            confirmDeleteLink.href = `blog/${blogId}/delete`;
        });
    });
</script>