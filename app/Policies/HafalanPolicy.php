<?php

namespace App\Policies;

use App\Models\Guru;
use App\Models\Hafalan;
use App\Models\Kelompok;
use App\Models\Santri;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class HafalanPolicy
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
    public function view(User $user, Hafalan $hafalan): bool
    {
        $walsan = Santri::where('nama', $user->santri)->get();

        $checksantri = Santri::all();
        $santri = Santri::where('nama', $user->name)->get();

        $checkguru = Guru::all();
        $guru = Guru::where('nama', $user->name)->get();
        $kelsan = Kelompok::where('guru_id', $guru->id)->get();
        $gusan = Santri::where('kelompok_id', $kelsan->id)->get();

        if ($user->santri !== null) {
            return $walsan->id === $hafalan->santri_id;
        } elseif ($user->name === $checksantri->nama) {
            return $santri->id === $hafalan->santri_id;
        } elseif ($user->name === $checkguru->nama) {
            return $gusan->id === $hafalan->santri_id;
        } 
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->isGuru();
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Hafalan $hafalan): bool
    {
        if ($user->role === "GURU") {
            $checkguru = Guru::all();
            
            if ($user->name === $checkguru->nama) {
                $guru = Guru::where('nama', $user->name)->get();
                $kelsan = Kelompok::where('guru_id', $guru->id)->get();
                $gusan = Santri::where('kelompok_id', $kelsan->id)->get();
                return $gusan->id === $hafalan->santri_id;
            } 
        } else {
            return $user->isGuru();
        }
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Hafalan $hafalan): bool
    {
        if ($user->role === "GURU") {
            $checkguru = Guru::all();
            
            if ($user->name === $checkguru->nama) {
                $guru = Guru::where('nama', $user->name)->get();
                $kelsan = Kelompok::where('guru_id', $guru->id)->get();
                $gusan = Santri::where('kelompok_id', $kelsan->id)->get();
                return $gusan->id === $hafalan->santri_id;
            } 
        } else {
            return $user->isGuru();
        }
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Hafalan $hafalan): bool
    {
        if ($user->role === "GURU") {
            $checkguru = Guru::all();
            
            if ($user->name === $checkguru->nama) {
                $guru = Guru::where('nama', $user->name)->get();
                $kelsan = Kelompok::where('guru_id', $guru->id)->get();
                $gusan = Santri::where('kelompok_id', $kelsan->id)->get();
                return $gusan->id === $hafalan->santri_id;
            } 
        } else {
            return $user->isGuru();
        }
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Hafalan $hafalan): bool
    {
        if ($user->role === "GURU") {
            $checkguru = Guru::all();
            
            if ($user->name === $checkguru->nama) {
                $guru = Guru::where('nama', $user->name)->get();
                $kelsan = Kelompok::where('guru_id', $guru->id)->get();
                $gusan = Santri::where('kelompok_id', $kelsan->id)->get();
                return $gusan->id === $hafalan->santri_id;
            } 
        } else {
            return $user->isGuru();
        }
    }
}
