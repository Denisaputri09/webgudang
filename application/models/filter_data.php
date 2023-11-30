<?php

class filter_data extends CI_Model {

    function gettahun(){
        $query = $this->$db->query("SELECT YEAR(tanggal_masuk) AS tahun FROM tb_kegiatan_selesai
        GROUP BY YEAR(tanggal_masuk) ORDER BY YEAR(tanggal_masuk) ASC");

        return $query->result();
    }

    function filterbytanggal($tanggalawal, $tanggalakhir){
        $query = $this->$db->query("SELECT * FROM tb_kegiatan_selesai where tanggal_masuk 
                    BETWEEN '$tanggalawal' and '$tanggalakhir' ORDER BY tanggal_masuk ASC ");

        return $query->result();
    }
}