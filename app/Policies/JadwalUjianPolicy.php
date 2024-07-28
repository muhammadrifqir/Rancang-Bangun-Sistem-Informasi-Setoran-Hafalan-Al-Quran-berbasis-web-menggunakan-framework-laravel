<?php

namespace App\Policies;

use App\Models\Guru;
use App\Models\User;
use App\Models\Santri;
use App\Models\Kelompok;
use App\Models\JadwalUjian;
use Illuminate\Auth\Access\Response;

class JadwalUjianPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->isAdmin() || $user->isGuru() || $user->isSantri() || $user->isWali();
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, JadwalUjian $jadwalUjian): bool
    {
        $walsan = Santri::where('nama', $user->santri)->get();

        $checksantri = Santri::all();
        $santri = Santri::where('nama', $user->name)->get();

        $checkguru = Guru::all();
        $guru = Guru::where('nama', $user->name)->get();
        $kelsan = Kelompok::where('guru_id', $guru->id)->get();
        $gusan = Santri::where('kelompok_id', $kelsan->id)->get();

        if ($user->santri !== null) {
            return $walsan->id === $jadwalUjian->santri_id;
        } elseif ($user->name === $checksantri->nama) {
            return $santri->id === $jadwalUjian->santri_id;
        } elseif ($user->name === $checkguru->nama) {
            return $gusan->id === $jadwalUjian->santri_id;
        } else {
            return $user->isAdmin();
        }
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, JadwalUjian $jadwalUjian): bool
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, JadwalUjian $jadwalUjian): bool
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, JadwalUjian $jadwalUjian): bool
    {
        return $user->isAdmin();
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, JadwalUjian $jadwalUjian): bool
    {
        return $user->isAdmin();
    }
}
