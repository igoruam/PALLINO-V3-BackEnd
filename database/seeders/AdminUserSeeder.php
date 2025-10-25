<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crea il ruolo super_admin se non esiste
        $role = Role::firstOrCreate(['name' => 'super_admin']);

        // Crea l'utente admin
        $admin = User::firstOrCreate(
            ['email' => 'admin@admin.it'],
            [
                'name' => 'Admin',
                'password' => Hash::make('admin'),
            ]
        );

        // Assegna il ruolo super_admin all'utente
        if (!$admin->hasRole('super_admin')) {
            $admin->assignRole('super_admin');
        }

        $this->command->info('Utente admin creato con successo!');
        $this->command->info('Email: admin@admin.it');
        $this->command->info('Password: admin');
    }
}
