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
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with Core PHP Framework. If not, see <http://www.gnu.org/licenses/>.
 *
 * @package    Core
 * @subpackage Cache
 * @category   Adapters
 * @copyright  2008-2009 Gabriel Sobrinho <gabriel@corephp.org>
 * @license    http://opensource.org/licenses/lgpl-3.0.html GNU Lesser General Public License version 3 (LGPLv3)
 * @version    0.1
 */

namespace Cache\Adapters;

/**
 * APC adapter class
 *
 * @package    Core
 * @subpackage Cache
 * @category   Adapters
 * @copyright  2008-2009 Gabriel Sobrinho <gabriel@corephp.org>
 * @license    http://opensource.org/licenses/lgpl-3.0.html GNU Lesser General Public License version 3 (LGPLv3)
 */
class Apc implements \Cache\Adapter {
    /**
     * Verify APC support
     *
     * @throws \Cache\Exception when APC isn't loaded
     */
    public function __construct () {
        if (!extension_loaded('apc')) {
            throw new \Cache\Exception("Could not find extension APC");
        }
    }

    /**
     * (non-PHPdoc)
     * @see \Cache\Adapter::get()
     */
    public function get ($key) {
        return apc_fetch($key);
    }

    /**
     * (non-PHPdoc)
     * @see \Cache\Adapter::set()
     */
    public function set ($key, $value, $ttl = 0) {
        return apc_store($key, $value, $ttl);
    }

    /**
     * (non-PHPdoc)
     * @see \Cache\Adapter::delete()
     */
    public function delete ($key) {
        return apc_delete($key);
    }

    /**
     * (non-PHPdoc)
     * @see \Cache\Adapter::flush()
     */
    public function flush () {
        return apc_clear_cache('user');
    }
}

