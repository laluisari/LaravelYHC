<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $with = ['prodi'];

    public function scopeFilter($query, array $filters){
        $query->when($filters['search'] ?? false, function($query, $search){
            $query->where('nama', 'like', '%' .$search . '%')->orWhere('nim', 'like', '%' .$search . '%');
        });
    
        $query->when($filters['prodi'] ?? false, fn($query, $author) =>
            $query->whereHas('prodi', fn($query)=> $query->where('name', $author))
        );
        $query->when($filters['semester'] ?? false, fn($query, $author) =>
            $query->whereHas('semester', fn($query)=> $query->where('semester', $author))
        );
        $query->when($filters['kelas'] ?? false, fn($query, $author) =>
            $query->whereHas('kelas', fn($query)=> $query->where('name', $author))
        );
        $query->when($filters['tahun'] ?? false, fn($query, $author) =>
            $query->whereHas('tahun', fn($query)=> $query->where('tahun', $author))
        );
        
     }

    public function prodi(){
        return $this->belongsTo(Prodi::class);
    }
    public function semester(){
        return $this->belongsTo(Semester::class);
    }
    public function kelas(){
        return $this->belongsTo(Kelas::class);
    }
    public function tahun(){
        return $this->belongsTo(Tahun::class);
    }

    
}
