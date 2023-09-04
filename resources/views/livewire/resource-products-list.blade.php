<div>
    <div class="row">

        @if($viewForm)
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">
                        Add Product
                        <button class="btn btn-warning btn-sm  float-end" wire:click="closeForm"><i class="uil-cancel"></i> Cancel</button>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <label for="name" class="form-label font-12">Product Name <span class="required">*</span></label>
                            <input type="text" wire:model="product.name" id="name" class="form-control form-control-sm">
                            @error('product.name') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-2">
                            <label for="image" class="form-label font-12">Image <span class="required">*</span></label>
                            <input type="file" wire:model="file" id="image" accept="image/*" class="form-control form-control-sm">
                            @error('file') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-2">
                            <label for="preview_desc" class="form-label">Description <span class="required">*</span></label>
                            <textarea class="form-control" wire:model="product.preview_desc" id="preview_desc" rows="3"></textarea>
                            @error('product.preview_desc') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <button type="button" class="btn btn-success" wire:click="save" wire:loading.attr="disabled">
                            <span wire:loading.remove>Save</span>
                            <span wire:loading>Saving...</span>
                        </button>
                    </div>
                </div>
            </div>
        @endif

        <div class="col-md-12">
            <div class="card">
                <div class="card-header ">
                     Resources Products
                    <button class="btn btn-primary btn-sm  float-end" wire:click="showForm"><i class="uil-plus"></i> Add Product</button>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <input type="text" class="form-control form-control-sm" wire:model="keywords" placeholder="Search here...">
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-sm table-hover table-bordered table-centered mb-0">
                            <thead class="table-dark">
                            <tr>
                                <th>#</th>
                                <th>Image</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Created At</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($products as $key => $product)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td class="">
                                        <img src="{{ asset('storage/' . $product->img) }}" alt="PDF" class="img" width="30px;" height="30px" srcset="">
                                    </td>
                                    <td>{{ Str::limit($product->name, 20) }}</td>
                                    <td>{{ Str::limit($product->preview_desc, 20) }}</td>
                                    {{-- <td>
                                        @if($product->is_active)
                                            <span class="badge badge-success-lighten">Active</span>
                                        @else
                                            <span class="badge badge-danger-lighten">In Active</span>
                                        @endif
                                    </td> --}}
                                    <td>{{ $product->created_at }}</td>
                                    <td class="text-center">
                                        <button class="btn btn-primary btn-sm" wire:click="showViewModal('{{$product->id}}')"><i class="uil-eye"></i></button>
                                        <button class="btn btn-warning btn-sm" wire:click="prepareEditProduct('{{$product->id}}')"><i class="uil-edit"></i></button>
                                        <button class="btn btn-danger btn-sm" wire:click="showDeleteModal('{{$product->id}}')"><i class="uil-trash"></i></button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center my-2">No Resource Products</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <br>
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>

    <div id="view_product_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="danger-header-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-info">
                    <h4 class="modal-title" id="danger-header-modalLabel">Resource Product</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-7">
                            <div class="row mt-2">
                                <div class="col-12">
                                    <p class="font-14">{{ $product->created_at }}</p>
                                </div>
                                <div class="col-12">
                                    <h2 class="font-16">{{ $product->name }}</h2>
                                </div>
                            </div>
                        </div>
                    <div class="col-5">
                        <div class="row">
                            <div class="col">
                                <img src="{{ asset('storage/' . $product->img ) }}" alt="Article image" srcset="" width="180px">
                            </div>
                        </div>
                    </div>
                    </div>
                    <hr>
                    <div class="row mb-2">
                        <p>{{ $product->preview_desc }}</p>
                    </div>
                    <hr>
                    <div class="row">
                        <p class="col">Recorded by:<span class="fw-bold"> {{ $product->created_by }}</span></p>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>

    <div id="delete_product_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="danger-header-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-info">
                    <h4 class="modal-title" id="danger-header-modalLabel">Confirmation</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <h4 style="color: red">Are you sure you want to delete this Product?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" wire:click="deleteProduct">Yes, Delete</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
</div>

<script>
    // view Modal
    document.addEventListener('livewire:load', function () {
        livewire.on('showViewModal', () => {
            $('#view_product_modal').modal('show')
        });
        livewire.on('closeDeleteModal', () => {
            $('#view_product_modal').modal('hide')
        });
    });

    // Delete modal
    document.addEventListener('livewire:load', function () {
        livewire.on('showDeleteModal', () => {
            $('#delete_product_modal').modal('show')
        });
        livewire.on('closeDeleteModal', () => {
            $('#delete_product_modal').modal('hide')
        });
    });

</script>

