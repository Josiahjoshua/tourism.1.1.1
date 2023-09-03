<div>
    <div class="row">

        @if($viewForm)
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">
                        Add Carousel Item
                        <button class="btn btn-warning btn-sm  float-end" wire:click="closeForm"><i class="uil-cancel"></i> Cancel</button>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <label for="text" class="form-label font-12">Description <span class="required">*</span></label>
                            <input type="text" wire:model="carouselItem.text" id="text" class="form-control form-control-sm">
                            @error('carouselItem.text') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-2">
                            <label for="image" class="form-label font-12">Image <span class="required">*</span></label>
                            <input type="file" wire:model="file" id="image" accept="image/*" class="form-control form-control-sm">
                            @error('file') <span class="error">{{ $message }}</span> @enderror
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
                     Carousel Items
                    <button class="btn btn-primary btn-sm  float-end" wire:click="showForm"><i class="uil-plus"></i> Add Item</button>
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
                                <th>Description</th>
                                <th>Created At</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($carouselItems as $key => $item)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td class="">
                                        <img src="{{ asset('storage/' . $item->file) }}" alt="PDF" class="img" width="30px;" height="30px" srcset="">
                                    </td>
                                    <td>{{ $item->text }}</td>
                                    <td>
                                        @if($item->is_active)
                                            <span class="badge badge-success-lighten">Active</span>
                                        @else
                                            <span class="badge badge-danger-lighten">In Active</span>
                                        @endif
                                    </td>
                                    <td>{{ $npublication->created_at }}</td>
                                    <td class="text-center">
                                        <button class="btn btn-primary btn-sm" wire:click="prepareViewCarouselItem('{{$item->id}}')"><i class="uil-eye"></i></button>
                                        <button class="btn btn-warning btn-sm" wire:click="prepareEditCarouselItem('{{$item->id}}')"><i class="uil-edit"></i></button>
                                        <button class="btn btn-danger btn-sm" wire:click="showDeleteModal('{{$item->id}}')"><i class="uil-trash"></i></button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center my-2">No news</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <br>
                    {{ $carouselItems->links() }}
                </div>
            </div>
        </div>
    </div>

    <div id="delete_carousel_modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="danger-header-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-info">
                    <h4 class="modal-title" id="danger-header-modalLabel">Confirmation</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <h4 style="color: red">Are you sure you want to delete this Carsousel item?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" wire:click="deleteCarouselItem">Yes, Delete</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
</div>

<script>
    document.addEventListener('livewire:load', function () {
        livewire.on('showDeleteModel', () => {
            $('#delete_carousel_modal').modal('show')
        });
        livewire.on('closeDeleteModel', () => {
            $('#delete_carousel_modal').modal('hide')
        });
    });

</script>

