<?php

namespace App\Exports;

use App\Models\BotSf;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class BotSfExport implements WithHeadings, FromQuery, WithStyles
{
    public function headings(): array
    {
        return [
            'SF CHAT ID',
            'STO',
            'DATEL',
            'NAMA',
            'TRACK ID',
            'NO HP 1',
            'NO HP 2',
            'ALAMAT',
            'ODP',
            'KODE SALES',
            'USER NAME TELEGRAM',
            'TEKNISI UPDATE',
            'INFO PROGRESS',
            'KATEGORI',
            'PAKET',
            'SC ID',
            'ND INTERNET',
            'ND TELP',
            'TEKNISI ASSIGNED',
            'LAYANAN',
            'WO ID',
            'CREATED AT',
            'LAST UPDATE',
        ];
    }

    use Exportable;

    public function filter($kategori, $datel, $sto, $date)
    {
        $this->kategori = $kategori;
        $this->datel = $datel;
        $this->sto = $sto;
        $this->date = $date;

        return $this;
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]],
        ];
    }

    public function query()
    {
        return BotSf::select(
            'sf_chat_id',
            'sto',
            'datel',
            'nama',
            'track_id',
            'no_hp1',
            'no_hp2',
            'alamat',
            'odp',
            'kode_sales',
            'user_name_telegram',
            'user_name_telegram_teknisi',
            'info_progress',
            'kategori',
            'paket',
            'sc_id',
            'nd_internet',
            'nd_telp',
            'teknisi',
            'layanan',
            'wo_id',
            'created_at',
            'updated_at',

        )->when($this->kategori, function ($query) {
            $query->where('kategori', $this->kategori);
        })->when($this->datel, function ($query) {
            $query->whereIn('datel', $this->datel);
        })->when($this->sto, function ($query) {
            $query->whereIn('sto', $this->sto);
        })->when($this->date, function ($query) {
            $date = explode(" - ", $this->date);
            $query->whereBetween('updated_at', [Carbon::parse($date[0] . " 00:00:00"), Carbon::parse($date[1] . " 23:59:59")]);
        })->orderByDesc('updated_at');
    }
}
