<?php

namespace models;

class entry {

    private $_id;
    private $_hw;
    private $_pos;
    private $_reg;
    private $_forms = array();
    private $_translations = array();
    private $_parts = array();
    private $_compounds = array();
    private $_url;
    private $_db;   // an instance of models\database

	public function __construct($id,$db) {
        if ($id!=null) {
            $this->_id = $id;
            if ($db) { // check the database?
                $this->_db = isset($this->_db) ? $this->_db : new database();
    		    $this->_load();
            }
        } 
        else { // random entry
            $this->_db = isset($this->_db) ? $this->_db : new database();
            $sql = "SELECT id FROM entry ORDER BY RAND() LIMIT 1";
            $results = $this->_db->fetch($sql);
            $this->_id = $results[0]["id"];
            $this->_load();
        }
	}

    private function _load() {
        $id = $this->_id;
        $sql = <<<SQL
SELECT hw, pos, reg, url
FROM entry
WHERE id = :id
SQL;
        $results = $this->_db->fetch($sql, array(":id" => $id));
        $this->_hw = $results[0]["hw"];
        $this->_pos = $results[0]["pos"];
        $this->_reg = $results[0]["reg"];
        $this->_url = $results[0]["url"];
        $sql = <<<SQL
SELECT text
FROM translation
WHERE entryid = :id
SQL;
        $results = $this->_db->fetch($sql, array(":id" => $id));
        foreach ($results as $nextResult) {
            $this->_translations[] = $nextResult["text"];
        }
        $sql = <<<SQL
SELECT r.partid, e.hw, e.pos
FROM relation r
INNER JOIN entry e ON r.partid = e.id
WHERE r.wholeid = :id
SQL;
        $results = $this->_db->fetch($sql, array(":id" => $id));
        foreach ($results as $nextResult) {
            $this->_parts[] = [$nextResult["partid"],$nextResult["hw"],$nextResult["pos"]];
        }
        $sql = <<<SQL
SELECT r.wholeid, e.hw, e.pos
FROM relation r
INNER JOIN entry e ON r.wholeid = e.id
WHERE r.partid = :id
ORDER BY LENGTH(e.hw)
SQL;
        $results = $this->_db->fetch($sql, array(":id" => $id));
        foreach ($results as $nextResult) {
    	    $this->_compounds[] = [$nextResult["wholeid"], $nextResult["hw"], $nextResult["pos"]];
        }
        $sql = <<<SQL
SELECT form, morph, id
FROM form
WHERE entryid = :id AND morph != ''
SQL;
        $results = $this->_db->fetch($sql, array(":id" => $id));
        foreach ($results as $nextResult) {
            $this->_forms[] = [$nextResult["form"], $nextResult["morph"], $nextResult["id"]];
        }     


    }

    // GETTERS

    public function getId() {
        return $this->_id;
	}
  
    public function getHw() {
        return $this->_hw;
	}

    public function getPos() {
        return $this->_pos;
    }

    public function getReg() {
        return $this->_reg;
    }

    public function getForms() {
        return $this->_forms;
    }

    public function getTranslations() {
        return $this->_translations;
    }

    public function getParts() {
        return $this->_parts;
    }

    public function getCompounds() {
        return $this->_compounds;
    }

    public function getURL() {
        return $this->_url;
    }

  public static function getPosInfo($pos) {
    switch ($pos) {
      case "m":
        return ['masc.', 'masculine noun'];
        break;
      case "f":
        return ['fem.', 'feminine noun'];
        break;
      case "ff":
        return ['fem.', 'feminine proper noun'];
        break;
      case "mm":
        return ['masc.', 'masculine proper noun'];
        break;
      case "n":
        return ['ainm.', 'ainmear (fireann/boireann)', 'noun (masculine/feminine)'];
        break;
      case "v":
        return ['vb.', 'verb'];
        break;
      case "a":
        return ['adj.', 'adjective'];
        break;
      case "adv":
        return ['adv.', 'adverb'];
        break;
      case "p":
        return ['roi.', 'roimhear', 'preposition'];
        break;
      case "pl":
        return ['plur.', 'plural'];
        break;
      case "gen":
        return ['gen.', 'genitive'];
        break;
      case "femgen":
        return ['gen.fem.', 'genitive feminine'];
        break;
      case "genpl":
        return ['gen.plur.', 'genitive plural'];
        break;
      case "slen":
        return ['slen.', 'slenderised'];
        break;
      case "comp":
        return ['coim.', 'coimeasach', 'comparative'];
        break;
      case "vn":
        return ['ainm.', 'ainmear gnìomaireach', 'verbal noun'];
        break;
      case "pres":
        return ['pres.', 'present tense'];
        break;
      case "past":
        return ['pst.', 'past tense'];
        break;
      case "fut":
        return ['fut.', 'future tense'];
        break;
      case "cond":
        return ['cond.', 'conditional tense'];
        break;
      default:
        return [$pos, $pos, $pos];
    }
  }

}
