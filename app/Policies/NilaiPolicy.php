<?php

namespace App\Policies;

use App\Models\Guru;
use App\Models\User;
use App\Models\Nilai;
use App\Models\Santri;
use App\Models\Kelompok;
use Illuminate\Auth\Access\Response;

class NilaiPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->isGuru() || $user->isSantri() || $user->isWali();
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Nilai $nilai): bool
    {
        $walsan = Santri::where('nama', $user->santri)->get();

        $checksantri = Santri::all();
        $santri = Santri::where('nama', $user->name)->get();

        $checkguru = Guru::all();
        $guru = Guru::where('nama', $user->name)->get();
        $kelsan = Kelompok::where('guru_id', $guru->id)->get();
        $gusan = Santri::where('kelompok_id', $kelsan->id)->get();

        if ($user->santri !== null) {
            return $walsan->id === $nilai->santri_id;
        } elseif ($user->name === $checksantri->nama) {
            return $santri->id === $nilai->santri_id;
        } elseif ($user->name === $checkguru->nama) {
            return $gusan->id === $nilai->santri_id;
        } 
    }

    /**
     * Determine whether the user can create models.
     */
    // public function create(User $user): bool
    // {
    //     return $user->isGuru();
    // }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Nilai $nilai): bool
    {
        if ($user->role === "GURU") {
            $checkguru = Guru::all();
            
            if ($user->name === $checkguru->nama) {
                $guru = Guru::where('nama', $user->name)->get();
                $kelsan = Kelompok::where('guru_id', $guru->id)->get();
                $gusan = Santri::where('kelompok_id', $kelsan->id)->get();
                return $gusan->id === $nilai->santri_id;
            } 
        } else {
            return $user->isGuru();
        }
    }

    /**
     * Determine whether the user can delete the model.
     */
    // public function delete(User $user, Nilai $nilai): bool
    // {
    //     return $user->isGuru();
    // }

    /**
     * Determine whether the user can restore the model.
     */
    // public function restore(User $user, Nilai $nilai): bool
    // {
    //     return $user->isGuru();
    // }

    /**
     * Determine whether the user can permanently delete the model.
     */
    // public function forceDelete(User $user, Nilai $nilai): bool
    // {
    //     return $user->isGuru();
    // }
}
