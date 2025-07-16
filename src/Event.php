<?php

declare(strict_types=1);

namespace Thesis\Message;

/**
 * An interface for events.
 * Zero to many listeners might be subscribed to a given event.
 * Event listener does not return a result (`null` or `void`).
 *
 * @api
 * @extends Message<null>
 */
interface Event extends Message {}
