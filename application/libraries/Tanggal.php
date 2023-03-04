<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Tanggal
{
    public function getBulan($key)
    {
        switch ($key) {
            case "Jan":
            case "jan":
                return "01";
                break;
            case "Feb":
            case "feb":
                return "02";
                break;
            case "Mar":
            case "mar":
                return "03";
                break;
            case "Apr":
            case "apr":
                return "04";
                break;
            case "May":
            case "may":
                return "05";
                break;
            case "Jun":
            case "jun":
                return "06";
                break;
            case "Jul":
            case "jul":
                return "07";
                break;
            case "Aug":
            case "aug":
                return "08";
                break;
            case "Sep":
            case "sep":
                return "09";
                break;
            case "Oct":
            case "oct":
                return "10";
                break;
            case "Nov":
            case "nov":
                return "11";
                break;
            case "Dec":
            case "dec":
                return "12";
                break;
        }
    }

    private function getHari($key)
    {
        switch ($key) {
            case "Monday":
                return "Senin";
                break;
            case "Tuesday":
                return "Selasa";
                break;
            case "Wednesday":
                return "Rabu";
                break;
            case "Thursday":
                return "Kamis";
                break;
            case "Friday":
                return "Jum'at";
                break;
            case "Saturday":
                return "Sabtu";
                break;
            case "Sunday":
                return "Minggu";
                break;
        }
    }

    public function getBulan_lengkap($key)
    {
        switch ($key) {
            case "Jan":
            case "jan":
                return "Januari";
                break;
            case "Feb":
            case "feb":
                return "Februari";
                break;
            case "Mar":
            case "mar":
                return "Maret";
                break;
            case "Apr":
            case "apr":
                return "April";
                break;
            case "May":
            case "may":
                return "Mei";
                break;
            case "Jun":
            case "jun":
                return "Juni";
                break;
            case "Jul":
            case "jul":
                return "Juli";
                break;
            case "Aug":
            case "aug":
                return "Agustus";
                break;
            case "Sep":
            case "sep":
                return "September";
                break;
            case "Oct":
            case "oct":
                return "Oktober";
                break;
            case "Nov":
            case "nov":
                return "November";
                break;
            case "Dec":
            case "dec":
                return "Desember";
                break;
        }
    }

    public function getBulan_sing($key)
    {
        switch ($key) {
            case "01":
                return "Jan";
                break;
            case "02":
                return "Feb";
                break;
            case "03":
                return "Mar";
                break;
            case "04":
                return "Apr";
                break;
            case "05":
                return "Mei";
                break;
            case "06":
                return "Juni";
                break;
            case "07":
                return "Juli";
                break;
            case "08":
                return "Agus";
                break;
            case "09":
                return "Sept";
                break;
            case "10":
                return "Okt";
                break;
            case "11":
                return "Nov";
                break;
            case "12":
                return "Des";
                break;
        }
    }

    public function tgl_indo_lengkap($tgl)
    {
        $waktu = substr($tgl, 11, 8);
        $tgl = substr($tgl, 0, 10);
        $tanggal = substr($tgl, 8, 2);
        $bulan = $this->getBulan_sing(substr($tgl, 5, 2));
        $tahun = substr($tgl, 0, 4);
        return '<i class="fa fa-calendar"></i> ' . $tanggal . ' ' . $bulan . ' ' . $tahun . ' <i class="fa fa-clock"></i> ' . $waktu;
    }

    public function tgl_indo_lengkap_v2($tgl)
    {
        $waktu = substr($tgl, 11, 8);
        $tgl = substr($tgl, 0, 10);
        $tanggal = substr($tgl, 8, 2);
        $bulan = $this->getBulan_sing(substr($tgl, 5, 2));
        $tahun = substr($tgl, 0, 4);
        return $tanggal . ' ' . $bulan . ' ' . $tahun . '<i class="fa fa-clock"></i> ' . $waktu;
    }

    public function tgl_indo_v1($tgl)
    {
        $tgl = substr($tgl, 0, 10);
        $tanggal = substr($tgl, 8, 2);
        $bulan = $this->getBulan_sing(substr($tgl, 5, 2));
        $tahun = substr($tgl, 0, 4);
        return $tanggal . ' ' . $bulan . ' ' . $tahun;
    }

    public function tgl_indo_v2($tgl)
    {
        $tgl = substr($tgl, 0, 10);
        $tanggal = substr($tgl, 8, 2);
        $bulan = substr($tgl, 5, 2);
        $tahun = substr($tgl, 0, 4);
        return $tanggal . '-' . $bulan . '-' . $tahun;
    }

    public function tgl_indo_v3($tgl)
    {
        //03-03-2019
        $tgl = substr($tgl, 0, 10);
        $tanggal = substr($tgl, 0, 2);
        $bulan = $this->getBulan_sing(substr($tgl, 3, 2));
        $tahun = substr($tgl, 6, 4);
        return $tanggal . ' ' . $bulan . ' ' . $tahun;
    }

    public function tgl_indo_hari($tgl)
    {
        //03-03-2019
        $hari = $this->getHari(date("l", strtotime($tgl)));
        $tgl = substr($tgl, 0, 10);
        $tanggal = substr($tgl, 8, 2);
        $bulan = $this->getBulan_sing(substr($tgl, 5, 2));
        $tahun = substr($tgl, 0, 4);
        return $hari . ', ' . $tanggal . ' ' . $bulan . ' ' . $tahun;
    }

    public function tgl_singkat($tgl)
    {
        $tgl = substr($tgl, 0, 10);
        $tanggal = substr($tgl, 8, 2);
        $bulan = substr($tgl, 5, 2);
        $tahun = substr($tgl, 2, 2);
        return $tanggal . '/' . $bulan . '/' . $tahun;
    }
    public function tgl_grafik($tgl)
    {
        $tgl = substr($tgl, 0, 10);
        $tanggal = substr($tgl, 8, 2);
        $bulan = substr($tgl, 5, 2);
        $tahun = substr($tgl, 2, 2);
        return $bulan . '/' . $tanggal . '/' . $tahun;
    }

    public function thn_bln($tgl)
    {
        $bulan = $this->getBulan_sing(substr($tgl, 5, 2));
        $tahun = substr($tgl, 0, 4);
        return $bulan . " " . $tahun;
    }

    public function bln_thn($tgl)
    {
        $tgl = substr($tgl, 0, 10);
        $bulan = $this->getBulan_sing(substr($tgl, 5, 2));
        $tahun = substr($tgl, 0, 4);
        return $bulan . ' ' . $tahun;
    }

    function bln_saja($tgl)
    {
        $tgl = substr($tgl, 0, 10);
        $bln = $this->getBulan_sing(substr($tgl, 5, 2));
        return $bln;
    }

    function jam_sekarang()
    {
        $timezone = new DateTimeZone('Asia/Jakarta');
        $date = new DateTime();
        $date->setTimeZone($timezone);
        $timeNdate = $date->format('Y-m-d H:i:s');
        return $timeNdate;
    }

    function jam()
    {
        $timezone = new DateTimeZone('Asia/Jakarta');
        $date = new DateTime();
        $date->setTimeZone($timezone);
        $timeNdate = $date->format('H:i:s A');
        return $timeNdate;
    }

    function hitung_umur($tanggal_lahir)
    {
        $birthDate = new DateTime($tanggal_lahir);
        $today = new DateTime("today");
        if ($birthDate > $today) {
            exit("0 tahun 0 bulan 0 hari");
        }
        $y = $today->diff($birthDate)->y;
        $m = $today->diff($birthDate)->m;
        $d = $today->diff($birthDate)->d;
        return $y . " tahun " . $m . " bulan " . $d . " hari";
    }
}
