<?php

namespace App\Database\Models;

use PonyFire\Database\Model;

class SampleModel extends Model
{
    /**
     * Nama tabel pada database
     * 
     * @var string
     */
    protected string $table = '';

    /**
     * Daftar nama field yang boleh di akses dan di ubdah
     * 
     * @var array
     */
    protected array $allowedFields = [];

    /**
     * Menggunakan soft delete atau tidak
     * 
     * @var bool
     */
    protected bool $softDeletes = false;
}