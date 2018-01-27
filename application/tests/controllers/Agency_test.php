<?php
/**
 * Part of ci-phpunit-test
 *
 * @author     Kenji Suzuki <https://github.com/kenjis>
 * @license    MIT License
 * @copyright  2015 Kenji Suzuki
 * @link       https://github.com/kenjis/ci-phpunit-test
 */

class Agency_test extends TestCase
{
	public function test_index()
	{
		$output = $this->request('GET', 'agency');

		$this->assertResponseCode(200);
		
		$this->assertContains('TheMediaGroup', $output);
		$this->assertContains('Innova', $output);
		$this->assertContains('Brado', $output);
		$this->assertContains('NYU', $output);
		$this->assertContains('charles', $output);
	}

	public function test_get()
	{
		$output = $this->request('GET', 'agency/1');

		$this->assertContains('TheMediaGroup', $output);
	}

	public function test_method_404()
	{
		$this->request('GET', 'agency/0');

		$this->assertResponseCode(404);
	}
}
