<?php

declare(strict_types=1);

namespace Thesis\Message;

/**
 * A marker interface for commands. Commands have one handler by definition.
 * A command handler should not return a result.
 *
 * @api
 * @extends Message<null>
 */
interface Command extends Message {}
