<?php
/**
 * Core PHP Framework
 * Copyright (C) 2008-2009 Gabriel Sobrinho <gabriel@corephp.org>
 *
 * This file is part of Core PHP Framework.
 *
 * Core PHP Framework is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Core PHP Framework is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with Core PHP Framework. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package    Core
 * @subpackage UnitTests
 * @category   Config
 * @copyright  2008-2009 Gabriel Sobrinho <gabriel@corephp.org>
 * @license    http://opensource.org/licenses/lgpl-3.0.html GNU Lesser General Public License version 3 (LGPLv3)
 * @version    0.1
 */

/**
 * @see test_helper.php
 */
require_once __DIR__ . '/../test_helper.php';

/**
 * Config tests
 *
 * @package    Core
 * @subpackage UnitTests
 * @category   Config
 * @copyright  2008-2009 Gabriel Sobrinho <gabriel@corephp.org>
 * @license    http://opensource.org/licenses/lgpl-3.0.html GNU Lesser General Public License version 3 (LGPLv3)
 */
class ConfigTest extends PHPUnit_Framework_TestCase {
    /**
     * @covers Core::boot
     * @covers Config::parseApplicationFiles
     */
    public function testParseApplicationFiles () {
        $this->assertEquals('test', Config::get('application.environment'));
    }

    public function testSetAndGet () {
        Config::set('application.name', 'Test Application');
        $this->assertEquals('Test Application', Config::get('application.name'));
    }

    public function testGetWithDefaultValue () {
        $this->assertEquals('http://www.example.com/', Config::get('application.host', 'http://www.example.com/'));
    }
}

