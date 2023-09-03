<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Validation\Rules\Password;
use Livewire\Component;
use ZxcvbnPhp\Zxcvbn;

class UserList extends Component
{
    public $keywords;
    public $user;
    public $user_password;
    public $isEditMode = false;

    public $passwordStrength;
    public $passwordStrengthLevels = [
        1 => 'Weak',
        2 => 'Fair',
        3 => 'Good',
        4 => 'Strong'
    ];


    public $rules = [
        'user.name' => ['required'],
        'user.email' => ['required', 'email'],
        'user_password' => ['nullable', 'required_if:isEditMode,false'],
    ];
    public function mount()
    {
        $this->user = new User();
    }

    public function save()
    {
        $this->validate();

        if ($this->isEditMode){
            $this->user->save();
            $this->dispatchBrowserEvent('success_alert', 'Staff update.');
        }else{
            $checkUserExists = User::where('email', $this->user->email)->exists();

            if ($checkUserExists){
                $this->dispatchBrowserEvent('failure_alert', "This email already exists.");
            }else{
                $this->validate([

                    'user_password' => ['required', Password::min(8)
                        ->letters()
                        ->mixedCase()
                        ->numbers()
                        ->symbols()
                    ],
                ]);

                $this->user->password = bcrypt($this->user_password);
                $this->user->save();
                $this->dispatchBrowserEvent('success_alert', 'Staff saved.');
            }

        }

        $this->clearForm();
    }

    public function updatedUserPassword()
    {
        $this->passwordStrength = (new Zxcvbn())->passwordStrength($this->user_password)['score'];
    }

    public function activation()
    {
        $this->user->is_active = !$this->user->is_active;
        $this->user->save();
        $this->emit('closeStaffActivationModel');
        $this->dispatchBrowserEvent('success_alert', 'Successful.');
        $this->user = new User();
    }

    public function showActivationModal(User $user)
    {
        $this->user = $user;
        $this->emit('showStaffActivationModel');
    }

    public function prepareEditStaff($id)
    {
        $this->user = User::find($id);
        $this->isEditMode = true;
    }



    public function clearForm()
    {
        $this->user = new User();
        $this->user_password = "";
        $this->isEditMode = false;
    }
    public function render()
    {
        $users = User::when(!empty($this->keywords), function ($query){
            $query->where('name', 'like', '%'. $this->keywords . '%')
                ->orWhere('email', 'like', '%'. $this->keywords . '%');
        })->paginate('15');

        return view('livewire.user-list', ['users' => $users]);
    }
}
