<?php

namespace App\Models;

use App\Http\Controllers\JenisPembayaranController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $table ='transaksi';
    protected $primaryKey ='id_transaksi';
    protected $fillable = [
        'tanggal',
        'jumlah',
        'id_jenis_pembayaran',
        'status',
    ];
        public function JenisPembayaran(){
            return $this->belongsTo(JenisPembayaranController::class, 'id_jenis_pembayaran');
        }
}
