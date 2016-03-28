<?php

class News_model_test extends TestCase
{
    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();

        $CI =& get_instance();
        $CI->load->library('Seeder');
        $CI->seeder->call('News_model_seeder');
    }

    public function setUp()
    {
        $this->resetInstance();
        $this->CI->load->model('news_model');
        $this->obj = $this->CI->News_model;
    }

    public function test_get_news()
    {
        $expected = [
            1 => 'Book',
            2 => 'CD',
        ];
        $news = $this->obj->get_news();
        foreach ($news as $news_item) {
            $this->assertEquals($expected[$news_item->id], $news_item->title);
        }
    }
}
