{"filter":false,"title":"group_model.php","tooltip":"/application/models/group_model.php","undoManager":{"mark":0,"position":0,"stack":[[{"start":{"row":19,"column":0},"end":{"row":29,"column":48},"action":"remove","lines":["<<<<<<< HEAD","=======","","    public function list_all($select = array()) {","        if(count($select) > 0) {","             $this->db->select($select);","        }","        $query = $this->db->get($this->table);","        return $query->result_array();","    }",">>>>>>> 237a3d5c0bd6e88734ae0d109b8abc2d49f21b89"],"id":2},{"start":{"row":19,"column":0},"end":{"row":26,"column":5},"action":"insert","lines":["","    public function list_all($select = array()) {","        if(count($select) > 0) {","             $this->db->select($select);","        }","        $query = $this->db->get($this->table);","        return $query->result_array();","    }"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":18,"column":5},"end":{"row":18,"column":5},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1449545049579,"hash":"370df1f37482adc1c3717fe61e51678bfd477291"}