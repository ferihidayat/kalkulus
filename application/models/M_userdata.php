<?php
class M_userdata extends CI_Model
{

    function show_user()
    {
        $hasil = $this->db->query("SELECT * FROM tbl_user");

        return $hasil;
    }
    function hapus_user($iduser)
    {
        $hasil = $this->db->query("DELETE FROM tbl_user WHERE id='$iduser'");
        return $hasil;
    }
}
