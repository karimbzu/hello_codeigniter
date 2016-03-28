<?php

class Pages_test extends TestCase
{
	public function test_view_home()
	{
		$output = $this->request('GET', ['Pages', 'view']);
		$this->assertContains('<p>this is the homepage.</p>', $output);
	}

	public function test_view_about()
	{
		$output = $this->request('GET', ['Pages', 'view', 'about']);
		$this->assertContains('<p>this is the about page.</p>', $output);
	}

	public function test_view_404()
	{
		$this->request('GET', ['Pages', 'view', 'view_not_exist']);
		$this->assertResponseCode(404);
	}

}
