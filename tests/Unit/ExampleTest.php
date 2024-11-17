<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase {
  public function test_that_true_is_true(): void {
    $this->assertTrue(true);
  }

  public function test_that_numbers_are_equal(): void {
    $expected = 10;
    $actual = 5 + 5;

    $this->assertEquals($expected, $actual, "The numbers are not equal");
  }

  public function test_that_variable_is_null(): void {
    $value = null;

    $this->assertNull($value, "The value is not null");
  }

  public function test_that_exception_is_thrown(): void {
    $this->expectException(\InvalidArgumentException::class);

    throw new \InvalidArgumentException("Expected error");
  }

  public function test_that_string_contains_substring(): void {
    $mainString = "Hello, PHPUnit!";
    $substring = "PHPUnit";

    $this->assertStringContainsString($substring, $mainString, "The string does not contain the expected snippet");
  }

  public function test_that_greater_than(): void {
    $this->assertGreaterThan(1, 2); // O segundo argumento deve ser maior que o primeiro
  }
}
