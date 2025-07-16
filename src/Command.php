<?php

declare(strict_types=1);

namespace Thesis\Message;

/**
 * An interface for commands.
 * A command is routed to a single handler.
 * Command handler does not return a result (`null` or `void`).
 *
 * @api
 * @extends Message<null>
 */
interface Command extends Message {}
