<?php
/**
 * This file is part of the webod/cmp
 * (c) 2016 WebOD Ltd <hello@webod.co.uk>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace CMP\Model\Conversation;

use Prooph\EventSourcing\AggregateRoot;

final class Conversation extends AggregateRoot
{
    protected function aggregateId() : string
    {
    }
}
