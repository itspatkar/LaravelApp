<?php

namespace App\Livewire;

use App\Models\TestUser;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class TestDB extends Component
{
    #[Rule('Required')]
    public $name;
    #[Rule('Required')]
    public $email;
    #[Rule('Required')]
    public $mobile;

    public function save()
    {
        $validated = $this->validate();

        DB::beginTransaction();

        $stored = TestUser::create($validated);

        if (!$stored) {
            TestUser::rollBack();
            return false;
        }

        $this->reset('name', 'email', 'mobile');
    }

    public function render()
    {
        return view('livewire.test-d-b');
    }
}
