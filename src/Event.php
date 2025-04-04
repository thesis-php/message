<?php

declare(strict_types=1);

namespace Thesis\Message;

/**
 * A marker interface for events. Events might have zero to many listeners.
 * Event listeners must not return a result.
 *
 * @api
 * @extends Message<null>
 */
interface Event extends Message {}
