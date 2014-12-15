<?php
/**
 * Copyright (c) 2011-2014 Antoine Hedgecock.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions
 * are met:
 *
 *   * Redistributions of source code must retain the above copyright
 *     notice, this list of conditions and the following disclaimer.
 *
 *   * Redistributions in binary form must reproduce the above copyright
 *     notice, this list of conditions and the following disclaimer in
 *     the documentation and/or other materials provided with the
 *     distribution.
 *
 *   * Neither the names of the copyright holders nor the names of the
 *     contributors may be used to endorse or promote products derived
 *     from this software without specific prior written permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS
 * FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE
 * COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING,
 * BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
 * LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT
 * LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN
 * ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 * @author      Antoine Hedgecock <antoine@pmg.se>
 *
 * @copyright   2011-2014 Antoine Hedgecock
 * @license     http://www.opensource.org/licenses/bsd-license.php  BSD License
 */

namespace MCNElasticSearch\Service;

use MCNElasticSearch\QueryBuilder\QueryBuilder;
use MCNElasticSearch\Service\Search\Paginator\Adapter\Doctrine;
use Zend\EventManager\EventsCapableInterface;

/**
 * Interface DealSearchServiceInterface
 */
interface SearchServiceInterface extends EventsCapableInterface
{
    const HYDRATE_RAW      = 'raw';
    const HYDRATE_DOCTRINE = 'doctrine';

    /**
     * Perform a raw query
     *
     * @param string              $objectClassName
     * @param string|QueryBuilder $query
     * @param string              $type
     *
     * @return mixed
     */
    public function query($objectClassName, $query, $type = 'query_then_fetch');

    /**
     * Perform a paginated query
     *
     * @param string              $objectClassName
     * @param string|QueryBuilder $query
     * @param string              $adapter
     * @param array               $adapterOptions
     *
     * @return \Zend\Paginator\Paginator
     */
    public function search($objectClassName, $query, $adapter = Doctrine::class, array $adapterOptions = []);
}
