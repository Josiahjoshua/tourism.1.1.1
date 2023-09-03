<div>
    <div class="row">

        @if($viewForm)
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ">
                        Add News
                        <button class="btn btn-warning btn-sm  float-end" wire:click="closeForm"><i class="uil-cancel"></i> Cancel</button>
                    </div>
                    <div class="card-body">
                        <div class="mb-2">
                            <label for="name" class="form-label font-12">Full Name <span class="required">*</span></label>
                            <input type="text" wire:model="article.name" id="name" class="form-control form-control-sm">
                            @error('article.name') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-2">
                            <label for="name" class="form-label font-12">Image <span class="required">*</span></label>
                            <input type="file" wire:model="file" id="name" class="form-control form-control-sm">
                            @error('file') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="mb-2">
                            <label for="preview_desc" class="form-label">Description <span class="required">*</span></label>
                            <textarea class="form-control" wire:model="article.preview_desc" id="preview_desc" rows="3"></textarea>
                            @error('article.preview_desc') <span class="error">{{ $message }}</span> @enderror
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
                     News
                    <button class="btn btn-primary btn-sm  float-end" wire:click="showForm"><i class="uil-plus"></i> Add Staff</button>
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
                                <th>Description </th>
                                <th>Created At</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($articles as $key => $news)
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td class="">
                                        <img src="{{ asset("storage/" . $news->img) }}" alt="News image" class="img" width="30px;" height="30px" srcset="">
                                    </td>
                                    <td>{{ $news->name }}</td>
                                    <td>{{ $news->preview_desc }}</td>
                                    <td>{{ $news->created_at }}</td>
                                    <td>Action</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">No news</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
