<div>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header ">
                    Create Staff
                </div>
                <div class="card-body">
                    <div class="mb-2">
                        <label for="name" class="form-label font-12">Full Name <span class="required">*</span></label>
                        <input type="text" wire:model="user.name" id="name" class="form-control form-control-sm" placeholder="Al-Amin Msangi">
                        @error('user.name') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label font-12">Email Address <span class="required">*</span></label>
                        <input type="email" wire:model="user.email" id="email" class="form-control form-control-sm" placeholder="alaminhamadi@gmail.com">
                        @error('user.email') <span class="error">{{ $message }}</span> @enderror
                    </div>
                    @if(!$isEditMode)
                        <div class="mb-2">
                            <label for="password" class="form-label font-12">Password <span class="required">*</span></label>
                            <input type="password" wire:model="user_password" id="user_password" class="form-control form-control-sm" placeholder="******">
                            @error('user_password') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <span>Password strength: <strong style="color: red">{{$passwordStrengthLevels[$passwordStrength] ?? 'Week'}}</strong></span>
                        <div class="progress mb-3">
                            <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="{{$passwordStrength}}" style="width: {{ $passwordStrength/4 * 100 }}%" aria-valuemin="0" aria-valuemax="4"></div>
                        </div>
                    @endif

                    <button type="button" class="btn btn-success" wire:click="save" wire:loading.attr="disabled">
                        <span wire:loading.remove>Save</span>
                        <span wire:loading>Saving...</span>
                    </button>

                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header ">
                    Staff List
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
                                <th>User Name</th>
                                <th>User Email </th>
                                <th>Status</th>
                                <th>Added At</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($users as $key => $user)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        @if($user->is_active)
                                            <span class="badge badge-success-lighten">Active</span>
                                        @else
                                            <span class="badge badge-danger-lighten">In Active</span>
                                        @endif
                                    </td>
                                    <td>{{$user->created_at->format('d M Y h:i')}}</td>
                                    <td class="text-center">
                                        <button class="btn btn-primary btn-sm" wire:click="prepareEditStaff('{{$user->id}}')"><i class="uil-edit"></i></button>
                                        <button class="btn btn-warning btn-sm" wire:click="showActivationModal('{{$user->id}}')"><i class="uil-power"></i></button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6" style="text-align: center;">No staff!</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                    <br>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>

    <div id="staff_activation" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="danger-header-modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header modal-colored-header bg-info">
                    <h4 class="modal-title" id="danger-header-modalLabel">Confirmation</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
                </div>
                <div class="modal-body">
                    <h4 style="color: red">Are you sure you want to perform this action?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-info" wire:click="activation">Yes, Submit</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div>
</div>

<script>
    document.addEventListener('livewire:load', function () {
        livewire.on('showStaffActivationModel', () => {
            $('#staff_activation').modal('show')
        });
        livewire.on('closeStaffActivationModel', () => {
            $('#staff_activation').modal('hide')
        });
    });

</script>
