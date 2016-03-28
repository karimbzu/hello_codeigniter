<?php

  class News_model_seeder extends Seeder {
  	private $table = 'news';
  	public function run()
  	{
  		$this->db->truncate($this->table);
  		$data = [
  			'id' => 1,
        'slug' => 'test-title-1',
  			'title' => 'test title 1',
        'text' => 'test text 1'
  		];
  		$this->db->insert($this->table, $data);

  		$data = [
  			'id' => 2,
        'slug' => 'test-title-2',
  			'title' => 'test title 2',
        'text' => 'test text 2'
  		];
  		$this->db->insert($this->table, $data);
  	}
  }
