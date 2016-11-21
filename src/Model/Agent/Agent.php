<?php
/**
 * This file is part of the webod/cmp
 * (c) 2016 WebOD Ltd <hello@webod.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace CMP\Model\Agent;

use Prooph\EventSourcing\AggregateRoot;

final class Agent extends AggregateRoot
{
    protected function aggregateId() : string
    {
    }
}
