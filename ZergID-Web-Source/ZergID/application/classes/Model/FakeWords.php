<?php
class Model_FakeWords extends ORM  {
    protected $_table_name = 'zid_fake_word';
    protected $_primary_key = 'id';
    
    public function get_fakewords() {
        # get all inappropriate words
        $query = ORM::factory("FakeWords")->find_all();
        return $query;
    }
    
    public function add_fakeword($data) {
        # add new words
        $fakeword = addslashes($data['fake_word']);
        $query = DB::query(Database::INSERT, 'INSERT into zid_fake_word(fake_word) values("'.$fakeword.'")')->execute();
        return $query;
    }

    public function edit_fakeword($data) {
        # edit words         
        $fakeword = addslashes($data['fake_word']);    
        $query = DB::query(Database::UPDATE, "UPDATE zid_fake_word SET fake_word= '.$fakeword.' WHERE id='$id' ")->execute();       
        return $query;
    }
    
   public function delete_fakeword($data) {
        # delete words
        $fakeword = addslashes($data['fake_word']);
        $query = DB::query(Database::DELETE,"DELETE FROM  zid_fake_word  WHERE id='$id'")->execute();
        return $query;
    }

}

    
?>
