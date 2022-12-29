<?php

namespace Kirby\Form\Fields;

class HeadlineFieldTest extends TestCase
{
	public function testDefaultProps()
	{
		$field = $this->field('headline');

		$this->assertSame('headline', $field->type());
		$this->assertSame('headline', $field->name());
		$this->assertSame(null, $field->value());
		$this->assertSame(null, $field->label());
		$this->assertFalse($field->save());
		$this->assertTrue($field->numbered());
	}

	public function testNumbered()
	{
		$field = $this->field('headline', [
			'numbered' => true
		]);

		$this->assertTrue($field->numbered());

		$field = $this->field('headline', [
			'numbered' => false
		]);

		$this->assertFalse($field->numbered());
	}
}
